<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountUnificationAccountController
 */
final class UnificationAccountController extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Account\UnificationAccountControllerFees $fees;
    /**
     * `true` if the Connect application retrieving the resource controls the account and can therefore exercise [platform controls](https://docs.stripe.com/connect/platform-controls-for-standard-accounts). Otherwise, this field is null.
     */
    public bool $is_controller;
    public \StripeSDK\DTOs\Account\UnificationAccountControllerLosses $losses;
    /**
     * A value indicating responsibility for collecting requirements on this account. Only returned when the Connect application retrieving the resource controls the account.
     */
    public \StripeSDK\Enums\Account\UnificationAccountController\RequirementCollectionEnum $requirement_collection;
    public \StripeSDK\DTOs\Account\UnificationAccountControllerStripeDashboard $stripe_dashboard;
    /**
     * The controller type. Can be `application`, if a Connect application controls the account, or `account`, if the account controls itself.
     */
    public \StripeSDK\Enums\Account\UnificationAccountController\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fees' => $value instanceof \stdClass ? $this->fees = new \StripeSDK\DTOs\Account\UnificationAccountControllerFees($value) : parent::assignMember($name, $value),
            'is_controller' => is_bool($value) ? $this->is_controller = $value : parent::assignMember($name, $value),
            'losses' => $value instanceof \stdClass ? $this->losses = new \StripeSDK\DTOs\Account\UnificationAccountControllerLosses($value) : parent::assignMember($name, $value),
            'requirement_collection' => is_string($value) ? $this->requirement_collection = \StripeSDK\Enums\Account\UnificationAccountController\RequirementCollectionEnum::from($value) : parent::assignMember($name, $value),
            'stripe_dashboard' => $value instanceof \stdClass ? $this->stripe_dashboard = new \StripeSDK\DTOs\Account\UnificationAccountControllerStripeDashboard($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Account\UnificationAccountController\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
