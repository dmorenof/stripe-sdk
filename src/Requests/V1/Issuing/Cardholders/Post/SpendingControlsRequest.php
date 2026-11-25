<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\Post;

/**
 * authorization_controls_param_v2
 *
 * Rules that control spending across this cardholder's cards. Refer to our [documentation](https://docs.stripe.com/issuing/controls/spending-controls) for more details.
 */
final class SpendingControlsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls\CardPresencesCollection $allowed_card_presences;
    public \StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls\AllowedCategoriesCollection $allowed_categories;
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $allowed_merchant_countries;
    public \StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls\BlockedCardPresencesArray\CardPresencesCollection $blocked_card_presences;
    public \StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls\BlockedCategoriesCollection $blocked_categories;
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $blocked_merchant_countries;
    public \StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls\SpendingLimitsCollection $spending_limits;
    public string $spending_limits_currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowed_merchant_countries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->allowed_merchant_countries = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'blocked_merchant_countries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->blocked_merchant_countries = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'spending_limits_currency' => is_string($value) ? $this->spending_limits_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
