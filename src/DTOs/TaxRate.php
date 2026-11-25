<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Tax Rate
 *
 * Tax rates can be applied to [invoices](/invoicing/taxes/tax-rates), [subscriptions](/billing/taxes/tax-rates) and [Checkout Sessions](/payments/checkout/use-manual-tax-rates) to collect tax.
 *
 * Related guide: [Tax rates](/billing/taxes/tax-rates)
 */
final class TaxRate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'created',
        'display_name',
        'id',
        'inclusive',
        'livemode',
        'object_',
        'percentage',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'display_name' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'jurisdiction' => [
            'maxLength' => 5000,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Defaults to `true`. When set to `false`, this tax rate cannot be used with new applications or Checkout Sessions, but will still work for subscriptions and invoices that already have it set.
     */
    public bool $active;
    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * An arbitrary string attached to the tax rate for your internal use only. It will not be visible to your customers.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The display name of the tax rates as it will appear to your customer on their receipt email, PDF, and the hosted invoice page.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * Actual/effective tax rate percentage out of 100. For tax calculations with automatic_tax[enabled]=true,
     * this percentage reflects the rate actually used to calculate tax based on the product's taxability
     * and whether the user is registered to collect taxes in the corresponding jurisdiction.
     */
    public ?float $effective_percentage;
    /**
     * The amount of the tax rate when the `rate_type` is `flat_amount`. Tax rates with `rate_type` `percentage` can vary based on the transaction, resulting in this field being `null`. This field exposes the amount and currency of the flat tax rate.
     */
    public ?\StripeSDK\DTOs\TaxRateFlatAmount $flat_amount;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * This specifies if the tax rate is inclusive or exclusive.
     */
    public bool $inclusive;
    /**
     * The jurisdiction for the tax rate. You can use this label field for tax reporting purposes. It also appears on your customer’s invoice.
     */
    public ?string $jurisdiction {
        set {
            $this->assigning('jurisdiction', $value);
            $this->jurisdiction = $value;
        }
    }
    /**
     * The level of the jurisdiction that imposes this tax rate. Will be `null` for manually defined tax rates.
     */
    public ?\StripeSDK\Enums\TaxRate\JurisdictionLevelEnum $jurisdiction_level;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\TaxRate\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\TaxRate\ObjectEnum $object_;
    /**
     * Tax rate percentage out of 100. For tax calculations with automatic_tax[enabled]=true, this percentage includes the statutory tax rate of non-taxable jurisdictions.
     */
    public float $percentage;
    /**
     * Indicates the type of tax rate applied to the taxable amount. This value can be `null` when no tax applies to the location. This field is only present for TaxRates created by Stripe Tax.
     */
    public ?\StripeSDK\Enums\TaxRate\RateTypeEnum $rate_type;
    /**
     * [ISO 3166-2 subdivision code](https://en.wikipedia.org/wiki/ISO_3166-2), without country prefix. For example, "NY" for New York, United States.
     */
    public ?string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    /**
     * The high-level tax type, such as `vat` or `sales_tax`.
     */
    public ?\StripeSDK\Enums\TaxRate\TaxTypeEnum $tax_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'effective_percentage' => $value === null || is_float($value) ? $this->effective_percentage = $value : parent::assignMember($name, $value),
            'flat_amount' => $value === null || $value instanceof \stdClass ? $this->flat_amount = $value === null ? null : new \StripeSDK\DTOs\TaxRateFlatAmount($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'inclusive' => is_bool($value) ? $this->inclusive = $value : parent::assignMember($name, $value),
            'jurisdiction' => $value === null || is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            'jurisdiction_level' => $value === null || is_string($value) ? $this->jurisdiction_level = $value === null ? null : \StripeSDK\Enums\TaxRate\JurisdictionLevelEnum::from($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\TaxRate\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'percentage' => is_float($value) ? $this->percentage = $value : parent::assignMember($name, $value),
            'rate_type' => $value === null || is_string($value) ? $this->rate_type = $value === null ? null : \StripeSDK\Enums\TaxRate\RateTypeEnum::from($value) : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'tax_type' => $value === null || is_string($value) ? $this->tax_type = $value === null ? null : \StripeSDK\Enums\TaxRate\TaxTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
