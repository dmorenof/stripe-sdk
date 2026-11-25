<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\WebhookEndpoints;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled_events',
        'url',
    ];

    protected const array VALIDATION = [
        'api_version' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Events sent to this endpoint will be generated with this Stripe Version instead of your account's default Stripe Version.
     */
    public \StripeSDK\Enums\V1\WebhookEndpoints\Post\WebhookEndpointsVersionEnum $api_version {
        set {
            $this->assigning('api_version', $value);
            $this->api_version = $value;
        }
    }
    /**
     * Whether this endpoint should receive events from connected accounts (`true`), or from your account (`false`). Defaults to `false`.
     */
    public bool $connect;
    /**
     * An optional description of what the webhook is used for.
     */
    public \StripeSDK\Requests\V1\WebhookEndpoints\Post\WebhookEndpointsDescriptionRequest $description;
    /**
     * The list of events to enable for this endpoint. You may specify `['*']` to enable all events, except those that require explicit selection.
     */
    public \StripeSDK\Collections\V1\WebhookEndpoints\Post\EnabledEventsCollection $enabled_events;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\WebhookEndpoints\Post\WebhookEndpointsMetadataRequest $metadata;
    /**
     * The URL of the webhook endpoint.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_version' => is_string($value) ? $this->api_version = \StripeSDK\Enums\V1\WebhookEndpoints\Post\WebhookEndpointsVersionEnum::from($value) : parent::assignMember($name, $value),
            'connect' => is_bool($value) ? $this->connect = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
