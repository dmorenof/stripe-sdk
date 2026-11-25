<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * other
 */
final class OtherVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EvidenceOtherRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceOtherRequestVariant1\EvidenceOtherRequestVariant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\EvidenceOtherRequestVariant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\EvidenceOtherRequestVariant1\ProductTypeEnum $product_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product_type' => is_string($value) ? $this->product_type = \StripeSDK\Enums\EvidenceOtherRequestVariant1\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
