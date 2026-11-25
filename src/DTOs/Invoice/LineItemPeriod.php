<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * InvoiceLineItemPeriod
 */
final class LineItemPeriod extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    /**
     * The end of the period, which must be greater than or equal to the start. This value is inclusive.
     * Format: unix-time
     */
    public int $end;
    /**
     * The start of the period. This value is inclusive.
     * Format: unix-time
     */
    public int $start;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end' => is_int($value) ? $this->end = $value : parent::assignMember($name, $value),
            'start' => is_int($value) ? $this->start = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
