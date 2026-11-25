<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post;

/**
 * transfer_data_update_params
 *
 * Use this parameter to automatically create a Transfer when the payment succeeds. Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
 */
final class TransferDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\TransferData\DataMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\TransferData\PaymentDataRequest $payment_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
