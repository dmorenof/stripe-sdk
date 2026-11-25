<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * merchandise_not_as_described
 */
final class DescribedVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AsDescribedRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\AsDescribedRequestVariant1\AsDescribedRequestVariant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\AsDescribedRequestVariant1\ReceivedAtRequest $received_at;
    public \StripeSDK\Requests\AsDescribedRequestVariant1\ReturnDescriptionRequest $return_description;
    public \StripeSDK\Enums\AsDescribedRequestVariant1\ReturnStatusEnum $return_status;
    public \StripeSDK\Requests\AsDescribedRequestVariant1\ReturnedAtRequest $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_status' => is_string($value) ? $this->return_status = \StripeSDK\Enums\AsDescribedRequestVariant1\ReturnStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
