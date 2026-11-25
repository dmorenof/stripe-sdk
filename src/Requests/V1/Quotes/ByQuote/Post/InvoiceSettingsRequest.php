<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote\Post;

/**
 * quote_param
 *
 * All invoices will be billed using the specified settings.
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\InvoiceSettings\CustomFieldsRequest $custom_fields;
    public int $days_until_due;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\InvoiceSettings\SettingsDescriptionRequest $description;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\InvoiceSettings\SettingsFooterRequest $footer;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\InvoiceSettings\SettingsIssuerRequest $issuer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'days_until_due' => is_int($value) ? $this->days_until_due = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
