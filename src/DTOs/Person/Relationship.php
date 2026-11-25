<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Person;

/**
 * PersonRelationship
 */
final class Relationship extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the person is the authorizer of the account's representative.
     */
    public ?bool $authorizer;
    /**
     * Whether the person is a director of the account's legal entity. Directors are typically members of the governing board of the company, or responsible for ensuring the company meets its regulatory obligations.
     */
    public ?bool $director;
    /**
     * Whether the person has significant responsibility to control, manage, or direct the organization.
     */
    public ?bool $executive;
    /**
     * Whether the person is the legal guardian of the account's representative.
     */
    public ?bool $legal_guardian;
    /**
     * Whether the person is an owner of the account’s legal entity.
     */
    public ?bool $owner;
    /**
     * The percent owned by the person of the account's legal entity.
     */
    public ?float $percent_ownership;
    /**
     * Whether the person is authorized as the primary representative of the account. This is the person nominated by the business to provide information about themselves, and general information about the account. There can only be one representative at any given time. At the time the account is created, this person should be set to the person responsible for opening the account.
     */
    public ?bool $representative;
    /**
     * The person's title (e.g., CEO, Support Engineer).
     */
    public ?string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorizer' => $value === null || is_bool($value) ? $this->authorizer = $value : parent::assignMember($name, $value),
            'director' => $value === null || is_bool($value) ? $this->director = $value : parent::assignMember($name, $value),
            'executive' => $value === null || is_bool($value) ? $this->executive = $value : parent::assignMember($name, $value),
            'legal_guardian' => $value === null || is_bool($value) ? $this->legal_guardian = $value : parent::assignMember($name, $value),
            'owner' => $value === null || is_bool($value) ? $this->owner = $value : parent::assignMember($name, $value),
            'percent_ownership' => $value === null || is_float($value) ? $this->percent_ownership = $value : parent::assignMember($name, $value),
            'representative' => $value === null || is_bool($value) ? $this->representative = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
