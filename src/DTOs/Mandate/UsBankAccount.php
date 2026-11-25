<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_us_bank_account
 */
final class UsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Mandate collection method
     */
    public \StripeSDK\Enums\Mandate\UsBankAccount\CollectionMethodEnum $collection_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\Mandate\UsBankAccount\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
