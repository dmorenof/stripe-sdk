<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Webhook Endpoint
 *
 * You can configure [webhook endpoints](https://docs.stripe.com/webhooks/) via the API to be
 * notified about events that happen in your Stripe account or connected
 * accounts.
 *
 * Most users configure webhooks from [the dashboard](https://dashboard.stripe.com/webhooks), which provides a user interface for registering and testing your webhook endpoints.
 *
 * Related guide: [Setting up webhooks](https://docs.stripe.com/webhooks/configure)
 */
final class WebhookEndpoint extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'enabled_events',
        'id',
        'livemode',
        'metadata',
        'object_',
        'status',
        'url',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'application' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'secret' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The API version that events are rendered as for this webhook endpoint. You can't change this value after you create the endpoint.
     */
    public ?string $api_version;
    /**
     * The ID of the associated Connect application.
     */
    public ?string $application {
        set {
            $this->assigning('application', $value);
            $this->application = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * An optional description of what the webhook is used for.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The list of events to enable for this endpoint. `['*']` indicates that all events are enabled, except those that require explicit selection.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $enabled_events;
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
    public \StripeSDK\DTOs\WebhookEndpoint\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\WebhookEndpoint\ObjectEnum $object_;
    /**
     * The endpoint's secret, used to generate [webhook signatures](https://docs.stripe.com/webhooks/signatures). Only returned at creation.
     */
    public string $secret {
        set {
            $this->assigning('secret', $value);
            $this->secret = $value;
        }
    }
    /**
     * The status of the webhook. It can be `enabled` or `disabled`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * The URL of the webhook endpoint.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_version' => $value === null || is_string($value) ? $this->api_version = $value : parent::assignMember($name, $value),
            'application' => $value === null || is_string($value) ? $this->application = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'enabled_events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->enabled_events = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\WebhookEndpoint\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'secret' => is_string($value) ? $this->secret = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
