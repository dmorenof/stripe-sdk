<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Post\Rendering;

/**
 * rendering_pdf_param
 */
final class RenderingPdfRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Rendering\Pdf\PageSizeEnum $page_size;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'page_size' => is_string($value) ? $this->page_size = \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Rendering\Pdf\PageSizeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
