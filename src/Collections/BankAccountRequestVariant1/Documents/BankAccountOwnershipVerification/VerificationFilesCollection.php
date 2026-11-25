<?php

declare(strict_types=1);

namespace StripeSDK\Collections\BankAccountRequestVariant1\Documents\BankAccountOwnershipVerification;

final class VerificationFilesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'maxLength' => 500,
    ];
}
