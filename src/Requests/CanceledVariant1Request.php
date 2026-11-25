<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * canceled
 */
final class CanceledVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\CanceledAtRequest $canceled_at;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\PolicyProvidedRequest $cancellation_policy_provided;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\CancellationReasonRequest $cancellation_reason;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\ExpectedAtRequest $expected_at;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\EvidenceCanceledRequestVariant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\EvidenceCanceledRequestVariant1\ProductTypeEnum $product_type;
    public \StripeSDK\Enums\EvidenceCanceledRequestVariant1\ReturnStatusEnum $return_status;
    public \StripeSDK\Requests\EvidenceCanceledRequestVariant1\ReturnedAtRequest $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product_type' => is_string($value) ? $this->product_type = \StripeSDK\Enums\EvidenceCanceledRequestVariant1\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            'return_status' => is_string($value) ? $this->return_status = \StripeSDK\Enums\EvidenceCanceledRequestVariant1\ReturnStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
