<?php

declare(strict_types=1);

namespace StripeSDK\Collections\TerminalReaderReaderResource\Cart;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\TerminalReaderReaderResource\LineItem> */
final class LineItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TerminalReaderReaderResource\LineItem::class;
}
