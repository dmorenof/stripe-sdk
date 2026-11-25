<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1Item\Pause;

/**
 * pause_settings_params
 */
final class PauseSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1Item\Pause\Settings\BillForRequest $bill_for;
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\InvoicingBehaviorEnum $invoicing_behavior;
    public \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\SettingsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoicing_behavior' => is_string($value) ? $this->invoicing_behavior = \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\InvoicingBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\SettingsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
