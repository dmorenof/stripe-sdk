<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ApiErrors;

enum TypeEnum: string
{
    case ApiError = 'api_error';
    case CardError = 'card_error';
    case IdempotencyError = 'idempotency_error';
    case InvalidRequestError = 'invalid_request_error';
}
