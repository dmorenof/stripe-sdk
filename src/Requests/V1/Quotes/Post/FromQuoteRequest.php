<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\Post;

/**
 * from_quote_params
 *
 * Clone an existing quote. The new quote will be created in `status=draft`. When using this parameter, you cannot specify any other parameters except for `expires_at`.
 */
final class FromQuoteRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'quote',
    ];

    protected const array VALIDATION = [
        'quote' => [
            'maxLength' => 5000,
        ],
    ];

    public bool $is_revision;
    public string $quote {
        set {
            $this->assigning('quote', $value);
            $this->quote = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_revision' => is_bool($value) ? $this->is_revision = $value : parent::assignMember($name, $value),
            'quote' => is_string($value) ? $this->quote = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
