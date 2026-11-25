<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountCardIssuingSettings
 */
final class CardIssuingSettings extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Card\IssuingAccountTermsOfService $tos_acceptance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tos_acceptance' => $value instanceof \stdClass ? $this->tos_acceptance = new \StripeSDK\DTOs\Card\IssuingAccountTermsOfService($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
