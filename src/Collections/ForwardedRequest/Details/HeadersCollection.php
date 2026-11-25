<?php

declare(strict_types=1);

namespace StripeSDK\Collections\ForwardedRequest\Details;

final class HeadersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\ForwardedRequest\Header::class;
}
