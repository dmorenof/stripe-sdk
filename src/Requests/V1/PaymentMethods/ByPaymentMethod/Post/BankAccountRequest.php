<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post;

/**
 * update_param
 *
 * If this is an `us_bank_account` PaymentMethod, this hash contains details about the US bank account payment method.
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\UsBankAccount\HolderTypeEnum $account_holder_type;
    public \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\UsBankAccount\AccountTypeEnum $account_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_type' => is_string($value) ? $this->account_holder_type = \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\UsBankAccount\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post\UsBankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
