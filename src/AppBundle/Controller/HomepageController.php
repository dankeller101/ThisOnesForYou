<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class HomepageController
 * @package AppBundle\Controller
 */
class HomepageController extends Controller {

    /**
     * @return mixed
     */
    public function homepageAction()
    {
        return $this->render('homepage.html.twig');
    }
}