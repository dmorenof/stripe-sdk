<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Post;

/**
 * rendering_param
 *
 * The rendering-related settings that control how invoices render in customer-facing interfaces such as the PDF or hosted invoice page.
 */
final class ByInvoiceRenderingRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'template' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Rendering\TaxDisplayEnum $amount_tax_display;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\Rendering\RenderingPdfRequest $pdf;
    public string $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\Rendering\TemplateVersionRequest $template_version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_tax_display' => is_string($value) ? $this->amount_tax_display = \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Rendering\TaxDisplayEnum::from($value) : parent::assignMember($name, $value),
            'template' => is_string($value) ? $this->template = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
