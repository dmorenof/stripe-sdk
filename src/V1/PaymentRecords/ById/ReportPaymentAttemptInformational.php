<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentRecords\ById;

final class ReportPaymentAttemptInformational extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_records/{id}/report_payment_attempt_informational [operationId: PostPaymentRecordsIdReportPaymentAttemptInformational] */
    /**
     * Report payment attempt informational
     *
     * <p>Report informational updates on the specified Payment Record.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post $payload = null): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentRecords\ById\ReportPaymentAttemptInformational::class)->post($id, $payload);
    }
}
