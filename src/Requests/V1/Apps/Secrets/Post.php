<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Apps\Secrets;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'payload',
        'scope',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
        'payload' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The Unix timestamp for the expiry time of the secret, after which the secret deletes.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * A name for the secret that's unique within the scope.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The plaintext secret value to be stored.
     */
    public string $payload {
        set {
            $this->assigning('payload', $value);
            $this->payload = $value;
        }
    }
    /**
     * Specifies the scoping of the secret. Requests originating from UI extensions can only access account-scoped secrets or secrets scoped to their own user.
     */
    public \StripeSDK\Requests\V1\Apps\Secrets\Post\SecretsScopeRequest $scope;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
