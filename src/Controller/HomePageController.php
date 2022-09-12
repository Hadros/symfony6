<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{

    /**
     * @Route("/", name="home_page")
     */
    public function index(Connection $connection): Response
    {

        $solution = new Solution();
        $amount = $solution->romanToInt('III');
        $op = 1;

        return $this->render('home_page.html.twig', [
            'message' => 'Hello, World!',
        ]);
    }
}

class Solution {

    function getIntFromRomain($symbol) {
        $romainIntMapping = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        if ($symbol && isset($romainIntMapping[$symbol])) {
            return $romainIntMapping[$symbol];
        }

        return FALSE;
    }

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $s) {
        $result = 0;
        foreach (mb_str_split($s) as $symbol) {
            $result += $this->getIntFromRomain($symbol);
        }
        return $result;
    }
}