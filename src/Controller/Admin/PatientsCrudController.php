<?php

namespace App\Controller\Admin;

use App\Entity\Patients;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use PHPUnit\TextUI\XmlConfiguration\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File as FileFile;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;

class PatientsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Patients::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('firstName'),
            TextField::new('lastName'),
            TextField::new('adress'),
            TextField::new('pesel'),
            // DateField::new('DateOfBirth'),
            AssociationField::new('sex'),
            // TextEditorField::new('description'),
            
        ];
    }

    // public function buildForm(FormBuilderInterface $builder, array $options)
    // {
    //     $builder

    //     -> add ('my_file', FileType::class,[
    //         'mapped' => false,
    //         'label' => 'Please upload the file',
    //     ]);



    // }


   

    // public function buildForm(FormBuilderInterface $builder, array $options)
    // {
    //     $builder
    //         // ...
    //         ->add('brochure', FileType::class, [
    //             'label' => 'Brochure (PDF file)',

    //             // unmapped means that this field is not associated to any entity property
    //             'mapped' => false,

    //             // make it optional so you don't have to re-upload the PDF file
    //             // every time you edit the Product details
    //             'required' => false,

    //             // unmapped fields can't define their validation using annotations
    //             // in the associated entity, so you can use the PHP constraint classes
    //             'constraints' => [
    //                 new ConstraintsFile([
    //                     'maxSize' => '1024k',
    //                     'mimeTypes' => [
    //                         'application/pdf',
    //                         'application/x-pdf',
    //                     ],
    //                     'mimeTypesMessage' => 'Please upload a valid PDF document',
    //                 ])
    //             ],
    //         ])
    //         // ...
    //     ;
    // }

    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults([
    //         'data_class' => Product::class,
    //     ]);
    // }

    
}
