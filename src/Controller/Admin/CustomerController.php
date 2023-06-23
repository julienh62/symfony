<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customer;
use App\Form\CustomerType;
use App\Repository\CustomerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CustomerController extends AbstractController
{
    #[Route('admin/customer', name: 'admin_customer_index', methods: ['GET'])]
    public function index(CustomerRepository $customerRepository): Response
    {

        return $this->render('admin/customer/index.html.twig', [
            'customers' => $customerRepository->findAll(),
        ]);
    }

    #[Route('admin/customer/new', name: 'admin_customer_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CustomerRepository $customerRepository): Response
    {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $customerRepository->save($customer, true);

            // return $this->redirectToRoute('app_customer_index', [], Response::HTTP_SEE_OTHER);

            return $this->redirectToRoute('admin_customer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/customer/new.html.twig', [
            'customer' => $customer,
            'form' => $form,
        ]);
    }



    #[Route('admin/customer/{id}', name: 'admin_customer_show', methods: ['GET'])]
    public function show(Customer $customer,$id): Response
    {
     
        return $this->render('admin/customer/show.html.twig', [
            'customer' => $customer,
       
        ]);
    }





 //etape1
    #[Route('searchcustomer/{searchItem}', name: 'customer_search')]
    public function searchCustomer(  CustomerRepository $customerRepository,  $searchItem = null):JsonResponse
    {
      //
    $customer = $customerRepository->getByEmail($searchItem);

// 200 c'est le statut http attendu
//etape 3
        return $this->json( $customer, 200, [], ['groups' => 'customer:read']
        );
    }

}
