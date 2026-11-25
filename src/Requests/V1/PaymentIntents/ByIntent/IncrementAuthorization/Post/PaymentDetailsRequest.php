<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post;

/**
 * payment_details_order_customer_reference_param
 *
 * Provides industry-specific information about the charge.
 */
final class PaymentDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\PaymentDetails\CustomerReferenceRequest $customer_reference;
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\PaymentDetails\OrderReferenceRequest $order_reference;
}
