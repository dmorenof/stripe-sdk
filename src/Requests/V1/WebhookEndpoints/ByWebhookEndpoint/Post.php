<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An optional description of what the webhook is used for.
     */
    public \StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint\Post\ByWebhookEndpointDescriptionRequest $description;
    /**
     * Disable the webhook endpoint if set to true.
     */
    public bool $disabled;
    /**
     * The list of events to enable for this endpoint. You may specify `['*']` to enable all events, except those that require explicit selection.
     */
    public \StripeSDK\Collections\V1\WebhookEndpoints\ByWebhookEndpoint\Post\EnabledEventsCollection $enabled_events;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\WebhookEndpoints\ByWebhookEndpoint\Post\ByWebhookEndpointMetadataRequest $metadata;
    /**
     * The URL of the webhook endpoint.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disabled' => is_bool($value) ? $this->disabled = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
