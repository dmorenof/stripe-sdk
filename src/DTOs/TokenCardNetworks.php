<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * token_card_networks
 */
final class TokenCardNetworks extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'preferred' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The preferred network for co-branded cards. Can be `cartes_bancaires`, `mastercard`, `visa` or `invalid_preference` if requested network is not valid for the card.
     */
    public ?string $preferred {
        set {
            $this->assigning('preferred', $value);
            $this->preferred = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred' => $value === null || is_string($value) ? $this->preferred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
