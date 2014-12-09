<?php

namespace Outlandish\TwitterKeyWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        if(!$name) {

            return $this->render('OutlandishTwitterKeyWordsBundle:Default:noName.html.twig');

        }
        return $this->render('OutlandishTwitterKeyWordsBundle:Default:index.html.twig', array('name' => $name));
    }
}
