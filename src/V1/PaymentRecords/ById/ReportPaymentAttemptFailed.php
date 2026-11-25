<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords\ById;

final class ReportPaymentAttemptFailed extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/{id}/report_payment_attempt_failed [operationId: PostPaymentRecordsIdReportPaymentAttemptFailed] */
    /**
     * Report payment attempt failed
     *
     * <p>Report that the most recent payment attempt on the specified Payment Record
     *  failed or errored.</p>
     */
    public static function post(string $id, \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptFailed\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ById\ReportPaymentAttemptFailed::class)->post($id, $payload);
    }
}
