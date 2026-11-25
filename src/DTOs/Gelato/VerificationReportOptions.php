<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoVerificationReportOptions
 */
final class VerificationReportOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Gelato\ReportDocumentOptions $document;
    public \StripeSDK\DTOs\Gelato\ReportIdNumberOptions $id_number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document' => $value instanceof \stdClass ? $this->document = new \StripeSDK\DTOs\Gelato\ReportDocumentOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
