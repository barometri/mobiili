<?php
// src/AppBundle/Controller/DefaultController.php

// ...
namespace AppBundle\Controller;
use AppBundle\Entity\Country;
use AppBundle\Entity\Category;
use AppBundle\Entity\Person;
use AppBundle\Entity\Person_Answer;
use AppBundle\Entity\Person_Level;
use AppBundle\Entity\Person_Team;
use AppBundle\Entity\Question;
use AppBundle\Entity\Question_Category;
use AppBundle\Entity\Question_Type;
use AppBundle\Entity\Questionnaire;
use AppBundle\Entity\Questionnaire_Question;
use AppBundle\Entity\Sent_Questionnaire;
use AppBundle\Entity\Team;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    /**
     * @Route("/country/create")
     */

    public function createActionHistory()
    {
        $country = new Country();
        $country->setCountryName('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($country);
        $em->flush();

        return new Response('Created Country id ' . $country->getId() . 'And country name' . $country->getCountryName());
    }

    /**
     * @Route("/country/get/{id}")
     */

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

    /**
     * @Route("/category/create")
     */

    public function createActionCategory()
    {
        $category = new Category();
        $category->setCategoryName('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($category);
        $em->flush();

        $categoryArray [] = $category->getId();
        $categoryArray [] = $category->getcategoryName();

        return new Response( json_encode($categoryArray));
    }


    /**
     * @Route("/category/get/{id}")
     */

    public function showActionCategory($id)
    {
        $category = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->find($id);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category found for id ' . $id
            );
        }
        $categoryArray[] = $category->getId() ;
        $categoryArray[] = $category->getCategoryName() ;

        $response = json_encode($categoryArray); //json_encode(array($country))

        return new Response($response);
    }

        /**
        * @Route("/person/create")
        */

    public function createActionPerson()
    {
        $person = new Person();
        $person->setLevelId(1);
        $person->setFirstName('A Foo Bar');
        $person->setLastName('A Foo Bar');
        $person->setRegisterDate('20.01.2015 15:35:35');
        $person->setEmail('A Foo Bar');
        $person->setPhonenumber('A Foo Bar');
        $person->setPassword('A Foo Bar');




        $em = $this->getDoctrine()->getManager();

        $em->persist($person);
        $em->flush();

        $personArray [] = $person->getId();
        $personArray [] = $person->getLevelId();
        $personArray [] = $person->getFirstName();
        $personArray [] = $person->getLastName();
        $personArray [] = $person->getRegisterDate();
        $personArray [] = $person->getEmail();
        $personArray [] = $person->getPhonenumber();
        $personArray [] = $person->getPassword();

        return new Response( json_encode($personArray));
    }


    /**
     * @Route("/person/get/{id}")
     */

    public function showActionPerson($id)
    {
        $person = $this->getDoctrine()
            ->getRepository('AppBundle:Person')
            ->find($id);

        if (!$person) {
            throw $this->createNotFoundException(
                'No Person found for id ' . $id
            );
        }
        $personArray [] = $person->getId();
        $personArray [] = $person->getLevelId();
        $personArray [] = $person->getFirstName();
        $personArray [] = $person->getLastName();
        $personArray [] = $person->getRegisterDate();
        $personArray [] = $person->getEmail();
        $personArray [] = $person->getPhonenumber();
        $personArray [] = $person->getPassword();

        $response = json_encode($personArray); //json_encode(array($country))

        return new Response($response);
    }


    /**
     * @Route("/personAnswer/create")
     */

    public function createActionPersonAnswer()
    {
        $personAnswer = new Person_Answer();
        $personAnswer->setQuestionId('A Foo Bar');
        $personAnswer->setAnswerContent('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($personAnswer);
        $em->flush();

        $personAnswerArray [] = $personAnswer->getId();
        $personAnswerArray [] = $personAnswer->getQuestionId();
        $personAnswerArray [] = $personAnswer->getAnswerContent();



        return new Response( json_encode($personAnswerArray));
    }


    /**
     * @Route("/personAnswer/get/{id}")
     */

    public function showActionPersonAnswer($id)
    {
        $personAnswer = $this->getDoctrine()
            ->getRepository('AppBundle:Person_Answer')
            ->find($id);

        if (!$personAnswer) {
            throw $this->createNotFoundException(
                'No Person_Answer found for id ' . $id
            );
        }
        $personAnswerArray [] = $personAnswer->getId();
        $personAnswerArray [] = $personAnswer->getQuestionId();
        $personAnswerArray [] = $personAnswer->getAnswerContent();

        $response = json_encode($personAnswerArray); //json_encode(array($country))

        return new Response($response);
    }



    /**
     * @Route("/personLevel/create")
     */

    public function createActionPersonLevel()
    {
        $personLevel = new Person_Level();
        $personLevel->setLevelName('A Foo Bar');

        $em = $this->getDoctrine()->getManager();

        $em->persist($personLevel);
        $em->flush();

        $personLevelArray [] = $personLevel->getId();
        $personLevelArray [] = $personLevel->getLevelName();


       return new Response( json_encode($personLevelArray));
    }


    /**
     * @Route("/personLevel/get/{id}")
     */

    public function showActionPersonLevel($id)
    {
        $personLevel = $this->getDoctrine()
            ->getRepository('AppBundle:Person_Level')
            ->find($id);

        if (!$personLevel) {
            throw $this->createNotFoundException(
                'No Person_Level found for id ' . $id
            );
        }
        $personLevelArray [] = $personLevel->getId();
        $personLevelArray [] = $personLevel->getLevelName();

        $response = json_encode($personLevelArray); //json_encode(array($country))

        return new Response($response);
    }


    /**
     * @Route("/personTeam/create")
     */

    public function createActionPersonTeam()
    {
        $personTeam = new Person_Team();
        $personTeam->setPersonId('A Foo Bar');
        $personTeam->setTeamId('A Foo Bar');
        $personTeam->setRole('A Foo Bar');

        $em = $this->getDoctrine()->getManager();

        $em->persist($personTeam);
        $em->flush();

        $personTeamArray [] = $personTeam->getId();
        $personTeamArray [] = $personTeam->getPersonId();
        $personTeamArray [] = $personTeam->getTeamId();
        $personTeamArray [] = $personTeam->getRole();


        return new Response( json_encode($personTeamArray));
    }


    /**
     * @Route("/personTeam/get/{id}")
     */

    public function showActionPersonTeam($id)
    {
        $personTeam = $this->getDoctrine()
            ->getRepository('AppBundle:Person_Team')
            ->find($id);

        if (!$personTeam) {
            throw $this->createNotFoundException(
                'No Team found for id ' . $id
            );
        }
        $personTeamArray [] = $personTeam->getId();
        $personTeamArray [] = $personTeam->getPersonId();
        $personTeamArray [] = $personTeam->getTeamId();
        $personTeamArray [] = $personTeam->getRole();


        $response = json_encode($personTeamArray); //json_encode(array($country))

        return new Response($response);
    }


    /**
     * @Route("/Question/create")
     */

    public function createActionQuestion()
    {
        $question = new Question();
        $question->setQuestionCategoryId('A Foo Bar');
        $question->setQuestionTypeId('A Foo Bar');
        $question->setQuestionContent('A Foo Bar');

        $em = $this->getDoctrine()->getManager();

        $em->persist($question);
        $em->flush();

        $questionArray [] = $question->getId();
        $questionArray [] = $question->getQuestionCategoryId();
        $questionArray [] = $question->getQuestionTypeId();
        $questionArray [] = $question->getQuestionContent();


        return new Response( json_encode($questionArray));
    }


    /**
     * @Route("/Question/get/{id}")
     */

    public function showActionQuestion($id)
    {
        $question = $this->getDoctrine()
            ->getRepository('AppBundle:Question')
            ->find($id);

        if (!$question) {
            throw $this->createNotFoundException(
                'No Question found for id ' . $id
            );
        }
        $questionArray [] = $question->getId();
        $questionArray [] = $question->getQuestionCategoryId();
        $questionArray [] = $question->getQuestionTypeId();
        $questionArray [] = $question->getQuestionContent();

        $response = json_encode($questionArray); //json_encode(array($country))

        return new Response($response);
    }


    /**
     * @Route("/QuestionCategory/create")
     */

    public function createActionQuestionCategory()
    {
        $questionCategory = new Question_Category();
        $questionCategory->setCategoryId('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($questionCategory);
        $em->flush();

        $questionCategoryArray [] = $questionCategory->getId();
        $questionCategoryArray [] = $questionCategory->getCategoryId();


        return new Response( json_encode($questionCategoryArray));
    }


    /**
     * @Route("/QuestionCategory/get/{id}")
     */

    public function showActionQuestionCategory($id)
    {
        $questionCategory = $this->getDoctrine()
            ->getRepository('AppBundle:Question_category')
            ->find($id);

        if (!$questionCategory) {
            throw $this->createNotFoundException(
                'No Question_category found for id ' . $id
            );
        }
        $questionCategoryArray [] = $questionCategory->getId();
        $questionCategoryArray [] = $questionCategory->getCategoryId();

        $response = json_encode($questionCategoryArray); //json_encode(array($country))

        return new Response($response);
    }




    /**
     * @Route("/QuestionType/create")
     */

    public function createActionQuestionType()
    {
        $questionType = new Question_Type();
        $questionType->setQuestionTypeName('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($questionType);
        $em->flush();

        $questionTypeArray [] = $questionType->getId();
        $questionTypeArray [] = $questionType->getQuestionTypeName();


        return new Response( json_encode($questionTypeArray));
    }


    /**
     * @Route("/QuestionType/get/{id}")
     */

    public function showActionQuestionType($id)
    {
        $questionType = $this->getDoctrine()
            ->getRepository('AppBundle:Question_Type')
            ->find($id);

        if (!$questionType) {
            throw $this->createNotFoundException(
                'No Question_Type found for id ' . $id
            );
        }
        $questionTypeArray [] = $questionType->getId();
        $questionTypeArray [] = $questionType->getQuestionTypeName();

        $response = json_encode($questionTypeArray); //json_encode(array($country))

        return new Response($response);
    }



    /**
     * @Route("/Questionnaire/create")
     */

    public function createActionQuestionnaire($array)
    {
        $questionnaire = new Questionnaire();
        $questionnaire->setCreatorId($array());
        $questionnaire->setCreatedDate('A Foo Bar');
        $questionnaire->setHidden('A Foo Bar');

        $em = $this->getDoctrine()->getManager();

        $em->persist($questionnaire);
        $em->flush();

        $questionnaireArray [] = $questionnaire->getId();
        $questionnaireArray [] = $questionnaire->getCreatorId();
        $questionnaireArray [] = $questionnaire->getCreatedDate();
        $questionnaireArray [] = $questionnaire->getHidden();


        return new Response( json_encode($questionnaireArray));
    }


    /**
     * @Route("/Questionnaire/get/{id}")
     */

    public function showActionQuestionnaire($id)
    {
        $questionnaire = $this->getDoctrine()
            ->getRepository('AppBundle:Questionnaire')
            ->find($id);

        if (!$questionnaire) {
            throw $this->createNotFoundException(
                'No Questionnaire found for id ' . $id
            );
        }
        $questionnaireArray [] = $questionnaire->getId();
        $questionnaireArray [] = $questionnaire->getCreatorId();
        $questionnaireArray [] = $questionnaire->getCreatedDate();
        $questionnaireArray [] = $questionnaire->getHidden();

        $response = json_encode($questionnaireArray); //json_encode(array($country))

        return new Response($response);
    }



    /**
     * @Route("/QuestionnaireQuestion/create")
     */

    public function createActionQuestionnaireQuestion()
    {
        $questionnaireQuestion = new Questionnaire_Question();
        $questionnaireQuestion->setQuestionId('A Foo Bar');
        $questionnaireQuestion->setQuestionnaireId('A Foo Bar');
        $questionnaireQuestion->setAnswered('A Foo Bar');

        $em = $this->getDoctrine()->getManager();

        $em->persist($questionnaireQuestion);
        $em->flush();

        $questionnaireQuestionArray [] = $questionnaireQuestion->getId();
        $questionnaireQuestionArray [] = $questionnaireQuestion->getQuestionId();
        $questionnaireQuestionArray [] = $questionnaireQuestion->getQuestionnaireId();
        $questionnaireQuestionArray [] = $questionnaireQuestion->getAnswered();


        return new Response( json_encode($questionnaireQuestionArray));
    }


    /**
     * @Route("/QuestionnaireQuestion/get/{id}")
     */

    public function showActionQuestionnaireQuestion($id)
    {
        $questionnaireQuestion = $this->getDoctrine()
            ->getRepository('AppBundle:Questionnaire_Question')
            ->find($id);

        if (!$questionnaireQuestion) {
            throw $this->createNotFoundException(
                'No Questionnaire_Question found for id ' . $id
            );
        }
        $questionnaireQuestionArray [] = $questionnaireQuestion->getId();
        $questionnaireQuestionArray [] = $questionnaireQuestion->getQuestionId();
        $questionnaireQuestionArray [] = $questionnaireQuestion->getQuestionnaireId();
        $questionnaireQuestionArray [] = $questionnaireQuestion->getAnswered();

        $response = json_encode($questionnaireQuestionArray); //json_encode(array($country))

        return new Response($response);
    }


    /**
     * @Route("/SentQuestionnaire/create")
     */

    public function createActionSentQuestionnaire()
    {
        $sentQuestionnaire = new Sent_Questionnaire();
        $sentQuestionnaire->setQuestionnaireId('A Foo Bar');
        $sentQuestionnaire->setPersonId('A Foo Bar');
        $sentQuestionnaire->setSentDate('A Foo Bar');
        $sentQuestionnaire->setCompleted('A Foo Bar');


        $em = $this->getDoctrine()->getManager();

        $em->persist($sentQuestionnaire);
        $em->flush();

        $sentQuestionnaireArray [] = $sentQuestionnaire->getId();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getQuestionnaireId();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getPersonId();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getSentDate();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getCompleted();


        return new Response( json_encode($sentQuestionnaireArray));
    }


    /**
     * @Route("/SentQuestionnaire/get/{id}")
     */

    public function showActionSentQuestionnaire($id)
    {
        $sentQuestionnaire = $this->getDoctrine()
            ->getRepository('AppBundle:Sent_Questionnaire')
            ->find($id);

        if (!$sentQuestionnaire) {
            throw $this->createNotFoundException(
                'No Sent_Questionnaire found for id ' . $id
            );
        }

        $sentQuestionnaireArray [] = $sentQuestionnaire->getId();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getQuestionnaireId();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getPersonId();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getSentDate();
        $sentQuestionnaireArray [] = $sentQuestionnaire->getCompleted();

        $response = json_encode($sentQuestionnaireArray); //json_encode(array($country))

        return new Response($response);
    }



    /**
     * @Route("/Team/create")
     */

    public function createActionTeam($teamName,$countryName)
    {
        $country = new Country();
        $country->setCountryName($countryName);

        $team = new Team();
        $team->setCountryId($countryId);
        $team->setTeamName($teamName);
        // relate this product to the category
        $team->setCountry($country);


        $em = $this->getDoctrine()->getManager();
        $em->persist($team);
        $em->flush();

        $teamArray [] = $team->getId();
        $teamArray [] = $team->getCountryId();
        $teamArray [] = $country->getId();
        $teamArray [] = $country->getCountryName();



        return new Response( json_encode($teamArray));
    }


    /**
     * @Route("/Team/get/{id}")
     */

    public function showActionTeam($id)
    {
        $team = $this->getDoctrine()
            ->getRepository('AppBundle:Team')
            ->find($id);

        if (!$team) {
            throw $this->createNotFoundException(
                'No Team found for id ' . $id
            );
        }

        $teamArray [] = $team->getId();
        $teamArray [] = $team->getCountryId();
        $teamArray [] = $team->getTeamName();

        $response = json_encode($teamArray); //json_encode(array($country))

        return new Response($response);
    }



}
?>