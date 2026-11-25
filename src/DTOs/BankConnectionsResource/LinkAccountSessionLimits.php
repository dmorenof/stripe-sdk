<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceLinkAccountSessionLimits
 */
final class LinkAccountSessionLimits extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accounts',
    ];

    /**
     * The number of accounts that can be linked in this Session.
     */
    public int $accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accounts' => is_int($value) ? $this->accounts = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
