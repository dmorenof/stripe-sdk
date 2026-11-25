<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ProductCatalog;

/**
 * Trial Offer
 *
 * Trial offers let you define free or paid introductory pricing for a subscription item.
 * A TrialOffer specifies the price to charge during the trial, how many billing intervals
 * the trial lasts, and what price the subscription item transitions to when the trial ends.
 * You attach a TrialOffer to a subscription item
 * using `items[current_trial][trial_offer]` when creating or updating a subscription.
 */
final class TrialOffer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'duration',
        'end_behavior',
        'id',
        'livemode',
        'object_',
        'price',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'nickname' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * Whether the trial offer is active. Set to false to archive the trial offer.
     */
    public bool $active;
    public \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferDuration $duration;
    public \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferEndBehavior $end_behavior;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * A brief description of the trial offer, hidden from customers.
     */
    public ?string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\ProductCatalog\TrialOffer\ObjectEnum $object_;
    /**
     * The price during the trial offer.
     */
    public \StripeSDK\DTOs\ProductCatalog\TrialOffer\PriceDTO $price;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'duration' => $value instanceof \stdClass ? $this->duration = new \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferDuration($value) : parent::assignMember($name, $value),
            'end_behavior' => $value instanceof \stdClass ? $this->end_behavior = new \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferEndBehavior($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ProductCatalog\TrialOffer\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
