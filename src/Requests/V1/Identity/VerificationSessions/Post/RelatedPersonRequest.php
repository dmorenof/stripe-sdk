<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Identity\VerificationSessions\Post;

/**
 * related_person_param
 *
 * Tokens referencing a Person resource and its associated account.
 */
final class RelatedPersonRequest extends \Dmorenof\SdkRuntime\DTO
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

    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
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
