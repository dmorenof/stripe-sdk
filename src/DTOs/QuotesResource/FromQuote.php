<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * QuotesResourceFromQuote
 */
final class FromQuote extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'is_revision',
        'quote',
    ];

    /**
     * Whether this quote is a revision of a different quote.
     */
    public bool $is_revision;
    /**
     * The quote that was cloned.
     */
    public \StripeSDK\DTOs\QuotesResource\FromQuote\QuoteDTO $quote;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_revision' => is_bool($value) ? $this->is_revision = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
