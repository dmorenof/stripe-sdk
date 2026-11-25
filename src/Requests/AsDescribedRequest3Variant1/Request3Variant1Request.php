<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequest3Variant1;

/**
 * merchandise_not_as_described
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AsDescribedRequest3Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\AsDescribedRequest3Variant1\AsDescribedRequest3Variant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\AsDescribedRequest3Variant1\ReceivedAtRequest $received_at;
    public \StripeSDK\Requests\AsDescribedRequest3Variant1\ReturnDescriptionRequest $return_description;
    public \StripeSDK\Enums\AsDescribedRequest3Variant1\ReturnStatusEnum $return_status;
    public \StripeSDK\Requests\AsDescribedRequest3Variant1\ReturnedAtRequest $returned_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_status' => is_string($value) ? $this->return_status = \StripeSDK\Enums\AsDescribedRequest3Variant1\ReturnStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
