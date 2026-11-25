<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Transactions\CreateReversal;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mode',
        'original_transaction',
        'reference',
    ];

    protected const array VALIDATION = [
        'original_transaction' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 500,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A flat amount to reverse across the entire transaction, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units) in negative. This value represents the total amount to refund from the transaction, including taxes.
     */
    public int $flat_amount;
    /**
     * The line item amounts to reverse.
     */
    public \StripeSDK\Collections\V1\Tax\Transactions\CreateReversal\Post\LineItemsCollection $line_items;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post\MetadataMapRequest $metadata;
    /**
     * If `partial`, the provided line item or shipping cost amounts are reversed. If `full`, the original transaction is fully reversed.
     */
    public \StripeSDK\Enums\V1\Tax\Transactions\CreateReversal\Post\CreateReversalModeEnum $mode;
    /**
     * The ID of the Transaction to partially or fully reverse.
     */
    public string $original_transaction {
        set {
            $this->assigning('original_transaction', $value);
            $this->original_transaction = $value;
        }
    }
    /**
     * A custom identifier for this reversal, such as `myOrder_123-refund_1`, which must be unique across all transactions. The reference helps identify this reversal transaction in exported [tax reports](https://docs.stripe.com/tax/reports).
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * The shipping cost to reverse.
     */
    public \StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post\ShippingCostRequest $shipping_cost;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'flat_amount' => is_int($value) ? $this->flat_amount = $value : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\V1\Tax\Transactions\CreateReversal\Post\CreateReversalModeEnum::from($value) : parent::assignMember($name, $value),
            'original_transaction' => is_string($value) ? $this->original_transaction = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
