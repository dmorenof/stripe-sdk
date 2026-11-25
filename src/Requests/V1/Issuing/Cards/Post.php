<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'type',
    ];

    protected const array VALIDATION = [
        'cardholder' => [
            'maxLength' => 5000,
        ],
        'personalization_design' => [
            'maxLength' => 5000,
        ],
        'replacement_for' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The [Cardholder](https://docs.stripe.com/api#issuing_cardholder_object) object with which the card will be associated.
     */
    public string $cardholder {
        set {
            $this->assigning('cardholder', $value);
            $this->cardholder = $value;
        }
    }
    /**
     * The currency for the card.
     */
    public string $currency;
    /**
     * The desired expiration month (1-12) for this card if [specifying a custom expiration date](/issuing/cards/virtual/issue-cards?testing-method=with-code#exp-dates).
     */
    public int $exp_month;
    /**
     * The desired 4-digit expiration year for this card if [specifying a custom expiration date](/issuing/cards/virtual/issue-cards?testing-method=with-code#exp-dates).
     */
    public int $exp_year;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The new financial account ID the card will be associated with. This field allows a card to be reassigned to a different financial account.
     */
    public string $financial_account;
    /**
     * Rules that control the lifecycle of this card, such as automatic cancellation. Refer to our [documentation](/issuing/controls/lifecycle-controls) for more details.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\Post\LifecycleControlsRequest $lifecycle_controls;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\Post\MetadataMapRequest $metadata;
    /**
     * The personalization design object belonging to this card.
     */
    public string $personalization_design {
        set {
            $this->assigning('personalization_design', $value);
            $this->personalization_design = $value;
        }
    }
    /**
     * The desired PIN for this card.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\Post\CardsPinRequest $pin;
    /**
     * The card this is meant to be a replacement for (if any).
     */
    public string $replacement_for {
        set {
            $this->assigning('replacement_for', $value);
            $this->replacement_for = $value;
        }
    }
    /**
     * If `replacement_for` is specified, this should indicate why that card is being replaced.
     */
    public \StripeSDK\Enums\V1\Issuing\Cards\Post\ReplacementReasonEnum $replacement_reason;
    /**
     * The second line to print on the card. Max length: 24 characters.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\Post\SecondLineRequest $second_line;
    /**
     * The address where the card will be shipped.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\Post\CardsShippingRequest $shipping;
    /**
     * Rules that control spending for this card. Refer to our [documentation](https://docs.stripe.com/issuing/controls/spending-controls) for more details.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\Post\SpendingControlsRequest $spending_controls;
    /**
     * Whether authorizations can be approved on this card. May be blocked from activating cards depending on past-due Cardholder requirements. Defaults to `inactive`.
     */
    public \StripeSDK\Enums\V1\Issuing\Cards\Post\CardsStatusEnum $status;
    /**
     * The type of card to issue. Possible values are `physical` or `virtual`.
     */
    public \StripeSDK\Enums\V1\Issuing\Cards\Post\CardsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cardholder' => is_string($value) ? $this->cardholder = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'personalization_design' => is_string($value) ? $this->personalization_design = $value : parent::assignMember($name, $value),
            'replacement_for' => is_string($value) ? $this->replacement_for = $value : parent::assignMember($name, $value),
            'replacement_reason' => is_string($value) ? $this->replacement_reason = \StripeSDK\Enums\V1\Issuing\Cards\Post\ReplacementReasonEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\V1\Issuing\Cards\Post\CardsStatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Issuing\Cards\Post\CardsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
