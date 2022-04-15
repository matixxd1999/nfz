<?php

namespace App\Controller\Admin;

use App\Entity\Doctors;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DoctorsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Doctors::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('firstName'),
            TextField::new('lastName'),
            AssociationField::new('Specjalizations')

            // TextEditorField::new('description'),
        ];
    }
    
}
