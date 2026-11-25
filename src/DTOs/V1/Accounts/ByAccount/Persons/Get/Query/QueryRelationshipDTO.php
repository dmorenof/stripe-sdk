<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Accounts\ByAccount\Persons\Get\Query;

/**
 * all_people_relationship_specs
 */
final class QueryRelationshipDTO extends \Dmorenof\SdkRuntime\DTO
{
    public bool $authorizer;
    public bool $director;
    public bool $executive;
    public bool $legal_guardian;
    public bool $owner;
    public bool $representative;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorizer' => is_bool($value) ? $this->authorizer = $value : parent::assignMember($name, $value),
            'director' => is_bool($value) ? $this->director = $value : parent::assignMember($name, $value),
            'executive' => is_bool($value) ? $this->executive = $value : parent::assignMember($name, $value),
            'legal_guardian' => is_bool($value) ? $this->legal_guardian = $value : parent::assignMember($name, $value),
            'owner' => is_bool($value) ? $this->owner = $value : parent::assignMember($name, $value),
            'representative' => is_bool($value) ? $this->representative = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
