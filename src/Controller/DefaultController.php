<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class DefaultController extends AbstractController {
	
	/**
	* @Route("/", name="index")
	*/
	function index(TranslatorInterface $translator) {
	    $var = 'test';
		$this->addFlash('success',
            $translator->trans('test_string', [
                    '%var%' => $var,
                ])
            );
		return $this->render('index.html.twig');
	}

}