<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedIssuingCardsListFeatures
 */
final class IssuingCardsListFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card_management',
        'card_spend_dispute_management',
        'cardholder_management',
        'disable_stripe_user_authentication',
        'spend_control_management',
    ];

    /**
     * Whether to allow card management features.
     */
    public bool $card_management;
    /**
     * Whether to allow card spend dispute management features.
     */
    public bool $card_spend_dispute_management;
    /**
     * Whether to allow cardholder management features.
     */
    public bool $cardholder_management;
    /**
     * Whether Stripe user authentication is disabled. This value can only be `true` for accounts where `controller.requirement_collection` is `application` for the account. The default value is the opposite of the `external_account_collection` value. For example, if you don't set `external_account_collection`, it defaults to `true` and `disable_stripe_user_authentication` defaults to `false`.
     */
    public bool $disable_stripe_user_authentication;
    /**
     * Whether to allow spend control management features.
     */
    public bool $spend_control_management;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_management' => is_bool($value) ? $this->card_management = $value : parent::assignMember($name, $value),
            'card_spend_dispute_management' => is_bool($value) ? $this->card_spend_dispute_management = $value : parent::assignMember($name, $value),
            'cardholder_management' => is_bool($value) ? $this->cardholder_management = $value : parent::assignMember($name, $value),
            'disable_stripe_user_authentication' => is_bool($value) ? $this->disable_stripe_user_authentication = $value : parent::assignMember($name, $value),
            'spend_control_management' => is_bool($value) ? $this->spend_control_management = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
