<?php

namespace App\Controller;

use App\DesignPattern\CreationalDesignPattern\Factory\PaymentFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FactoryDesignPattern extends AbstractController
{

    #[Route(path: "/make/payment", name: "make_payment", methods: ["POST"])]
    public function makePayment(Request $request, PaymentFactory $PaymentFactory): JsonResponse
    {
        $paymentMethod = $request->get('payment-method');

        if (!$paymentMethod) {
            // Handle the absence of a payment method and possibly throw an exception
        }

        $paymentProvider = $PaymentFactory->getPaymentProvider($paymentMethod);

        if (!$paymentProvider->pay()) {
            // Handle payment failure and possibly throw an exception
        }

        return new JsonResponse(data: "Show success message");
    }
}