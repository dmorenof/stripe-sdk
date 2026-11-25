<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor;

/**
 * pause_settings_bill_for_outstanding_usage_through_params
 */
final class UsageThroughRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor\OutstandingUsageThrough\ThroughTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor\OutstandingUsageThrough\ThroughTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
