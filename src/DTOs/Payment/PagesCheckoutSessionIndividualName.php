<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionIndividualName
 */
final class PagesCheckoutSessionIndividualName extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'optional',
    ];

    /**
     * Indicates whether individual name collection is enabled for the session
     */
    public bool $enabled;
    /**
     * Whether the customer is required to complete the field before completing the Checkout Session. Defaults to `false`.
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
