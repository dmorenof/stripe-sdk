<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post;

/**
 * pii_token_specs
 *
 * The PII this token represents.
 */
final class TokensPiiRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $id_number {
        set {
            $this->assigning('id_number', $value);
            $this->id_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_number' => is_string($value) ? $this->id_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
