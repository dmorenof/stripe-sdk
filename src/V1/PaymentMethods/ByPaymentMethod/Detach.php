<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentMethods\ByPaymentMethod;

final class Detach extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_methods/{payment_method}/detach [operationId: PostPaymentMethodsPaymentMethodDetach] */
    /**
     * Detach a PaymentMethod from a Customer
     *
     * <p>Detaches a PaymentMethod object from a Customer. Detachment is permanent and irreversible — once detached, a PaymentMethod can no longer be used for payments or re-attached to a Customer.</p>
     */
    public static function post(string $payment_method, ?\StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Detach\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethods\ByPaymentMethod\Detach::class)->post($payment_method, $payload);
    }
}
