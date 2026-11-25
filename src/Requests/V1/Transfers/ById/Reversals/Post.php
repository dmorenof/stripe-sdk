<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Transfers\ById\Reversals;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A positive integer in cents (or local equivalent) representing how much of this transfer to reverse. Can only reverse up to the unreversed amount remaining of the transfer. Partial transfer reversals are only allowed for transfers to Stripe Accounts. Defaults to the entire transfer amount.
     */
    public int $amount;
    /**
     * An arbitrary string which you can attach to a reversal object. This will be unset if you POST an empty value.
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
    public \StripeSDK\Requests\V1\Transfers\ById\Reversals\Post\ReversalsMetadataRequest $metadata;
    /**
     * Boolean indicating whether the application fee should be refunded when reversing this transfer. If a full transfer reversal is given, the full application fee will be refunded. Otherwise, the application fee will be refunded with an amount proportional to the amount of the transfer reversed.
     */
    public bool $refund_application_fee;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'refund_application_fee' => is_bool($value) ? $this->refund_application_fee = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
