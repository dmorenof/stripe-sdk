<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class Discount extends \StripeSDK\StripeAPISDK
{
    /** DELETE /v1/customers/{customer}/discount [operationId: DeleteCustomersCustomerDiscount] */
    /**
     * Delete a customer discount
     *
     * <p>Removes the currently applied discount on a customer.</p>
     */
    public static function delete(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Discount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Discount::class)->delete($customer, $payload);
    }

    /** GET /v1/customers/{customer}/discount [operationId: GetCustomersCustomerDiscount] */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Discount $params = null): \StripeSDK\DTOs\Discount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\Discount::class)->get($customer, $params);
    }
}
