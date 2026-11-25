<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Apps;

final class Installs extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/apps/installs',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Apps\\Installs\\GetStatus200',
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
     * List all app installs
     *
     * <p>Returns a list of app installs. An app developer or embedding platform filtering by its own app sees the installs across the accounts that installed it; other callers see the installs on their own account. The key selects the environment: a live key lists live installs, a sandbox API key lists the installs on that sandbox, and the key of an app’s managed sandbox filtering by <code>app</code> lists that app’s installs across every sandbox. For existing accounts that still use legacy test mode, a test mode key lists legacy test mode installs.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Apps\Installs $params = null): \StripeSDK\Responses\V1\Apps\Installs\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Apps\Installs\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/apps/installs',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Create an app install
     *
     * <p>Creates an app install. An account installs its own private app with its own key; public and testing installs are made from the Dashboard. An app developer or embedding platform acting on a connected account through <code>Stripe-Account</code> installs or reinstalls its app there. For a private app, creating an install installs the newest completed upload; when that version is already installed with nothing pending, the existing install is returned.</p>
     */
    public function post(\StripeSDK\Requests\V1\Apps\Installs\Post $payload): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/apps/installs/{id}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an app install
     *
     * <p>Retrieves an app install. The installing account, the app’s developer (with the keys of the account that owns the app or of the app’s managed sandbox), and the embedding platform that created the install can retrieve it.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\Apps\Installs\ById $params = null): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/apps/installs/{id}',
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
     * Update an app install
     *
     * <p>Reauthorizes an app install. The installer grants the permissions, content security policy entries, and endpoints that the version being installed requests. An account reauthorizes its own installs on any channel with its own key; app developers and embedding platforms reauthorize installs on connected accounts through <code>Stripe-Account</code>. For private apps, the version being installed is the newest completed upload.</p>
     */
    public function postById(string $id, ?\StripeSDK\Requests\V1\Apps\Installs\ById\Post $payload = null): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
