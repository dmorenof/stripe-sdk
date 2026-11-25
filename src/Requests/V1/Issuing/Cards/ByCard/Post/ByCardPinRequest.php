<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post;

/**
 * encrypted_pin_param
 *
 * The desired new PIN for this card.
 */
final class ByCardPinRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'encrypted_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $encrypted_number {
        set {
            $this->assigning('encrypted_number', $value);
            $this->encrypted_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'encrypted_number' => is_string($value) ? $this->encrypted_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
