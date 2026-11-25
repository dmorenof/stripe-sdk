<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * transfer_data_params
 *
 * The account (if any) the payments will be attributed to for tax reporting, and where funds from each payment will be transferred to.
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
