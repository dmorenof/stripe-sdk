<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingNetworkTokenVisa
 */
final class NetworkTokenVisa extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'token_reference_id',
        'token_requestor_id',
    ];

    protected const array VALIDATION = [
        'card_reference_id' => [
            'maxLength' => 5000,
        ],
        'token_reference_id' => [
            'maxLength' => 5000,
        ],
        'token_requestor_id' => [
            'maxLength' => 5000,
        ],
        'token_risk_score' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique reference ID from Visa to represent the card account number.
     */
    public ?string $card_reference_id {
        set {
            $this->assigning('card_reference_id', $value);
            $this->card_reference_id = $value;
        }
    }
    /**
     * The network-unique identifier for the token.
     */
    public string $token_reference_id {
        set {
            $this->assigning('token_reference_id', $value);
            $this->token_reference_id = $value;
        }
    }
    /**
     * The ID of the entity requesting tokenization, specific to Visa.
     */
    public string $token_requestor_id {
        set {
            $this->assigning('token_requestor_id', $value);
            $this->token_requestor_id = $value;
        }
    }
    /**
     * Degree of risk associated with the token between `01` and `99`, with higher number indicating higher risk. A `00` value indicates the token was not scored by Visa.
     */
    public string $token_risk_score {
        set {
            $this->assigning('token_risk_score', $value);
            $this->token_risk_score = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_reference_id' => $value === null || is_string($value) ? $this->card_reference_id = $value : parent::assignMember($name, $value),
            'token_reference_id' => is_string($value) ? $this->token_reference_id = $value : parent::assignMember($name, $value),
            'token_requestor_id' => is_string($value) ? $this->token_requestor_id = $value : parent::assignMember($name, $value),
            'token_risk_score' => is_string($value) ? $this->token_risk_score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
