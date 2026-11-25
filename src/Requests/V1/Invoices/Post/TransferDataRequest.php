<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post;

/**
 * transfer_data_specs
 *
 * If specified, the funds from the invoice will be transferred to the destination and the ID of the resulting transfer will be found on the invoice's charge.
 */
final class TransferDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    public int $amount;
    public string $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
