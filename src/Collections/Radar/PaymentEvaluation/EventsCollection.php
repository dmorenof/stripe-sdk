<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Radar\PaymentEvaluation;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Event> */
final class EventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Event::class;
}
