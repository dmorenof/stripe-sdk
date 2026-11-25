<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceNameCollection
 */
final class LinksResourceNameCollection extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\LinksResourceBusinessName $business;
    public \StripeSDK\DTOs\Payment\LinksResourceIndividualName $individual;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'business' => $value instanceof \stdClass ? $this->business = new \StripeSDK\DTOs\Payment\LinksResourceBusinessName($value) : parent::assignMember($name, $value),
            'individual' => $value instanceof \stdClass ? $this->individual = new \StripeSDK\DTOs\Payment\LinksResourceIndividualName($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
