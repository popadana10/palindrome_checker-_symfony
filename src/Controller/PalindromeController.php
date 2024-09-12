<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PalindromeController extends AbstractController
{
    #[Route('/palindrome', name: 'palindrome_checker')]
    public function checkPalindrome(Request $request): Response
    {
        return $this->render('palindrome/index.html.twig', []);
    }
}
