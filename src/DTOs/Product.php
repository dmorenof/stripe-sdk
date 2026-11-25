<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Product
 *
 * Products describe the specific goods or services you offer to your customers.
 * For example, you might offer a Standard and Premium version of your goods or service; each version would be a separate Product.
 * They can be used in conjunction with [Prices](https://docs.stripe.com/api#prices) to configure pricing in Payment Links, Checkout, and Subscriptions.
 *
 * Related guides: [Set up a subscription](https://docs.stripe.com/billing/subscriptions/set-up-subscription),
 * [share a Payment Link](https://docs.stripe.com/payment-links),
 * [accept payments with Checkout](https://docs.stripe.com/payments/accept-a-payment#create-product-prices-upfront),
 * and more about [Products and Prices](https://docs.stripe.com/products-prices/overview)
 */
final class Product extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'created',
        'id',
        'images',
        'livemode',
        'marketing_features',
        'metadata',
        'name',
        'object_',
        'updated',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'unit_label' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 2048,
        ],
    ];

    /**
     * Whether the product is currently available for purchase.
     */
    public bool $active;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The ID of the [Price](https://docs.stripe.com/api/prices) object that is the default price for this product.
     */
    public ?\StripeSDK\DTOs\Product\DefaultPriceDTO $default_price;
    /**
     * The product's description, meant to be displayable to the customer. Use this field to optionally store a long form explanation of the product being sold for your own rendering purposes.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
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
     * A list of up to 8 URLs of images for this product, meant to be displayable to the customer.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $images;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * A list of up to 15 marketing features for this product. These are displayed in [pricing tables](https://docs.stripe.com/payments/checkout/pricing-table).
     */
    public \StripeSDK\Collections\Product\MarketingFeaturesCollection $marketing_features;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Product\MetadataMap $metadata;
    /**
     * The product's name, meant to be displayable to the customer.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Product\ObjectEnum $object_;
    /**
     * The dimensions of this product for shipping purposes.
     */
    public ?\StripeSDK\DTOs\PackageDimensions $package_dimensions;
    /**
     * Whether this product is shipped (i.e., physical goods).
     */
    public ?bool $shippable;
    /**
     * Extra information about a product which will appear on your customer's credit card statement. In the case that multiple products are billed at once, the first statement descriptor will be used. Only used for subscription payments.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID.
     */
    public ?\StripeSDK\DTOs\Product\TaxCodeDTO $tax_code;
    /**
     * Tax details for this product, including the [tax code](/tax/tax-codes) and an optional performance location.
     */
    public ?\StripeSDK\DTOs\TaxProduct\TaxDetailsResourceTaxDetails $tax_details;
    /**
     * A label that represents units of this product. When set, this will be included in customers' receipts, invoices, Checkout, and the customer portal.
     */
    public ?string $unit_label {
        set {
            $this->assigning('unit_label', $value);
            $this->unit_label = $value;
        }
    }
    /**
     * Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $updated;
    /**
     * A URL of a publicly-accessible webpage for this product.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->images = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'marketing_features' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->marketing_features = new \StripeSDK\Collections\Product\MarketingFeaturesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\ProductMarketingFeature::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Product\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'package_dimensions' => $value === null || $value instanceof \stdClass ? $this->package_dimensions = $value === null ? null : new \StripeSDK\DTOs\PackageDimensions($value) : parent::assignMember($name, $value),
            'shippable' => $value === null || is_bool($value) ? $this->shippable = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'tax_details' => $value === null || $value instanceof \stdClass ? $this->tax_details = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\TaxDetailsResourceTaxDetails($value) : parent::assignMember($name, $value),
            'unit_label' => $value === null || is_string($value) ? $this->unit_label = $value : parent::assignMember($name, $value),
            'updated' => is_int($value) ? $this->updated = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
