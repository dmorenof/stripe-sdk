<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxSettingsDefaults
 */
final class ResourceTaxSettingsDefaults extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'provider',
    ];

    protected const array VALIDATION = [
        'tax_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The tax calculation provider this account uses. Defaults to `stripe` when not using a [third-party provider](/tax/third-party-apps).
     */
    public \StripeSDK\Enums\TaxProduct\ResourceTaxSettingsDefaults\ProviderEnum $provider;
    /**
     * Default [tax behavior](https://stripe.com/docs/tax/products-prices-tax-categories-tax-behavior#tax-behavior) used to specify whether the price is considered inclusive of taxes or exclusive of taxes. If the item's price has a tax behavior set, it will take precedence over the default tax behavior.
     */
    public ?\StripeSDK\Enums\TaxProduct\ResourceTaxSettingsDefaults\TaxBehaviorEnum $tax_behavior;
    /**
     * Default [tax code](https://stripe.com/docs/tax/tax-categories) used to classify your products and prices.
     */
    public ?string $tax_code {
        set {
            $this->assigning('tax_code', $value);
            $this->tax_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'provider' => is_string($value) ? $this->provider = \StripeSDK\Enums\TaxProduct\ResourceTaxSettingsDefaults\ProviderEnum::from($value) : parent::assignMember($name, $value),
            'tax_behavior' => $value === null || is_string($value) ? $this->tax_behavior = $value === null ? null : \StripeSDK\Enums\TaxProduct\ResourceTaxSettingsDefaults\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => $value === null || is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
