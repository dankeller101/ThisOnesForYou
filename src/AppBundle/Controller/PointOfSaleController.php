<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PointOfSaleController extends Controller
{
    public function saleAction()
    {
        return $this->render('sale.html.twig');
    }
}