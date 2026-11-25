<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\ThreeDSecure\NetworkOptions;

/**
 * cartes_bancaires_network_options_param
 */
final class CartesBancairesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cb_avalgo',
    ];

    protected const array VALIDATION = [
        'cb_exemption' => [
            'maxLength' => 4,
        ],
    ];

    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\ThreeDSecure\NetworkOptions\CartesBancaires\CbAvalgoEnum $cb_avalgo;
    public string $cb_exemption {
        set {
            $this->assigning('cb_exemption', $value);
            $this->cb_exemption = $value;
        }
    }
    public int $cb_score;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cb_avalgo' => is_string($value) ? $this->cb_avalgo = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\ThreeDSecure\NetworkOptions\CartesBancaires\CbAvalgoEnum::from($value) : parent::assignMember($name, $value),
            'cb_exemption' => is_string($value) ? $this->cb_exemption = $value : parent::assignMember($name, $value),
            'cb_score' => is_int($value) ? $this->cb_score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
