<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalResourceScheduleUpdateAtPeriodEndCondition
 */
final class ResourceScheduleUpdateAtPeriodEndCondition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The type of condition.
     */
    public \StripeSDK\Enums\Portal\ResourceScheduleUpdateAtPeriodEndCondition\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Portal\ResourceScheduleUpdateAtPeriodEndCondition\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
