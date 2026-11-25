<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions\Post;

/**
 * flow_data_param
 *
 * Information about a specific flow for the customer to go through. See the [docs](https://docs.stripe.com/customer-management/portal-deep-links) to learn more about using customer portal deep links and flows.
 */
final class FlowDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletionRequest $after_completion;
    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancelRequest $subscription_cancel;
    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionUpdateRequest $subscription_update;
    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\UpdateConfirmRequest $subscription_update_confirm;
    public \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\DataTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
