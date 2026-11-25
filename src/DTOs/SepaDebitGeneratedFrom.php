<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * sepa_debit_generated_from
 */
final class SepaDebitGeneratedFrom extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the Charge that generated this PaymentMethod, if any.
     */
    public ?\StripeSDK\DTOs\SepaDebitGeneratedFrom\ChargeDTO $charge;
    /**
     * The ID of the SetupAttempt that generated this PaymentMethod, if any.
     */
    public ?\StripeSDK\DTOs\SepaDebitGeneratedFrom\SetupAttemptDTO $setup_attempt;
}
