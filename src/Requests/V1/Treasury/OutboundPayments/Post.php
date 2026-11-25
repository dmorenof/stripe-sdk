<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundPayments;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'financial_account',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'destination_payment_method' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount (in cents) to be transferred.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * ID of the customer to whom the OutboundPayment is sent. Must match the Customer attached to the `destination_payment_method` passed in.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
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
     * The PaymentMethod to use as the payment instrument for the OutboundPayment. Exclusive with `destination_payment_method_data`.
     */
    public string $destination_payment_method {
        set {
            $this->assigning('destination_payment_method', $value);
            $this->destination_payment_method = $value;
        }
    }
    /**
     * Hash used to generate the PaymentMethod to be used for this OutboundPayment. Exclusive with `destination_payment_method`.
     */
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\MethodDataRequest $destination_payment_method_data;
    /**
     * Payment method-specific configuration for this OutboundPayment.
     */
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\MethodOptionsRequest $destination_payment_method_options;
    /**
     * End user details.
     */
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\UserDetailsRequest $end_user_details;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The FinancialAccount to pull funds from.
     */
    public string $financial_account;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Treasury\OutboundPayments\Post\MetadataMapRequest $metadata;
    /**
     * The description that appears on the receiving end for this OutboundPayment (for example, bank statement for external bank transfer). Maximum 10 characters for `ach` payments, 140 characters for `us_domestic_wire` payments, or 500 characters for `stripe` network transfers. Can only include -#.$&*, spaces, and alphanumeric characters. The default value is "payment".
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination_payment_method' => is_string($value) ? $this->destination_payment_method = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
