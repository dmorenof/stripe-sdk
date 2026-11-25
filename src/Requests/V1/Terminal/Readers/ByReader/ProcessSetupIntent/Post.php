<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessSetupIntent;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allow_redisplay',
        'setup_intent',
    ];

    protected const array VALIDATION = [
        'setup_intent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * This field indicates whether this payment method can be shown again to its customer in a checkout flow. Stripe products such as Checkout and Elements use this field to determine whether a payment method can be shown as a saved payment method in a checkout flow.
     */
    public \StripeSDK\Enums\V1\Terminal\Readers\ByReader\ProcessSetupIntent\Post\AllowRedisplayEnum $allow_redisplay;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Configuration overrides for this setup, such as MOTO and customer cancellation settings.
     */
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessSetupIntent\Post\ProcessConfigRequest $process_config;
    /**
     * The ID of the SetupIntent to process on the reader.
     */
    public string $setup_intent {
        set {
            $this->assigning('setup_intent', $value);
            $this->setup_intent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\Terminal\Readers\ByReader\ProcessSetupIntent\Post\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'setup_intent' => is_string($value) ? $this->setup_intent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
