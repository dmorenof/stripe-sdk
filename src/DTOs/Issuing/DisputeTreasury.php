<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeTreasury
 */
final class DisputeTreasury extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'received_debit',
    ];

    protected const array VALIDATION = [
        'debit_reversal' => [
            'maxLength' => 5000,
        ],
        'received_debit' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Treasury [DebitReversal](https://docs.stripe.com/api/treasury/debit_reversals) representing this Issuing dispute
     */
    public ?string $debit_reversal {
        set {
            $this->assigning('debit_reversal', $value);
            $this->debit_reversal = $value;
        }
    }
    /**
     * The Treasury [ReceivedDebit](https://docs.stripe.com/api/treasury/received_debits) that is being disputed.
     */
    public string $received_debit {
        set {
            $this->assigning('received_debit', $value);
            $this->received_debit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'debit_reversal' => $value === null || is_string($value) ? $this->debit_reversal = $value : parent::assignMember($name, $value),
            'received_debit' => is_string($value) ? $this->received_debit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
