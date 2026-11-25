<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class ReceivedDebits extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/received_debits [operationId: GetTreasuryReceivedDebits] */
    /**
     * List all ReceivedDebits
     *
     * <p>Returns a list of ReceivedDebits.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\ReceivedDebits $params): \StripeSDK\Responses\V1\Treasury\ReceivedDebits\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\ReceivedDebits::class)->get($params);
    }

    /** GET /v1/treasury/received_debits/{id} [operationId: GetTreasuryReceivedDebitsId] */
    /**
     * Retrieve a ReceivedDebit
     *
     * <p>Retrieves the details of an existing ReceivedDebit by passing the unique ReceivedDebit ID from the ReceivedDebit list</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Treasury\ReceivedDebits\ById $params = null): \StripeSDK\DTOs\Treasury\ReceivedDebit|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\ReceivedDebits::class)->getById($id, $params);
    }
}
