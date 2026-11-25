<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionNameCollection
 */
final class PagesCheckoutSessionNameCollection extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionBusinessName $business;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionIndividualName $individual;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'business' => $value instanceof \stdClass ? $this->business = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionBusinessName($value) : parent::assignMember($name, $value),
            'individual' => $value instanceof \stdClass ? $this->individual = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionIndividualName($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
