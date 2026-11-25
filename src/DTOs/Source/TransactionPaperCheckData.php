<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceTransactionPaperCheckData
 */
final class TransactionPaperCheckData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'available_at' => [
            'maxLength' => 5000,
        ],
        'invoices' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the deposited funds will be available for use. Measured in seconds since the Unix epoch.
     */
    public string $available_at {
        set {
            $this->assigning('available_at', $value);
            $this->available_at = $value;
        }
    }
    /**
     * Comma-separated list of invoice IDs associated with the paper check.
     */
    public string $invoices {
        set {
            $this->assigning('invoices', $value);
            $this->invoices = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available_at' => is_string($value) ? $this->available_at = $value : parent::assignMember($name, $value),
            'invoices' => is_string($value) ? $this->invoices = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
