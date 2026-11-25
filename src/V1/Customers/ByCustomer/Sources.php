<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class Sources extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/sources [operationId: GetCustomersCustomerSources] */
    /**
     * <p>List sources for a specified customer.</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Sources $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Sources\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Sources::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/sources [operationId: PostCustomersCustomerSources] */
    /**
     * Create a card
     *
     * <p>When you create a new credit card, you must specify a customer or recipient on which to create it.</p>
     *
     * <p>If the card’s owner has no default card, then the new card will become the default.
     * However, if the owner already has a default, then it will not change.
     * To change the default, you should <a href="/api/customers/update">update the customer</a> to have a new <code>default_source</code>.</p>
     */
    public static function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Sources\Post $payload = null): \StripeSDK\DTOs\Payment\AnyOfSource|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Sources::class)->post($customer, $payload);
    }

    /** DELETE /v1/customers/{customer}/sources/{id} [operationId: DeleteCustomersCustomerSourcesId] */
    /**
     * Delete a customer source
     *
     * <p>Delete a specified source for a given customer.</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Sources\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Sources\ById\Delete $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Sources\ById\DeleteStatus200\ByIdDeleteStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Sources::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/customers/{customer}/sources/{id} [operationId: GetCustomersCustomerSourcesId] */
    /**
     * <p>Retrieve a specified source for a given customer.</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Sources\ById $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Sources\ById $params = null): \StripeSDK\DTOs\Payment\AnyOfSource|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Sources::class)->getById($identifier, $params);
    }

    /** POST /v1/customers/{customer}/sources/{id} [operationId: PostCustomersCustomerSourcesId] */
    /**
     * Update a card
     *
     * <p>Update a specified source for a given customer.</p>
     */
    public static function postById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Sources\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Sources\ById\Post $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Sources\ById\PostStatus200\ByIdPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Sources::class)->postById($identifier, $payload);
    }
}
