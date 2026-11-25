<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\Post;

/**
 * inline_product_params
 *
 * These fields can be used to create a new product that this price will belong to.
 */
final class ProductDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'tax_code' => [
            'maxLength' => 5000,
        ],
        'unit_label' => [
            'maxLength' => 12,
        ],
    ];

    public bool $active;
    /**
     * @deprecated
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\Requests\V1\Prices\Post\ProductData\MetadataMapRequest $metadata;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    public string $tax_code {
        set {
            $this->assigning('tax_code', $value);
            $this->tax_code = $value;
        }
    }
    public \StripeSDK\Requests\V1\Prices\Post\ProductData\TaxDetailsRequest $tax_details;
    public string $unit_label {
        set {
            $this->assigning('unit_label', $value);
            $this->unit_label = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            'unit_label' => is_string($value) ? $this->unit_label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
