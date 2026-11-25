<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceTransactionGbpCreditTransferData
 */
final class TransactionGbpCreditTransferData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'funding_method' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
        'sender_account_number' => [
            'maxLength' => 5000,
        ],
        'sender_name' => [
            'maxLength' => 5000,
        ],
        'sender_sort_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Bank account fingerprint associated with the Stripe owned bank account receiving the transfer.
     */
    public string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * The credit transfer rails the sender used to push this transfer. The possible rails are: Faster Payments, BACS, CHAPS, and wire transfers. Currently only Faster Payments is supported.
     */
    public string $funding_method {
        set {
            $this->assigning('funding_method', $value);
            $this->funding_method = $value;
        }
    }
    /**
     * Last 4 digits of sender account number associated with the transfer.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Sender entered arbitrary information about the transfer.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Sender account number associated with the transfer.
     */
    public string $sender_account_number {
        set {
            $this->assigning('sender_account_number', $value);
            $this->sender_account_number = $value;
        }
    }
    /**
     * Sender name associated with the transfer.
     */
    public string $sender_name {
        set {
            $this->assigning('sender_name', $value);
            $this->sender_name = $value;
        }
    }
    /**
     * Sender sort code associated with the transfer.
     */
    public string $sender_sort_code {
        set {
            $this->assigning('sender_sort_code', $value);
            $this->sender_sort_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fingerprint' => is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'funding_method' => is_string($value) ? $this->funding_method = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'sender_account_number' => is_string($value) ? $this->sender_account_number = $value : parent::assignMember($name, $value),
            'sender_name' => is_string($value) ? $this->sender_name = $value : parent::assignMember($name, $value),
            'sender_sort_code' => is_string($value) ? $this->sender_sort_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
