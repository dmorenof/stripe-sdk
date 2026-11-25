<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings;

/**
 * bacs_debit_payments_specs
 */
final class DebitPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public string $display_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
