<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class BankAccounts extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/accounts/{account}/bank_accounts [operationId: PostAccountsAccountBankAccounts] */
    /**
     * Create an external account
     *
     * <p>Create an external account for a given account.</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\BankAccounts\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\BankAccounts::class)->post($account, $payload);
    }

    /** DELETE /v1/accounts/{account}/bank_accounts/{id} [operationId: DeleteAccountsAccountBankAccountsId] */
    /**
     * Delete an external account
     *
     * <p>Delete a specified external account for a given account.</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Accounts\ByAccount\BankAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\BankAccounts\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\BankAccounts::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/accounts/{account}/bank_accounts/{id} [operationId: GetAccountsAccountBankAccountsId] */
    /**
     * Retrieve an external account
     *
     * <p>Retrieve a specified external account for a given account.</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\Accounts\ByAccount\BankAccounts\ById $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\BankAccounts\ById $params = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\BankAccounts::class)->getById($identifier, $params);
    }

    /** POST /v1/accounts/{account}/bank_accounts/{id} [operationId: PostAccountsAccountBankAccountsId] */
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
    public static function postById(\StripeSDK\PathParams\V1\Accounts\ByAccount\BankAccounts\ById $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\BankAccounts\ById\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\BankAccounts::class)->postById($identifier, $payload);
    }
}
