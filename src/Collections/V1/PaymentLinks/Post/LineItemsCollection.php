<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\PaymentLinks\Post;

final class LineItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Requests\V1\PaymentLinks\Post\LineItemsRequest::class;
}
