<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * payment_details
 *
 * Provides industry-specific information about the charge.
 */
final class PaymentDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentDetails\CustomerReferenceRequest $customer_reference;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentDetails\OrderReferenceRequest $order_reference;
}
