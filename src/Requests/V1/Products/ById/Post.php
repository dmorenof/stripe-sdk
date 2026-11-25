<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\ById;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_price' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * Whether the product is available for purchase.
     */
    public bool $active;
    /**
     * The ID of the [Price](https://docs.stripe.com/api/prices) object that is the default price for this product.
     */
    public string $default_price {
        set {
            $this->assigning('default_price', $value);
            $this->default_price = $value;
        }
    }
    /**
     * The product's description, meant to be displayable to the customer. Use this field to optionally store a long form explanation of the product being sold for your own rendering purposes.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\ByIdDescriptionRequest $description;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A list of up to 8 URLs of images for this product, meant to be displayable to the customer.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\ByIdImagesRequest $images;
    /**
     * A list of up to 15 marketing features for this product. These are displayed in [pricing tables](https://docs.stripe.com/payments/checkout/pricing-table).
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\MarketingFeaturesRequest $marketing_features;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\ByIdMetadataRequest $metadata;
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
     * The dimensions of this product for shipping purposes.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\PackageDimensionsRequest $package_dimensions;
    /**
     * Whether this product is shipped (i.e., physical goods).
     */
    public bool $shippable;
    /**
     * An arbitrary string to be displayed on your customer's credit card or bank statement. While most banks display this information consistently, some may display it incorrectly or not at all.
     *
     * This may be up to 22 characters. The statement description may not include `<`, `>`, `\`, `"`, `'` characters, and will appear on your customer's statement in capital letters. Non-ASCII characters are automatically stripped.
     *  It must contain at least one letter. May only be set if `type=service`. Only used for subscription payments.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\TaxCodeRequest $tax_code;
    /**
     * Tax details for this product, including the [tax code](/tax/tax-codes) and an optional performance location.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\TaxDetailsRequest $tax_details;
    /**
     * A label that represents units of this product. When set, this will be included in customers' receipts, invoices, Checkout, and the customer portal. May only be set if `type=service`.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\UnitLabelRequest $unit_label;
    /**
     * A URL of a publicly-accessible webpage for this product.
     */
    public \StripeSDK\Requests\V1\Products\ById\Post\ByIdUrlRequest $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'default_price' => is_string($value) ? $this->default_price = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'shippable' => is_bool($value) ? $this->shippable = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
