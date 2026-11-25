<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * InboundTransfers
 */
final class InboundTransfers extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_details',
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\SharedResourceBillingDetails $billing_details;
    /**
     * The type of the payment method used in the InboundTransfer.
     */
    public \StripeSDK\Enums\InboundTransfers\TypeEnum $type;
    public \StripeSDK\DTOs\InboundTransfersPaymentMethodDetailsUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_details' => $value instanceof \stdClass ? $this->billing_details = new \StripeSDK\DTOs\Treasury\SharedResourceBillingDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InboundTransfers\TypeEnum::from($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\InboundTransfersPaymentMethodDetailsUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
