<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Cards extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/cards [operationId: GetIssuingCards] */
    /**
     * List all cards
     *
     * <p>Returns a list of Issuing <code>Card</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\Cards $params = null): \StripeSDK\Responses\V1\Issuing\Cards\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cards::class)->get($params);
    }

    /** POST /v1/issuing/cards [operationId: PostIssuingCards] */
    /**
     * Create a card
     *
     * <p>Creates an Issuing <code>Card</code> object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Issuing\Cards\Post $payload): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cards::class)->post($payload);
    }

    /** GET /v1/issuing/cards/{card} [operationId: GetIssuingCardsCard] */
    /**
     * Retrieve a card
     *
     * <p>Retrieves an Issuing <code>Card</code> object.</p>
     */
    public static function getByCard(string $card, ?\StripeSDK\GetParams\V1\Issuing\Cards\ByCard $params = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cards::class)->getByCard($card, $params);
    }

    /** POST /v1/issuing/cards/{card} [operationId: PostIssuingCardsCard] */
    /**
     * Update a card
     *
     * <p>Updates the specified Issuing <code>Card</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByCard(string $card, ?\StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post $payload = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cards::class)->postByCard($card, $payload);
    }
}
