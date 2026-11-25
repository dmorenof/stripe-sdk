<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountUnificationAccountControllerStripeDashboard
 */
final class UnificationAccountControllerStripeDashboard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * A value indicating the Stripe dashboard this account has access to independent of the Connect application.
     */
    public \StripeSDK\Enums\Account\UnificationAccountControllerStripeDashboard\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Account\UnificationAccountControllerStripeDashboard\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
