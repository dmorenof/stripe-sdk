<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentMethodConfigurations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_method_configurations [operationId: GetPaymentMethodConfigurations] */
    /**
     * List payment method configurations
     *
     * <p>List payment method configurations</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PaymentMethodConfigurations $params = null): \StripeSDK\Responses\V1\PaymentMethodConfigurations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodConfigurations::class)->get($params);
    }

    /** POST /v1/payment_method_configurations [operationId: PostPaymentMethodConfigurations] */
    /**
     * Create a payment method configuration
     *
     * <p>Creates a payment method configuration</p>
     */
    public static function post(?\StripeSDK\Requests\V1\PaymentMethodConfigurations\Post $payload = null): \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodConfigurations::class)->post($payload);
    }

    /** GET /v1/payment_method_configurations/{configuration} [operationId: GetPaymentMethodConfigurationsConfiguration] */
    /**
     * Retrieve payment method configuration
     *
     * <p>Retrieve payment method configuration</p>
     */
    public static function getByConfiguration(string $configuration, ?\StripeSDK\GetParams\V1\PaymentMethodConfigurations\ByConfiguration $params = null): \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodConfigurations::class)->getByConfiguration($configuration, $params);
    }

    /** POST /v1/payment_method_configurations/{configuration} [operationId: PostPaymentMethodConfigurationsConfiguration] */
    /**
     * Update payment method configuration
     *
     * <p>Update payment method configuration</p>
     */
    public static function postByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post $payload = null): \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodConfigurations::class)->postByConfiguration($configuration, $payload);
    }
}
