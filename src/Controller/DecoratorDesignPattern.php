<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;


class DecoratorDesignPattern extends AbstractController
{

    #[Route(path: "/decorate", name: "decorate", methods: ["GET"])]
    public function decorateSerializer(SerializerInterface $serializer)
    {
        dd($serializer->serialize(['name' => 'rahul'], JsonEncoder::FORMAT));
    }
}