<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->get('easy_admin_bundle');
    }

    public function createNewUtilisateursEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUtilisateursEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    public function preUpdateUtilisateursEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}
