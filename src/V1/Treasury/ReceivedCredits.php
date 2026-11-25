<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class ReceivedCredits extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/received_credits [operationId: GetTreasuryReceivedCredits] */
    /**
     * List all ReceivedCredits
     *
     * <p>Returns a list of ReceivedCredits.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\ReceivedCredits $params): \StripeSDK\Responses\V1\Treasury\ReceivedCredits\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\ReceivedCredits::class)->get($params);
    }

    /** GET /v1/treasury/received_credits/{id} [operationId: GetTreasuryReceivedCreditsId] */
    /**
     * Retrieve a ReceivedCredit
     *
     * <p>Retrieves the details of an existing ReceivedCredit by passing the unique ReceivedCredit ID from the ReceivedCredit list.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Treasury\ReceivedCredits\ById $params = null): \StripeSDK\DTOs\Treasury\ReceivedCredit|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\ReceivedCredits::class)->getById($id, $params);
    }
}
