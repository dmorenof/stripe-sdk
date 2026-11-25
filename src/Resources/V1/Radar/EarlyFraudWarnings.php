<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Radar;

final class EarlyFraudWarnings extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/radar/early_fraud_warnings',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Radar\\EarlyFraudWarnings\\GetStatus200',
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
     * List all early fraud warnings
     *
     * <p>Returns a list of early fraud warnings.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Radar\EarlyFraudWarnings $params = null): \StripeSDK\Responses\V1\Radar\EarlyFraudWarnings\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Radar\EarlyFraudWarnings\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_EARLY_FRAUD_WARNING = [
        'method' => 'GET',
        'path' => '/v1/radar/early_fraud_warnings/{early_fraud_warning}',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\EarlyFraudWarning',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'early_fraud_warning' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an early fraud warning
     *
     * <p>Retrieves the details of an early fraud warning that has previously been created. </p>
     *
     * <p>Please refer to the <a href="#early_fraud_warning_object">early fraud warning</a> object reference for more details.</p>
     */
    public function getByEarlyFraudWarning(string $early_fraud_warning, ?\StripeSDK\GetParams\V1\Radar\EarlyFraudWarnings\ByEarlyFraudWarning $params = null): \StripeSDK\DTOs\Radar\EarlyFraudWarning|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\EarlyFraudWarning|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_EARLY_FRAUD_WARNING), path: ['early_fraud_warning' => $early_fraud_warning], parameters: $params);
        return $result;
    }
}
