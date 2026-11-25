<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SepaDebitPayments;

/**
 * sepa_debit_payments_specs
 */
final class DebitPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public string $creditor_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor_id' => is_string($value) ? $this->creditor_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
