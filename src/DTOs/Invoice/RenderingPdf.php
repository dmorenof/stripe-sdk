<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * Invoice Rendering Pdf Resource
 */
final class RenderingPdf extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Page size of invoice pdf. Options include a4, letter, and auto. If set to auto, page size will be switched to a4 or letter based on customer locale.
     */
    public ?\StripeSDK\Enums\Invoice\RenderingPdf\PageSizeEnum $page_size;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'page_size' => $value === null || is_string($value) ? $this->page_size = $value === null ? null : \StripeSDK\Enums\Invoice\RenderingPdf\PageSizeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
