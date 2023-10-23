<?php

namespace App\DesignPattern\CreationalDesignPattern\Interface;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag(name: "payment_provider")]
interface PaymentProviderInterface
{
    public function support(string $paymentName): bool;

    public function pay(): bool;
}