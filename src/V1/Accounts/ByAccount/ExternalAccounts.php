<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class ExternalAccounts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/accounts/{account}/external_accounts [operationId: GetAccountsAccountExternalAccounts] */
    /**
     * List all external accounts
     *
     * <p>List external accounts for an account.</p>
     */
    public static function get(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\ExternalAccounts $params = null): \StripeSDK\Responses\V1\Accounts\ByAccount\ExternalAccounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\ExternalAccounts::class)->get($account, $params);
    }

    /** POST /v1/accounts/{account}/external_accounts [operationId: PostAccountsAccountExternalAccounts] */
    /**
     * Create an external account
     *
     * <p>Create an external account for a given account.</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\ExternalAccounts::class)->post($account, $payload);
    }

    /** DELETE /v1/accounts/{account}/external_accounts/{id} [operationId: DeleteAccountsAccountExternalAccountsId] */
    /**
     * Delete an external account
     *
     * <p>Delete a specified external account for a given account.</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Accounts\ByAccount\ExternalAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\ExternalAccounts::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/accounts/{account}/external_accounts/{id} [operationId: GetAccountsAccountExternalAccountsId] */
    /**
     * Retrieve an external account
     *
     * <p>Retrieve a specified external account for a given account.</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\Accounts\ByAccount\ExternalAccounts\ById $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\ExternalAccounts\ById $params = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\ExternalAccounts::class)->getById($identifier, $params);
    }

    /** POST /v1/accounts/{account}/external_accounts/{id} [operationId: PostAccountsAccountExternalAccountsId] */
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
    public static function postById(\StripeSDK\PathParams\V1\Accounts\ByAccount\ExternalAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\ById\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\ExternalAccounts::class)->postById($identifier, $payload);
    }
}
