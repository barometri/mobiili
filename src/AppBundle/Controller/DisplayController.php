<?php
/**
 * Created by PhpStorm.
 * User: Jyri
 * Date: 9/22/2015
 * Time: 11:05 AM
 */
// src/AppBundle/Controller/DisplayController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Questionnaire;


class DisplayController extends Controller
{   //http://localhost:8000/display
    public function DisplayAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $questionnaire = new Questionnaire();
        $questionnaire->getCreatorId("This is a Test Question?");
        $questionnaire->getCreatedDate('1');
        $questionnaire->getHidden('1');


        $form = $this->createFormBuilder($questionnaire)
            ->add('creatorId', 'text')
            ->add('createdDate', 'text')
            ->add('hidden', 'text')
            ->add('save', 'submit', array('label' => 'Create Question'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction($id)
    {
        $questionnaire = $this->getDoctrine()
            ->getRepository('AppBundle:Questionnaire')
            ->find($id);

        if (!$questionnaire) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );

            $questionnaireyArray[] = $questionnaire->getId();
            $questionnaireyArray[] = $questionnaire->getCreatorId();
            $questionnaireyArray[] = $questionnaire->getCreatedDate();
            $questionnaireyArray[] = $questionnaire->getHidden();

            return $this->render('default/new.html.twig', array(
                'form' => $form->createView(),
            ));
        }

    }
        public function showActionCountry($id)
    {
        $country = $this->getDoctrine()
            ->getRepository('AppBundle:Country')
            ->find($id);

        if (!$country) {
            throw $this->createNotFoundException(
                'No Country found for id ' . $id
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