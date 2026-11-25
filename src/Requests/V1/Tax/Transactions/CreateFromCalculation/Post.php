<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Transactions\CreateFromCalculation;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'calculation',
        'reference',
    ];

    protected const array VALIDATION = [
        'calculation' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 500,
        ],
    ];

    /**
     * Tax Calculation ID to be used as input when creating the transaction.
     */
    public string $calculation {
        set {
            $this->assigning('calculation', $value);
            $this->calculation = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Tax\Transactions\CreateFromCalculation\Post\MetadataMapRequest $metadata;
    /**
     * The Unix timestamp representing when the tax liability is assumed or reduced, which determines the liability posting period and handling in tax liability reports. The timestamp must fall within the `tax_date` and the current time, unless the `tax_date` is scheduled in advance. Defaults to the current time.
     * Format: unix-time
     */
    public int $posted_at;
    /**
     * A custom order or sale identifier, such as 'myOrder_123'. Must be unique across all transactions, including reversals.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'calculation' => is_string($value) ? $this->calculation = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'posted_at' => is_int($value) ? $this->posted_at = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
