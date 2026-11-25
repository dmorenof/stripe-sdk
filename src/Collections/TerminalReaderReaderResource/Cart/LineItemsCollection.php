<?php

declare(strict_types=1);

namespace StripeSDK\Collections\TerminalReaderReaderResource\Cart;

final class LineItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TerminalReaderReaderResource\LineItem::class;
}
