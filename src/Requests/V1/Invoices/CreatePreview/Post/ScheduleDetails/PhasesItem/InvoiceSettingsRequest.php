<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem;

/**
 * invoice_settings
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\InvoiceSettings\TaxIdsRequest $account_tax_ids;
    public int $days_until_due;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\InvoiceSettings\SettingsIssuerRequest $issuer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'days_until_due' => is_int($value) ? $this->days_until_due = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
