<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingClocksResourceStatusDetailsAdvancingStatusDetails
 */
final class ClocksResourceStatusDetailsAdvancingStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'target_frozen_time',
    ];

    /**
     * The `frozen_time` that the Test Clock is advancing towards.
     * Format: unix-time
     */
    public int $target_frozen_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'target_frozen_time' => is_int($value) ? $this->target_frozen_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
