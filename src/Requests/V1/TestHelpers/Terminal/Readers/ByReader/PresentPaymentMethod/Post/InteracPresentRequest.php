<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post;

/**
 * interac_present
 *
 * Simulated data for the interac_present payment method.
 */
final class InteracPresentRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
