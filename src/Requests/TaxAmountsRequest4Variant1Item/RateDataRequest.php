<?php

declare(strict_types=1);

namespace StripeSDK\Requests\TaxAmountsRequest4Variant1Item;

/**
 * tax_rate_data_param
 */
final class RateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'display_name',
        'inclusive',
        'percentage',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'display_name' => [
            'maxLength' => 200,
        ],
        'jurisdiction' => [
            'maxLength' => 200,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    public bool $inclusive;
    public string $jurisdiction {
        set {
            $this->assigning('jurisdiction', $value);
            $this->jurisdiction = $value;
        }
    }
    public \StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxRateData\JurisdictionLevelEnum $jurisdiction_level;
    public float $percentage;
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    public \StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxRateData\TaxTypeEnum $tax_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'inclusive' => is_bool($value) ? $this->inclusive = $value : parent::assignMember($name, $value),
            'jurisdiction' => is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            'jurisdiction_level' => is_string($value) ? $this->jurisdiction_level = \StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxRateData\JurisdictionLevelEnum::from($value) : parent::assignMember($name, $value),
            'percentage' => is_float($value) ? $this->percentage = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'tax_type' => is_string($value) ? $this->tax_type = \StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxRateData\TaxTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
