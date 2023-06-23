<?php

namespace App\Controller\Admin;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CustomerType;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminPurchaseCustomerController extends AbstractController
{
    #[Route('/admin/purchase/customer/', name: 'admin_purchase_customer')]
    public function index(CustomerRepository $CustomerRepository): Response
    {
        $form = $this->createForm(CustomerType::class);
        return $this->render('admin/admin_purchase_customer/index.html.twig', [
            'customers' => $CustomerRepository->findAll(),
            'confirmationForm' => $form->createView()
        ]);
    }


  


}
