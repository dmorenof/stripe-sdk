<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Apps\Secrets;

final class Find extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'scope',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'expand' => 'expand',
            'name' => 'name',
            'scope' => 'scope',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\DTOs\V1\Apps\Secrets\Find\Get\Query\QueryScopeDTO $scope;
    public ?\StripeSDK\Requests\V1\Apps\Secrets\Find\Get $body;
}
