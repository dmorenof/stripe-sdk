<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Apps\Secrets\Get\Query;

/**
 * scope_param
 */
final class QueryScopeDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'user' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Apps\Secrets\Get\Query\Scope\ScopeTypeEnum $type;
    public string $user {
        set {
            $this->assigning('user', $value);
            $this->user = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Apps\Secrets\Get\Query\Scope\ScopeTypeEnum::from($value) : parent::assignMember($name, $value),
            'user' => is_string($value) ? $this->user = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
