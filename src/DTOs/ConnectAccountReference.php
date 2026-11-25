<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * ConnectAccountReference
 */
final class ConnectAccountReference extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The connected account being referenced when `type` is `account`.
     */
    public \StripeSDK\DTOs\ConnectAccountReference\AccountDTO $account;
    /**
     * Type of the account referenced.
     */
    public \StripeSDK\Enums\ConnectAccountReference\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ConnectAccountReference\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
