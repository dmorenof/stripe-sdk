<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\FundingInstructions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bank_transfer',
        'currency',
        'funding_type',
    ];

    /**
     * Additional parameters for `bank_transfer` funding types
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransferRequest $bank_transfer;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The `funding_type` to get the instructions for.
     */
    public \StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post\FundingTypeEnum $funding_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'funding_type' => is_string($value) ? $this->funding_type = \StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post\FundingTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
