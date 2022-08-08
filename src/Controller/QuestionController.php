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


class QuestionController extends AbstractController
 {
     /**
      * @Route("/question/{id_question}/{id_categorie}", name="app_question")
    */
    
    public function show(ManagerRegistry $doctrine, int $id_question, int $id_categorie): Response
    {
      $entityManager = $doctrine->getManager();
      $query = $entityManager->createQuery(
        "SELECT reponse.id as reponses, question.id  as questions , reponse.idQuestion ,reponse.reponse , question.question , question.id , question.idCategorie 
        FROM App\Entity\Question question
        INNER JOIN App\Entity\Reponses reponse
        WITH question.id = reponse.idQuestion
        WHERE question.idCategorie = '$id_categorie'
        And reponse.idQuestion = '$id_question'
      ");
      $reponse= $query->execute();
   
      $question = $entityManager->createQuery(
        "SELECT reponse.id as reponses, question.id  as questions 
        FROM App\Entity\Question question
        INNER JOIN App\Entity\Reponses reponse
        WITH question.id = reponse.idQuestion
        WHERE question.idCategorie = '$id_categorie'
      ");
      $rep = $question->execute();

      $repon = $entityManager->createQuery(
        "SELECT reponse.id as reponses, question.id  as questions, reponse.reponseExpected, reponse.reponse, question.question
        FROM App\Entity\Question question
        INNER JOIN App\Entity\Reponses reponse
        WITH question.id = reponse.idQuestion
        WHERE reponse.reponseExpected = '1'
        AND reponse.idQuestion = '$id_question '
      ");
      $repon = $repon->execute();

      
      $entityManager = $doctrine->getManager();
      $product = $doctrine->getRepository(categorie::class)->findAll(['id' => 'ASC',]);

return $this->render('question/index.html.twig', ['product' => $reponse , 'prod' => $rep, 'production' => $product]);}

}
