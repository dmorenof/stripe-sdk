<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Documents\ProofOfUltimateBeneficialOwnership;

/**
 * signer_name_param
 */
final class OwnershipSignerRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'person' => [
            'maxLength' => 5000,
        ],
    ];

    public string $person {
        set {
            $this->assigning('person', $value);
            $this->person = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'person' => is_string($value) ? $this->person = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
