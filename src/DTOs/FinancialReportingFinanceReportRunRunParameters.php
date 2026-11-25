<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * FinancialReportingFinanceReportRunRunParameters
 */
final class FinancialReportingFinanceReportRunRunParameters extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'connected_account' => [
            'maxLength' => 5000,
        ],
        'payout' => [
            'maxLength' => 5000,
        ],
        'reporting_category' => [
            'maxLength' => 5000,
        ],
        'timezone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The set of output columns requested for inclusion in the report run.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $columns;
    /**
     * Connected account ID by which to filter the report run.
     */
    public string $connected_account {
        set {
            $this->assigning('connected_account', $value);
            $this->connected_account = $value;
        }
    }
    /**
     * Currency of objects to be included in the report run.
     * Format: currency
     */
    public string $currency;
    /**
     * Ending timestamp of data to be included in the report run. Can be any UTC timestamp between 1 second after the user specified `interval_start` and 1 second before this report's last `data_available_end` value.
     * Format: unix-time
     */
    public int $interval_end;
    /**
     * Starting timestamp of data to be included in the report run. Can be any UTC timestamp between 1 second after this report's `data_available_start` and 1 second before the user specified `interval_end` value.
     * Format: unix-time
     */
    public int $interval_start;
    /**
     * Payout ID by which to filter the report run.
     */
    public string $payout {
        set {
            $this->assigning('payout', $value);
            $this->payout = $value;
        }
    }
    /**
     * Category of balance transactions to be included in the report run.
     */
    public string $reporting_category {
        set {
            $this->assigning('reporting_category', $value);
            $this->reporting_category = $value;
        }
    }
    /**
     * Defaults to `Etc/UTC`. The output timezone for all timestamps in the report. A list of possible time zone values is maintained at the [IANA Time Zone Database](http://www.iana.org/time-zones). Has no effect on `interval_start` or `interval_end`.
     */
    public string $timezone {
        set {
            $this->assigning('timezone', $value);
            $this->timezone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columns' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->columns = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'connected_account' => is_string($value) ? $this->connected_account = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'interval_end' => is_int($value) ? $this->interval_end = $value : parent::assignMember($name, $value),
            'interval_start' => is_int($value) ? $this->interval_start = $value : parent::assignMember($name, $value),
            'payout' => is_string($value) ? $this->payout = $value : parent::assignMember($name, $value),
            'reporting_category' => is_string($value) ? $this->reporting_category = $value : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
