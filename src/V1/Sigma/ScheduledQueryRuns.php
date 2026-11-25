<?php

declare(strict_types=1);

namespace StripeSDK\V1\Sigma;

final class ScheduledQueryRuns extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/sigma/scheduled_query_runs [operationId: GetSigmaScheduledQueryRuns] */
    /**
     * List all scheduled query runs
     *
     * <p>Returns a list of scheduled query runs.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Sigma\ScheduledQueryRuns $params = null): \StripeSDK\Responses\V1\Sigma\ScheduledQueryRuns\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sigma\ScheduledQueryRuns::class)->get($params);
    }

    /** GET /v1/sigma/scheduled_query_runs/{scheduled_query_run} [operationId: GetSigmaScheduledQueryRunsScheduledQueryRun] */
    /**
     * Retrieve a scheduled query run
     *
     * <p>Retrieves the details of a scheduled query run.</p>
     */
    public static function getByScheduledQueryRun(string $scheduled_query_run, ?\StripeSDK\GetParams\V1\Sigma\ScheduledQueryRuns\ByScheduledQueryRun $params = null): \StripeSDK\DTOs\ScheduledQueryRun|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sigma\ScheduledQueryRuns::class)->getByScheduledQueryRun($scheduled_query_run, $params);
    }
}
