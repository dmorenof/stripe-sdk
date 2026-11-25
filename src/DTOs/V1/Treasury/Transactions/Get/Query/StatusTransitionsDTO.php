<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Treasury\Transactions\Get\Query;

/**
 * status_transition_timestamp_specs
 */
final class StatusTransitionsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\V1\Treasury\Transactions\Get\Query\StatusTransitions\PostedAtDTO $posted_at;
}
