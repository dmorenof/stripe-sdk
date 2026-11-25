<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingNetworkTokenWalletProvider
 */
final class NetworkTokenWalletProvider extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_id' => [
            'maxLength' => 5000,
        ],
        'cardholder_name' => [
            'maxLength' => 5000,
        ],
        'hashed_account_email_address' => [
            'maxLength' => 5000,
        ],
        'suggested_decision_version' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The wallet provider-given account ID of the digital wallet the token belongs to.
     */
    public string $account_id {
        set {
            $this->assigning('account_id', $value);
            $this->account_id = $value;
        }
    }
    /**
     * An evaluation on the trustworthiness of the wallet account between 1 and 5. A higher score indicates more trustworthy.
     */
    public int $account_trust_score;
    /**
     * The method used for tokenizing a card.
     */
    public \StripeSDK\Enums\Issuing\NetworkTokenWalletProvider\NumberSourceEnum $card_number_source;
    public \StripeSDK\DTOs\Issuing\NetworkTokenAddress $cardholder_address;
    /**
     * The name of the cardholder tokenizing the card.
     */
    public string $cardholder_name {
        set {
            $this->assigning('cardholder_name', $value);
            $this->cardholder_name = $value;
        }
    }
    /**
     * An evaluation on the trustworthiness of the device. A higher score indicates more trustworthy.
     */
    public int $device_trust_score;
    /**
     * The hashed email address of the cardholder's account with the wallet provider.
     */
    public string $hashed_account_email_address {
        set {
            $this->assigning('hashed_account_email_address', $value);
            $this->hashed_account_email_address = $value;
        }
    }
    /**
     * The reasons for suggested tokenization given by the card network.
     */
    public \StripeSDK\Collections\Issuing\NetworkTokenWalletProvider\ReasonCodesCollection $reason_codes;
    /**
     * The recommendation on responding to the tokenization request.
     */
    public \StripeSDK\Enums\Issuing\NetworkTokenWalletProvider\SuggestedDecisionEnum $suggested_decision;
    /**
     * The version of the standard for mapping reason codes followed by the wallet provider.
     */
    public string $suggested_decision_version {
        set {
            $this->assigning('suggested_decision_version', $value);
            $this->suggested_decision_version = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_id' => is_string($value) ? $this->account_id = $value : parent::assignMember($name, $value),
            'account_trust_score' => is_int($value) ? $this->account_trust_score = $value : parent::assignMember($name, $value),
            'card_number_source' => is_string($value) ? $this->card_number_source = \StripeSDK\Enums\Issuing\NetworkTokenWalletProvider\NumberSourceEnum::from($value) : parent::assignMember($name, $value),
            'cardholder_address' => $value instanceof \stdClass ? $this->cardholder_address = new \StripeSDK\DTOs\Issuing\NetworkTokenAddress($value) : parent::assignMember($name, $value),
            'cardholder_name' => is_string($value) ? $this->cardholder_name = $value : parent::assignMember($name, $value),
            'device_trust_score' => is_int($value) ? $this->device_trust_score = $value : parent::assignMember($name, $value),
            'hashed_account_email_address' => is_string($value) ? $this->hashed_account_email_address = $value : parent::assignMember($name, $value),
            'suggested_decision' => is_string($value) ? $this->suggested_decision = \StripeSDK\Enums\Issuing\NetworkTokenWalletProvider\SuggestedDecisionEnum::from($value) : parent::assignMember($name, $value),
            'suggested_decision_version' => is_string($value) ? $this->suggested_decision_version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
