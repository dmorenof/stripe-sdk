<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentAttemptRecords extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_attempt_records [operationId: GetPaymentAttemptRecords] */
    /**
     * List Payment Attempt Records
     *
     * <p>List all the Payment Attempt Records attached to the specified Payment Record.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\PaymentAttemptRecords $params): \StripeSDK\Responses\V1\PaymentAttemptRecords\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentAttemptRecords::class)->get($params);
    }

    /** GET /v1/payment_attempt_records/{id} [operationId: GetPaymentAttemptRecordsId] */
    /**
     * Retrieve a Payment Attempt Record
     *
     * <p>Retrieves a Payment Attempt Record with the given ID</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\PaymentAttemptRecords\ById $params = null): \StripeSDK\DTOs\Payment\AttemptRecord|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentAttemptRecords::class)->getById($id, $params);
    }
}
