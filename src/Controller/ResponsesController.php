<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Reponses;
use App\Entity\Quiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\DBAL\Connection\createQueryBuilder;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\DBAL\Query\QueryBuilder;
use App\Entity\Question;
use App\Entity\Categorie;


class ResponsesController extends AbstractController
 {
     /**
      * @Route("/responses/{id_question}/{id_categorie}", name="app_reponses")
    */
    
    public function show(ManagerRegistry $doctrine, int $id_question, int $id_categorie): Response
    {
      $entityManager = $doctrine->getManager();
      $query = $entityManager->createQuery(
        "SELECT reponse.id  as repon, question.id  as question, reponse.idQuestion ,reponse.reponse , question.question , question.id , question.idCategorie 
         FROM App\Entity\Question question
         INNER JOIN App\Entity\Reponses reponse
         WITH question.id = reponse.idQuestion
         WHERE question.idCategorie = '$id_categorie'
          And reponse.idQuestion = '$id_question'
  ");
   
   
   $reponse= $query->execute();
   print_r($reponse);
//    foreach ($reponse as $key => $value ){
// if ($value['idQuestion'] == $id_question){
      // return $this->render('response/index.html.twig', ['product' => $reponse ]);
// }

// }
        // ->findby(['idQuestion' => $id_question]);
        //   if (!$reponse) {
        //     throw $this->createNotFoundException(
        //         'No product found for id '.$id_question
        //     );
        // }
  // return $this->render('response/index.html.twig'); 
    }
  
  
}
