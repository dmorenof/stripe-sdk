<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PaymentDetailsRequest3Variant1;

/**
 * payment_details
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\PaymentDetailsRequest3Variant1\CustomerReferenceRequest $customer_reference;
    public \StripeSDK\Requests\PaymentDetailsRequest3Variant1\OrderReferenceRequest $order_reference;
}
