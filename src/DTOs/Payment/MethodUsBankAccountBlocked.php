<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_us_bank_account_blocked
 */
final class MethodUsBankAccountBlocked extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ACH network code that resulted in this block.
     */
    public ?\StripeSDK\Enums\Payment\MethodUsBankAccountBlocked\NetworkCodeEnum $network_code;
    /**
     * The reason why this PaymentMethod's fingerprint has been blocked
     */
    public ?\StripeSDK\Enums\Payment\MethodUsBankAccountBlocked\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network_code' => $value === null || is_string($value) ? $this->network_code = $value === null ? null : \StripeSDK\Enums\Payment\MethodUsBankAccountBlocked\NetworkCodeEnum::from($value) : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value === null ? null : \StripeSDK\Enums\Payment\MethodUsBankAccountBlocked\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
