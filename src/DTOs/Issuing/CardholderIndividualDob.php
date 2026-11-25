<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderIndividualDOB
 */
final class CardholderIndividualDob extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The day of birth, between 1 and 31.
     */
    public ?int $day;
    /**
     * The month of birth, between 1 and 12.
     */
    public ?int $month;
    /**
     * The four-digit year of birth.
     */
    public ?int $year;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'day' => $value === null || is_int($value) ? $this->day = $value : parent::assignMember($name, $value),
            'month' => $value === null || is_int($value) ? $this->month = $value : parent::assignMember($name, $value),
            'year' => $value === null || is_int($value) ? $this->year = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
