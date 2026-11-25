<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem;

/**
 * schedule_phase_invoice_settings
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\InvoiceSettings\TaxIdsRequest $account_tax_ids;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\InvoiceSettings\CustomFieldsRequest $custom_fields;
    public int $days_until_due;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\InvoiceSettings\SettingsDescriptionRequest $description;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\InvoiceSettings\SettingsFooterRequest $footer;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\InvoiceSettings\SettingsIssuerRequest $issuer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'days_until_due' => is_int($value) ? $this->days_until_due = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
