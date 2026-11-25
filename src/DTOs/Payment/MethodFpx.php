<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_fpx
 */
final class MethodFpx extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bank',
    ];

    /**
     * The customer's bank, if provided. Can be one of `affin_bank`, `agrobank`, `alliance_bank`, `ambank`, `bank_islam`, `bank_muamalat`, `bnp_paribas`, `bank_rakyat`, `bsn`, `cimb`, `citibank`, `hong_leong_bank`, `hsbc`, `kfh`, `maybank2u`, `ocbc`, `public_bank`, `rhb`, `standard_chartered`, `uob`, `deutsche_bank`, `maybank2e`, `mbsb_bank`, `pb_enterprise`, or `bank_of_china`.
     */
    public \StripeSDK\Enums\Payment\MethodFpx\BankEnum $bank;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => is_string($value) ? $this->bank = \StripeSDK\Enums\Payment\MethodFpx\BankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
