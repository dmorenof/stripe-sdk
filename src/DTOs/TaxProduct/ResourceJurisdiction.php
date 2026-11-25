<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceJurisdiction
 */
final class ResourceJurisdiction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
        'display_name',
        'level',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'display_name' => [
            'maxLength' => 5000,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
    ];

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
     * A human-readable name for the jurisdiction imposing the tax.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * Indicates the level of the jurisdiction imposing the tax.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceJurisdiction\LevelEnum $level;
    /**
     * [ISO 3166-2 subdivision code](https://en.wikipedia.org/wiki/ISO_3166-2), without country prefix. For example, "NY" for New York, United States.
     */
    public ?string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'level' => is_string($value) ? $this->level = \StripeSDK\Enums\TaxProduct\ResourceJurisdiction\LevelEnum::from($value) : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
