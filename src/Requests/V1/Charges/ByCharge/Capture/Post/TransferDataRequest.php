<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\ByCharge\Capture\Post;

/**
 * transfer_data_specs
 *
 * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://docs.stripe.com/connect/destination-charges) for details.
 */
final class TransferDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
