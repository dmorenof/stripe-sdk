<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionNetworkData
 */
final class TransactionNetworkData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'authorization_code' => [
            'maxLength' => 5000,
        ],
        'processing_date' => [
            'maxLength' => 5000,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A code created by Stripe which is shared with the merchant to validate the authorization. This field will be populated if the authorization message was approved. The code typically starts with the letter "S", followed by a six-digit number. For example, "S498162". Please note that the code is not guaranteed to be unique across authorizations.
     */
    public ?string $authorization_code {
        set {
            $this->assigning('authorization_code', $value);
            $this->authorization_code = $value;
        }
    }
    /**
     * The date the transaction was processed by the card network. This can be different from the date the seller recorded the transaction depending on when the acquirer submits the transaction to the network.
     */
    public ?string $processing_date {
        set {
            $this->assigning('processing_date', $value);
            $this->processing_date = $value;
        }
    }
    /**
     * Unique identifier for the authorization assigned by the card network used to match subsequent messages, disputes, and transactions.
     */
    public ?string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorization_code' => $value === null || is_string($value) ? $this->authorization_code = $value : parent::assignMember($name, $value),
            'processing_date' => $value === null || is_string($value) ? $this->processing_date = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
