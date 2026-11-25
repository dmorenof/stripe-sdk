<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\ByProduct\Features;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'entitlement_feature',
    ];

    protected const array VALIDATION = [
        'entitlement_feature' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the [Feature](https://docs.stripe.com/api/entitlements/feature) object attached to this product.
     */
    public string $entitlement_feature {
        set {
            $this->assigning('entitlement_feature', $value);
            $this->entitlement_feature = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entitlement_feature' => is_string($value) ? $this->entitlement_feature = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
