<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person;

/**
 * person_additional_tos_acceptances_specs
 */
final class TosAcceptancesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Tokens\Post\Person\AdditionalTosAcceptances\AcceptancesAccountRequest $account;
}
