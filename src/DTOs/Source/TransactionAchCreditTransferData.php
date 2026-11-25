<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceTransactionAchCreditTransferData
 */
final class TransactionAchCreditTransferData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer_data' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Customer data associated with the transfer.
     */
    public string $customer_data {
        set {
            $this->assigning('customer_data', $value);
            $this->customer_data = $value;
        }
    }
    /**
     * Bank account fingerprint associated with the transfer.
     */
    public string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Last 4 digits of the account number associated with the transfer.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Routing number associated with the transfer.
     */
    public string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_data' => is_string($value) ? $this->customer_data = $value : parent::assignMember($name, $value),
            'fingerprint' => is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'routing_number' => is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
