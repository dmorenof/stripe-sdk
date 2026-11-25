<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Ca;

/**
 * province_standard
 */
final class ProvinceStandardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'province',
    ];

    protected const array VALIDATION = [
        'province' => [
            'maxLength' => 5000,
        ],
    ];

    public string $province {
        set {
            $this->assigning('province', $value);
            $this->province = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'province' => is_string($value) ? $this->province = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
