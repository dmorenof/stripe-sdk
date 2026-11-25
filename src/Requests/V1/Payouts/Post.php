<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Payouts;

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
        'method' => [
            'maxLength' => 5000,
        ],
        'source_type' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * A positive integer in cents representing how much to pay out.
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
     * The ID of a bank account or a card to send the payout to. If you don't provide a destination, we use the default external account for the specified currency.
     */
    public string $destination;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Payouts\Post\MetadataMapRequest $metadata;
    /**
     * The method used to send this payout, which is `standard` or `instant`. We support `instant` for payouts to debit cards and bank accounts in certain countries. Learn more about [bank support for Instant Payouts](https://stripe.com/docs/payouts/instant-payouts-banks).
     */
    public \StripeSDK\Enums\V1\Payouts\Post\PayoutsMethodEnum $method {
        set {
            $this->assigning('method', $value);
            $this->method = $value;
        }
    }
    /**
     * The ID of a v2 FinancialAccount to send funds to.
     */
    public string $payout_method;
    /**
     * The balance type of your Stripe balance to draw this payout from. Balances for different payment sources are kept separately. You can find the amounts with the Balances API. One of `bank_account`, `card`, or `fpx`.
     */
    public \StripeSDK\Enums\V1\Payouts\Post\SourceTypeEnum $source_type {
        set {
            $this->assigning('source_type', $value);
            $this->source_type = $value;
        }
    }
    /**
     * A string that displays on the recipient's bank or card statement (up to 22 characters). A `statement_descriptor` that's longer than 22 characters return an error. Most banks truncate this information and display it inconsistently. Some banks might not display it at all. For US ACH payouts, this maps to the ACH Company Entry Description field, which the NACHA standard limits to 10 characters. Stripe truncates descriptors longer than 10 characters for US ACH payouts.
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
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = \StripeSDK\Enums\V1\Payouts\Post\PayoutsMethodEnum::from($value) : parent::assignMember($name, $value),
            'payout_method' => is_string($value) ? $this->payout_method = $value : parent::assignMember($name, $value),
            'source_type' => is_string($value) ? $this->source_type = \StripeSDK\Enums\V1\Payouts\Post\SourceTypeEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
