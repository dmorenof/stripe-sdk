<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PaymentDetailsRequest2Variant1;

/**
 * payment_details_capture_params
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\PaymentDetailsRequest2Variant1\CustomerReferenceRequest $customer_reference;
    public \StripeSDK\Requests\PaymentDetailsRequest2Variant1\OrderReferenceRequest $order_reference;
}
