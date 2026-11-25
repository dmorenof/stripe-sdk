<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Refunds;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'charge' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'payment_intent' => [
            'maxLength' => 5000,
        ],
        'reason' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    /**
     * The identifier of the charge to refund.
     */
    public string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Customer whose customer balance to refund from.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * For payment methods without native refund support (e.g., Konbini, PromptPay), use this email from the customer to receive refund instructions.
     */
    public string $instructions_email;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Refunds\Post\RefundsMetadataRequest $metadata;
    /**
     * Origin of the refund
     */
    public \StripeSDK\Enums\V1\Refunds\Post\RefundsOriginEnum $origin;
    /**
     * The identifier of the PaymentIntent to refund.
     */
    public string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    /**
     * String indicating the reason for the refund. If set, possible values are `duplicate`, `fraudulent`, and `requested_by_customer`. If you believe the charge to be fraudulent, specifying `fraudulent` as the reason will add the associated card and email to your [block lists](https://docs.stripe.com/radar/lists), and will also help us improve our fraud detection algorithms.
     */
    public \StripeSDK\Enums\V1\Refunds\Post\RefundsReasonEnum $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }
    /**
     * Boolean indicating whether the application fee should be refunded when refunding this charge. If a full charge refund is given, the full application fee will be refunded. Otherwise, the application fee will be refunded in an amount proportional to the amount of the charge refunded. An application fee can be refunded only by the application that created the charge.
     */
    public bool $refund_application_fee;
    /**
     * Boolean indicating whether the transfer should be reversed when refunding this charge. The transfer will be reversed proportionally to the amount being refunded (either the entire or partial amount).<br><br>A transfer can be reversed only by the application that created the charge.
     */
    public bool $reverse_transfer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'charge' => is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'instructions_email' => is_string($value) ? $this->instructions_email = $value : parent::assignMember($name, $value),
            'origin' => is_string($value) ? $this->origin = \StripeSDK\Enums\V1\Refunds\Post\RefundsOriginEnum::from($value) : parent::assignMember($name, $value),
            'payment_intent' => is_string($value) ? $this->payment_intent = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\V1\Refunds\Post\RefundsReasonEnum::from($value) : parent::assignMember($name, $value),
            'refund_application_fee' => is_bool($value) ? $this->refund_application_fee = $value : parent::assignMember($name, $value),
            'reverse_transfer' => is_bool($value) ? $this->reverse_transfer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
