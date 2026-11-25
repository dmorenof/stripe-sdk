<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Files\Post;

/**
 * file_link_creation_params
 *
 * Optional parameters that automatically create a [file link](https://docs.stripe.com/api#file_links) for the newly created file.
 */
final class LinkDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'create',
    ];

    public bool $create;
    /**
     * Format: unix-time
     */
    public int $expires_at;
    public \StripeSDK\Requests\V1\Files\Post\FileLinkData\DataMetadataRequest $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'create' => is_bool($value) ? $this->create = $value : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
