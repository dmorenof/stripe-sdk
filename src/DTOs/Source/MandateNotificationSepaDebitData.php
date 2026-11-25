<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceMandateNotificationSepaDebitData
 */
final class MandateNotificationSepaDebitData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'creditor_identifier' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'mandate_reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * SEPA creditor ID.
     */
    public string $creditor_identifier {
        set {
            $this->assigning('creditor_identifier', $value);
            $this->creditor_identifier = $value;
        }
    }
    /**
     * Last 4 digits of the account number associated with the debit.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Mandate reference associated with the debit.
     */
    public string $mandate_reference {
        set {
            $this->assigning('mandate_reference', $value);
            $this->mandate_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor_identifier' => is_string($value) ? $this->creditor_identifier = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'mandate_reference' => is_string($value) ? $this->mandate_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
