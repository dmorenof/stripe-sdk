<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceInvoiceRendering
 */
final class InvoiceRendering extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'amount_tax_display' => [
            'maxLength' => 5000,
        ],
        'template' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * How line-item prices and amounts will be displayed with respect to tax on invoice PDFs.
     */
    public ?string $amount_tax_display {
        set {
            $this->assigning('amount_tax_display', $value);
            $this->amount_tax_display = $value;
        }
    }
    /**
     * Invoice pdf rendering options
     */
    public ?\StripeSDK\DTOs\Invoice\RenderingPdf $pdf;
    /**
     * ID of the rendering template that the invoice is formatted by.
     */
    public ?string $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }
    /**
     * Version of the rendering template that the invoice is using.
     */
    public ?int $template_version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_tax_display' => $value === null || is_string($value) ? $this->amount_tax_display = $value : parent::assignMember($name, $value),
            'pdf' => $value === null || $value instanceof \stdClass ? $this->pdf = $value === null ? null : new \StripeSDK\DTOs\Invoice\RenderingPdf($value) : parent::assignMember($name, $value),
            'template' => $value === null || is_string($value) ? $this->template = $value : parent::assignMember($name, $value),
            'template_version' => $value === null || is_int($value) ? $this->template_version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
