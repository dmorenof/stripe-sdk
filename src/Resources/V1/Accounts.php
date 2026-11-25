<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Accounts extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/accounts',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Accounts\\GetStatus200',
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
     * List all connected accounts
     *
     * <p>Returns a list of accounts connected to your platform via <a href="/docs/connect">Connect</a>. If you’re not a platform, the list is empty.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Accounts $params = null): \StripeSDK\Responses\V1\Accounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Accounts\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/accounts',
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
                'type' => '\\StripeSDK\\DTOs\\Account',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'bank_account' => 'nested',
            'business_profile' => 'nested',
            'capabilities' => 'nested',
            'company' => 'nested',
            'controller' => 'nested',
            'documents' => 'nested',
            'expand' => 'nested',
            'groups' => 'nested',
            'individual' => 'nested',
            'metadata' => 'nested',
            'settings' => 'nested',
            'tos_acceptance' => 'nested',
        ],
    ];

    /**
     * Create an account
     *
     * <p>With <a href="/docs/connect">Connect</a>, you can create Stripe accounts for your users.
     * To do this, you’ll first need to <a href="https://dashboard.stripe.com/account/applications/settings">register your platform</a>.</p>
     *
     * <p>If you’ve already collected information for your connected accounts, you <a href="/connect/marketplace/tasks/create#prefill-account-information">can prefill that information</a> when
     * creating the account. Connect Onboarding won’t ask for the prefilled information during account onboarding.
     * You can prefill any information on the account.</p>
     */
    public function post(?\StripeSDK\Requests\V1\Accounts\Post $payload = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_ACCOUNT = [
        'method' => 'DELETE',
        'path' => '/v1/accounts/{account}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Account',
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
     * Delete an account
     *
     * <p>With <a href="/connect">Connect</a>, you can delete accounts you manage.</p>
     *
     * <p>Test-mode accounts can be deleted at any time.</p>
     *
     * <p>Live-mode accounts that have access to the standard dashboard and Stripe is responsible for negative account balances cannot be deleted, which includes Standard accounts. All other Live-mode accounts, can be deleted when all <a href="/api/balance/balance_object">balances</a> are zero.</p>
     *
     * <p>If you want to delete your own account, use the <a href="https://dashboard.stripe.com/settings/account">account information tab in your account settings</a> instead.</p>
     */
    public function deleteByAccount(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ACCOUNT), path: ['account' => $account], body: $payload);
        return $result;
    }

    private const array GET_BY_ACCOUNT = [
        'method' => 'GET',
        'path' => '/v1/accounts/{account}',
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
                'type' => '\\StripeSDK\\DTOs\\Account',
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
     * Retrieve account
     *
     * <p>Retrieves the details of an account.</p>
     */
    public function getByAccount(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount $params = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ACCOUNT), path: ['account' => $account], parameters: $params);
        return $result;
    }

    private const array POST_BY_ACCOUNT = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}',
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
                'type' => '\\StripeSDK\\DTOs\\Account',
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
            'business_profile' => 'nested',
            'capabilities' => 'nested',
            'company' => 'nested',
            'documents' => 'nested',
            'expand' => 'nested',
            'groups' => 'nested',
            'individual' => 'nested',
            'metadata' => 'nested',
            'settings' => 'nested',
            'tos_acceptance' => 'nested',
        ],
    ];

    /**
     * Update an account
     *
     * <p>Updates a <a href="/connect/accounts">connected account</a> by setting the values of the parameters passed. Any parameters not provided are
     * left unchanged.</p>
     *
     * <p>For accounts where <a href="/api/accounts/object#account_object-controller-requirement_collection">controller.requirement_collection</a>
     * is <code>application</code>, which includes Custom accounts, you can update any information on the account.</p>
     *
     * <p>For accounts where <a href="/api/accounts/object#account_object-controller-requirement_collection">controller.requirement_collection</a>
     * is <code>stripe</code>, which includes Standard and Express accounts, you can update all information until you create
     * an <a href="/api/account_links">Account Link</a> or <a href="/api/account_sessions">Account Session</a> to start Connect onboarding,
     * after which some properties can no longer be updated.</p>
     *
     * <p>To update your own account, use the <a href="https://dashboard.stripe.com/settings/account">Dashboard</a>. Refer to our
     * <a href="/docs/connect/updating-accounts">Connect</a> documentation to learn more about updating accounts.</p>
     */
    public function postByAccount(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Post $payload = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ACCOUNT), path: ['account' => $account], body: $payload);
        return $result;
    }
}
