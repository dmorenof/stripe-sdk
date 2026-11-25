<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Charges\ByCharge\Refunds;

final class ByRefund extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'charge',
        'refund',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'charge' => 'charge',
            'refund' => 'refund',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $charge;
    public string $refund;
}
