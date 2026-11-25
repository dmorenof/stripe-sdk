<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccount;

enum PendingFeaturesEnum: string
{
    case CardIssuing = 'card_issuing';
    case DepositInsurance = 'deposit_insurance';
    case FinancialAddressesaba = 'financial_addresses.aba';
    case FinancialAddressesabaforwarding = 'financial_addresses.aba.forwarding';
    case InboundTransfersach = 'inbound_transfers.ach';
    case IntraStripeFlows = 'intra_stripe_flows';
    case OutboundPaymentsach = 'outbound_payments.ach';
    case OutboundPaymentsusDomesticWire = 'outbound_payments.us_domestic_wire';
    case OutboundTransfersach = 'outbound_transfers.ach';
    case OutboundTransfersusDomesticWire = 'outbound_transfers.us_domestic_wire';
    case RemoteDepositCapture = 'remote_deposit_capture';
}
