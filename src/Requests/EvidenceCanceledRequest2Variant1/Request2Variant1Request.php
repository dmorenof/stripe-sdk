<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EvidenceCanceledRequest2Variant1;

/**
 * canceled
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\CanceledAtRequest $canceled_at;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\PolicyProvidedRequest $cancellation_policy_provided;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\CancellationReasonRequest $cancellation_reason;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\ExpectedAtRequest $expected_at;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\EvidenceCanceledRequest2Variant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\EvidenceCanceledRequest2Variant1\ProductTypeEnum $product_type;
    public \StripeSDK\Enums\EvidenceCanceledRequest2Variant1\ReturnStatusEnum $return_status;
    public \StripeSDK\Requests\EvidenceCanceledRequest2Variant1\ReturnedAtRequest $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product_type' => is_string($value) ? $this->product_type = \StripeSDK\Enums\EvidenceCanceledRequest2Variant1\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            'return_status' => is_string($value) ? $this->return_status = \StripeSDK\Enums\EvidenceCanceledRequest2Variant1\ReturnStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
