<?php

declare(strict_types=1);

namespace StripeSDK\V1\Radar;

final class EarlyFraudWarnings extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/radar/early_fraud_warnings [operationId: GetRadarEarlyFraudWarnings] */
    /**
     * List all early fraud warnings
     *
     * <p>Returns a list of early fraud warnings.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Radar\EarlyFraudWarnings $params = null): \StripeSDK\Responses\V1\Radar\EarlyFraudWarnings\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\EarlyFraudWarnings::class)->get($params);
    }

    /** GET /v1/radar/early_fraud_warnings/{early_fraud_warning} [operationId: GetRadarEarlyFraudWarningsEarlyFraudWarning] */
    /**
     * Retrieve an early fraud warning
     *
     * <p>Retrieves the details of an early fraud warning that has previously been created. </p>
     *
     * <p>Please refer to the <a href="#early_fraud_warning_object">early fraud warning</a> object reference for more details.</p>
     */
    public static function getByEarlyFraudWarning(string $early_fraud_warning, ?\StripeSDK\GetParams\V1\Radar\EarlyFraudWarnings\ByEarlyFraudWarning $params = null): \StripeSDK\DTOs\Radar\EarlyFraudWarning|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\EarlyFraudWarnings::class)->getByEarlyFraudWarning($early_fraud_warning, $params);
    }
}
