<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryInboundTransfersResourceInboundTransferResourceLinkedFlows
 */
final class InboundTransfersResourceInboundTransferResourceLinkedFlows extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'received_debit' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If funds for this flow were returned after the flow went to the `succeeded` state, this field contains a reference to the ReceivedDebit return.
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
            'received_debit' => $value === null || is_string($value) ? $this->received_debit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
