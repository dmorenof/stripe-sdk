<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person;

/**
 * relationship_specs
 */
final class PersonRelationshipRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    public bool $authorizer;
    public bool $director;
    public bool $executive;
    public bool $legal_guardian;
    public bool $owner;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\Relationship\PercentOwnershipRequest $percent_ownership;
    public bool $representative;
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorizer' => is_bool($value) ? $this->authorizer = $value : parent::assignMember($name, $value),
            'director' => is_bool($value) ? $this->director = $value : parent::assignMember($name, $value),
            'executive' => is_bool($value) ? $this->executive = $value : parent::assignMember($name, $value),
            'legal_guardian' => is_bool($value) ? $this->legal_guardian = $value : parent::assignMember($name, $value),
            'owner' => is_bool($value) ? $this->owner = $value : parent::assignMember($name, $value),
            'representative' => is_bool($value) ? $this->representative = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
