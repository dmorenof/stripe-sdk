<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post;

/**
 * transfer_data_capture_params
 *
 * The parameters that you can use to automatically create a transfer after the payment
 * is captured. Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
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
