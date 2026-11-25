<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class Cards extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/cards [operationId: GetCustomersCustomerCards] */
    /**
     * List all cards
     *
     * <p>You can see a list of the cards belonging to a customer.
     * Note that the 10 most recent sources are always available on the <code>Customer</code> object.
     * If you need more than those 10, you can use this API method and the <code>limit</code> and <code>starting_after</code> parameters to page through additional cards.</p>
     *
     * @deprecated
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Cards $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Cards::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/cards [operationId: PostCustomersCustomerCards] */
    /**
     * Create a card
     *
     * <p>When you create a new credit card, you must specify a customer or recipient on which to create it.</p>
     *
     * <p>If the card’s owner has no default card, then the new card will become the default.
     * However, if the owner already has a default, then it will not change.
     * To change the default, you should <a href="/api/customers/update">update the customer</a> to have a new <code>default_source</code>.</p>
     */
    public static function post(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Cards\Post $payload = null): \StripeSDK\DTOs\Payment\AnyOfSource|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Cards::class)->post($customer, $payload);
    }

    /** DELETE /v1/customers/{customer}/cards/{id} [operationId: DeleteCustomersCustomerCardsId] */
    /**
     * Delete a customer source
     *
     * <p>Delete a specified source for a given customer.</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Cards\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById\Delete $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\ById\DeleteStatus200\ByIdDeleteStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Cards::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/customers/{customer}/cards/{id} [operationId: GetCustomersCustomerCardsId] */
    /**
     * Retrieve a card
     *
     * <p>You can always see the 10 most recent cards directly on a customer; this method lets you retrieve details about a specific card stored on the customer.</p>
     *
     * @deprecated
     */
    public static function getById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Cards\ById $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Cards\ById $params = null): \StripeSDK\DTOs\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Cards::class)->getById($identifier, $params);
    }

    /** POST /v1/customers/{customer}/cards/{id} [operationId: PostCustomersCustomerCardsId] */
    /**
     * Update a card
     *
     * <p>Update a specified source for a given customer.</p>
     */
    public static function postById(\StripeSDK\PathParams\V1\Customers\ByCustomer\Cards\ById $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById\Post $payload = null): \StripeSDK\Responses\V1\Customers\ByCustomer\Cards\ById\PostStatus200\ByIdPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Cards::class)->postById($identifier, $payload);
    }
}
