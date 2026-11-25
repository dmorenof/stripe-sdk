<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscription\Resume;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The billing cycle anchor that applies when the subscription is resumed. Either `now` or `unchanged`. The default is `now`. For more information, see the billing cycle [documentation](https://docs.stripe.com/billing/subscriptions/billing-cycle).
     */
    public \StripeSDK\Requests\V1\Subscriptions\BySubscription\Resume\Post\CycleAnchorRequest $billing_cycle_anchor;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Controls whether Stripe attempts payment on the resumption invoice in the resume request, and how payment on that invoice affects the subscription's status. The default is `resume_on_payment_attempt`.
     */
    public \StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\PaymentBehaviorEnum $payment_behavior;
    /**
     * Determines how to handle [prorations](https://docs.stripe.com/billing/subscriptions/prorations) resulting from the `billing_cycle_anchor` being `unchanged`. When the `billing_cycle_anchor` is set to `now` (default value), no prorations are generated. If no value is passed, the default is `create_prorations`.
     */
    public \StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\ProrationBehaviorEnum $proration_behavior;
    /**
     * If set, prorations will be calculated as though the subscription was resumed at the given time. This can be used to apply exactly the same prorations that were previewed with the [create preview](https://stripe.com/docs/api/invoices/create_preview) endpoint.
     * Format: unix-time
     */
    public int $proration_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_behavior' => is_string($value) ? $this->payment_behavior = \StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\PaymentBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_date' => is_int($value) ? $this->proration_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
