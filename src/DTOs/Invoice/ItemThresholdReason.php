<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * InvoiceItemThresholdReason
 */
final class ItemThresholdReason extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'line_item_ids',
        'usage_gte',
    ];

    /**
     * The IDs of the line items that triggered the threshold invoice.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $line_item_ids;
    /**
     * The quantity threshold boundary that applied to the given line item.
     */
    public int $usage_gte;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'line_item_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->line_item_ids = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'usage_gte' => is_int($value) ? $this->usage_gte = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
