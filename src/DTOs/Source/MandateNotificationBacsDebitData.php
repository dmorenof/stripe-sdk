<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceMandateNotificationBacsDebitData
 */
final class MandateNotificationBacsDebitData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'last4' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Last 4 digits of the account number associated with the debit.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
