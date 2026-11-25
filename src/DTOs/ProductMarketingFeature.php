<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * ProductMarketingFeature
 */
final class ProductMarketingFeature extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The marketing feature name. Up to 80 characters long.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
