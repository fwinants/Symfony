<?php
namespace App\Controller;



use App\Form\TaskType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use FWPROJET\src\Form\FormClass;

class HomeController extends AbstractController {

    /**
     * @Route ("/", name = "index")
     *  @param FormBuilderInterface $builder
     *      @param  array $options
     */

    public function new()

    {
      
      $request = Request::createFromGlobals();

      $task = new Task();

      $form = $this->createFormBuilder($task)
      ->add('profil', TextType::class)
      
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $task = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        // $entityManager = $this->getDoctrine()->getManager();
        // $entityManager->persist($task);
        // $entityManager->flush();

        return $this->render('pages/home.html.twig');
        
      }




      

    function index ()

    {
      


      return $this->render('pages/home.html.twig');
      }
      return $this->render('pages/home.html.twig');
     }

    
 
    
}