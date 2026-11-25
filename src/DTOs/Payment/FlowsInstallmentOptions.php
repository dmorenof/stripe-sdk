<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsInstallmentOptions
 */
final class FlowsInstallmentOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan $plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'plan' => $value instanceof \stdClass ? $this->plan = new \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
