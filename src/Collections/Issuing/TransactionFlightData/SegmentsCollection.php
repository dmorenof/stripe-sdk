<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\TransactionFlightData;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Issuing\TransactionFlightDataLeg> */
final class SegmentsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\TransactionFlightDataLeg::class;
}
