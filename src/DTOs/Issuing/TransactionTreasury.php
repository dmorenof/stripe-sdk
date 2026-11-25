<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionTreasury
 */
final class TransactionTreasury extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'received_credit' => [
            'maxLength' => 5000,
        ],
        'received_debit' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Treasury [ReceivedCredit](https://docs.stripe.com/api/treasury/received_credits) representing this Issuing transaction if it is a refund
     */
    public ?string $received_credit {
        set {
            $this->assigning('received_credit', $value);
            $this->received_credit = $value;
        }
    }
    /**
     * The Treasury [ReceivedDebit](https://docs.stripe.com/api/treasury/received_debits) representing this Issuing transaction if it is a capture
     */
    public ?string $received_debit {
        set {
            $this->assigning('received_debit', $value);
            $this->received_debit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'received_credit' => $value === null || is_string($value) ? $this->received_credit = $value : parent::assignMember($name, $value),
            'received_debit' => $value === null || is_string($value) ? $this->received_debit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
