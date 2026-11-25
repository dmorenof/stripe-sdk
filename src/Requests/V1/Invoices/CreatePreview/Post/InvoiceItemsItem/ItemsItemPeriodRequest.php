<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem;

/**
 * period
 */
final class ItemsItemPeriodRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end',
        'start',
    ];

    /**
     * Format: unix-time
     */
    public int $end;
    /**
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
