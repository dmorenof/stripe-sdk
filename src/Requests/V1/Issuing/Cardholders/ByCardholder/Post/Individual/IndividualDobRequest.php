<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual;

/**
 * date_of_birth_specs
 */
final class IndividualDobRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'day',
        'month',
        'year',
    ];

    public int $day;
    public int $month;
    public int $year;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'day' => is_int($value) ? $this->day = $value : parent::assignMember($name, $value),
            'month' => is_int($value) ? $this->month = $value : parent::assignMember($name, $value),
            'year' => is_int($value) ? $this->year = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
