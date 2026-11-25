<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * fraudulent
 */
final class FraudulentVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EvidenceFraudulentRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\EvidenceFraudulentRequestVariant1\EvidenceFraudulentRequestVariant1ExplanationRequest $explanation;
}
