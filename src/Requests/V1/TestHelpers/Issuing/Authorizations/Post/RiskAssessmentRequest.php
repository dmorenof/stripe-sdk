<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post;

/**
 * risk_assessment_specs
 *
 * Stripe’s assessment of the fraud risk for this authorization.
 */
final class RiskAssessmentRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\TestingRiskRequest $card_testing_risk;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\FraudRiskRequest $fraud_risk;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\DisputeRiskRequest $merchant_dispute_risk;
}
