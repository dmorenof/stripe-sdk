<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\RefundPayment;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'charge' => [
            'maxLength' => 5000,
        ],
        'payment_intent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A positive integer in __cents__ representing how much of this charge to refund.
     */
    public int $amount;
    /**
     * ID of the Charge to refund.
     */
    public string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\RefundPayment\Post\MetadataMapRequest $metadata;
    /**
     * ID of the PaymentIntent to refund.
     */
    public string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    /**
     * Boolean indicating whether the application fee should be refunded when refunding this charge. If a full charge refund is given, the full application fee will be refunded. Otherwise, the application fee will be refunded in an amount proportional to the amount of the charge refunded. An application fee can be refunded only by the application that created the charge.
     */
    public bool $refund_application_fee;
    /**
     * Configuration overrides for this refund, such as customer cancellation settings.
     */
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\RefundPayment\Post\PaymentConfigRequest $refund_payment_config;
    /**
     * Boolean indicating whether the transfer should be reversed when refunding this charge. The transfer will be reversed proportionally to the amount being refunded (either the entire or partial amount). A transfer can be reversed only by the application that created the charge.
     */
    public bool $reverse_transfer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'charge' => is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_intent' => is_string($value) ? $this->payment_intent = $value : parent::assignMember($name, $value),
            'refund_application_fee' => is_bool($value) ? $this->refund_application_fee = $value : parent::assignMember($name, $value),
            'reverse_transfer' => is_bool($value) ? $this->reverse_transfer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
