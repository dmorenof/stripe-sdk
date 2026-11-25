<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardAuthorizationControls
 */
final class CardAuthorizationControls extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array of card presence statuses from which authorizations will be allowed. Possible options are `present`, `not_present`. All other statuses will be blocked. Cannot be set with `blocked_card_presences`. Provide an empty value to unset this control.
     */
    public ?\StripeSDK\Collections\Issuing\CardAuthorizationControls\CardPresencesCollection $allowed_card_presences;
    /**
     * Array of strings containing [categories](https://docs.stripe.com/api#issuing_authorization_object-merchant_data-category) of authorizations to allow. All other categories will be blocked. Cannot be set with `blocked_categories`.
     */
    public ?\StripeSDK\Collections\Issuing\CardAuthorizationControls\AllowedCategoriesCollection $allowed_categories;
    /**
     * Array of strings containing representing countries from which authorizations will be allowed. Authorizations from merchants in all other countries will be declined. Country codes should be ISO 3166 alpha-2 country codes (e.g. `US`). Cannot be set with `blocked_merchant_countries`. Provide an empty value to unset this control.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $allowed_merchant_countries;
    /**
     * Array of card presence statuses from which authorizations will be declined. Possible options are `present`, `not_present`. Cannot be set with `allowed_card_presences`. Provide an empty value to unset this control.
     */
    public ?\StripeSDK\Collections\Issuing\CardAuthorizationControls\BlockedCardPresencesArray\CardPresencesCollection $blocked_card_presences;
    /**
     * Array of strings containing [categories](https://docs.stripe.com/api#issuing_authorization_object-merchant_data-category) of authorizations to decline. All other categories will be allowed. Cannot be set with `allowed_categories`.
     */
    public ?\StripeSDK\Collections\Issuing\CardAuthorizationControls\BlockedCategoriesCollection $blocked_categories;
    /**
     * Array of strings containing representing countries from which authorizations will be declined. Country codes should be ISO 3166 alpha-2 country codes (e.g. `US`). Cannot be set with `allowed_merchant_countries`. Provide an empty value to unset this control.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $blocked_merchant_countries;
    /**
     * Limit spending with amount-based rules that apply across any cards this card replaced (i.e., its `replacement_for` card and _that_ card's `replacement_for` card, up the chain).
     */
    public ?\StripeSDK\Collections\Issuing\CardAuthorizationControls\SpendingLimitsCollection $spending_limits;
    /**
     * Currency of the amounts within `spending_limits`. Always the same as the currency of the card.
     * Format: currency
     */
    public ?string $spending_limits_currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowed_merchant_countries' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->allowed_merchant_countries = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'blocked_merchant_countries' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->blocked_merchant_countries = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'spending_limits' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->spending_limits = $value === null ? null : new \StripeSDK\Collections\Issuing\CardAuthorizationControls\SpendingLimitsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Issuing\CardSpendingLimit::class)) : parent::assignMember($name, $value),
            'spending_limits_currency' => $value === null || is_string($value) ? $this->spending_limits_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
