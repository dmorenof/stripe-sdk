<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post\EndBehavior;

/**
 * trial_offer_end_behavior_transition_param
 */
final class BehaviorTransitionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'price',
    ];

    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
