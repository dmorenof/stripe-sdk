<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords\ById;

final class ReportPaymentAttemptCanceled extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/{id}/report_payment_attempt_canceled [operationId: PostPaymentRecordsIdReportPaymentAttemptCanceled] */
    /**
     * Report payment attempt canceled
     *
     * <p>Report that the most recent payment attempt on the specified Payment Record
     *  was canceled.</p>
     */
    public static function post(string $id, \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptCanceled\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ById\ReportPaymentAttemptCanceled::class)->post($id, $payload);
    }
}
