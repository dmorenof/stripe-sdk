<?php

declare(strict_types=1);

namespace StripeSDK\Collections\ForwardedRequest\Details;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\ForwardedRequest\Header> */
final class HeadersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\ForwardedRequest\Header::class;
}
