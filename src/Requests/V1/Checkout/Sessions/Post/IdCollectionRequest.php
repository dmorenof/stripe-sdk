<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * tax_id_collection_params
 *
 * Controls tax ID collection during checkout.
 */
final class IdCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\TaxIdCollection\CollectionRequiredEnum $required;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'required' => is_string($value) ? $this->required = \StripeSDK\Enums\V1\Checkout\Sessions\Post\TaxIdCollection\CollectionRequiredEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
