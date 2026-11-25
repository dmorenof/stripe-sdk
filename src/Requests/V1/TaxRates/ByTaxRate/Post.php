<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TaxRates\ByTaxRate;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'display_name' => [
            'maxLength' => 50,
        ],
        'jurisdiction' => [
            'maxLength' => 50,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Flag determining whether the tax rate is active or inactive (archived). Inactive tax rates cannot be used with new applications or Checkout Sessions, but will still work for subscriptions and invoices that already have it set.
     */
    public bool $active;
    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * An arbitrary string attached to the tax rate for your internal use only. It will not be visible to your customers.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The display name of the tax rate, which will be shown to users.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The jurisdiction for the tax rate. You can use this label field for tax reporting purposes. It also appears on your customer’s invoice.
     */
    public string $jurisdiction {
        set {
            $this->assigning('jurisdiction', $value);
            $this->jurisdiction = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\TaxRates\ByTaxRate\Post\ByTaxRateMetadataRequest $metadata;
    /**
     * [ISO 3166-2 subdivision code](https://en.wikipedia.org/wiki/ISO_3166-2), without country prefix. For example, "NY" for New York, United States.
     */
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    /**
     * The high-level tax type, such as `vat` or `sales_tax`.
     */
    public \StripeSDK\Enums\V1\TaxRates\ByTaxRate\Post\TaxTypeEnum $tax_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'jurisdiction' => is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'tax_type' => is_string($value) ? $this->tax_type = \StripeSDK\Enums\V1\TaxRates\ByTaxRate\Post\TaxTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
