<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Documents;

/**
 * signer_param
 */
final class BeneficialOwnershipRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\BankAccountRequestVariant1\Documents\BankAccountOwnershipVerification\VerificationFilesCollection $files;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\ProofOfUltimateBeneficialOwnership\OwnershipSignerRequest $signer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->files = new \StripeSDK\Collections\BankAccountRequestVariant1\Documents\BankAccountOwnershipVerification\VerificationFilesCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
