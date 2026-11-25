<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post;

/**
 * transfer_data_specs
 *
 * If specified, the funds from the subscription's invoices will be transferred to the destination and the ID of the resulting transfers will be found on the resulting charges.
 */
final class TransferDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    public float $amount_percent;
    public string $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_percent' => is_float($value) ? $this->amount_percent = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
