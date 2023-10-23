<?php

namespace App\DesignPattern\CreationalDesignPattern\Factory;

use App\DesignPattern\CreationalDesignPattern\Interface\PaymentProviderInterface;

final readonly class PaymentFactory
{
    public function __construct(private iterable $paymentProvider)
    {
    }

    public function getPaymentProvider(string $paymentName): PaymentProviderInterface
    {
        /** @var PaymentProviderInterface $paymentProvider */
        foreach ($this->paymentProvider as $paymentProvider) {
            if ($paymentProvider->support($paymentName)) {
                return $paymentProvider;
            }
        }

        throw new \Exception('Payment gateway not supported');
    }
}