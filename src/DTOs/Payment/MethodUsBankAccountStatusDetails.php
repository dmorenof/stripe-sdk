<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_us_bank_account_status_details
 */
final class MethodUsBankAccountStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\MethodUsBankAccountBlocked $blocked;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blocked' => $value instanceof \stdClass ? $this->blocked = new \StripeSDK\DTOs\Payment\MethodUsBankAccountBlocked($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
