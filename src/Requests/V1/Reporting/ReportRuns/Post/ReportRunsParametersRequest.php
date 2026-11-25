<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Reporting\ReportRuns\Post;

/**
 * run_parameter_specs
 *
 * Parameters specifying how the report should be run. Different Report Types have different required and optional parameters, listed in the [API Access to Reports](https://docs.stripe.com/reporting/statements/api) documentation.
 */
final class ReportRunsParametersRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reporting_category' => [
            'maxLength' => 5000,
        ],
        'timezone' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $columns;
    public string $connected_account;
    /**
     * Format: currency
     */
    public string $currency;
    /**
     * Format: unix-time
     */
    public int $interval_end;
    /**
     * Format: unix-time
     */
    public int $interval_start;
    public string $payout;
    public \StripeSDK\Enums\V1\Reporting\ReportRuns\Post\Parameters\ReportingCategoryEnum $reporting_category {
        set {
            $this->assigning('reporting_category', $value);
            $this->reporting_category = $value;
        }
    }
    public \StripeSDK\Enums\V1\Reporting\ReportRuns\Post\Parameters\ParametersTimezoneEnum $timezone {
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
            'reporting_category' => is_string($value) ? $this->reporting_category = \StripeSDK\Enums\V1\Reporting\ReportRuns\Post\Parameters\ReportingCategoryEnum::from($value) : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = \StripeSDK\Enums\V1\Reporting\ReportRuns\Post\Parameters\ParametersTimezoneEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
