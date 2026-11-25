<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceAutomaticTax
 */
final class LinksResourceAutomaticTax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * If `true`, tax will be calculated automatically using the customer's location.
     */
    public bool $enabled;
    /**
     * The account that's liable for tax. If set, the business address and tax registrations required to perform the tax calculation are loaded from this account. The tax transaction is returned in the report of the connected account.
     */
    public ?\StripeSDK\DTOs\ConnectAccountReference $liability;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'liability' => $value === null || $value instanceof \stdClass ? $this->liability = $value === null ? null : new \StripeSDK\DTOs\ConnectAccountReference($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
