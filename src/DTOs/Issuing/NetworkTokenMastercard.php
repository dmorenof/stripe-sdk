<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingNetworkTokenMastercard
 */
final class NetworkTokenMastercard extends \Dmorenof\SdkRuntime\DTO
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
        'token_requestor_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique reference ID from Mastercard to represent the card account number.
     */
    public string $card_reference_id {
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
     * The ID of the entity requesting tokenization, specific to Mastercard.
     */
    public string $token_requestor_id {
        set {
            $this->assigning('token_requestor_id', $value);
            $this->token_requestor_id = $value;
        }
    }
    /**
     * The name of the entity requesting tokenization, if known. This is directly provided from Mastercard.
     */
    public string $token_requestor_name {
        set {
            $this->assigning('token_requestor_name', $value);
            $this->token_requestor_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_reference_id' => is_string($value) ? $this->card_reference_id = $value : parent::assignMember($name, $value),
            'token_reference_id' => is_string($value) ? $this->token_reference_id = $value : parent::assignMember($name, $value),
            'token_requestor_id' => is_string($value) ? $this->token_requestor_id = $value : parent::assignMember($name, $value),
            'token_requestor_name' => is_string($value) ? $this->token_requestor_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
