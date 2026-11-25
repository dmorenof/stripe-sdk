<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EvidenceOtherRequest2Variant1;

/**
 * other
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EvidenceOtherRequest2Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceOtherRequest2Variant1\EvidenceOtherRequest2Variant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\EvidenceOtherRequest2Variant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\EvidenceOtherRequest2Variant1\ProductTypeEnum $product_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product_type' => is_string($value) ? $this->product_type = \StripeSDK\Enums\EvidenceOtherRequest2Variant1\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
