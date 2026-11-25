<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Transfer;

/**
 * transfer_data
 */
final class Data extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount transferred to the destination account. This transfer will occur automatically after the payment succeeds. If no amount is specified, by default the entire payment amount is transferred to the destination account.
     *  The amount must be less than or equal to the [amount](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-amount), and must be a positive integer
     *  representing how much to transfer in the smallest currency unit (e.g., 100 cents to charge $1.00).
     */
    public int $amount;
    /**
     * An arbitrary string attached to the transfer. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The account (if any) that the payment is attributed to for tax reporting, and where funds from the payment are transferred to after payment success.
     */
    public \StripeSDK\DTOs\Transfer\Data\DestinationDTO $destination;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Transfer\Data\MetadataMap $metadata;
    public \StripeSDK\DTOs\Payment\Data $payment_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'payment_data' => $value instanceof \stdClass ? $this->payment_data = new \StripeSDK\DTOs\Payment\Data($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
