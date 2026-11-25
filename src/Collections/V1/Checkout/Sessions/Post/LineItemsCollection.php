<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Checkout\Sessions\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Requests\V1\Checkout\Sessions\Post\LineItemsRequest> */
final class LineItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Requests\V1\Checkout\Sessions\Post\LineItemsRequest::class;
}
