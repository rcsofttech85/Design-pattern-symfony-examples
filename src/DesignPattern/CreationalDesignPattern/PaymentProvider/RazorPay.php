<?php

namespace App\DesignPattern\CreationalDesignPattern\PaymentProvider;

use App\DesignPattern\CreationalDesignPattern\Interface\PaymentProviderInterface;

class RazorPay implements PaymentProviderInterface
{
    const PAYMENT_NAME = 'razor';

    public function support(string $paymentName): bool
    {
        return $paymentName === self::PAYMENT_NAME;
    }

    public function pay(): bool
    {
        // Implementation specific to RazorPay
        return true;
    }
}