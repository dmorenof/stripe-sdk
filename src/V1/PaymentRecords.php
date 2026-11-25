<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentRecords extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_records [operationId: GetPaymentRecords] */
    /**
     * List Payment Records
     *
     * <p>List all the Payment Records for a given merchant.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PaymentRecords $params = null): \StripeSDK\Responses\V1\PaymentRecords\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords::class)->get($params);
    }

    /** GET /v1/payment_records/{id} [operationId: GetPaymentRecordsId] */
    /**
     * Retrieve a Payment Record
     *
     * <p>Retrieves a Payment Record with the given ID</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\PaymentRecords\ById $params = null): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords::class)->getById($id, $params);
    }
}
