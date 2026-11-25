<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\FileLinks;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
    ];

    protected const array VALIDATION = [
        'file' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The link isn't usable after this future timestamp.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * The ID of the file. The file's `purpose` must be one of the following: `business_icon`, `business_logo`, `customer_signature`, `dispute_evidence`, `finance_report_run`, `financial_account_statement`, `identity_document_downloadable`, `issuing_regulatory_reporting`, `pci_document`, `selfie`, `sigma_scheduled_query`, `tax_document_user_upload`, `terminal_android_apk`, or `terminal_reader_splashscreen`.
     */
    public string $file {
        set {
            $this->assigning('file', $value);
            $this->file = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\FileLinks\Post\FileLinksMetadataRequest $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'file' => is_string($value) ? $this->file = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
