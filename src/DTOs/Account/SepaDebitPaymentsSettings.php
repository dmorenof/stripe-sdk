<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountSepaDebitPaymentsSettings
 */
final class SepaDebitPaymentsSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'creditor_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * SEPA creditor identifier that identifies the company making the payment.
     */
    public string $creditor_id {
        set {
            $this->assigning('creditor_id', $value);
            $this->creditor_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor_id' => is_string($value) ? $this->creditor_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
