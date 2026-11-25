<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post;

/**
 * person_additional_tos_acceptances_specs
 *
 * Details on the legal guardian's or authorizer's acceptance of the required Stripe agreements.
 */
final class TosAcceptancesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post\AdditionalTosAcceptances\AcceptancesAccountRequest $account;
}
