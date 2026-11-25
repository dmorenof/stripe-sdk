<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\Post;

/**
 * redirect_params
 *
 * Parameters required for the redirect flow. Required if the source is authenticated by a redirect (`flow` is `redirect`).
 */
final class SourcesRedirectRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'return_url',
    ];

    public string $return_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
