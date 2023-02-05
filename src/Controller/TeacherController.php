<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TeacherController.php',
        ]);
    }
    #[Route('/showTeacher/{name}',name:'app_teacher_sh')]
    public function showTeacher($name):Response{
        return new Response('Hello '.$name);
    }
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function index1($name)
    {
        return $this->render('showTeacher.html.twig' , [
            'controller_name' => 'TeacherController','name'=> $name ]);
    }
    #[Route('/redirection', name:'red')]
    public function abcf()
    {
        return $this->forward('App\Controller\StudentController::index');
    }
}
