<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Settings;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Default configuration to be used on Stripe Tax calculations.
     */
    public \StripeSDK\Requests\V1\Tax\Settings\Post\SettingsDefaultsRequest $defaults;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The place where your business is located.
     */
    public \StripeSDK\Requests\V1\Tax\Settings\Post\HeadOfficeRequest $head_office;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
