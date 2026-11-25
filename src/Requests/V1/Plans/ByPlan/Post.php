<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Plans\ByPlan;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'nickname' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the plan is currently available for new subscriptions.
     */
    public bool $active;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Plans\ByPlan\Post\ByPlanMetadataRequest $metadata;
    /**
     * A brief description of the plan, hidden from customers.
     */
    public string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * The product the plan belongs to. This cannot be changed once it has been used in a subscription or subscription schedule.
     */
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
    /**
     * Default number of trial days when subscribing a customer to this plan using [`trial_from_plan=true`](https://docs.stripe.com/api#create_subscription-trial_from_plan).
     */
    public int $trial_period_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'trial_period_days' => is_int($value) ? $this->trial_period_days = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
