<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Reporting;

final class ReportRuns extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/reporting/report_runs',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\Responses\\V1\\Reporting\\ReportRuns\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all Report Runs
     *
     * <p>Returns a list of Report Runs, with the most recent appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Reporting\ReportRuns $params = null): \StripeSDK\Responses\V1\Reporting\ReportRuns\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Reporting\ReportRuns\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/reporting/report_runs',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Reporting\\ReportRun',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'parameters' => 'nested',
        ],
    ];

    /**
     * Create a Report Run
     *
     * <p>Creates a new object and begin running the report. (Certain report types require a <a href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.)</p>
     */
    public function post(\StripeSDK\Requests\V1\Reporting\ReportRuns\Post $payload): \StripeSDK\DTOs\Reporting\ReportRun|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Reporting\ReportRun|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_REPORT_RUN = [
        'method' => 'GET',
        'path' => '/v1/reporting/report_runs/{report_run}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Reporting\\ReportRun',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'report_run' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Report Run
     *
     * <p>Retrieves the details of an existing Report Run.</p>
     */
    public function getByReportRun(string $report_run, ?\StripeSDK\GetParams\V1\Reporting\ReportRuns\ByReportRun $params = null): \StripeSDK\DTOs\Reporting\ReportRun|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Reporting\ReportRun|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REPORT_RUN), path: ['report_run' => $report_run], parameters: $params);
        return $result;
    }
}
