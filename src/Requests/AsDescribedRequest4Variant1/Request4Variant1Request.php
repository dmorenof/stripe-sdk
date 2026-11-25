<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequest4Variant1;

/**
 * service_not_as_described
 */
final class Request4Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\AsDescribedRequest4Variant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\AsDescribedRequest4Variant1\CanceledAtRequest $canceled_at;
    public \StripeSDK\Requests\AsDescribedRequest4Variant1\CancellationReasonRequest $cancellation_reason;
    public \StripeSDK\Requests\AsDescribedRequest4Variant1\AsDescribedRequest4Variant1ExplanationRequest $explanation;
    public \StripeSDK\Requests\AsDescribedRequest4Variant1\ReceivedAtRequest $received_at;
}
