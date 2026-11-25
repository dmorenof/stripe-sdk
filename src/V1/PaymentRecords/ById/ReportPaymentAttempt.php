<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords\ById;

final class ReportPaymentAttempt extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/{id}/report_payment_attempt [operationId: PostPaymentRecordsIdReportPaymentAttempt] */
    /**
     * Report a payment attempt
     *
     * <p>Report a new payment attempt on the specified Payment Record. A new payment
     *  attempt can only be specified if all other payment attempts are canceled or failed.</p>
     */
    public static function post(string $id, \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ById\ReportPaymentAttempt::class)->post($id, $payload);
    }
}
