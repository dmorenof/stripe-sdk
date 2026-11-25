<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryReceivedDebitsResourceDebitReversalLinkedFlows
 */
final class ReceivedDebitsResourceDebitReversalLinkedFlows extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'issuing_dispute' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Set if there is an Issuing dispute associated with the DebitReversal.
     */
    public ?string $issuing_dispute {
        set {
            $this->assigning('issuing_dispute', $value);
            $this->issuing_dispute = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'issuing_dispute' => $value === null || is_string($value) ? $this->issuing_dispute = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
