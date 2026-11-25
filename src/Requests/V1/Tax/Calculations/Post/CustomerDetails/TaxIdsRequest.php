<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations\Post\CustomerDetails;

/**
 * data_params
 */
final class TaxIdsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
        'value',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails\TaxIdsItem\IdsItemTypeEnum $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails\TaxIdsItem\IdsItemTypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
