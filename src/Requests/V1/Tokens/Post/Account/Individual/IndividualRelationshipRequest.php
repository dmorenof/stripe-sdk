<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Account\Individual;

/**
 * individual_relationship_specs
 */
final class IndividualRelationshipRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    public bool $director;
    public bool $executive;
    public bool $owner;
    public \StripeSDK\Requests\V1\Tokens\Post\Account\Individual\Relationship\PercentOwnershipRequest $percent_ownership;
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'director' => is_bool($value) ? $this->director = $value : parent::assignMember($name, $value),
            'executive' => is_bool($value) ? $this->executive = $value : parent::assignMember($name, $value),
            'owner' => is_bool($value) ? $this->owner = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
