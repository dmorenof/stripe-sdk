<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Sources\BySource;

final class MandateNotifications extends \StripeSDK\Client
{
    private const array GET_BY_MANDATE_NOTIFICATION = [
        'method' => 'GET',
        'path' => '/v1/sources/{source}/mandate_notifications/{mandate_notification}',
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
                'type' => '\\StripeSDK\\DTOs\\Source\\MandateNotification',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'mandate_notification' => [
                'maxLength' => 5000,
            ],
            'source' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Source MandateNotification
     *
     * <p>Retrieves a new Source MandateNotification.</p>
     */
    public function getByMandateNotification(\StripeSDK\PathParams\V1\Sources\BySource\MandateNotifications\ByMandateNotification $identifier, ?\StripeSDK\GetParams\V1\Sources\BySource\MandateNotifications\ByMandateNotification $params = null): \StripeSDK\DTOs\Source\MandateNotification|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Source\MandateNotification|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MANDATE_NOTIFICATION), path: $identifier, parameters: $params);
        return $result;
    }
}
