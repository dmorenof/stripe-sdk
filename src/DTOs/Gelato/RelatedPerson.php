<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoRelatedPerson
 */
final class RelatedPerson extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'person',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'person' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Token referencing the associated Account of the related Person resource.
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    /**
     * Token referencing the related Person resource.
     */
    public string $person {
        set {
            $this->assigning('person', $value);
            $this->person = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'person' => is_string($value) ? $this->person = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
