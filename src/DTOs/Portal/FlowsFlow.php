<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsFlow
 */
final class FlowsFlow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'after_completion',
        'type',
    ];

    public \StripeSDK\DTOs\Portal\FlowsFlowAfterCompletion $after_completion;
    /**
     * Configuration when `flow.type=customer_update`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsFlowCustomerUpdate $customer_update;
    /**
     * Configuration when `flow.type=subscription_cancel`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsFlowSubscriptionCancel $subscription_cancel;
    /**
     * Configuration when `flow.type=subscription_update`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsFlowSubscriptionUpdate $subscription_update;
    /**
     * Configuration when `flow.type=subscription_update_confirm`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsFlowSubscriptionUpdateConfirm $subscription_update_confirm;
    /**
     * Type of flow that the customer will go through.
     */
    public \StripeSDK\Enums\Portal\FlowsFlow\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'after_completion' => $value instanceof \stdClass ? $this->after_completion = new \StripeSDK\DTOs\Portal\FlowsFlowAfterCompletion($value) : parent::assignMember($name, $value),
            'subscription_cancel' => $value === null || $value instanceof \stdClass ? $this->subscription_cancel = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsFlowSubscriptionCancel($value) : parent::assignMember($name, $value),
            'subscription_update' => $value === null || $value instanceof \stdClass ? $this->subscription_update = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsFlowSubscriptionUpdate($value) : parent::assignMember($name, $value),
            'subscription_update_confirm' => $value === null || $value instanceof \stdClass ? $this->subscription_update_confirm = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsFlowSubscriptionUpdateConfirm($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Portal\FlowsFlow\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
