<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Treasury;

final class DebitReversals extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/treasury/debit_reversals',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Treasury\\DebitReversals\\GetStatus200',
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
     * List all DebitReversals
     *
     * <p>Returns a list of DebitReversals.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Treasury\DebitReversals $params): \StripeSDK\Responses\V1\Treasury\DebitReversals\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Treasury\DebitReversals\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/treasury/debit_reversals',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\DebitReversal',
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
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create a DebitReversal
     *
     * <p>Reverses a ReceivedDebit and creates a DebitReversal object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Treasury\DebitReversals\Post $payload): \StripeSDK\DTOs\Treasury\DebitReversal|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\DebitReversal|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_DEBIT_REVERSAL = [
        'method' => 'GET',
        'path' => '/v1/treasury/debit_reversals/{debit_reversal}',
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
                'type' => '\\StripeSDK\\DTOs\\Treasury\\DebitReversal',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'debit_reversal' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a DebitReversal
     *
     * <p>Retrieves a DebitReversal object.</p>
     */
    public function getByDebitReversal(string $debit_reversal, ?\StripeSDK\GetParams\V1\Treasury\DebitReversals\ByDebitReversal $params = null): \StripeSDK\DTOs\Treasury\DebitReversal|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Treasury\DebitReversal|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DEBIT_REVERSAL), path: ['debit_reversal' => $debit_reversal], parameters: $params);
        return $result;
    }
}
