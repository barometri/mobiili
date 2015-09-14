<?php
// src/AppBundle/Controller/DefaultController.php

// ...
namespace AppBundle\Controller;
use AppBundle\Entity\Country;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{

    /**
     * @Route("/create/country/")
     */

    public function createAction()
    {
        $country = new Country();
        $country->setCountryName('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($country);
        $em->flush();

        return new Response('Created Country id ' . $country->getId() . 'And country name' . $country->getCountryName());
    }

    /**
     * @Route("/get/country/{id}")
     */

    public function showAction($id)
    {
        $country = $this->getDoctrine()
            ->getRepository('AppBundle:Country')
            ->find($id);

        if (!$country) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }
           $countryArray[] = $country->getId() ;
            $countryArray[] = $country->getCountryName() ;

        $response = json_encode($countryArray); //json_encode(array($country))

        return new Response($response //return new Response($response, 200, array('Content-Type' => 'application/json'

        );
    }
}
?>