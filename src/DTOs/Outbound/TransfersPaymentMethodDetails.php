<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Outbound;

/**
 * OutboundTransfersPaymentMethodDetails
 */
final class TransfersPaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_details',
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\SharedResourceBillingDetails $billing_details;
    public \StripeSDK\DTOs\Outbound\TransfersPaymentMethodDetailsFinancialAccount $financial_account;
    /**
     * The type of the payment method used in the OutboundTransfer.
     */
    public \StripeSDK\Enums\Outbound\TransfersPaymentMethodDetails\TypeEnum $type;
    public \StripeSDK\DTOs\Outbound\TransfersPaymentMethodDetailsUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_details' => $value instanceof \stdClass ? $this->billing_details = new \StripeSDK\DTOs\Treasury\SharedResourceBillingDetails($value) : parent::assignMember($name, $value),
            'financial_account' => $value instanceof \stdClass ? $this->financial_account = new \StripeSDK\DTOs\Outbound\TransfersPaymentMethodDetailsFinancialAccount($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Outbound\TransfersPaymentMethodDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Outbound\TransfersPaymentMethodDetailsUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
