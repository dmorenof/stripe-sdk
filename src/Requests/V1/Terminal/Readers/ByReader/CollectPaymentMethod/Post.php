<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectPaymentMethod;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];

    protected const array VALIDATION = [
        'payment_intent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Configuration overrides for this collection, such as tipping, surcharging, and customer cancellation settings.
     */
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectPaymentMethod\Post\CollectConfigRequest $collect_config;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The ID of the PaymentIntent to collect a payment method for.
     */
    public string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_intent' => is_string($value) ? $this->payment_intent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
