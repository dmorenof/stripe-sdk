<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Credit\Note;

final class RefundsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Credit\NoteRefund::class;
}
