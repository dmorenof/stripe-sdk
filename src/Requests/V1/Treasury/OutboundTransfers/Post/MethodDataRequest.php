<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post;

/**
 * payment_method_data
 *
 * Hash used to generate the PaymentMethod to be used for this OutboundTransfer. Exclusive with `destination_payment_method`.
 */
final class MethodDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public string $financial_account;
    public \StripeSDK\Enums\V1\Treasury\OutboundTransfers\Post\DestinationPaymentMethodData\DataTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Treasury\OutboundTransfers\Post\DestinationPaymentMethodData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
