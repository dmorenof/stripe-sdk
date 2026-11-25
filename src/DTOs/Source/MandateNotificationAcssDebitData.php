<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceMandateNotificationAcssDebitData
 */
final class MandateNotificationAcssDebitData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The statement descriptor associate with the debit.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
