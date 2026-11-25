<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Credit\Note;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Credit\NotesPretaxCreditAmount> */
final class CreditAmountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Credit\NotesPretaxCreditAmount::class;
}
