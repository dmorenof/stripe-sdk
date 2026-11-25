<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasurySharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails
 */
final class SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_details',
        'type',
    ];

    protected const array VALIDATION = [
        'issuing_card' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Set when `type` is `balance`.
     */
    public \StripeSDK\Enums\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails\BalanceEnum $balance;
    public \StripeSDK\DTOs\Treasury\SharedResourceBillingDetails $billing_details;
    public \StripeSDK\DTOs\ReceivedPaymentMethodDetailsFinancialAccount $financial_account;
    /**
     * Set when `type` is `issuing_card`. This is an [Issuing Card](https://docs.stripe.com/api#issuing_cards) ID.
     */
    public string $issuing_card {
        set {
            $this->assigning('issuing_card', $value);
            $this->issuing_card = $value;
        }
    }
    /**
     * Polymorphic type matching the originating money movement's source. This can be an external account, a Stripe balance, or a FinancialAccount.
     */
    public \StripeSDK\Enums\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails\TypeEnum $type;
    public \StripeSDK\DTOs\Treasury\SharedResourceInitiatingPaymentMethodDetailsUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance' => is_string($value) ? $this->balance = \StripeSDK\Enums\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails\BalanceEnum::from($value) : parent::assignMember($name, $value),
            'billing_details' => $value instanceof \stdClass ? $this->billing_details = new \StripeSDK\DTOs\Treasury\SharedResourceBillingDetails($value) : parent::assignMember($name, $value),
            'financial_account' => $value instanceof \stdClass ? $this->financial_account = new \StripeSDK\DTOs\ReceivedPaymentMethodDetailsFinancialAccount($value) : parent::assignMember($name, $value),
            'issuing_card' => is_string($value) ? $this->issuing_card = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\SharedResourceInitiatingPaymentMethodDetailsInitiatingPaymentMethodDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Treasury\SharedResourceInitiatingPaymentMethodDetailsUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
