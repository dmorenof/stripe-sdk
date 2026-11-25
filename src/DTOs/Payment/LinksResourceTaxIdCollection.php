<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceTaxIdCollection
 */
final class LinksResourceTaxIdCollection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'required',
    ];

    /**
     * Indicates whether tax ID collection is enabled for the session.
     */
    public bool $enabled;
    public \StripeSDK\Enums\Payment\LinksResourceTaxIdCollection\RequiredEnum $required;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'required' => is_string($value) ? $this->required = \StripeSDK\Enums\Payment\LinksResourceTaxIdCollection\RequiredEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
