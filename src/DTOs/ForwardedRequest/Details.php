<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ForwardedRequest;

/**
 * ForwardedRequestDetail
 *
 * Details about the request forwarded to the destination endpoint.
 */
final class Details extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
        'headers',
        'http_method',
    ];

    protected const array VALIDATION = [
        'body' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The body payload to send to the destination endpoint.
     */
    public string $body {
        set {
            $this->assigning('body', $value);
            $this->body = $value;
        }
    }
    /**
     * The headers to include in the forwarded request. Can be omitted if no additional headers (excluding Stripe-generated ones such as the Content-Type header) should be included.
     */
    public \StripeSDK\Collections\ForwardedRequest\Details\HeadersCollection $headers;
    /**
     * The HTTP method used to call the destination endpoint.
     */
    public \StripeSDK\Enums\ForwardedRequest\Details\HttpMethodEnum $http_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'headers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->headers = new \StripeSDK\Collections\ForwardedRequest\Details\HeadersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\ForwardedRequest\Header::class)) : parent::assignMember($name, $value),
            'http_method' => is_string($value) ? $this->http_method = \StripeSDK\Enums\ForwardedRequest\Details\HttpMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
