<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Accounts\ByAccount;

final class BankAccounts extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/bank_accounts',
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
                'type' => '\\StripeSDK\\DTOs\\AnyOfExternalAccount',
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
            'bank_account' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create an external account
     *
     * <p>Create an external account for a given account.</p>
     */
    public function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\BankAccounts\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['account' => $account], body: $payload);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v1/accounts/{account}/bank_accounts/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\AnyOfExternalAccount',
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
    ];

    /**
     * Delete an external account
     *
     * <p>Delete a specified external account for a given account.</p>
     */
    public function deleteById(\StripeSDK\PathParams\V1\Accounts\ByAccount\BankAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\BankAccounts\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: $identifier, body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/accounts/{account}/bank_accounts/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\AnyOfExternalAccount',
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
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an external account
     *
     * <p>Retrieve a specified external account for a given account.</p>
     */
    public function getById(\StripeSDK\PathParams\V1\Accounts\ByAccount\BankAccounts\ById $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\BankAccounts\ById $params = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/bank_accounts/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\AnyOfExternalAccount',
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
            'documents' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a bank account
     *
     * <p>Updates the metadata, account holder name, account holder type of a bank account belonging to
     * a connected account and optionally sets it as the default for its currency. Other bank account
     * details are not editable by design.</p>
     *
     * <p>You can only update bank accounts when <a href="/api/accounts/object#account_object-controller-requirement_collection">account.controller.requirement_collection</a> is <code>application</code>, which includes <a href="/connect/custom-accounts">Custom accounts</a>.</p>
     *
     * <p>You can re-enable a disabled bank account by performing an update call without providing any
     * arguments or changes.</p>
     */
    public function postById(\StripeSDK\PathParams\V1\Accounts\ByAccount\BankAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\BankAccounts\ById\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: $identifier, body: $payload);
        return $result;
    }
}
