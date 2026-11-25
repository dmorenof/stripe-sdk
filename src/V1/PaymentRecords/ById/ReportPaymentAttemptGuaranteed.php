<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords\ById;

final class ReportPaymentAttemptGuaranteed extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/{id}/report_payment_attempt_guaranteed [operationId: PostPaymentRecordsIdReportPaymentAttemptGuaranteed] */
    /**
     * Report payment attempt guaranteed
     *
     * <p>Report that the most recent payment attempt on the specified Payment Record
     *  was guaranteed.</p>
     */
    public static function post(string $id, \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptGuaranteed\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ById\ReportPaymentAttemptGuaranteed::class)->post($id, $payload);
    }
}
