<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_us_bank_account_mandate_options
 */
final class MethodOptionsUsBankAccountMandateOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Mandate collection method
     */
    public \StripeSDK\Enums\Payment\MethodOptionsUsBankAccountMandateOptions\CollectionMethodEnum $collection_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\Payment\MethodOptionsUsBankAccountMandateOptions\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
