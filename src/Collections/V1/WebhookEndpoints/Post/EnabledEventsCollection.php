<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\WebhookEndpoints\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\WebhookEndpoints\Post\EnabledEventsEnum> */
final class EnabledEventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\WebhookEndpoints\Post\EnabledEventsEnum::class;
}
