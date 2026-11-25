<?php

declare(strict_types=1);

namespace StripeSDK\Requests\TransferDataRequest5Variant1;

/**
 * transfer_data_specs
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    public int $amount;
    public float $amount_percent;
    public string $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_percent' => is_float($value) ? $this->amount_percent = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
