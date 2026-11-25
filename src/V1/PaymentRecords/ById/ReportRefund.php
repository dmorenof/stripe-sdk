<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords\ById;

final class ReportRefund extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/{id}/report_refund [operationId: PostPaymentRecordsIdReportRefund] */
    /**
     * Report a refund
     *
     * <p>Report that the most recent payment attempt on the specified Payment Record
     *  was refunded.</p>
     */
    public static function post(string $id, \StripeSDK\Requests\V1\PaymentRecords\ById\ReportRefund\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ById\ReportRefund::class)->post($id, $payload);
    }
}
