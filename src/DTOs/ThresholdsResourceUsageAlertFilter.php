<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * ThresholdsResourceUsageAlertFilter
 */
final class ThresholdsResourceUsageAlertFilter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Limit the scope of the alert to this customer ID
     */
    public ?\StripeSDK\DTOs\ThresholdsResourceUsageAlertFilter\CustomerDTO $customer;
    public \StripeSDK\Enums\ThresholdsResourceUsageAlertFilter\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThresholdsResourceUsageAlertFilter\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
