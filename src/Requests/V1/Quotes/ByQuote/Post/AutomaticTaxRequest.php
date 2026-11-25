<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote\Post;

/**
 * automatic_tax_param
 *
 * Settings for automatic tax lookup for this quote and resulting invoices and subscriptions.
 */
final class AutomaticTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\AutomaticTax\TaxLiabilityRequest $liability;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
