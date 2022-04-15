<?php

namespace App\Controller\Admin;

use App\Entity\Patients;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PatientsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Patients::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('thumbnailFile')->setFormType(VichImageType::class),

            TextField::new('firstName'),
            TextField::new('lastName'),
            TextField::new('adress'),
            TextField::new('pesel'),
            // DateField::new('DateOfBirth'),
            AssociationField::new('sex'),
            ImageField::new('thumbnailFile')->setFormType(VichImageType::class),
            ImageField::new('thumbnail')->setBasePath('/images/thumbnails')

            // TextEditorField::new('description'),
        ];
    }
    
}
