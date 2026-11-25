<?php

declare(strict_types=1);

namespace StripeSDK\V1\Identity;

final class VerificationReports extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/identity/verification_reports [operationId: GetIdentityVerificationReports] */
    /**
     * List VerificationReports
     *
     * <p>List all verification reports.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Identity\VerificationReports $params = null): \StripeSDK\Responses\V1\Identity\VerificationReports\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationReports::class)->get($params);
    }

    /** GET /v1/identity/verification_reports/{report} [operationId: GetIdentityVerificationReportsReport] */
    /**
     * Retrieve a VerificationReport
     *
     * <p>Retrieves an existing VerificationReport</p>
     */
    public static function getByReport(string $report, ?\StripeSDK\GetParams\V1\Identity\VerificationReports\ByReport $params = null): \StripeSDK\DTOs\Identity\VerificationReport|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationReports::class)->getByReport($report, $params);
    }
}
