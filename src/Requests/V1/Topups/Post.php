<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Topups;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 15,
        ],
    ];

    /**
     * A positive integer representing how much to transfer.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Topups\Post\TopupsMetadataRequest $metadata;
    /**
     * The ID of a PaymentMethod representing the payment method to be used for the top-up. A PaymentMethod of type `us_bank_account` can be used.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * Payment method-specific configuration for this top-up.
     */
    public \StripeSDK\Requests\V1\Topups\Post\MethodOptionsRequest $payment_method_options;
    /**
     * The ID of a source to transfer funds from. For most users, this should be left unspecified which will use the bank account that was set up in the dashboard for the specified currency. While testing, this can be a test bank token (see [Testing Top-ups](https://docs.stripe.com/connect/testing#testing-top-ups)).
     */
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    /**
     * Extra information about a top-up for the source's bank statement. Limited to 15 ASCII characters.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * A string that identifies this top-up as part of a group.
     */
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
