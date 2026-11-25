<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents;

/**
 * documents_param
 */
final class MemorandumAssociationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\BankAccountRequestVariant1\Documents\BankAccountOwnershipVerification\VerificationFilesCollection $files;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->files = new \StripeSDK\Collections\BankAccountRequestVariant1\Documents\BankAccountOwnershipVerification\VerificationFilesCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
