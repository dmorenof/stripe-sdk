<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * ForwardedResponseDetail
 *
 * Details about the response from the destination endpoint.
 */
final class ForwardedResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
        'headers',
        'status',
    ];

    protected const array VALIDATION = [
        'body' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The response body from the destination endpoint to Stripe.
     */
    public string $body {
        set {
            $this->assigning('body', $value);
            $this->body = $value;
        }
    }
    /**
     * HTTP headers that the destination endpoint returned.
     */
    public \StripeSDK\Collections\ForwardedRequest\Details\HeadersCollection $headers;
    /**
     * The HTTP status code that the destination endpoint returned.
     */
    public int $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'headers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->headers = new \StripeSDK\Collections\ForwardedRequest\Details\HeadersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\ForwardedRequest\Header::class)) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
