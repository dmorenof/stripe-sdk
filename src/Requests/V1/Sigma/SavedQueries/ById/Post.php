<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sigma\SavedQueries\ById;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
        'sql' => [
            'maxLength' => 100000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The name of the query to update.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The sql statement to update the specified query statement with. This should be a valid ANSI SQL statement that can be run in Sigma.
     */
    public string $sql {
        set {
            $this->assigning('sql', $value);
            $this->sql = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sql' => is_string($value) ? $this->sql = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
