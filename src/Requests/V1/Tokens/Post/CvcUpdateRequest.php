<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post;

/**
 * cvc_params
 *
 * The updated CVC value this token represents.
 */
final class CvcUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cvc',
    ];

    protected const array VALIDATION = [
        'cvc' => [
            'maxLength' => 5000,
        ],
    ];

    public string $cvc {
        set {
            $this->assigning('cvc', $value);
            $this->cvc = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cvc' => is_string($value) ? $this->cvc = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
