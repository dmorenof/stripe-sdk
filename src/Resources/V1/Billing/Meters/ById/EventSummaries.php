<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing\Meters\ById;

final class EventSummaries extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/billing/meters/{id}/event_summaries',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Billing\\Meters\\ById\\EventSummaries\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List billing meter event summaries
     *
     * <p>Retrieve a list of billing meter event summaries.</p>
     */
    public function get(string $id, \StripeSDK\GetParams\V1\Billing\Meters\ById\EventSummaries $params): \StripeSDK\Responses\V1\Billing\Meters\ById\EventSummaries\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Billing\Meters\ById\EventSummaries\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
