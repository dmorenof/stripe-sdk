<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * not_received
 */
final class ReceivedVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\NotReceivedRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\NotReceivedRequestVariant1\ExpectedAtRequest $expected_at;
    public \StripeSDK\Requests\NotReceivedRequestVariant1\NotReceivedRequestVariant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\NotReceivedRequestVariant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\NotReceivedRequestVariant1\ProductTypeEnum $product_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'product_type' => is_string($value) ? $this->product_type = \StripeSDK\Enums\NotReceivedRequestVariant1\ProductTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
