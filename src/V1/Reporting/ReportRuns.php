<?php

declare(strict_types=1);

namespace StripeSDK\V1\Reporting;

final class ReportRuns extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/reporting/report_runs [operationId: GetReportingReportRuns] */
    /**
     * List all Report Runs
     *
     * <p>Returns a list of Report Runs, with the most recent appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Reporting\ReportRuns $params = null): \StripeSDK\Responses\V1\Reporting\ReportRuns\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reporting\ReportRuns::class)->get($params);
    }

    /** POST /v1/reporting/report_runs [operationId: PostReportingReportRuns] */
    /**
     * Create a Report Run
     *
     * <p>Creates a new object and begin running the report. (Certain report types require a <a href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.)</p>
     */
    public static function post(\StripeSDK\Requests\V1\Reporting\ReportRuns\Post $payload): \StripeSDK\DTOs\Reporting\ReportRun|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reporting\ReportRuns::class)->post($payload);
    }

    /** GET /v1/reporting/report_runs/{report_run} [operationId: GetReportingReportRunsReportRun] */
    /**
     * Retrieve a Report Run
     *
     * <p>Retrieves the details of an existing Report Run.</p>
     */
    public static function getByReportRun(string $report_run, ?\StripeSDK\GetParams\V1\Reporting\ReportRuns\ByReportRun $params = null): \StripeSDK\DTOs\Reporting\ReportRun|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reporting\ReportRuns::class)->getByReportRun($report_run, $params);
    }
}
