<?php

declare(strict_types=1);

namespace StripeSDK\V1\Radar;

final class ValueLists extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/radar/value_lists [operationId: GetRadarValueLists] */
    /**
     * List all value lists
     *
     * <p>Returns a list of <code>ValueList</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Radar\ValueLists $params = null): \StripeSDK\Responses\V1\Radar\ValueLists\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueLists::class)->get($params);
    }

    /** POST /v1/radar/value_lists [operationId: PostRadarValueLists] */
    /**
     * Create a value list
     *
     * <p>Creates a new <code>ValueList</code> object, which can then be referenced in rules.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Radar\ValueLists\Post $payload): \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueLists::class)->post($payload);
    }

    /** DELETE /v1/radar/value_lists/{value_list} [operationId: DeleteRadarValueListsValueList] */
    /**
     * Delete a value list
     *
     * <p>Deletes a <code>ValueList</code> object, also deleting any items contained within the value list. To be deleted, a value list must not be referenced in any rules.</p>
     */
    public static function deleteByValueList(string $value_list, ?\StripeSDK\Requests\V1\Radar\ValueLists\ByValueList\Delete $payload = null): \StripeSDK\DTOs\DeletedRadar\ValueList|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueLists::class)->deleteByValueList($value_list, $payload);
    }

    /** GET /v1/radar/value_lists/{value_list} [operationId: GetRadarValueListsValueList] */
    /**
     * Retrieve a value list
     *
     * <p>Retrieves a <code>ValueList</code> object.</p>
     */
    public static function getByValueList(string $value_list, ?\StripeSDK\GetParams\V1\Radar\ValueLists\ByValueList $params = null): \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueLists::class)->getByValueList($value_list, $params);
    }

    /** POST /v1/radar/value_lists/{value_list} [operationId: PostRadarValueListsValueList] */
    /**
     * Update a value list
     *
     * <p>Updates a <code>ValueList</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Note that <code>item_type</code> is immutable.</p>
     */
    public static function postByValueList(string $value_list, ?\StripeSDK\Requests\V1\Radar\ValueLists\ByValueList\Post $payload = null): \StripeSDK\DTOs\Radar\ValueList|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\ValueLists::class)->postByValueList($value_list, $payload);
    }
}
