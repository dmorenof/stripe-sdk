<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Person;

/**
 * PersonAdditionalTOSAcceptances
 */
final class AdditionalTosAcceptances extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Details on the legal guardian's acceptance of the main Stripe service agreement.
     */
    public ?\StripeSDK\DTOs\Person\AdditionalTosAcceptance $account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => $value === null || $value instanceof \stdClass ? $this->account = $value === null ? null : new \StripeSDK\DTOs\Person\AdditionalTosAcceptance($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
