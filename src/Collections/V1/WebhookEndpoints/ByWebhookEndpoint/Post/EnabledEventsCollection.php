<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\WebhookEndpoints\ByWebhookEndpoint\Post;

final class EnabledEventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\WebhookEndpoints\ByWebhookEndpoint\Post\EnabledEventsEnum::class;
}
