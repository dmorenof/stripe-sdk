<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class ExternalAccounts extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/external_accounts/{id} [operationId: PostExternalAccountsId] */
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
    public static function postById(string $id, ?\StripeSDK\Requests\V1\ExternalAccounts\ById\Post $payload = null): \StripeSDK\DTOs\AnyOfExternalAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ExternalAccounts::class)->postById($id, $payload);
    }
}
