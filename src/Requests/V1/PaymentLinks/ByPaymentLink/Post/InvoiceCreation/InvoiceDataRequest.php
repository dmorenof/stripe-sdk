<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation;

/**
 * invoice_settings_params
 */
final class InvoiceDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 1500,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData\TaxIdsRequest $account_tax_ids;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData\CustomFieldsRequest $custom_fields;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData\DataIssuerRequest $issuer;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData\DataMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData\RenderingOptionsRequest $rendering_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
