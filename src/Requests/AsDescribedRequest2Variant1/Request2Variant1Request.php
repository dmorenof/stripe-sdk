<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequest2Variant1;

/**
 * service_not_as_described
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AsDescribedRequest2Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\AsDescribedRequest2Variant1\CanceledAtRequest $canceled_at;
    public \StripeSDK\Requests\AsDescribedRequest2Variant1\CancellationReasonRequest $cancellation_reason;
    public \StripeSDK\Requests\AsDescribedRequest2Variant1\AsDescribedRequest2Variant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\AsDescribedRequest2Variant1\ReceivedAtRequest $received_at;
}
