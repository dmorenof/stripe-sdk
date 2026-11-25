<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor;

/**
 * pause_settings_bill_for_unused_time_from_params
 */
final class TimeFromRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor\UnusedTimeFrom\FromTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor\UnusedTimeFrom\FromTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
