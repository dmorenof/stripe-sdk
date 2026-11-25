<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Reporting\ReportRuns;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'report_type',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Parameters specifying how the report should be run. Different Report Types have different required and optional parameters, listed in the [API Access to Reports](https://docs.stripe.com/reporting/statements/api) documentation.
     */
    public \StripeSDK\Requests\V1\Reporting\ReportRuns\Post\ReportRunsParametersRequest $parameters;
    /**
     * The ID of the [report type](https://docs.stripe.com/reporting/statements/api#report-types) to run, such as `"balance.summary.1"`.
     */
    public string $report_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'report_type' => is_string($value) ? $this->report_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
