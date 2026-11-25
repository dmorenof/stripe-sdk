<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Sigma;

final class ScheduledQueryRuns extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/sigma/scheduled_query_runs',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Sigma\\ScheduledQueryRuns\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all scheduled query runs
     *
     * <p>Returns a list of scheduled query runs.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Sigma\ScheduledQueryRuns $params = null): \StripeSDK\Responses\V1\Sigma\ScheduledQueryRuns\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Sigma\ScheduledQueryRuns\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_SCHEDULED_QUERY_RUN = [
        'method' => 'GET',
        'path' => '/v1/sigma/scheduled_query_runs/{scheduled_query_run}',
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
                'type' => '\\StripeSDK\\DTOs\\ScheduledQueryRun',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'scheduled_query_run' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a scheduled query run
     *
     * <p>Retrieves the details of a scheduled query run.</p>
     */
    public function getByScheduledQueryRun(string $scheduled_query_run, ?\StripeSDK\GetParams\V1\Sigma\ScheduledQueryRuns\ByScheduledQueryRun $params = null): \StripeSDK\DTOs\ScheduledQueryRun|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ScheduledQueryRun|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SCHEDULED_QUERY_RUN), path: ['scheduled_query_run' => $scheduled_query_run], parameters: $params);
        return $result;
    }
}
