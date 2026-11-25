<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Accounts\ByAccount;

final class Persons extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/accounts/{account}/persons',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Accounts\\ByAccount\\Persons\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
            'relationship' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all persons
     *
     * <p>Returns a list of people associated with the account’s legal entity. The people are returned sorted by creation date, with the most recent people appearing first.</p>
     */
    public function get(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\Persons $params = null): \StripeSDK\Responses\V1\Accounts\ByAccount\Persons\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Accounts\ByAccount\Persons\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['account' => $account], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/persons',
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
                'type' => '\\StripeSDK\\DTOs\\Person',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'additional_tos_acceptances' => 'nested',
            'address' => 'nested',
            'address_kana' => 'nested',
            'address_kanji' => 'nested',
            'dob' => 'nested',
            'documents' => 'nested',
            'expand' => 'nested',
            'full_name_aliases' => 'nested',
            'metadata' => 'nested',
            'registered_address' => 'nested',
            'relationship' => 'nested',
            'us_cfpb_data' => 'nested',
            'verification' => 'nested',
        ],
    ];

    /**
     * Create a person
     *
     * <p>Creates a new person.</p>
     */
    public function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post $payload = null): \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['account' => $account], body: $payload);
        return $result;
    }

    private const array DELETE_BY_PERSON = [
        'method' => 'DELETE',
        'path' => '/v1/accounts/{account}/persons/{person}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Person',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
            'person' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a person
     *
     * <p>Deletes an existing person’s relationship to the account’s legal entity. Any person with a relationship for an account can be deleted through the API, except if the person is the <code>representative</code>. If your integration is using the <code>executive</code> parameter, you cannot delete the only verified <code>executive</code> on file.</p>
     */
    public function deleteByPerson(\StripeSDK\PathParams\V1\Accounts\ByAccount\Persons\ByPerson $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Delete $payload = null): \StripeSDK\DTOs\Deleted\Person|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Person|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_PERSON), path: $identifier, body: $payload);
        return $result;
    }

    private const array GET_BY_PERSON = [
        'method' => 'GET',
        'path' => '/v1/accounts/{account}/persons/{person}',
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
                'type' => '\\StripeSDK\\DTOs\\Person',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
            'person' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a person
     *
     * <p>Retrieves an existing person.</p>
     */
    public function getByPerson(\StripeSDK\PathParams\V1\Accounts\ByAccount\Persons\ByPerson $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\Persons\ByPerson $params = null): \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PERSON), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_PERSON = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/persons/{person}',
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
                'type' => '\\StripeSDK\\DTOs\\Person',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
            'person' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'additional_tos_acceptances' => 'nested',
            'address' => 'nested',
            'address_kana' => 'nested',
            'address_kanji' => 'nested',
            'dob' => 'nested',
            'documents' => 'nested',
            'expand' => 'nested',
            'full_name_aliases' => 'nested',
            'metadata' => 'nested',
            'registered_address' => 'nested',
            'relationship' => 'nested',
            'us_cfpb_data' => 'nested',
            'verification' => 'nested',
        ],
    ];

    /**
     * Update a person
     *
     * <p>Updates an existing person.</p>
     */
    public function postByPerson(\StripeSDK\PathParams\V1\Accounts\ByAccount\Persons\ByPerson $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post $payload = null): \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PERSON), path: $identifier, body: $payload);
        return $result;
    }
}
