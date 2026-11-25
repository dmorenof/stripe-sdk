<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedDebitsResourceLinkedFlows
 */
final class ReceivedDebitsResourceLinkedFlows extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'debit_reversal' => [
            'maxLength' => 5000,
        ],
        'inbound_transfer' => [
            'maxLength' => 5000,
        ],
        'issuing_authorization' => [
            'maxLength' => 5000,
        ],
        'issuing_transaction' => [
            'maxLength' => 5000,
        ],
        'payout' => [
            'maxLength' => 5000,
        ],
        'topup' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The DebitReversal created as a result of this ReceivedDebit being reversed.
     */
    public ?string $debit_reversal {
        set {
            $this->assigning('debit_reversal', $value);
            $this->debit_reversal = $value;
        }
    }
    /**
     * Set if the ReceivedDebit is associated with an InboundTransfer's return of funds.
     */
    public ?string $inbound_transfer {
        set {
            $this->assigning('inbound_transfer', $value);
            $this->inbound_transfer = $value;
        }
    }
    /**
     * Set if the ReceivedDebit was created due to an [Issuing Authorization](https://docs.stripe.com/api#issuing_authorizations) object.
     */
    public ?string $issuing_authorization {
        set {
            $this->assigning('issuing_authorization', $value);
            $this->issuing_authorization = $value;
        }
    }
    /**
     * Set if the ReceivedDebit is also viewable as an [Issuing Dispute](https://docs.stripe.com/api#issuing_disputes) object.
     */
    public ?string $issuing_transaction {
        set {
            $this->assigning('issuing_transaction', $value);
            $this->issuing_transaction = $value;
        }
    }
    /**
     * Set if the ReceivedDebit was created due to a [Payout](https://docs.stripe.com/api#payouts) object.
     */
    public ?string $payout {
        set {
            $this->assigning('payout', $value);
            $this->payout = $value;
        }
    }
    /**
     * Set if the ReceivedDebit was created due to a [Topup](https://docs.stripe.com/api#topups) object.
     */
    public ?string $topup {
        set {
            $this->assigning('topup', $value);
            $this->topup = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'debit_reversal' => $value === null || is_string($value) ? $this->debit_reversal = $value : parent::assignMember($name, $value),
            'inbound_transfer' => $value === null || is_string($value) ? $this->inbound_transfer = $value : parent::assignMember($name, $value),
            'issuing_authorization' => $value === null || is_string($value) ? $this->issuing_authorization = $value : parent::assignMember($name, $value),
            'issuing_transaction' => $value === null || is_string($value) ? $this->issuing_transaction = $value : parent::assignMember($name, $value),
            'payout' => $value === null || is_string($value) ? $this->payout = $value : parent::assignMember($name, $value),
            'topup' => $value === null || is_string($value) ? $this->topup = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
