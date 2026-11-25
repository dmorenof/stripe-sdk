<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountPaypaySiteRestrictedSettings
 */
final class PaypaySiteRestrictedSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'payment_flow_file' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * File explaining the payment flow for your business.
     */
    public ?string $payment_flow_file {
        set {
            $this->assigning('payment_flow_file', $value);
            $this->payment_flow_file = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_flow_file' => $value === null || is_string($value) ? $this->payment_flow_file = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
