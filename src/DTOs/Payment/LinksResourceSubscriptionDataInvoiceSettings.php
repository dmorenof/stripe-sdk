<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceSubscriptionDataInvoiceSettings
 */
final class LinksResourceSubscriptionDataInvoiceSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'issuer',
    ];

    public \StripeSDK\DTOs\ConnectAccountReference $issuer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'issuer' => $value instanceof \stdClass ? $this->issuer = new \StripeSDK\DTOs\ConnectAccountReference($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
