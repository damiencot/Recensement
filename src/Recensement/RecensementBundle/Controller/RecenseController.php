<?php

namespace Recensement\RecensementBundle\Controller;

use Recensement\RecensementBundle\Entity\Habitants;
use Recensement\RecensementBundle\Form\HabitantsType;
use Recensement\RecensementBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class RecenseController extends Controller
{
    public function recenseAction()
    {
        return $this->render('RecensementBundle:Default:recense/recense.html.twig');
    }

    public function presentationAction()
    {

        $em = $this->getDoctrine()->getManager();
        $findHabitants = $em->getRepository('RecensementBundle:Habitants')->byDate();

        $habitants = $this->get('knp_paginator')->paginate($findHabitants,$this->get('request')->query->get('page', 1),5);

        return $this->render('RecensementBundle:Default:recense/layout/presentation.html.twig', array('habitants' => $habitants));

    }


    public function ajoutAction(Request $request)
    {

        //Manipulation de nos entité
        $em = $this->getDoctrine()->getManager();
        $entityHabitants = new Habitants();
        $formHabitants = $this->createForm(new HabitantsType($em), $entityHabitants);
        $formHabitants->handleRequest($request);


        if ($formHabitants->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entityHabitants);
            $em->flush();

            return $this->redirect($this->generateUrl('presentation'));

        }
        return $this->render('RecensementBundle:Default:Recense/recense.html.twig', array('formHabitants' => $formHabitants->createView()));
    }


    public function modificationAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entityHabitants = $em->getRepository('RecensementBundle:Habitants')->find($id);

        if (!$entityHabitants) {
            throw $this->createNotFoundException('Recense Introuvable');
        }

        $formHabitants = $this->createForm(new HabitantsType($em), $entityHabitants, array(
            'action' => $this->generateUrl('modification', array('id' => $entityHabitants->getId())),
        ));
        $formHabitants->handleRequest($request);


        if ($formHabitants->isValid()) {

            $em->flush();

            return $this->redirect($this->generateUrl('presentation', array('id' => $id)));

        }

        return $this->render('RecensementBundle:Default:Recense/modification.html.twig', array('entityHabitants' => $entityHabitants, 'formHabitants' => $formHabitants->createView()));
    }

    public function rechercheAction()
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('RecensementBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }


    public function rechercheTraitementAction()
    {
        $form = $this->createForm(new RechercheType());

        //Si la requête envoie est bien en POST
        if ($this->get('request')->getMethod() == 'POST') {
            //On récupère ce qui se trouve dans ce formulaire
            $form->bind($this->get('request'));
            //Requête correspondant à la recherche (d'après ce qui se trouve dans notre form)
            $em = $this->getDoctrine()->getManager();
            $habitants = $em->getRepository('RecensementBundle:Habitants')->recherche($form['recherche']->getData());
        } else {
            //Si la requête ne correspond pas a un POST, on affiche une page d'erreur
            throw $this->createNotFoundException('La page n\'existe pas.');
        }

        return $this->render('RecensementBundle:Default:recense/layout/presentation.html.twig', array('habitants' => $habitants));

    }




    public function pdfAction($id)
    {
        // On récupère l'objet à afficher
        $objectsRepositoryHabitants = $this->getDoctrine()->getRepository('RecensementBundle:Habitants');
        $object = $objectsRepositoryHabitants->find($id);
        $objectParent1 = $object->getParents1();
        $objectParent2 = $object->getParents2();

        //On récupère l'objet à afficher
        $objectsRepositoryParents = $this->getDoctrine()->getRepository('RecensementBundle:Parents');
        $parent1 = $objectsRepositoryParents->find($objectParent1);
        $parent2 = $objectsRepositoryParents->find($objectParent2);


        // On crée une  instance pour définir les options de notre fichier pdf
        $options = new Options();
        // Pour simplifier l'affichage des images, on autorise dompdf à utiliser
        // des  url pour les nom de  fichier
        $options->set('isRemoteEnabled', TRUE);
        // On crée une instance de dompdf avec  les options définies
        $dompdf = new Dompdf($options);
        // On demande à Symfony de générer  le code html  correspondant à
        // notre template, et on stocke ce code dans une variable
        $html = $this->renderView(
            'RecensementBundle:Default:pdf.html.twig',
            array('object' => $object, 'parent1' => $parent1 , 'parent2' => $parent2)
        );
        // On envoie le code html  à notre instance de dompdf
        $dompdf->loadHtml($html);
        $nom = $object->getNom();
        $prenom = $object->getPrenom();

        // On demande à dompdf de générer le  pdf
        $dompdf->render();
        // On renvoie  le flux du fichier pdf dans une  Response pour l'utilisateur
        return new Response ($dompdf->stream($prenom." ".$nom));
    }



}
