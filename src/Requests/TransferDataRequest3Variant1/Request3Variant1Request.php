<?php

declare(strict_types=1);

namespace StripeSDK\Requests\TransferDataRequest3Variant1;

/**
 * transfer_data_update_params
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    public \StripeSDK\Requests\TransferDataRequest3Variant1\TransferDataRequest3Variant1AmountRequest $amount;
    public string $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
