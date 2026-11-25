<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Mandate Data
 *
 * Data used for generating a Mandate.
 */
final class MandateData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_acceptance',
    ];

    public \StripeSDK\DTOs\ConfirmationTokensResource\MandateDataResourceCustomerAcceptance $customer_acceptance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_acceptance' => $value instanceof \stdClass ? $this->customer_acceptance = new \StripeSDK\DTOs\ConfirmationTokensResource\MandateDataResourceCustomerAcceptance($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
