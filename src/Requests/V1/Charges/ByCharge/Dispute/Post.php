<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\ByCharge\Dispute;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Evidence to upload, to respond to a dispute. Updating any field in the hash will submit all fields in the hash for review. The combined character count of all fields is limited to 150,000.
     */
    public \StripeSDK\Requests\V1\Charges\ByCharge\Dispute\Post\DisputeEvidenceRequest $evidence;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Charges\ByCharge\Dispute\Post\DisputeMetadataRequest $metadata;
    /**
     * Whether to immediately submit evidence to the bank. If `false`, evidence is staged on the dispute. Staged evidence is visible in the API and Dashboard, and can be submitted to the bank by making another request with this attribute set to `true` (the default).
     */
    public bool $submit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'submit' => is_bool($value) ? $this->submit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
