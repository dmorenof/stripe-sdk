<?php

declare(strict_types=1);

namespace StripeSDK\V1\Radar;

final class ValueListItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/radar/value_list_items [operationId: GetRadarValueListItems] */
    /**
     * List all value list items
     *
     * <p>Returns a list of <code>ValueListItem</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Radar\ValueListItems $params): \StripeSDK\Responses\V1\Radar\ValueListItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueListItems::class)->get($params);
    }

    /** POST /v1/radar/value_list_items [operationId: PostRadarValueListItems] */
    /**
     * Create a value list item
     *
     * <p>Creates a new <code>ValueListItem</code> object, which is added to the specified parent value list.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Radar\ValueListItems\Post $payload): \StripeSDK\DTOs\Radar\ValueListItem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueListItems::class)->post($payload);
    }

    /** DELETE /v1/radar/value_list_items/{item} [operationId: DeleteRadarValueListItemsItem] */
    /**
     * Delete a value list item
     *
     * <p>Deletes a <code>ValueListItem</code> object, removing it from its parent value list.</p>
     */
    public static function deleteByItem(string $item, ?\StripeSDK\Requests\V1\Radar\ValueListItems\ByItem\Delete $payload = null): \StripeSDK\DTOs\DeletedRadar\ValueListItem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueListItems::class)->deleteByItem($item, $payload);
    }

    /** GET /v1/radar/value_list_items/{item} [operationId: GetRadarValueListItemsItem] */
    /**
     * Retrieve a value list item
     *
     * <p>Retrieves a <code>ValueListItem</code> object.</p>
     */
    public static function getByItem(string $item, ?\StripeSDK\GetParams\V1\Radar\ValueListItems\ByItem $params = null): \StripeSDK\DTOs\Radar\ValueListItem|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueListItems::class)->getByItem($item, $params);
    }
}
