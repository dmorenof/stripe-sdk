<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause;

/**
 * pause_settings_params
 */
final class PauseSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\BillForRequest $bill_for;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\InvoicingBehaviorEnum $invoicing_behavior;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\SettingsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoicing_behavior' => is_string($value) ? $this->invoicing_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\InvoicingBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\SettingsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
