<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class PaymentMethods extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/payment_methods [operationId: GetCustomersCustomerPaymentMethods] */
    /**
     * List a Customer's PaymentMethods
     *
     * <p>Returns a list of PaymentMethods for a given Customer</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\PaymentMethods $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\PaymentMethods\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\PaymentMethods::class)->get($customer, $params);
    }

    /** GET /v1/customers/{customer}/payment_methods/{payment_method} [operationId: GetCustomersCustomerPaymentMethodsPaymentMethod] */
    /**
     * Retrieve a Customer's PaymentMethod
     *
     * <p>Retrieves a PaymentMethod object for a given Customer.</p>
     */
    public static function getByPaymentMethod(\StripeSDK\PathParams\V1\Customers\ByCustomer\PaymentMethods\ByPaymentMethod $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\PaymentMethods\ByPaymentMethod $params = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\PaymentMethods::class)->getByPaymentMethod($identifier, $params);
    }
}
