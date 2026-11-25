<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * customer_acceptance
 */
final class Acceptance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The time that the customer accepts the mandate.
     * Format: unix-time
     */
    public ?int $accepted_at;
    public \StripeSDK\DTOs\OfflineAcceptance $offline;
    public \StripeSDK\DTOs\OnlineAcceptance $online;
    /**
     * The mandate includes the type of customer acceptance information, such as: `online` or `offline`.
     */
    public \StripeSDK\Enums\Customer\Acceptance\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accepted_at' => $value === null || is_int($value) ? $this->accepted_at = $value : parent::assignMember($name, $value),
            'online' => $value instanceof \stdClass ? $this->online = new \StripeSDK\DTOs\OnlineAcceptance($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Customer\Acceptance\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
