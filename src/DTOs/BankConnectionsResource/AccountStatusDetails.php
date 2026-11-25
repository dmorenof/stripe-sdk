<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceAccountStatusDetails
 */
final class AccountStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails $active;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => $value instanceof \stdClass ? $this->active = new \StripeSDK\DTOs\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
