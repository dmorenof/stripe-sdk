<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class ExternalAccounts extends \StripeSDK\Client
{
    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/external_accounts/{id}',
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
    public function postById(string $id, ?\StripeSDK\Requests\V1\ExternalAccounts\ById\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
