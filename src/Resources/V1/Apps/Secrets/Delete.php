<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Apps\Secrets;

final class Delete extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/apps/secrets/delete',
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
                'type' => '\\StripeSDK\\DTOs\\Apps\\Secret',
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
            'scope' => 'nested',
        ],
    ];

    /**
     * Delete a Secret
     *
     * <p>Deletes a secret from the secret store by name and scope.</p>
     */
    public function post(\StripeSDK\Requests\V1\Apps\Secrets\Delete\Post $payload): \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
