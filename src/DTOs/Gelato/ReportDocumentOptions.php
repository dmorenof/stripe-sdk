<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoReportDocumentOptions
 */
final class ReportDocumentOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array of strings of allowed identity document types. If the provided identity document isn’t one of the allowed types, the verification check will fail with a document_type_not_allowed error code.
     */
    public \StripeSDK\Collections\Gelato\ReportDocumentOptions\AllowedTypesCollection $allowed_types;
    /**
     * Collect an ID number and perform an [ID number check](https://docs.stripe.com/identity/verification-checks?type=id-number) with the document’s extracted name and date of birth.
     */
    public bool $require_id_number;
    /**
     * Disable image uploads, identity document images have to be captured using the device’s camera.
     */
    public bool $require_live_capture;
    /**
     * Capture a face image and perform a [selfie check](https://docs.stripe.com/identity/verification-checks?type=selfie) comparing a photo ID and a picture of your user’s face. [Learn more](https://docs.stripe.com/identity/selfie).
     */
    public bool $require_matching_selfie;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'require_id_number' => is_bool($value) ? $this->require_id_number = $value : parent::assignMember($name, $value),
            'require_live_capture' => is_bool($value) ? $this->require_live_capture = $value : parent::assignMember($name, $value),
            'require_matching_selfie' => is_bool($value) ? $this->require_matching_selfie = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
