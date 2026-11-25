<?php

declare(strict_types=1);

namespace StripeSDK\Requests\NameCollectionRequestVariant1;

/**
 * name_collection_individual_params
 */
final class NameCollectionRequestVariant1IndividualRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public bool $optional;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'optional' => is_bool($value) ? $this->optional = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
