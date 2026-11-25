<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\DebitReversals;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'received_debit',
    ];

    protected const array VALIDATION = [
        'received_debit' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Treasury\DebitReversals\Post\MetadataMapRequest $metadata;
    /**
     * The ReceivedDebit to reverse.
     */
    public string $received_debit {
        set {
            $this->assigning('received_debit', $value);
            $this->received_debit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'received_debit' => is_string($value) ? $this->received_debit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
