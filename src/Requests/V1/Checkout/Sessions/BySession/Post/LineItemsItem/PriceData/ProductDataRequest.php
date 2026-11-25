<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\LineItemsItem\PriceData;

/**
 * product_data
 */
final class ProductDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 40000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'tax_code' => [
            'maxLength' => 5000,
        ],
        'unit_label' => [
            'maxLength' => 12,
        ],
    ];

    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Collections\StringCollection $images;
    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\LineItemsItem\PriceData\ProductData\MetadataMapRequest $metadata;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $tax_code {
        set {
            $this->assigning('tax_code', $value);
            $this->tax_code = $value;
        }
    }
    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\LineItemsItem\PriceData\ProductData\TaxDetailsRequest $tax_details;
    public string $unit_label {
        set {
            $this->assigning('unit_label', $value);
            $this->unit_label = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->images = new \StripeSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            'unit_label' => is_string($value) ? $this->unit_label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
