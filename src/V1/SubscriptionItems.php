<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class SubscriptionItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/subscription_items [operationId: GetSubscriptionItems] */
    /**
     * List all subscription items
     *
     * <p>Returns a list of your subscription items for a given subscription.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\SubscriptionItems $params): \StripeSDK\Responses\V1\SubscriptionItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionItems::class)->get($params);
    }

    /** POST /v1/subscription_items [operationId: PostSubscriptionItems] */
    /**
     * Create a subscription item
     *
     * <p>Adds a new item to an existing subscription. No existing items will be changed or replaced.</p>
     */
    public static function post(\StripeSDK\Requests\V1\SubscriptionItems\Post $payload): \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionItems::class)->post($payload);
    }

    /** DELETE /v1/subscription_items/{item} [operationId: DeleteSubscriptionItemsItem] */
    /**
     * Delete a subscription item
     *
     * <p>Deletes an item from the subscription. Removing a subscription item from a subscription will not cancel the subscription.</p>
     */
    public static function deleteByItem(string $item, ?\StripeSDK\Requests\V1\SubscriptionItems\ByItem\Delete $payload = null): \StripeSDK\DTOs\Deleted\SubscriptionItem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionItems::class)->deleteByItem($item, $payload);
    }

    /** GET /v1/subscription_items/{item} [operationId: GetSubscriptionItemsItem] */
    /**
     * Retrieve a subscription item
     *
     * <p>Retrieves the subscription item with the given ID.</p>
     */
    public static function getByItem(string $item, ?\StripeSDK\GetParams\V1\SubscriptionItems\ByItem $params = null): \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionItems::class)->getByItem($item, $params);
    }

    /** POST /v1/subscription_items/{item} [operationId: PostSubscriptionItemsItem] */
    /**
     * Update a subscription item
     *
     * <p>Updates the plan or quantity of an item on a current subscription.</p>
     */
    public static function postByItem(string $item, ?\StripeSDK\Requests\V1\SubscriptionItems\ByItem\Post $payload = null): \StripeSDK\DTOs\Subscription\Item|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionItems::class)->postByItem($item, $payload);
    }
}
