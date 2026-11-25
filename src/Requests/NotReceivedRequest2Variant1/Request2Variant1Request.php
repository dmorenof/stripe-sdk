<?php

declare(strict_types=1);

namespace StripeSDK\Requests\NotReceivedRequest2Variant1;

/**
 * not_received
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\NotReceivedRequest2Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\NotReceivedRequest2Variant1\ExpectedAtRequest $expected_at;
    public \StripeSDK\Requests\NotReceivedRequest2Variant1\NotReceivedRequest2Variant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\NotReceivedRequest2Variant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\NotReceivedRequest2Variant1\ProductTypeEnum $product_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product_type' => is_string($value) ? $this->product_type = \StripeSDK\Enums\NotReceivedRequest2Variant1\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
