<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments;

/**
 * installment_plan
 */
final class InstallmentsPlanRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public int $count;
    public \StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments\Plan\PlanIntervalEnum $interval;
    public \StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments\Plan\PlanTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments\Plan\PlanIntervalEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments\Plan\PlanTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
