<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Apps\Installs\ById;

final class Uninstall extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/apps/installs/{id}/uninstall',
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
                'type' => '\\StripeSDK\\DTOs\\Apps\\Install',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Uninstall an app install
     *
     * <p>Uninstalls an app from the account that installed it.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\Apps\Installs\ById\Uninstall\Post $payload = null): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
