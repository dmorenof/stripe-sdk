<?php

declare(strict_types=1);

namespace StripeSDK\V1\ApplePay;

final class Domains extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/apple_pay/domains [operationId: GetApplePayDomains] */
    /**
     * <p>List apple pay domains.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\ApplePay\Domains $params = null): \StripeSDK\Responses\V1\ApplePay\Domains\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplePay\Domains::class)->get($params);
    }

    /** POST /v1/apple_pay/domains [operationId: PostApplePayDomains] */
    /**
     * <p>Create an apple pay domain.</p>
     */
    public static function post(\StripeSDK\Requests\V1\ApplePay\Domains\Post $payload): \StripeSDK\DTOs\ApplePayDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplePay\Domains::class)->post($payload);
    }

    /** DELETE /v1/apple_pay/domains/{domain} [operationId: DeleteApplePayDomainsDomain] */
    /**
     * <p>Delete an apple pay domain.</p>
     */
    public static function deleteByDomain(string $domain, ?\StripeSDK\Requests\V1\ApplePay\Domains\ByDomain\Delete $payload = null): \StripeSDK\DTOs\Deleted\ApplePayDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplePay\Domains::class)->deleteByDomain($domain, $payload);
    }

    /** GET /v1/apple_pay/domains/{domain} [operationId: GetApplePayDomainsDomain] */
    /**
     * <p>Retrieve an apple pay domain.</p>
     */
    public static function getByDomain(string $domain, ?\StripeSDK\GetParams\V1\ApplePay\Domains\ByDomain $params = null): \StripeSDK\DTOs\ApplePayDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplePay\Domains::class)->getByDomain($domain, $params);
    }
}
