<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\OnboardingLinks\Post\LinkOptions;

/**
 * apple_terms_and_conditions_params
 */
final class AndConditionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'merchant_display_name',
    ];

    protected const array VALIDATION = [
        'merchant_display_name' => [
            'maxLength' => 5000,
        ],
    ];

    public bool $allow_relinking;
    public string $merchant_display_name {
        set {
            $this->assigning('merchant_display_name', $value);
            $this->merchant_display_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_relinking' => is_bool($value) ? $this->allow_relinking = $value : parent::assignMember($name, $value),
            'merchant_display_name' => is_string($value) ? $this->merchant_display_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
