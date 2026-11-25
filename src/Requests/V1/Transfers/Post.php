<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Transfers;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'destination',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'source_type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A positive integer in cents (or local equivalent) representing how much to transfer.
     */
    public int $amount;
    /**
     * Three-letter [ISO code for currency](https://www.iso.org/iso-4217-currency-codes.html) in lowercase. Must be a [supported currency](https://docs.stripe.com/currencies).
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
     * The ID of a connected Stripe account. <a href="/docs/connect/separate-charges-and-transfers">See the Connect documentation</a> for details.
     */
    public string $destination;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Transfers\Post\MetadataMapRequest $metadata;
    /**
     * You can use this parameter to transfer funds from a charge before they are added to your available balance. A pending balance will transfer immediately but the funds will not become available until the original charge becomes available. [See the Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-availability) for details.
     */
    public string $source_transaction;
    /**
     * The source balance to use for this transfer. One of `bank_account`, `card`, or `fpx`. For most users, this will default to `card`.
     */
    public \StripeSDK\Enums\V1\Transfers\Post\SourceTypeEnum $source_type {
        set {
            $this->assigning('source_type', $value);
            $this->source_type = $value;
        }
    }
    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options) for details.
     */
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'source_transaction' => is_string($value) ? $this->source_transaction = $value : parent::assignMember($name, $value),
            'source_type' => is_string($value) ? $this->source_type = \StripeSDK\Enums\V1\Transfers\Post\SourceTypeEnum::from($value) : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
