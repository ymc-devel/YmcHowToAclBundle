<?php

namespace Ymc\HowToAclBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YmcHowToAclBundle:Default:index.html.twig', array('name' => $name));
    }
}
