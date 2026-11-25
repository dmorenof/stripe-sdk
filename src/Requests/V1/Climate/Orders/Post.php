<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Climate\Orders;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'product',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Requested amount of carbon removal units. Either this or `metric_tons` must be specified.
     */
    public int $amount;
    /**
     * Publicly sharable reference for the end beneficiary of carbon removal. Assumed to be the Stripe account if not set.
     */
    public \StripeSDK\Requests\V1\Climate\Orders\Post\OrdersBeneficiaryRequest $beneficiary;
    /**
     * Request currency for the order as a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a supported [settlement currency for your account](https://stripe.com/docs/currencies). If omitted, the account's default currency will be used.
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Climate\Orders\Post\MetadataMapRequest $metadata;
    /**
     * Requested number of tons for the order. Either this or `amount` must be specified.
     * Format: decimal
     */
    public string $metric_tons;
    /**
     * Unique identifier of the Climate product.
     */
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'metric_tons' => is_string($value) ? $this->metric_tons = $value : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
