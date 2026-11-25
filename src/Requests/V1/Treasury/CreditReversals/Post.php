<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\CreditReversals;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'received_credit',
    ];

    protected const array VALIDATION = [
        'received_credit' => [
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
    public \StripeSDK\Requests\V1\Treasury\CreditReversals\Post\MetadataMapRequest $metadata;
    /**
     * The ReceivedCredit to reverse.
     */
    public string $received_credit {
        set {
            $this->assigning('received_credit', $value);
            $this->received_credit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'received_credit' => is_string($value) ? $this->received_credit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
