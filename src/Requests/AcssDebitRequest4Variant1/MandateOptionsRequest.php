<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AcssDebitRequest4Variant1;

/**
 * mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\AcssDebitRequest4Variant1\MandateOptions\TransactionTypeEnum $transaction_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'transaction_type' => is_string($value) ? $this->transaction_type = \StripeSDK\Enums\AcssDebitRequest4Variant1\MandateOptions\TransactionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
