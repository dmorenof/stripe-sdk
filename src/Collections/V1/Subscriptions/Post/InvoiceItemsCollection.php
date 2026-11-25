<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Subscriptions\Post;

final class InvoiceItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Requests\V1\Subscriptions\Post\InvoiceItemsRequest::class;
}
