<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\ByCard;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'personalization_design' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Reason why the `status` of this card is `canceled`.
     */
    public \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\CancellationReasonEnum $cancellation_reason;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\ByCardMetadataRequest $metadata;
    public string $personalization_design {
        set {
            $this->assigning('personalization_design', $value);
            $this->personalization_design = $value;
        }
    }
    /**
     * The desired new PIN for this card.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\ByCardPinRequest $pin;
    /**
     * Updated shipping information for the card.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\ByCardShippingRequest $shipping;
    /**
     * Rules that control spending for this card. Refer to our [documentation](https://docs.stripe.com/issuing/controls/spending-controls) for more details.
     */
    public \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\SpendingControlsRequest $spending_controls;
    /**
     * Dictates whether authorizations can be approved on this card. May be blocked from activating cards depending on past-due Cardholder requirements. Defaults to `inactive`. If this card is being canceled because it was lost or stolen, this information should be provided as `cancellation_reason`.
     */
    public \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\ByCardStatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancellation_reason' => is_string($value) ? $this->cancellation_reason = \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\CancellationReasonEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'personalization_design' => is_string($value) ? $this->personalization_design = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\ByCardStatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
