<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Forwarding;

/**
 * ForwardingRequest
 *
 * Instructs Stripe to make a request on your behalf using the destination URL. The destination URL
 * is activated by Stripe at the time of onboarding. Stripe verifies requests with your credentials
 * provided during onboarding, and injects card details from the payment_method into the request.
 *
 * Stripe redacts all sensitive fields and headers, including authentication credentials and card numbers,
 * before storing the request and response data in the forwarding Request object, which are subject to a
 * 30-day retention period.
 *
 * You can provide a Stripe idempotency key to make sure that requests with the same key result in only one
 * outbound request. The Stripe idempotency key provided should be unique and different from any idempotency
 * keys provided on the underlying third-party request.
 *
 * Forwarding Requests are synchronous requests that return a response or time out according to
 * Stripe’s limits.
 *
 * Related guide: [Forward card details to third-party API endpoints](https://docs.stripe.com/payments/forwarding).
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'payment_method',
        'replacements',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Forwarding\Request\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Forwarding\Request\ObjectEnum $object_;
    /**
     * The PaymentMethod to insert into the forwarded request. Forwarding previously consumed PaymentMethods is allowed.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * The field kinds to be replaced in the forwarded request.
     */
    public \StripeSDK\Collections\Forwarding\Request\ReplacementsCollection $replacements;
    /**
     * Context about the request from Stripe's servers to the destination endpoint.
     */
    public ?\StripeSDK\DTOs\ForwardedRequest\Context $request_context;
    /**
     * The request that was sent to the destination endpoint. We redact any sensitive fields.
     */
    public ?\StripeSDK\DTOs\ForwardedRequest\Details $request_details;
    /**
     * The response that the destination endpoint returned to us. We redact any sensitive fields.
     */
    public ?\StripeSDK\DTOs\ForwardedResponseDetails $response_details;
    /**
     * The destination URL for the forwarded request. Must be supported by the config.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Forwarding\Request\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'request_context' => $value === null || $value instanceof \stdClass ? $this->request_context = $value === null ? null : new \StripeSDK\DTOs\ForwardedRequest\Context($value) : parent::assignMember($name, $value),
            'request_details' => $value === null || $value instanceof \stdClass ? $this->request_details = $value === null ? null : new \StripeSDK\DTOs\ForwardedRequest\Details($value) : parent::assignMember($name, $value),
            'response_details' => $value === null || $value instanceof \stdClass ? $this->response_details = $value === null ? null : new \StripeSDK\DTOs\ForwardedResponseDetails($value) : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
