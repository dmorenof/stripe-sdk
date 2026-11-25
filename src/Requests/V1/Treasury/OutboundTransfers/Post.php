<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\OutboundTransfers;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'financial_account',
    ];

    protected const array VALIDATION = [
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
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The PaymentMethod to use as the payment instrument for the OutboundTransfer.
     */
    public string $destination_payment_method {
        set {
            $this->assigning('destination_payment_method', $value);
            $this->destination_payment_method = $value;
        }
    }
    /**
     * Hash used to generate the PaymentMethod to be used for this OutboundTransfer. Exclusive with `destination_payment_method`.
     */
    public \StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post\MethodDataRequest $destination_payment_method_data;
    /**
     * Hash describing payment method configuration details.
     */
    public \StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post\MethodOptionsRequest $destination_payment_method_options;
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
    public \StripeSDK\Requests\V1\Treasury\OutboundTransfers\Post\MetadataMapRequest $metadata;
    /**
     * Statement descriptor to be shown on the receiving end of an OutboundTransfer. Maximum 10 characters for `ach` transfers or 140 characters for `us_domestic_wire` transfers. The default value is "transfer". Can only include -#.$&*, spaces, and alphanumeric characters.
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
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination_payment_method' => is_string($value) ? $this->destination_payment_method = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
