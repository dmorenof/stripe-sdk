<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionLodgingData
 */
final class TransactionLodgingData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time of checking into the lodging.
     */
    public ?int $check_in_at;
    /**
     * The number of nights stayed at the lodging.
     */
    public ?int $nights;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'check_in_at' => $value === null || is_int($value) ? $this->check_in_at = $value : parent::assignMember($name, $value),
            'nights' => $value === null || is_int($value) ? $this->nights = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
