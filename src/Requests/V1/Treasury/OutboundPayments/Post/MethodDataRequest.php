<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundPayments\Post;

/**
 * payment_method_data
 *
 * Hash used to generate the PaymentMethod to be used for this OutboundPayment. Exclusive with `destination_payment_method`.
 */
final class MethodDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\BillingDetailsRequest $billing_details;
    public string $financial_account;
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\MetadataMapRequest $metadata;
    public \StripeSDK\Enums\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\DataTypeEnum $type;
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\BankAccountRequest $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
