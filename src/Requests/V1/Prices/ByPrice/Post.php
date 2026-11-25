<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\ByPrice;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'lookup_key' => [
            'maxLength' => 200,
        ],
        'nickname' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the price can be used for new purchases. Defaults to `true`.
     */
    public bool $active;
    /**
     * Prices defined in each available currency option. Each key must be a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) and a [supported currency](https://stripe.com/docs/currencies).
     */
    public \StripeSDK\Requests\V1\Prices\ByPrice\Post\CurrencyOptionsRequest $currency_options;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A lookup key used to retrieve prices dynamically from a static string. This may be up to 200 characters.
     */
    public string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Prices\ByPrice\Post\ByPriceMetadataRequest $metadata;
    /**
     * A brief description of the price, hidden from customers.
     */
    public string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * Only required if a [default tax behavior](https://docs.stripe.com/tax/products-prices-tax-categories-tax-behavior#setting-a-default-tax-behavior-(recommended)) was not provided in the Stripe Tax settings. Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`. Once specified as either `inclusive` or `exclusive`, it cannot be changed.
     */
    public \StripeSDK\Enums\V1\Prices\ByPrice\Post\TaxBehaviorEnum $tax_behavior;
    /**
     * If set to true, will atomically remove the lookup key from the existing price, and assign it to this price.
     */
    public bool $transfer_lookup_key;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'lookup_key' => is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Prices\ByPrice\Post\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'transfer_lookup_key' => is_bool($value) ? $this->transfer_lookup_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
