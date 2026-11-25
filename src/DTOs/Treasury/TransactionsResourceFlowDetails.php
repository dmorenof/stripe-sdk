<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryTransactionsResourceFlowDetails
 */
final class TransactionsResourceFlowDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\CreditReversal $credit_reversal;
    public \StripeSDK\DTOs\Treasury\DebitReversal $debit_reversal;
    public \StripeSDK\DTOs\Treasury\InboundTransfer $inbound_transfer;
    public \StripeSDK\DTOs\Issuing\Authorization $issuing_authorization;
    public \StripeSDK\DTOs\Treasury\OutboundPayment $outbound_payment;
    public \StripeSDK\DTOs\Treasury\OutboundTransfer $outbound_transfer;
    public \StripeSDK\DTOs\Treasury\ReceivedCredit $received_credit;
    public \StripeSDK\DTOs\Treasury\ReceivedDebit $received_debit;
    /**
     * Type of the flow that created the Transaction. Set to the same value as `flow_type`.
     */
    public \StripeSDK\Enums\Treasury\TransactionsResourceFlowDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credit_reversal' => $value instanceof \stdClass ? $this->credit_reversal = new \StripeSDK\DTOs\Treasury\CreditReversal($value) : parent::assignMember($name, $value),
            'debit_reversal' => $value instanceof \stdClass ? $this->debit_reversal = new \StripeSDK\DTOs\Treasury\DebitReversal($value) : parent::assignMember($name, $value),
            'inbound_transfer' => $value instanceof \stdClass ? $this->inbound_transfer = new \StripeSDK\DTOs\Treasury\InboundTransfer($value) : parent::assignMember($name, $value),
            'issuing_authorization' => $value instanceof \stdClass ? $this->issuing_authorization = new \StripeSDK\DTOs\Issuing\Authorization($value) : parent::assignMember($name, $value),
            'outbound_payment' => $value instanceof \stdClass ? $this->outbound_payment = new \StripeSDK\DTOs\Treasury\OutboundPayment($value) : parent::assignMember($name, $value),
            'outbound_transfer' => $value instanceof \stdClass ? $this->outbound_transfer = new \StripeSDK\DTOs\Treasury\OutboundTransfer($value) : parent::assignMember($name, $value),
            'received_credit' => $value instanceof \stdClass ? $this->received_credit = new \StripeSDK\DTOs\Treasury\ReceivedCredit($value) : parent::assignMember($name, $value),
            'received_debit' => $value instanceof \stdClass ? $this->received_debit = new \StripeSDK\DTOs\Treasury\ReceivedDebit($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\TransactionsResourceFlowDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
