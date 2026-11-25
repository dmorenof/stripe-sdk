<?php

declare(strict_types=1);

namespace StripeSDK\V1\Reporting;

final class ReportTypes extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/reporting/report_types [operationId: GetReportingReportTypes] */
    /**
     * List all Report Types
     *
     * <p>Returns a full list of Report Types.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Reporting\ReportTypes $params = null): \StripeSDK\Responses\V1\Reporting\ReportTypes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reporting\ReportTypes::class)->get($params);
    }

    /** GET /v1/reporting/report_types/{report_type} [operationId: GetReportingReportTypesReportType] */
    /**
     * Retrieve a Report Type
     *
     * <p>Retrieves the details of a Report Type. (Certain report types require a <a href="https://stripe.com/docs/keys#test-live-modes">live-mode API key</a>.)</p>
     */
    public static function getByReportType(string $report_type, ?\StripeSDK\GetParams\V1\Reporting\ReportTypes\ByReportType $params = null): \StripeSDK\DTOs\Reporting\ReportType|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Reporting\ReportTypes::class)->getByReportType($report_type, $params);
    }
}
