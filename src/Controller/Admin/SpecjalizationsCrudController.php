<?php

namespace App\Controller\Admin;

use App\Entity\Specjalizations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SpecjalizationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Specjalizations::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
