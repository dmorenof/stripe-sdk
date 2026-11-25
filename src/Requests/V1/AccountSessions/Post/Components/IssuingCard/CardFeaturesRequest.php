<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\IssuingCard;

/**
 * issuing_card_features_param
 */
final class CardFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $card_management;
    public bool $card_spend_dispute_management;
    public bool $cardholder_management;
    public bool $spend_control_management;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_management' => is_bool($value) ? $this->card_management = $value : parent::assignMember($name, $value),
            'card_spend_dispute_management' => is_bool($value) ? $this->card_spend_dispute_management = $value : parent::assignMember($name, $value),
            'cardholder_management' => is_bool($value) ? $this->cardholder_management = $value : parent::assignMember($name, $value),
            'spend_control_management' => is_bool($value) ? $this->spend_control_management = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
