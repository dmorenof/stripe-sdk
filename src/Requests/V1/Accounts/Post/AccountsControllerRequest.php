<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * controller_specs
 *
 * A hash of configuration describing the account controller's attributes.
 */
final class AccountsControllerRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Controller\ControllerFeesRequest $fees;
    public \StripeSDK\Requests\V1\Accounts\Post\Controller\ControllerLossesRequest $losses;
    public \StripeSDK\Enums\V1\Accounts\Post\Controller\RequirementCollectionEnum $requirement_collection;
    public \StripeSDK\Requests\V1\Accounts\Post\Controller\StripeDashboardRequest $stripe_dashboard;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requirement_collection' => is_string($value) ? $this->requirement_collection = \StripeSDK\Enums\V1\Accounts\Post\Controller\RequirementCollectionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
