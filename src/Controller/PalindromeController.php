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
        $result = null;

        if ($request->isMethod('POST')) {
            $input = $request->request->get('input');

            $cleanedInput = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $input));

            if ($cleanedInput === strrev($cleanedInput)) {
                $result = '"' . $input . '" is a palindrome!';
            } else {
                $result = '"' . $input . '" is not a palindrome.';
            }
        }

        return $this->render('palindrome/index.html.twig', [
            'result' => $result
        ]);
    }
}
