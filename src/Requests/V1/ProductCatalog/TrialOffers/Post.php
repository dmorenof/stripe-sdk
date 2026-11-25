<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ProductCatalog\TrialOffers;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'duration',
        'end_behavior',
        'price',
    ];

    protected const array VALIDATION = [
        'nickname' => [
            'maxLength' => 255,
        ],
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the trial offer can be used for new subscriptions. Defaults to true.
     */
    public bool $active;
    /**
     * Duration of one service period of the trial.
     */
    public \StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post\TrialOffersDurationRequest $duration;
    /**
     * Define behavior that occurs at the end of the trial.
     */
    public \StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post\EndBehaviorRequest $end_behavior;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A brief description of the trial offer, hidden from customers.
     */
    public string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * Price configuration during the trial period (amount, billing scheme, etc).
     */
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
