<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\Post\Individual;

/**
 * card_issuing_param
 */
final class CardIssuingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\Individual\CardIssuing\TermsAcceptanceRequest $user_terms_acceptance;
}
