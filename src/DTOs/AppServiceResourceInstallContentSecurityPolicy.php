<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * AppServiceResourceInstallContentSecurityPolicy
 */
final class AppServiceResourceInstallContentSecurityPolicy extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'connect_src',
        'image_src',
    ];

    /**
     * The URLs that the app can make network requests to.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $connect_src;
    /**
     * The URLs that the app can load images from.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $image_src;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'connect_src' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->connect_src = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'image_src' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->image_src = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
