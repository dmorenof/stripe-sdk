<?php

declare(strict_types=1);

namespace StripeSDK\V1\Radar;

final class PaymentEvaluations extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/radar/payment_evaluations [operationId: PostRadarPaymentEvaluations] */
    /**
     * Create a Payment Evaluation
     *
     * <p>Request a Radar API fraud risk score from Stripe for a payment before sending it for external processor authorization.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post $payload): \StripeSDK\DTOs\Radar\PaymentEvaluation|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Radar\PaymentEvaluations::class)->post($payload);
    }
}
