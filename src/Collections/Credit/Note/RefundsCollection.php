<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Credit\Note;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Credit\NoteRefund> */
final class RefundsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Credit\NoteRefund::class;
}
