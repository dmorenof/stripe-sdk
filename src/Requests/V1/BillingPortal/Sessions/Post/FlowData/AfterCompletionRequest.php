<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData;

/**
 * flow_data_after_completion_param
 */
final class AfterCompletionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletion\HostedConfirmationRequest $hosted_confirmation;
    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletion\CompletionRedirectRequest $redirect;
    public \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletion\CompletionTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletion\CompletionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
