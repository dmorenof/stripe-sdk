<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Identity;

final class VerificationReports extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/identity/verification_reports',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Identity\\VerificationReports\\GetStatus200',
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
     * List VerificationReports
     *
     * <p>List all verification reports.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Identity\VerificationReports $params = null): \StripeSDK\Responses\V1\Identity\VerificationReports\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Identity\VerificationReports\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_REPORT = [
        'method' => 'GET',
        'path' => '/v1/identity/verification_reports/{report}',
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
                'type' => '\\StripeSDK\\DTOs\\Identity\\VerificationReport',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'report' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a VerificationReport
     *
     * <p>Retrieves an existing VerificationReport</p>
     */
    public function getByReport(string $report, ?\StripeSDK\GetParams\V1\Identity\VerificationReports\ByReport $params = null): \StripeSDK\DTOs\Identity\VerificationReport|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Identity\VerificationReport|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REPORT), path: ['report' => $report], parameters: $params);
        return $result;
    }
}
