<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Treasury\ReceivedCredits\Get\Query;

/**
 * linked_flows_param
 */
final class LinkedFlowsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source_flow_type',
    ];

    public \StripeSDK\Enums\V1\Treasury\ReceivedCredits\Get\Query\LinkedFlows\FlowTypeEnum $source_flow_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'source_flow_type' => is_string($value) ? $this->source_flow_type = \StripeSDK\Enums\V1\Treasury\ReceivedCredits\Get\Query\LinkedFlows\FlowTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
