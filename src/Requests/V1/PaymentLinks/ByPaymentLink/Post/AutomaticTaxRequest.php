<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

/**
 * automatic_tax_params
 *
 * Configuration for automatic tax collection.
 */
final class AutomaticTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\AutomaticTax\TaxLiabilityRequest $liability;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
