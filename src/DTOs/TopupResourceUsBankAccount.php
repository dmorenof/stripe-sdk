<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TopupResourceUSBankAccount
 */
final class TopupResourceUsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'network',
    ];

    /**
     * The US bank transfer network used for this top-up. The default is `ach`.
     */
    public \StripeSDK\Enums\TopupResourceUsBankAccount\NetworkEnum $network;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\TopupResourceUsBankAccount\NetworkEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
