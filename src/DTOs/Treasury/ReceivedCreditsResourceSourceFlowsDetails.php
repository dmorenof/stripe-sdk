<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedCreditsResourceSourceFlowsDetails
 */
final class ReceivedCreditsResourceSourceFlowsDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\CreditReversal $credit_reversal;
    public \StripeSDK\DTOs\Treasury\OutboundPayment $outbound_payment;
    public \StripeSDK\DTOs\Treasury\OutboundTransfer $outbound_transfer;
    public \StripeSDK\DTOs\Payout $payout;
    /**
     * The type of the source flow that originated the ReceivedCredit.
     */
    public \StripeSDK\Enums\Treasury\ReceivedCreditsResourceSourceFlowsDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credit_reversal' => $value instanceof \stdClass ? $this->credit_reversal = new \StripeSDK\DTOs\Treasury\CreditReversal($value) : parent::assignMember($name, $value),
            'outbound_payment' => $value instanceof \stdClass ? $this->outbound_payment = new \StripeSDK\DTOs\Treasury\OutboundPayment($value) : parent::assignMember($name, $value),
            'outbound_transfer' => $value instanceof \stdClass ? $this->outbound_transfer = new \StripeSDK\DTOs\Treasury\OutboundTransfer($value) : parent::assignMember($name, $value),
            'payout' => $value instanceof \stdClass ? $this->payout = new \StripeSDK\DTOs\Payout($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\ReceivedCreditsResourceSourceFlowsDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
