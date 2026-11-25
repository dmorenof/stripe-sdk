<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class People extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/accounts/{account}/people [operationId: GetAccountsAccountPeople] */
    /**
     * List all persons
     *
     * <p>Returns a list of people associated with the account’s legal entity. The people are returned sorted by creation date, with the most recent people appearing first.</p>
     */
    public static function get(string $account, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\People $params = null): \StripeSDK\Responses\V1\Accounts\ByAccount\People\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\People::class)->get($account, $params);
    }

    /** POST /v1/accounts/{account}/people [operationId: PostAccountsAccountPeople] */
    /**
     * Create a person
     *
     * <p>Creates a new person.</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\People\Post $payload = null): \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\People::class)->post($account, $payload);
    }

    /** DELETE /v1/accounts/{account}/people/{person} [operationId: DeleteAccountsAccountPeoplePerson] */
    /**
     * Delete a person
     *
     * <p>Deletes an existing person’s relationship to the account’s legal entity. Any person with a relationship for an account can be deleted through the API, except if the person is the <code>representative</code>. If your integration is using the <code>executive</code> parameter, you cannot delete the only verified <code>executive</code> on file.</p>
     */
    public static function deleteByPerson(\StripeSDK\PathParams\V1\Accounts\ByAccount\People\ByPerson $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\People\ByPerson\Delete $payload = null): \StripeSDK\DTOs\Deleted\Person|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\People::class)->deleteByPerson($identifier, $payload);
    }

    /** GET /v1/accounts/{account}/people/{person} [operationId: GetAccountsAccountPeoplePerson] */
    /**
     * Retrieve a person
     *
     * <p>Retrieves an existing person.</p>
     */
    public static function getByPerson(\StripeSDK\PathParams\V1\Accounts\ByAccount\People\ByPerson $identifier, ?\StripeSDK\GetParams\V1\Accounts\ByAccount\People\ByPerson $params = null): \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\People::class)->getByPerson($identifier, $params);
    }

    /** POST /v1/accounts/{account}/people/{person} [operationId: PostAccountsAccountPeoplePerson] */
    /**
     * Update a person
     *
     * <p>Updates an existing person.</p>
     */
    public static function postByPerson(\StripeSDK\PathParams\V1\Accounts\ByAccount\People\ByPerson $identifier, ?\StripeSDK\Requests\V1\Accounts\ByAccount\People\ByPerson\Post $payload = null): \StripeSDK\DTOs\Person|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\People::class)->postByPerson($identifier, $payload);
    }
}
