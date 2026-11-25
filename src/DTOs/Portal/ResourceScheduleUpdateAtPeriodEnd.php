<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalResourceScheduleUpdateAtPeriodEnd
 */
final class ResourceScheduleUpdateAtPeriodEnd extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'conditions',
    ];

    /**
     * List of conditions. When any condition is true, an update will be scheduled at the end of the current period.
     */
    public \StripeSDK\Collections\Portal\ResourceScheduleUpdateAtPeriodEnd\ConditionsCollection $conditions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conditions = new \StripeSDK\Collections\Portal\ResourceScheduleUpdateAtPeriodEnd\ConditionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Portal\ResourceScheduleUpdateAtPeriodEndCondition::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
