<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * account_groups_specs
 *
 * A hash of account group type to tokens. These are account groups this account should be added to.
 */
final class AccountsGroupsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Groups\PaymentsPricingRequest $payments_pricing;
}
