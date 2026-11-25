<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Disputes;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'transaction' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The dispute amount in the card's currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). If not set, defaults to the full transaction amount.
     */
    public int $amount;
    /**
     * Evidence provided for the dispute.
     */
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\DisputesEvidenceRequest $evidence;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\MetadataMapRequest $metadata;
    /**
     * The ID of the issuing transaction to create a dispute for. For transaction on Treasury FinancialAccounts, use `treasury.received_debit`.
     */
    public string $transaction {
        set {
            $this->assigning('transaction', $value);
            $this->transaction = $value;
        }
    }
    /**
     * Params for disputes related to Treasury FinancialAccounts
     */
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\DisputesTreasuryRequest $treasury;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'transaction' => is_string($value) ? $this->transaction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
