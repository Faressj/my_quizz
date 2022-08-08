<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Categorie;
use App\Entity\Quiz;
use App\Entity\Question;
use App\Entity\Reponses;

class QuizzController extends AbstractController
{
    /**
     * @Route("/quizz", name="app_quizz")
     */
    public function show(ManagerRegistry $doctrine): Response
    {
        $product = $doctrine->getRepository(categorie::class)->findAll([
            'id' => 'ASC',
        ]);

       
        // $em = $this->getDoctrine()->getManager();

        // $RAW_QUERY = 'SELECT * FROM categorie LIMIT 5;';
        
        // $statement = $em->getConnection()->prepare($RAW_QUERY);
        // $statement->execute();

        // $result = $statement->fetchAll();
        
        return $this->render('quizz/index.html.twig', ['production' => $product]);
    // return new Response('Check out this great product: '.$value->getId();
    

    }
}

// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Doctrine\Persistence\ManagerRegistry;
// use App\Entity\Question;
// use App\Entity\Quiz;
// use App\Entity\Product;

// class QuestionsController extends AbstractController
// {
//     /**
//      * @Route("/questions/{id}", name="product_show")
//      */
//     public function show(ManagerRegistry $doctrine, int $id): Response
//     {
//         $product = $doctrine->getRepository(Question::class)->find($id);

//         if (!$product) {
//             throw $this->createNotFoundException(
//                 'No product found for id '.$id
//             );
//         }

//         return new Response('Check out this great product: '.$product->getName());

//         // or render a template
//         // in the template, print things with {{ product.name }}
//         // return $this->render('product/show.html.twig', ['product' => $product]);
//     }
// }