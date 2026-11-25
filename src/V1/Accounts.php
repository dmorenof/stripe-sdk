<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Accounts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/accounts [operationId: GetAccounts] */
    /**
     * List all connected accounts
     *
     * <p>Returns a list of accounts connected to your platform via <a href="/docs/connect">Connect</a>. If you’re not a platform, the list is empty.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Accounts $params = null): \StripeSDK\Responses\V1\Accounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts::class)->get($params);
    }

    /** POST /v1/accounts [operationId: PostAccounts] */
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
    public static function post(?\StripeSDK\Requests\V1\Accounts\Post $payload = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts::class)->post($payload);
    }

    /** DELETE /v1/accounts/{account} [operationId: DeleteAccountsAccount] */
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
    public static function deleteByAccount(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts::class)->deleteByAccount($account, $payload);
    }

    /** GET /v1/accounts/{account} [operationId: GetAccountsAccount] */
    /**
     * Retrieve account
     *
     * <p>Retrieves the details of an account.</p>
     */
    public static function getByAccount(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount $params = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts::class)->getByAccount($account, $params);
    }

    /** POST /v1/accounts/{account} [operationId: PostAccountsAccount] */
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
    public static function postByAccount(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Post $payload = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts::class)->postByAccount($account, $payload);
    }
}
