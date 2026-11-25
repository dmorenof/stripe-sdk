<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords;

final class ReportPayment extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/report_payment [operationId: PostPaymentRecordsReportPayment] */
    /**
     * Report a payment
     *
     * <p>Report a new Payment Record. You may report a Payment Record as it is
     *  initialized and later report updates through the other report_* methods, or report Payment
     *  Records in a terminal state directly, through this method.</p>
     */
    public static function post(\StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ReportPayment::class)->post($payload);
    }
}
