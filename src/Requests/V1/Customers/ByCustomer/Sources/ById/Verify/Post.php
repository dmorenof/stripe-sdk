<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Sources\ById\Verify;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Two positive integers, in *cents*, equal to the values of the microdeposits sent to the bank account.
     */
    public \StripeSDK\Collections\IntegerCollection $amounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->amounts = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
