<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

    /**
     * @Route("/users", name="user_list")
     */
    public function index(Connection $connection): Response
    {
        $users = $connection->fetchAllAssociative('SELECT * FROM user');

        return new Response(
            json_encode($users)
        );
    }
}