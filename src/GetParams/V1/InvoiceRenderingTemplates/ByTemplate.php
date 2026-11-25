<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\InvoiceRenderingTemplates;

final class ByTemplate extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'expand' => 'expand',
            'version' => 'version',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $version;
    public ?\StripeSDK\Requests\V1\InvoiceRenderingTemplates\ByTemplate\Get $body;
}
