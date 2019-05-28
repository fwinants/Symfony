<?php
namespace App\Form;


use App\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class FormClass extends AbstractType 
{
    function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder->add('task')
                ->add(['profil' => 'single_text']);
    }
}
