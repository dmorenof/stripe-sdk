<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Tax;

/**
 * Tax Transaction
 *
 * A Tax Transaction records the tax collected from or refunded to your customer.
 *
 * Related guide: [Calculate tax in your custom payment flow](https://docs.stripe.com/tax/custom#tax-transaction)
 */
final class Transaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'currency',
        'customer_details',
        'id',
        'livemode',
        'object_',
        'posted_at',
        'reference',
        'tax_date',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The ID of an existing [Customer](https://docs.stripe.com/api/customers/object) used for the resource.
     */
    public ?string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public \StripeSDK\DTOs\TaxProduct\ResourceCustomerDetails $customer_details;
    /**
     * Unique identifier for the transaction.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The tax collected or refunded, by line item.
     */
    public ?\StripeSDK\DTOs\Tax\Transaction\LineItemsDTO $line_items;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Tax\Transaction\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Tax\Transaction\ObjectEnum $object_;
    /**
     * The Unix timestamp representing when the tax liability is assumed or reduced.
     * Format: unix-time
     */
    public int $posted_at;
    /**
     * A custom unique identifier, such as 'myOrder_123'.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * If `type=reversal`, contains information about what was reversed.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceTaxTransactionResourceReversal $reversal;
    /**
     * The details of the ship from location, such as the address.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceShipFromDetails $ship_from_details;
    /**
     * The shipping cost details for the transaction.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceTaxTransactionShippingCost $shipping_cost;
    /**
     * The calculation uses the tax rules and rates that are in effect at this timestamp. You can use a date up to 31 days in the past or up to 31 days in the future. If you use a future date, Stripe doesn't guarantee that the expected tax rules and rate being used match the actual rules and rate that will be in effect on that date. We deploy tax changes before their effective date, but not within a fixed window.
     * Format: unix-time
     */
    public int $tax_date;
    /**
     * If `reversal`, this transaction reverses an earlier transaction.
     */
    public \StripeSDK\Enums\Tax\Transaction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => $value === null || is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_details' => $value instanceof \stdClass ? $this->customer_details = new \StripeSDK\DTOs\TaxProduct\ResourceCustomerDetails($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Tax\Transaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'posted_at' => is_int($value) ? $this->posted_at = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'reversal' => $value === null || $value instanceof \stdClass ? $this->reversal = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceTaxTransactionResourceReversal($value) : parent::assignMember($name, $value),
            'ship_from_details' => $value === null || $value instanceof \stdClass ? $this->ship_from_details = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceShipFromDetails($value) : parent::assignMember($name, $value),
            'shipping_cost' => $value === null || $value instanceof \stdClass ? $this->shipping_cost = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceTaxTransactionShippingCost($value) : parent::assignMember($name, $value),
            'tax_date' => is_int($value) ? $this->tax_date = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Tax\Transaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
