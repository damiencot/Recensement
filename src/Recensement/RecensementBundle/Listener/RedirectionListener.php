<?php

namespace Recensement\RecensementBundle\Listener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RedirectionListener
{
    public function __construct(ContainerInterface $container, Session $session)
    {
        $this->session = $session;
        $this->router = $container->get('router');
        $this->securityContext = $container->get('security.context');
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        //On récupère la route en cour
        $route = $event->getRequest()->attributes->get('_route');

        //Si la route actuel ce nomme recense ou presentation
        if ($route == 'recense' || $route == 'presentation' || $route == 'modification' ) {
            //Si l'utilisateur n'est bien connecter on le redirige
            if (!is_object($this->securityContext->getToken()->getUser())) {
                $this->session->getFlashBag()->add('notification','Vous devez vous identifier');
                $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
            }
        }
    }
}