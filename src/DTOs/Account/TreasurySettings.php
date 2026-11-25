<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountTreasurySettings
 */
final class TreasurySettings extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Account\TermsOfService $tos_acceptance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tos_acceptance' => $value instanceof \stdClass ? $this->tos_acceptance = new \StripeSDK\DTOs\Account\TermsOfService($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
