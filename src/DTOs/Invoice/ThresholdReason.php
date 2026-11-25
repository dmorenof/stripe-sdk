<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * InvoiceThresholdReason
 */
final class ThresholdReason extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'item_reasons',
    ];

    /**
     * The total invoice amount threshold boundary if it triggered the threshold invoice.
     */
    public ?int $amount_gte;
    /**
     * Indicates which line items triggered a threshold invoice.
     */
    public \StripeSDK\Collections\Invoice\ThresholdReason\ReasonsCollection $item_reasons;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_gte' => $value === null || is_int($value) ? $this->amount_gte = $value : parent::assignMember($name, $value),
            'item_reasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->item_reasons = new \StripeSDK\Collections\Invoice\ThresholdReason\ReasonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Invoice\ItemThresholdReason::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
