<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceBusinessName
 */
final class LinksResourceBusinessName extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'optional',
    ];

    /**
     * Indicates whether business name collection is enabled for the payment link.
     */
    public bool $enabled;
    /**
     * Whether the customer is required to complete the field before checking out. Defaults to `false`.
     */
    public bool $optional;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'optional' => is_bool($value) ? $this->optional = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
