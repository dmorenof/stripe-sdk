<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * transfer_data_creation_params
 *
 * The parameters that you can use to automatically create a Transfer.
 * Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
 */
final class TransferDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

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
    public string $destination;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\TransferData\DataMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\TransferData\PaymentDataRequest $payment_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
