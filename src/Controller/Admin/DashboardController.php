<?php

namespace App\Controller\Admin;

use App\Entity\Doctors;
use App\Entity\Patients;
use App\Entity\Specjalizations;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Nfz');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Doktorzy', 'fas fa-list', Doctors::class);
        yield MenuItem::linkToCrud('Pacjenci', 'fas fa-list', Patients::class);
        yield MenuItem::linkToCrud('Specjalizacje', 'fas fa-list', Specjalizations::class);

    }
}
