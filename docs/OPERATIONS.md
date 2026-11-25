# Stripe SDK for PHP (generated): operations

612 operations. Each is a static method of a facade class (`StripeSDK\...`); configure the SDK once with `StripeAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Retrieve account | GET | `/v1/account` | `V1\Account::get()` |
| Create an account link | POST | `/v1/account_links` | `V1\AccountLinks::post()` |
| Create an Account Session | POST | `/v1/account_sessions` | `V1\AccountSessions::post()` |
| List all connected accounts | GET | `/v1/accounts` | `V1\Accounts::get()` |
| Create an account | POST | `/v1/accounts` | `V1\Accounts::post()` |
| Delete an account | DELETE | `/v1/accounts/{account}` | `V1\Accounts::deleteByAccount()` |
| Retrieve account | GET | `/v1/accounts/{account}` | `V1\Accounts::getByAccount()` |
| Update an account | POST | `/v1/accounts/{account}` | `V1\Accounts::postByAccount()` |
| Create an external account | POST | `/v1/accounts/{account}/bank_accounts` | `V1\Accounts\ByAccount\BankAccounts::post()` |
| Delete an external account | DELETE | `/v1/accounts/{account}/bank_accounts/{id}` | `V1\Accounts\ByAccount\BankAccounts::deleteById()` |
| Retrieve an external account | GET | `/v1/accounts/{account}/bank_accounts/{id}` | `V1\Accounts\ByAccount\BankAccounts::getById()` |
| Update a bank account | POST | `/v1/accounts/{account}/bank_accounts/{id}` | `V1\Accounts\ByAccount\BankAccounts::postById()` |
| List all account capabilities | GET | `/v1/accounts/{account}/capabilities` | `V1\Accounts\ByAccount\Capabilities::get()` |
| Retrieve an Account Capability | GET | `/v1/accounts/{account}/capabilities/{capability}` | `V1\Accounts\ByAccount\Capabilities::getByCapability()` |
| Update an Account Capability | POST | `/v1/accounts/{account}/capabilities/{capability}` | `V1\Accounts\ByAccount\Capabilities::postByCapability()` |
| List all external accounts | GET | `/v1/accounts/{account}/external_accounts` | `V1\Accounts\ByAccount\ExternalAccounts::get()` |
| Create an external account | POST | `/v1/accounts/{account}/external_accounts` | `V1\Accounts\ByAccount\ExternalAccounts::post()` |
| Delete an external account | DELETE | `/v1/accounts/{account}/external_accounts/{id}` | `V1\Accounts\ByAccount\ExternalAccounts::deleteById()` |
| Retrieve an external account | GET | `/v1/accounts/{account}/external_accounts/{id}` | `V1\Accounts\ByAccount\ExternalAccounts::getById()` |
| Update a bank account | POST | `/v1/accounts/{account}/external_accounts/{id}` | `V1\Accounts\ByAccount\ExternalAccounts::postById()` |
| Create a login link | POST | `/v1/accounts/{account}/login_links` | `V1\Accounts\ByAccount\LoginLinks::post()` |
| List all persons | GET | `/v1/accounts/{account}/people` | `V1\Accounts\ByAccount\People::get()` |
| Create a person | POST | `/v1/accounts/{account}/people` | `V1\Accounts\ByAccount\People::post()` |
| Delete a person | DELETE | `/v1/accounts/{account}/people/{person}` | `V1\Accounts\ByAccount\People::deleteByPerson()` |
| Retrieve a person | GET | `/v1/accounts/{account}/people/{person}` | `V1\Accounts\ByAccount\People::getByPerson()` |
| Update a person | POST | `/v1/accounts/{account}/people/{person}` | `V1\Accounts\ByAccount\People::postByPerson()` |
| List all persons | GET | `/v1/accounts/{account}/persons` | `V1\Accounts\ByAccount\Persons::get()` |
| Create a person | POST | `/v1/accounts/{account}/persons` | `V1\Accounts\ByAccount\Persons::post()` |
| Delete a person | DELETE | `/v1/accounts/{account}/persons/{person}` | `V1\Accounts\ByAccount\Persons::deleteByPerson()` |
| Retrieve a person | GET | `/v1/accounts/{account}/persons/{person}` | `V1\Accounts\ByAccount\Persons::getByPerson()` |
| Update a person | POST | `/v1/accounts/{account}/persons/{person}` | `V1\Accounts\ByAccount\Persons::postByPerson()` |
| Reject an account | POST | `/v1/accounts/{account}/reject` | `V1\Accounts\ByAccount\Reject::post()` |
| Unreject an account | POST | `/v1/accounts/{account}/unreject` | `V1\Accounts\ByAccount\Unreject::post()` |
| List apple pay domains. | GET | `/v1/apple_pay/domains` | `V1\ApplePay\Domains::get()` |
| Create an apple pay domain. | POST | `/v1/apple_pay/domains` | `V1\ApplePay\Domains::post()` |
| Delete an apple pay domain. | DELETE | `/v1/apple_pay/domains/{domain}` | `V1\ApplePay\Domains::deleteByDomain()` |
| Retrieve an apple pay domain. | GET | `/v1/apple_pay/domains/{domain}` | `V1\ApplePay\Domains::getByDomain()` |
| List all application fees | GET | `/v1/application_fees` | `V1\ApplicationFees::get()` |
| Retrieve an application fee refund | GET | `/v1/application_fees/{fee}/refunds/{id}` | `V1\ApplicationFees\ByFee\Refunds::getById()` |
| Update an application fee refund | POST | `/v1/application_fees/{fee}/refunds/{id}` | `V1\ApplicationFees\ByFee\Refunds::postById()` |
| Retrieve an application fee | GET | `/v1/application_fees/{id}` | `V1\ApplicationFees::getById()` |
| PostApplicationFeesIdRefund | POST | `/v1/application_fees/{id}/refund` | `V1\ApplicationFees\ById\Refund::post()` |
| List all application fee refunds | GET | `/v1/application_fees/{id}/refunds` | `V1\ApplicationFees\ById\Refunds::get()` |
| Create an application fee refund | POST | `/v1/application_fees/{id}/refunds` | `V1\ApplicationFees\ById\Refunds::post()` |
| List all app installs | GET | `/v1/apps/installs` | `V1\Apps\Installs::get()` |
| Create an app install | POST | `/v1/apps/installs` | `V1\Apps\Installs::post()` |
| Retrieve an app install | GET | `/v1/apps/installs/{id}` | `V1\Apps\Installs::getById()` |
| Update an app install | POST | `/v1/apps/installs/{id}` | `V1\Apps\Installs::postById()` |
| Uninstall an app install | POST | `/v1/apps/installs/{id}/uninstall` | `V1\Apps\Installs\ById\Uninstall::post()` |
| List secrets | GET | `/v1/apps/secrets` | `V1\Apps\Secrets::get()` |
| Set a Secret | POST | `/v1/apps/secrets` | `V1\Apps\Secrets::post()` |
| Delete a Secret | POST | `/v1/apps/secrets/delete` | `V1\Apps\Secrets\Delete::post()` |
| Find a Secret | GET | `/v1/apps/secrets/find` | `V1\Apps\Secrets\Find::get()` |
| Retrieve balance | GET | `/v1/balance` | `V1\Balance::get()` |
| List all balance transactions | GET | `/v1/balance/history` | `V1\Balance\History::get()` |
| Retrieve a balance transaction | GET | `/v1/balance/history/{id}` | `V1\Balance\History::getById()` |
| Retrieve balance settings | GET | `/v1/balance_settings` | `V1\BalanceSettings::get()` |
| Update balance settings | POST | `/v1/balance_settings` | `V1\BalanceSettings::post()` |
| List all balance transactions | GET | `/v1/balance_transactions` | `V1\BalanceTransactions::get()` |
| Retrieve a balance transaction | GET | `/v1/balance_transactions/{id}` | `V1\BalanceTransactions::getById()` |
| List billing alerts | GET | `/v1/billing/alerts` | `V1\Billing\Alerts::get()` |
| Create a billing alert | POST | `/v1/billing/alerts` | `V1\Billing\Alerts::post()` |
| Retrieve a billing alert | GET | `/v1/billing/alerts/{id}` | `V1\Billing\Alerts::getById()` |
| Activate a billing alert | POST | `/v1/billing/alerts/{id}/activate` | `V1\Billing\Alerts\ById\Activate::post()` |
| Archive a billing alert | POST | `/v1/billing/alerts/{id}/archive` | `V1\Billing\Alerts\ById\Archive::post()` |
| Deactivate a billing alert | POST | `/v1/billing/alerts/{id}/deactivate` | `V1\Billing\Alerts\ById\Deactivate::post()` |
| Retrieve the credit balance summary for a customer | GET | `/v1/billing/credit_balance_summary` | `V1\Billing\CreditBalanceSummary::get()` |
| List credit balance transactions | GET | `/v1/billing/credit_balance_transactions` | `V1\Billing\CreditBalanceTransactions::get()` |
| Retrieve a credit balance transaction | GET | `/v1/billing/credit_balance_transactions/{id}` | `V1\Billing\CreditBalanceTransactions::getById()` |
| List credit grants | GET | `/v1/billing/credit_grants` | `V1\Billing\CreditGrants::get()` |
| Create a credit grant | POST | `/v1/billing/credit_grants` | `V1\Billing\CreditGrants::post()` |
| Retrieve a credit grant | GET | `/v1/billing/credit_grants/{id}` | `V1\Billing\CreditGrants::getById()` |
| Update a credit grant | POST | `/v1/billing/credit_grants/{id}` | `V1\Billing\CreditGrants::postById()` |
| Expire a credit grant | POST | `/v1/billing/credit_grants/{id}/expire` | `V1\Billing\CreditGrants\ById\Expire::post()` |
| Void a credit grant | POST | `/v1/billing/credit_grants/{id}/void` | `V1\Billing\CreditGrants\ById\VoidResource::post()` |
| List all feedback options | GET | `/v1/billing/feedback_options` | `V1\Billing\FeedbackOptions::get()` |
| Create a feedback option | POST | `/v1/billing/feedback_options` | `V1\Billing\FeedbackOptions::post()` |
| Retrieve a feedback option | GET | `/v1/billing/feedback_options/{id}` | `V1\Billing\FeedbackOptions::getById()` |
| Update a feedback option | POST | `/v1/billing/feedback_options/{id}` | `V1\Billing\FeedbackOptions::postById()` |
| Deactivate a feedback option | POST | `/v1/billing/feedback_options/{id}/deactivate` | `V1\Billing\FeedbackOptions\ById\Deactivate::post()` |
| Create a billing meter event adjustment | POST | `/v1/billing/meter_event_adjustments` | `V1\Billing\MeterEventAdjustments::post()` |
| Create a billing meter event | POST | `/v1/billing/meter_events` | `V1\Billing\MeterEvents::post()` |
| List billing meters | GET | `/v1/billing/meters` | `V1\Billing\Meters::get()` |
| Create a billing meter | POST | `/v1/billing/meters` | `V1\Billing\Meters::post()` |
| Retrieve a billing meter | GET | `/v1/billing/meters/{id}` | `V1\Billing\Meters::getById()` |
| Update a billing meter | POST | `/v1/billing/meters/{id}` | `V1\Billing\Meters::postById()` |
| Deactivate a billing meter | POST | `/v1/billing/meters/{id}/deactivate` | `V1\Billing\Meters\ById\Deactivate::post()` |
| List billing meter event summaries | GET | `/v1/billing/meters/{id}/event_summaries` | `V1\Billing\Meters\ById\EventSummaries::get()` |
| Reactivate a billing meter | POST | `/v1/billing/meters/{id}/reactivate` | `V1\Billing\Meters\ById\Reactivate::post()` |
| List portal configurations | GET | `/v1/billing_portal/configurations` | `V1\BillingPortal\Configurations::get()` |
| Create a portal configuration | POST | `/v1/billing_portal/configurations` | `V1\BillingPortal\Configurations::post()` |
| Retrieve a portal configuration | GET | `/v1/billing_portal/configurations/{configuration}` | `V1\BillingPortal\Configurations::getByConfiguration()` |
| Update a portal configuration | POST | `/v1/billing_portal/configurations/{configuration}` | `V1\BillingPortal\Configurations::postByConfiguration()` |
| Create a portal session | POST | `/v1/billing_portal/sessions` | `V1\BillingPortal\Sessions::post()` |
| List all charges | GET | `/v1/charges` | `V1\Charges::get()` |
| Create a charge | POST | `/v1/charges` | `V1\Charges::post()` |
| Search charges | GET | `/v1/charges/search` | `V1\Charges\Search::get()` |
| Retrieve a charge | GET | `/v1/charges/{charge}` | `V1\Charges::getByCharge()` |
| Update a charge | POST | `/v1/charges/{charge}` | `V1\Charges::postByCharge()` |
| Capture a charge | POST | `/v1/charges/{charge}/capture` | `V1\Charges\ByCharge\Capture::post()` |
| Retrieve a dispute for a specified charge. | GET | `/v1/charges/{charge}/dispute` | `V1\Charges\ByCharge\Dispute::get()` |
| PostChargesChargeDispute | POST | `/v1/charges/{charge}/dispute` | `V1\Charges\ByCharge\Dispute::post()` |
| PostChargesChargeDisputeClose | POST | `/v1/charges/{charge}/dispute/close` | `V1\Charges\ByCharge\Dispute\Close::post()` |
| Create a refund | POST | `/v1/charges/{charge}/refund` | `V1\Charges\ByCharge\Refund::post()` |
| List all refunds | GET | `/v1/charges/{charge}/refunds` | `V1\Charges\ByCharge\Refunds::get()` |
| Create a refund | POST | `/v1/charges/{charge}/refunds` | `V1\Charges\ByCharge\Refunds::post()` |
| Retrieves the details of an existing refund. | GET | `/v1/charges/{charge}/refunds/{refund}` | `V1\Charges\ByCharge\Refunds::getByRefund()` |
| Update a specified refund. | POST | `/v1/charges/{charge}/refunds/{refund}` | `V1\Charges\ByCharge\Refunds::postByRefund()` |
| List all Checkout Sessions | GET | `/v1/checkout/sessions` | `V1\Checkout\Sessions::get()` |
| Create a Checkout Session | POST | `/v1/checkout/sessions` | `V1\Checkout\Sessions::post()` |
| Retrieve a Checkout Session | GET | `/v1/checkout/sessions/{session}` | `V1\Checkout\Sessions::getBySession()` |
| Update a Checkout Session | POST | `/v1/checkout/sessions/{session}` | `V1\Checkout\Sessions::postBySession()` |
| Expire a Checkout Session | POST | `/v1/checkout/sessions/{session}/expire` | `V1\Checkout\Sessions\BySession\Expire::post()` |
| Retrieve a Checkout Session's line items | GET | `/v1/checkout/sessions/{session}/line_items` | `V1\Checkout\Sessions\BySession\LineItems::get()` |
| List orders | GET | `/v1/climate/orders` | `V1\Climate\Orders::get()` |
| Create an order | POST | `/v1/climate/orders` | `V1\Climate\Orders::post()` |
| Retrieve an order | GET | `/v1/climate/orders/{order}` | `V1\Climate\Orders::getByOrder()` |
| Update an order | POST | `/v1/climate/orders/{order}` | `V1\Climate\Orders::postByOrder()` |
| Cancel an order | POST | `/v1/climate/orders/{order}/cancel` | `V1\Climate\Orders\ByOrder\Cancel::post()` |
| List products | GET | `/v1/climate/products` | `V1\Climate\Products::get()` |
| Retrieve a product | GET | `/v1/climate/products/{product}` | `V1\Climate\Products::getByProduct()` |
| List suppliers | GET | `/v1/climate/suppliers` | `V1\Climate\Suppliers::get()` |
| Retrieve a supplier | GET | `/v1/climate/suppliers/{supplier}` | `V1\Climate\Suppliers::getBySupplier()` |
| Retrieve a ConfirmationToken | GET | `/v1/confirmation_tokens/{confirmation_token}` | `V1\ConfirmationTokens::getByConfirmationToken()` |
| List Country Specs | GET | `/v1/country_specs` | `V1\CountrySpecs::get()` |
| Retrieve a Country Spec | GET | `/v1/country_specs/{country}` | `V1\CountrySpecs::getByCountry()` |
| List all coupons | GET | `/v1/coupons` | `V1\Coupons::get()` |
| Create a coupon | POST | `/v1/coupons` | `V1\Coupons::post()` |
| Delete a coupon | DELETE | `/v1/coupons/{coupon}` | `V1\Coupons::deleteByCoupon()` |
| Retrieve a coupon | GET | `/v1/coupons/{coupon}` | `V1\Coupons::getByCoupon()` |
| Update a coupon | POST | `/v1/coupons/{coupon}` | `V1\Coupons::postByCoupon()` |
| List all credit notes | GET | `/v1/credit_notes` | `V1\CreditNotes::get()` |
| Create a credit note | POST | `/v1/credit_notes` | `V1\CreditNotes::post()` |
| Preview a credit note | GET | `/v1/credit_notes/preview` | `V1\CreditNotes\Preview::get()` |
| Retrieve a credit note preview's line items | GET | `/v1/credit_notes/preview/lines` | `V1\CreditNotes\Preview\Lines::get()` |
| Retrieve a credit note's line items | GET | `/v1/credit_notes/{credit_note}/lines` | `V1\CreditNotes\ByCreditNote\Lines::get()` |
| Retrieve a credit note | GET | `/v1/credit_notes/{id}` | `V1\CreditNotes::getById()` |
| Update a credit note | POST | `/v1/credit_notes/{id}` | `V1\CreditNotes::postById()` |
| Void a credit note | POST | `/v1/credit_notes/{id}/void` | `V1\CreditNotes\ById\VoidResource::post()` |
| Create a Customer Session | POST | `/v1/customer_sessions` | `V1\CustomerSessions::post()` |
| List all customers | GET | `/v1/customers` | `V1\Customers::get()` |
| Create a customer | POST | `/v1/customers` | `V1\Customers::post()` |
| Search customers | GET | `/v1/customers/search` | `V1\Customers\Search::get()` |
| Delete a customer | DELETE | `/v1/customers/{customer}` | `V1\Customers::deleteByCustomer()` |
| Retrieve a customer | GET | `/v1/customers/{customer}` | `V1\Customers::getByCustomer()` |
| Update a customer | POST | `/v1/customers/{customer}` | `V1\Customers::postByCustomer()` |
| List customer balance transactions | GET | `/v1/customers/{customer}/balance_transactions` | `V1\Customers\ByCustomer\BalanceTransactions::get()` |
| Create a customer balance transaction | POST | `/v1/customers/{customer}/balance_transactions` | `V1\Customers\ByCustomer\BalanceTransactions::post()` |
| Retrieve a customer balance transaction | GET | `/v1/customers/{customer}/balance_transactions/{transaction}` | `V1\Customers\ByCustomer\BalanceTransactions::getByTransaction()` |
| Update a customer credit balance transaction | POST | `/v1/customers/{customer}/balance_transactions/{transaction}` | `V1\Customers\ByCustomer\BalanceTransactions::postByTransaction()` |
| List all bank accounts | GET | `/v1/customers/{customer}/bank_accounts` | `V1\Customers\ByCustomer\BankAccounts::get()` |
| Create a card | POST | `/v1/customers/{customer}/bank_accounts` | `V1\Customers\ByCustomer\BankAccounts::post()` |
| Delete a customer source | DELETE | `/v1/customers/{customer}/bank_accounts/{id}` | `V1\Customers\ByCustomer\BankAccounts::deleteById()` |
| Retrieve a bank account | GET | `/v1/customers/{customer}/bank_accounts/{id}` | `V1\Customers\ByCustomer\BankAccounts::getById()` |
| Update a card | POST | `/v1/customers/{customer}/bank_accounts/{id}` | `V1\Customers\ByCustomer\BankAccounts::postById()` |
| Verify a bank account | POST | `/v1/customers/{customer}/bank_accounts/{id}/verify` | `V1\Customers\ByCustomer\BankAccounts\ById\Verify::post()` |
| List all cards | GET | `/v1/customers/{customer}/cards` | `V1\Customers\ByCustomer\Cards::get()` |
| Create a card | POST | `/v1/customers/{customer}/cards` | `V1\Customers\ByCustomer\Cards::post()` |
| Delete a customer source | DELETE | `/v1/customers/{customer}/cards/{id}` | `V1\Customers\ByCustomer\Cards::deleteById()` |
| Retrieve a card | GET | `/v1/customers/{customer}/cards/{id}` | `V1\Customers\ByCustomer\Cards::getById()` |
| Update a card | POST | `/v1/customers/{customer}/cards/{id}` | `V1\Customers\ByCustomer\Cards::postById()` |
| Retrieve a cash balance | GET | `/v1/customers/{customer}/cash_balance` | `V1\Customers\ByCustomer\CashBalance::get()` |
| Update a cash balance's settings | POST | `/v1/customers/{customer}/cash_balance` | `V1\Customers\ByCustomer\CashBalance::post()` |
| List cash balance transactions | GET | `/v1/customers/{customer}/cash_balance_transactions` | `V1\Customers\ByCustomer\CashBalanceTransactions::get()` |
| Retrieve a cash balance transaction | GET | `/v1/customers/{customer}/cash_balance_transactions/{transaction}` | `V1\Customers\ByCustomer\CashBalanceTransactions::getByTransaction()` |
| Delete a customer discount | DELETE | `/v1/customers/{customer}/discount` | `V1\Customers\ByCustomer\Discount::delete()` |
| GetCustomersCustomerDiscount | GET | `/v1/customers/{customer}/discount` | `V1\Customers\ByCustomer\Discount::get()` |
| Create or retrieve funding instructions for a customer cash balance | POST | `/v1/customers/{customer}/funding_instructions` | `V1\Customers\ByCustomer\FundingInstructions::post()` |
| List a Customer's PaymentMethods | GET | `/v1/customers/{customer}/payment_methods` | `V1\Customers\ByCustomer\PaymentMethods::get()` |
| Retrieve a Customer's PaymentMethod | GET | `/v1/customers/{customer}/payment_methods/{payment_method}` | `V1\Customers\ByCustomer\PaymentMethods::getByPaymentMethod()` |
| List sources for a specified customer. | GET | `/v1/customers/{customer}/sources` | `V1\Customers\ByCustomer\Sources::get()` |
| Create a card | POST | `/v1/customers/{customer}/sources` | `V1\Customers\ByCustomer\Sources::post()` |
| Delete a customer source | DELETE | `/v1/customers/{customer}/sources/{id}` | `V1\Customers\ByCustomer\Sources::deleteById()` |
| Retrieve a specified source for a given customer. | GET | `/v1/customers/{customer}/sources/{id}` | `V1\Customers\ByCustomer\Sources::getById()` |
| Update a card | POST | `/v1/customers/{customer}/sources/{id}` | `V1\Customers\ByCustomer\Sources::postById()` |
| Verify a bank account | POST | `/v1/customers/{customer}/sources/{id}/verify` | `V1\Customers\ByCustomer\Sources\ById\Verify::post()` |
| List active subscriptions | GET | `/v1/customers/{customer}/subscriptions` | `V1\Customers\ByCustomer\Subscriptions::get()` |
| Create a subscription | POST | `/v1/customers/{customer}/subscriptions` | `V1\Customers\ByCustomer\Subscriptions::post()` |
| Cancel a subscription | DELETE | `/v1/customers/{customer}/subscriptions/{subscription_exposed_id}` | `V1\Customers\ByCustomer\Subscriptions::deleteBySubscriptionExposedId()` |
| Retrieve a subscription | GET | `/v1/customers/{customer}/subscriptions/{subscription_exposed_id}` | `V1\Customers\ByCustomer\Subscriptions::getBySubscriptionExposedId()` |
| Update a subscription on a customer | POST | `/v1/customers/{customer}/subscriptions/{subscription_exposed_id}` | `V1\Customers\ByCustomer\Subscriptions::postBySubscriptionExposedId()` |
| Delete a customer discount | DELETE | `/v1/customers/{customer}/subscriptions/{subscription_exposed_id}/discount` | `V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount::delete()` |
| GetCustomersCustomerSubscriptionsSubscriptionExposedIdDiscount | GET | `/v1/customers/{customer}/subscriptions/{subscription_exposed_id}/discount` | `V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount::get()` |
| List all Customer tax IDs | GET | `/v1/customers/{customer}/tax_ids` | `V1\Customers\ByCustomer\TaxIds::get()` |
| Create a Customer tax ID | POST | `/v1/customers/{customer}/tax_ids` | `V1\Customers\ByCustomer\TaxIds::post()` |
| Delete a Customer tax ID | DELETE | `/v1/customers/{customer}/tax_ids/{id}` | `V1\Customers\ByCustomer\TaxIds::deleteById()` |
| Retrieve a Customer tax ID | GET | `/v1/customers/{customer}/tax_ids/{id}` | `V1\Customers\ByCustomer\TaxIds::getById()` |
| List all disputes | GET | `/v1/disputes` | `V1\Disputes::get()` |
| Retrieve a dispute | GET | `/v1/disputes/{dispute}` | `V1\Disputes::getByDispute()` |
| Update a dispute | POST | `/v1/disputes/{dispute}` | `V1\Disputes::postByDispute()` |
| Close a dispute | POST | `/v1/disputes/{dispute}/close` | `V1\Disputes\ByDispute\Close::post()` |
| List all active entitlements | GET | `/v1/entitlements/active_entitlements` | `V1\Entitlements\ActiveEntitlements::get()` |
| Retrieve an active entitlement | GET | `/v1/entitlements/active_entitlements/{id}` | `V1\Entitlements\ActiveEntitlements::getById()` |
| List all features | GET | `/v1/entitlements/features` | `V1\Entitlements\Features::get()` |
| Create a feature | POST | `/v1/entitlements/features` | `V1\Entitlements\Features::post()` |
| Retrieve a feature | GET | `/v1/entitlements/features/{id}` | `V1\Entitlements\Features::getById()` |
| Updates a feature | POST | `/v1/entitlements/features/{id}` | `V1\Entitlements\Features::postById()` |
| Create an ephemeral key | POST | `/v1/ephemeral_keys` | `V1\EphemeralKeys::post()` |
| Immediately invalidate an ephemeral key | DELETE | `/v1/ephemeral_keys/{key}` | `V1\EphemeralKeys::deleteByKey()` |
| List all events | GET | `/v1/events` | `V1\Events::get()` |
| Retrieve an event | GET | `/v1/events/{id}` | `V1\Events::getById()` |
| List all exchange rates | GET | `/v1/exchange_rates` | `V1\ExchangeRates::get()` |
| Retrieve an exchange rate | GET | `/v1/exchange_rates/{rate_id}` | `V1\ExchangeRates::getByRateId()` |
| Update a bank account | POST | `/v1/external_accounts/{id}` | `V1\ExternalAccounts::postById()` |
| List all file links | GET | `/v1/file_links` | `V1\FileLinks::get()` |
| Create a file link | POST | `/v1/file_links` | `V1\FileLinks::post()` |
| Retrieve a file link | GET | `/v1/file_links/{link}` | `V1\FileLinks::getByLink()` |
| Update a file link | POST | `/v1/file_links/{link}` | `V1\FileLinks::postByLink()` |
| List all files | GET | `/v1/files` | `V1\Files::get()` |
| Create a file | POST | `/v1/files` | `V1\Files::post()` |
| Retrieve a file | GET | `/v1/files/{file}` | `V1\Files::getByFile()` |
| List Accounts | GET | `/v1/financial_connections/accounts` | `V1\FinancialConnections\Accounts::get()` |
| Retrieve an Account | GET | `/v1/financial_connections/accounts/{account}` | `V1\FinancialConnections\Accounts::getByAccount()` |
| Disconnect an Account | POST | `/v1/financial_connections/accounts/{account}/disconnect` | `V1\FinancialConnections\Accounts\ByAccount\Disconnect::post()` |
| List Account Owners | GET | `/v1/financial_connections/accounts/{account}/owners` | `V1\FinancialConnections\Accounts\ByAccount\Owners::get()` |
| Refresh Account data | POST | `/v1/financial_connections/accounts/{account}/refresh` | `V1\FinancialConnections\Accounts\ByAccount\Refresh::post()` |
| Subscribe to data refreshes for an Account | POST | `/v1/financial_connections/accounts/{account}/subscribe` | `V1\FinancialConnections\Accounts\ByAccount\Subscribe::post()` |
| Unsubscribe from data refreshes for an Account | POST | `/v1/financial_connections/accounts/{account}/unsubscribe` | `V1\FinancialConnections\Accounts\ByAccount\Unsubscribe::post()` |
| Create a Session | POST | `/v1/financial_connections/sessions` | `V1\FinancialConnections\Sessions::post()` |
| Retrieve a Session | GET | `/v1/financial_connections/sessions/{session}` | `V1\FinancialConnections\Sessions::getBySession()` |
| List Transactions | GET | `/v1/financial_connections/transactions` | `V1\FinancialConnections\Transactions::get()` |
| Retrieve a Transaction | GET | `/v1/financial_connections/transactions/{transaction}` | `V1\FinancialConnections\Transactions::getByTransaction()` |
| List all ForwardingRequests | GET | `/v1/forwarding/requests` | `V1\Forwarding\Requests::get()` |
| Create a ForwardingRequest | POST | `/v1/forwarding/requests` | `V1\Forwarding\Requests::post()` |
| Retrieve a ForwardingRequest | GET | `/v1/forwarding/requests/{id}` | `V1\Forwarding\Requests::getById()` |
| List VerificationReports | GET | `/v1/identity/verification_reports` | `V1\Identity\VerificationReports::get()` |
| Retrieve a VerificationReport | GET | `/v1/identity/verification_reports/{report}` | `V1\Identity\VerificationReports::getByReport()` |
| List VerificationSessions | GET | `/v1/identity/verification_sessions` | `V1\Identity\VerificationSessions::get()` |
| Create a VerificationSession | POST | `/v1/identity/verification_sessions` | `V1\Identity\VerificationSessions::post()` |
| Retrieve a VerificationSession | GET | `/v1/identity/verification_sessions/{session}` | `V1\Identity\VerificationSessions::getBySession()` |
| Update a VerificationSession | POST | `/v1/identity/verification_sessions/{session}` | `V1\Identity\VerificationSessions::postBySession()` |
| Cancel a VerificationSession | POST | `/v1/identity/verification_sessions/{session}/cancel` | `V1\Identity\VerificationSessions\BySession\Cancel::post()` |
| Redact a VerificationSession | POST | `/v1/identity/verification_sessions/{session}/redact` | `V1\Identity\VerificationSessions\BySession\Redact::post()` |
| List all payments for an invoice | GET | `/v1/invoice_payments` | `V1\InvoicePayments::get()` |
| Retrieve an InvoicePayment | GET | `/v1/invoice_payments/{invoice_payment}` | `V1\InvoicePayments::getByInvoicePayment()` |
| List all invoice rendering templates | GET | `/v1/invoice_rendering_templates` | `V1\InvoiceRenderingTemplates::get()` |
| Retrieve an invoice rendering template | GET | `/v1/invoice_rendering_templates/{template}` | `V1\InvoiceRenderingTemplates::getByTemplate()` |
| Archive an invoice rendering template | POST | `/v1/invoice_rendering_templates/{template}/archive` | `V1\InvoiceRenderingTemplates\ByTemplate\Archive::post()` |
| Unarchive an invoice rendering template | POST | `/v1/invoice_rendering_templates/{template}/unarchive` | `V1\InvoiceRenderingTemplates\ByTemplate\Unarchive::post()` |
| List all invoice items | GET | `/v1/invoiceitems` | `V1\Invoiceitems::get()` |
| Create an invoice item | POST | `/v1/invoiceitems` | `V1\Invoiceitems::post()` |
| Delete an invoice item | DELETE | `/v1/invoiceitems/{invoiceitem}` | `V1\Invoiceitems::deleteByInvoiceitem()` |
| Retrieve an invoice item | GET | `/v1/invoiceitems/{invoiceitem}` | `V1\Invoiceitems::getByInvoiceitem()` |
| Update an invoice item | POST | `/v1/invoiceitems/{invoiceitem}` | `V1\Invoiceitems::postByInvoiceitem()` |
| List all invoices | GET | `/v1/invoices` | `V1\Invoices::get()` |
| Create an invoice | POST | `/v1/invoices` | `V1\Invoices::post()` |
| Create a preview invoice | POST | `/v1/invoices/create_preview` | `V1\Invoices\CreatePreview::post()` |
| Search invoices | GET | `/v1/invoices/search` | `V1\Invoices\Search::get()` |
| Delete a draft invoice | DELETE | `/v1/invoices/{invoice}` | `V1\Invoices::deleteByInvoice()` |
| Retrieve an invoice | GET | `/v1/invoices/{invoice}` | `V1\Invoices::getByInvoice()` |
| Update an invoice | POST | `/v1/invoices/{invoice}` | `V1\Invoices::postByInvoice()` |
| Bulk add invoice line items | POST | `/v1/invoices/{invoice}/add_lines` | `V1\Invoices\ByInvoice\AddLines::post()` |
| Attach a payment to an Invoice | POST | `/v1/invoices/{invoice}/attach_payment` | `V1\Invoices\ByInvoice\AttachPayment::post()` |
| Finalize an invoice | POST | `/v1/invoices/{invoice}/finalize` | `V1\Invoices\ByInvoice\Finalize::post()` |
| Retrieve an invoice's line items | GET | `/v1/invoices/{invoice}/lines` | `V1\Invoices\ByInvoice\Lines::get()` |
| Update an invoice's line item | POST | `/v1/invoices/{invoice}/lines/{line_item_id}` | `V1\Invoices\ByInvoice\Lines::postByLineItemId()` |
| Mark an invoice as uncollectible | POST | `/v1/invoices/{invoice}/mark_uncollectible` | `V1\Invoices\ByInvoice\MarkUncollectible::post()` |
| Pay an invoice | POST | `/v1/invoices/{invoice}/pay` | `V1\Invoices\ByInvoice\Pay::post()` |
| Bulk remove invoice line items | POST | `/v1/invoices/{invoice}/remove_lines` | `V1\Invoices\ByInvoice\RemoveLines::post()` |
| Send an invoice for manual payment | POST | `/v1/invoices/{invoice}/send` | `V1\Invoices\ByInvoice\Send::post()` |
| Bulk update invoice line items | POST | `/v1/invoices/{invoice}/update_lines` | `V1\Invoices\ByInvoice\UpdateLines::post()` |
| Void an invoice | POST | `/v1/invoices/{invoice}/void` | `V1\Invoices\ByInvoice\VoidResource::post()` |
| List all authorizations | GET | `/v1/issuing/authorizations` | `V1\Issuing\Authorizations::get()` |
| Retrieve an authorization | GET | `/v1/issuing/authorizations/{authorization}` | `V1\Issuing\Authorizations::getByAuthorization()` |
| Update an authorization | POST | `/v1/issuing/authorizations/{authorization}` | `V1\Issuing\Authorizations::postByAuthorization()` |
| Approve an authorization | POST | `/v1/issuing/authorizations/{authorization}/approve` | `V1\Issuing\Authorizations\ByAuthorization\Approve::post()` |
| Decline an authorization | POST | `/v1/issuing/authorizations/{authorization}/decline` | `V1\Issuing\Authorizations\ByAuthorization\Decline::post()` |
| List all cardholders | GET | `/v1/issuing/cardholders` | `V1\Issuing\Cardholders::get()` |
| Create a cardholder | POST | `/v1/issuing/cardholders` | `V1\Issuing\Cardholders::post()` |
| Retrieve a cardholder | GET | `/v1/issuing/cardholders/{cardholder}` | `V1\Issuing\Cardholders::getByCardholder()` |
| Update a cardholder | POST | `/v1/issuing/cardholders/{cardholder}` | `V1\Issuing\Cardholders::postByCardholder()` |
| List all cards | GET | `/v1/issuing/cards` | `V1\Issuing\Cards::get()` |
| Create a card | POST | `/v1/issuing/cards` | `V1\Issuing\Cards::post()` |
| Retrieve a card | GET | `/v1/issuing/cards/{card}` | `V1\Issuing\Cards::getByCard()` |
| Update a card | POST | `/v1/issuing/cards/{card}` | `V1\Issuing\Cards::postByCard()` |
| List all disputes | GET | `/v1/issuing/disputes` | `V1\Issuing\Disputes::get()` |
| Create a dispute | POST | `/v1/issuing/disputes` | `V1\Issuing\Disputes::post()` |
| Retrieve a dispute | GET | `/v1/issuing/disputes/{dispute}` | `V1\Issuing\Disputes::getByDispute()` |
| Update a dispute | POST | `/v1/issuing/disputes/{dispute}` | `V1\Issuing\Disputes::postByDispute()` |
| Submit a dispute | POST | `/v1/issuing/disputes/{dispute}/submit` | `V1\Issuing\Disputes\ByDispute\Submit::post()` |
| List all personalization designs | GET | `/v1/issuing/personalization_designs` | `V1\Issuing\PersonalizationDesigns::get()` |
| Create a personalization design | POST | `/v1/issuing/personalization_designs` | `V1\Issuing\PersonalizationDesigns::post()` |
| Retrieve a personalization design | GET | `/v1/issuing/personalization_designs/{personalization_design}` | `V1\Issuing\PersonalizationDesigns::getByPersonalizationDesign()` |
| Update a personalization design | POST | `/v1/issuing/personalization_designs/{personalization_design}` | `V1\Issuing\PersonalizationDesigns::postByPersonalizationDesign()` |
| List all physical bundles | GET | `/v1/issuing/physical_bundles` | `V1\Issuing\PhysicalBundles::get()` |
| Retrieve a physical bundle | GET | `/v1/issuing/physical_bundles/{physical_bundle}` | `V1\Issuing\PhysicalBundles::getByPhysicalBundle()` |
| Retrieve a settlement | GET | `/v1/issuing/settlements/{settlement}` | `V1\Issuing\Settlements::getBySettlement()` |
| Update a settlement | POST | `/v1/issuing/settlements/{settlement}` | `V1\Issuing\Settlements::postBySettlement()` |
| List all issuing tokens for card | GET | `/v1/issuing/tokens` | `V1\Issuing\Tokens::get()` |
| Retrieve an issuing token | GET | `/v1/issuing/tokens/{token}` | `V1\Issuing\Tokens::getByToken()` |
| Update a token status | POST | `/v1/issuing/tokens/{token}` | `V1\Issuing\Tokens::postByToken()` |
| List all transactions | GET | `/v1/issuing/transactions` | `V1\Issuing\Transactions::get()` |
| Retrieve a transaction | GET | `/v1/issuing/transactions/{transaction}` | `V1\Issuing\Transactions::getByTransaction()` |
| Update a transaction | POST | `/v1/issuing/transactions/{transaction}` | `V1\Issuing\Transactions::postByTransaction()` |
| Create a Session | POST | `/v1/link_account_sessions` | `V1\LinkAccountSessions::post()` |
| Retrieve a Session | GET | `/v1/link_account_sessions/{session}` | `V1\LinkAccountSessions::getBySession()` |
| List Accounts | GET | `/v1/linked_accounts` | `V1\LinkedAccounts::get()` |
| Retrieve an Account | GET | `/v1/linked_accounts/{account}` | `V1\LinkedAccounts::getByAccount()` |
| Disconnect an Account | POST | `/v1/linked_accounts/{account}/disconnect` | `V1\LinkedAccounts\ByAccount\Disconnect::post()` |
| List Account Owners | GET | `/v1/linked_accounts/{account}/owners` | `V1\LinkedAccounts\ByAccount\Owners::get()` |
| Refresh Account data | POST | `/v1/linked_accounts/{account}/refresh` | `V1\LinkedAccounts\ByAccount\Refresh::post()` |
| Retrieve a Mandate | GET | `/v1/mandates/{mandate}` | `V1\Mandates::getByMandate()` |
| List Payment Attempt Records | GET | `/v1/payment_attempt_records` | `V1\PaymentAttemptRecords::get()` |
| Retrieve a Payment Attempt Record | GET | `/v1/payment_attempt_records/{id}` | `V1\PaymentAttemptRecords::getById()` |
| List all PaymentIntents | GET | `/v1/payment_intents` | `V1\PaymentIntents::get()` |
| Create a PaymentIntent | POST | `/v1/payment_intents` | `V1\PaymentIntents::post()` |
| Search PaymentIntents | GET | `/v1/payment_intents/search` | `V1\PaymentIntents\Search::get()` |
| Retrieve a PaymentIntent | GET | `/v1/payment_intents/{intent}` | `V1\PaymentIntents::getByIntent()` |
| Update a PaymentIntent | POST | `/v1/payment_intents/{intent}` | `V1\PaymentIntents::postByIntent()` |
| List all PaymentIntent LineItems | GET | `/v1/payment_intents/{intent}/amount_details_line_items` | `V1\PaymentIntents\ByIntent\AmountDetailsLineItems::get()` |
| Reconcile a customer_balance PaymentIntent | POST | `/v1/payment_intents/{intent}/apply_customer_balance` | `V1\PaymentIntents\ByIntent\ApplyCustomerBalance::post()` |
| Cancel a PaymentIntent | POST | `/v1/payment_intents/{intent}/cancel` | `V1\PaymentIntents\ByIntent\Cancel::post()` |
| Capture a PaymentIntent | POST | `/v1/payment_intents/{intent}/capture` | `V1\PaymentIntents\ByIntent\Capture::post()` |
| Confirm a PaymentIntent | POST | `/v1/payment_intents/{intent}/confirm` | `V1\PaymentIntents\ByIntent\Confirm::post()` |
| Increment an authorization | POST | `/v1/payment_intents/{intent}/increment_authorization` | `V1\PaymentIntents\ByIntent\IncrementAuthorization::post()` |
| Verify microdeposits on a PaymentIntent | POST | `/v1/payment_intents/{intent}/verify_microdeposits` | `V1\PaymentIntents\ByIntent\VerifyMicrodeposits::post()` |
| List all payment links | GET | `/v1/payment_links` | `V1\PaymentLinks::get()` |
| Create a payment link | POST | `/v1/payment_links` | `V1\PaymentLinks::post()` |
| Retrieve payment link | GET | `/v1/payment_links/{payment_link}` | `V1\PaymentLinks::getByPaymentLink()` |
| Update a payment link | POST | `/v1/payment_links/{payment_link}` | `V1\PaymentLinks::postByPaymentLink()` |
| Retrieve a payment link's line items | GET | `/v1/payment_links/{payment_link}/line_items` | `V1\PaymentLinks\ByPaymentLink\LineItems::get()` |
| List payment method configurations | GET | `/v1/payment_method_configurations` | `V1\PaymentMethodConfigurations::get()` |
| Create a payment method configuration | POST | `/v1/payment_method_configurations` | `V1\PaymentMethodConfigurations::post()` |
| Retrieve payment method configuration | GET | `/v1/payment_method_configurations/{configuration}` | `V1\PaymentMethodConfigurations::getByConfiguration()` |
| Update payment method configuration | POST | `/v1/payment_method_configurations/{configuration}` | `V1\PaymentMethodConfigurations::postByConfiguration()` |
| List payment method domains | GET | `/v1/payment_method_domains` | `V1\PaymentMethodDomains::get()` |
| Create a payment method domain | POST | `/v1/payment_method_domains` | `V1\PaymentMethodDomains::post()` |
| Retrieve a payment method domain | GET | `/v1/payment_method_domains/{payment_method_domain}` | `V1\PaymentMethodDomains::getByPaymentMethodDomain()` |
| Update a payment method domain | POST | `/v1/payment_method_domains/{payment_method_domain}` | `V1\PaymentMethodDomains::postByPaymentMethodDomain()` |
| Validate an existing payment method domain | POST | `/v1/payment_method_domains/{payment_method_domain}/validate` | `V1\PaymentMethodDomains\ByPaymentMethodDomain\Validate::post()` |
| List PaymentMethods | GET | `/v1/payment_methods` | `V1\PaymentMethods::get()` |
| Create a PaymentMethod | POST | `/v1/payment_methods` | `V1\PaymentMethods::post()` |
| Retrieve a PaymentMethod | GET | `/v1/payment_methods/{payment_method}` | `V1\PaymentMethods::getByPaymentMethod()` |
| Update a PaymentMethod | POST | `/v1/payment_methods/{payment_method}` | `V1\PaymentMethods::postByPaymentMethod()` |
| Attach a PaymentMethod to a Customer | POST | `/v1/payment_methods/{payment_method}/attach` | `V1\PaymentMethods\ByPaymentMethod\Attach::post()` |
| Detach a PaymentMethod from a Customer | POST | `/v1/payment_methods/{payment_method}/detach` | `V1\PaymentMethods\ByPaymentMethod\Detach::post()` |
| List Payment Records | GET | `/v1/payment_records` | `V1\PaymentRecords::get()` |
| Report a payment | POST | `/v1/payment_records/report_payment` | `V1\PaymentRecords\ReportPayment::post()` |
| Retrieve a Payment Record | GET | `/v1/payment_records/{id}` | `V1\PaymentRecords::getById()` |
| Report a payment attempt | POST | `/v1/payment_records/{id}/report_payment_attempt` | `V1\PaymentRecords\ById\ReportPaymentAttempt::post()` |
| Report payment attempt canceled | POST | `/v1/payment_records/{id}/report_payment_attempt_canceled` | `V1\PaymentRecords\ById\ReportPaymentAttemptCanceled::post()` |
| Report payment attempt failed | POST | `/v1/payment_records/{id}/report_payment_attempt_failed` | `V1\PaymentRecords\ById\ReportPaymentAttemptFailed::post()` |
| Report payment attempt guaranteed | POST | `/v1/payment_records/{id}/report_payment_attempt_guaranteed` | `V1\PaymentRecords\ById\ReportPaymentAttemptGuaranteed::post()` |
| Report payment attempt informational | POST | `/v1/payment_records/{id}/report_payment_attempt_informational` | `V1\PaymentRecords\ById\ReportPaymentAttemptInformational::post()` |
| Report a refund | POST | `/v1/payment_records/{id}/report_refund` | `V1\PaymentRecords\ById\ReportRefund::post()` |
| List all payouts | GET | `/v1/payouts` | `V1\Payouts::get()` |
| Create a payout | POST | `/v1/payouts` | `V1\Payouts::post()` |
| Retrieve a payout | GET | `/v1/payouts/{payout}` | `V1\Payouts::getByPayout()` |
| Update a payout | POST | `/v1/payouts/{payout}` | `V1\Payouts::postByPayout()` |
| Cancel a payout | POST | `/v1/payouts/{payout}/cancel` | `V1\Payouts\ByPayout\Cancel::post()` |
| Reverse a payout | POST | `/v1/payouts/{payout}/reverse` | `V1\Payouts\ByPayout\Reverse::post()` |
| List all plans | GET | `/v1/plans` | `V1\Plans::get()` |
| Create a plan | POST | `/v1/plans` | `V1\Plans::post()` |
| Delete a plan | DELETE | `/v1/plans/{plan}` | `V1\Plans::deleteByPlan()` |
| Retrieve a plan | GET | `/v1/plans/{plan}` | `V1\Plans::getByPlan()` |
| Update a plan | POST | `/v1/plans/{plan}` | `V1\Plans::postByPlan()` |
| List all prices | GET | `/v1/prices` | `V1\Prices::get()` |
| Create a price | POST | `/v1/prices` | `V1\Prices::post()` |
| Search prices | GET | `/v1/prices/search` | `V1\Prices\Search::get()` |
| Retrieve a price | GET | `/v1/prices/{price}` | `V1\Prices::getByPrice()` |
| Update a price | POST | `/v1/prices/{price}` | `V1\Prices::postByPrice()` |
| List trial offers | GET | `/v1/product_catalog/trial_offers` | `V1\ProductCatalog\TrialOffers::get()` |
| Create a trial offer | POST | `/v1/product_catalog/trial_offers` | `V1\ProductCatalog\TrialOffers::post()` |
| Retrieve a trial offer | GET | `/v1/product_catalog/trial_offers/{id}` | `V1\ProductCatalog\TrialOffers::getById()` |
| Update a trial offer | POST | `/v1/product_catalog/trial_offers/{id}` | `V1\ProductCatalog\TrialOffers::postById()` |
| List all products | GET | `/v1/products` | `V1\Products::get()` |
| Create a product | POST | `/v1/products` | `V1\Products::post()` |
| Search products | GET | `/v1/products/search` | `V1\Products\Search::get()` |
| Delete a product | DELETE | `/v1/products/{id}` | `V1\Products::deleteById()` |
| Retrieve a product | GET | `/v1/products/{id}` | `V1\Products::getById()` |
| Update a product | POST | `/v1/products/{id}` | `V1\Products::postById()` |
| List all features attached to a product | GET | `/v1/products/{product}/features` | `V1\Products\ByProduct\Features::get()` |
| Attach a feature to a product | POST | `/v1/products/{product}/features` | `V1\Products\ByProduct\Features::post()` |
| Remove a feature from a product | DELETE | `/v1/products/{product}/features/{id}` | `V1\Products\ByProduct\Features::deleteById()` |
| Retrieve a product_feature | GET | `/v1/products/{product}/features/{id}` | `V1\Products\ByProduct\Features::getById()` |
| List all promotion codes | GET | `/v1/promotion_codes` | `V1\PromotionCodes::get()` |
| Create a promotion code | POST | `/v1/promotion_codes` | `V1\PromotionCodes::post()` |
| Retrieve a promotion code | GET | `/v1/promotion_codes/{promotion_code}` | `V1\PromotionCodes::getByPromotionCode()` |
| Update a promotion code | POST | `/v1/promotion_codes/{promotion_code}` | `V1\PromotionCodes::postByPromotionCode()` |
| List all quotes | GET | `/v1/quotes` | `V1\Quotes::get()` |
| Create a quote | POST | `/v1/quotes` | `V1\Quotes::post()` |
| Retrieve a quote | GET | `/v1/quotes/{quote}` | `V1\Quotes::getByQuote()` |
| Update a quote | POST | `/v1/quotes/{quote}` | `V1\Quotes::postByQuote()` |
| Accept a quote | POST | `/v1/quotes/{quote}/accept` | `V1\Quotes\ByQuote\Accept::post()` |
| Cancel a quote | POST | `/v1/quotes/{quote}/cancel` | `V1\Quotes\ByQuote\Cancel::post()` |
| Retrieve a quote's upfront line items | GET | `/v1/quotes/{quote}/computed_upfront_line_items` | `V1\Quotes\ByQuote\ComputedUpfrontLineItems::get()` |
| Finalize a quote | POST | `/v1/quotes/{quote}/finalize` | `V1\Quotes\ByQuote\Finalize::post()` |
| Retrieve a quote's line items | GET | `/v1/quotes/{quote}/line_items` | `V1\Quotes\ByQuote\LineItems::get()` |
| Download quote PDF | GET | `/v1/quotes/{quote}/pdf` | `V1\Quotes\ByQuote\Pdf::get()` |
| List all early fraud warnings | GET | `/v1/radar/early_fraud_warnings` | `V1\Radar\EarlyFraudWarnings::get()` |
| Retrieve an early fraud warning | GET | `/v1/radar/early_fraud_warnings/{early_fraud_warning}` | `V1\Radar\EarlyFraudWarnings::getByEarlyFraudWarning()` |
| Create a Payment Evaluation | POST | `/v1/radar/payment_evaluations` | `V1\Radar\PaymentEvaluations::post()` |
| List all value list items | GET | `/v1/radar/value_list_items` | `V1\Radar\ValueListItems::get()` |
| Create a value list item | POST | `/v1/radar/value_list_items` | `V1\Radar\ValueListItems::post()` |
| Delete a value list item | DELETE | `/v1/radar/value_list_items/{item}` | `V1\Radar\ValueListItems::deleteByItem()` |
| Retrieve a value list item | GET | `/v1/radar/value_list_items/{item}` | `V1\Radar\ValueListItems::getByItem()` |
| List all value lists | GET | `/v1/radar/value_lists` | `V1\Radar\ValueLists::get()` |
| Create a value list | POST | `/v1/radar/value_lists` | `V1\Radar\ValueLists::post()` |
| Delete a value list | DELETE | `/v1/radar/value_lists/{value_list}` | `V1\Radar\ValueLists::deleteByValueList()` |
| Retrieve a value list | GET | `/v1/radar/value_lists/{value_list}` | `V1\Radar\ValueLists::getByValueList()` |
| Update a value list | POST | `/v1/radar/value_lists/{value_list}` | `V1\Radar\ValueLists::postByValueList()` |
| List all refunds | GET | `/v1/refunds` | `V1\Refunds::get()` |
| Create a refund | POST | `/v1/refunds` | `V1\Refunds::post()` |
| Retrieve a refund | GET | `/v1/refunds/{refund}` | `V1\Refunds::getByRefund()` |
| Update a refund | POST | `/v1/refunds/{refund}` | `V1\Refunds::postByRefund()` |
| Cancel a refund | POST | `/v1/refunds/{refund}/cancel` | `V1\Refunds\ByRefund\Cancel::post()` |
| List all Report Runs | GET | `/v1/reporting/report_runs` | `V1\Reporting\ReportRuns::get()` |
| Create a Report Run | POST | `/v1/reporting/report_runs` | `V1\Reporting\ReportRuns::post()` |
| Retrieve a Report Run | GET | `/v1/reporting/report_runs/{report_run}` | `V1\Reporting\ReportRuns::getByReportRun()` |
| List all Report Types | GET | `/v1/reporting/report_types` | `V1\Reporting\ReportTypes::get()` |
| Retrieve a Report Type | GET | `/v1/reporting/report_types/{report_type}` | `V1\Reporting\ReportTypes::getByReportType()` |
| List all open reviews | GET | `/v1/reviews` | `V1\Reviews::get()` |
| Retrieve a review | GET | `/v1/reviews/{review}` | `V1\Reviews::getByReview()` |
| Approve a review | POST | `/v1/reviews/{review}/approve` | `V1\Reviews\ByReview\Approve::post()` |
| List all SetupAttempts | GET | `/v1/setup_attempts` | `V1\SetupAttempts::get()` |
| List all SetupIntents | GET | `/v1/setup_intents` | `V1\SetupIntents::get()` |
| Create a SetupIntent | POST | `/v1/setup_intents` | `V1\SetupIntents::post()` |
| Retrieve a SetupIntent | GET | `/v1/setup_intents/{intent}` | `V1\SetupIntents::getByIntent()` |
| Update a SetupIntent | POST | `/v1/setup_intents/{intent}` | `V1\SetupIntents::postByIntent()` |
| Cancel a SetupIntent | POST | `/v1/setup_intents/{intent}/cancel` | `V1\SetupIntents\ByIntent\Cancel::post()` |
| Confirm a SetupIntent | POST | `/v1/setup_intents/{intent}/confirm` | `V1\SetupIntents\ByIntent\Confirm::post()` |
| Verify microdeposits on a SetupIntent | POST | `/v1/setup_intents/{intent}/verify_microdeposits` | `V1\SetupIntents\ByIntent\VerifyMicrodeposits::post()` |
| List all shipping rates | GET | `/v1/shipping_rates` | `V1\ShippingRates::get()` |
| Create a shipping rate | POST | `/v1/shipping_rates` | `V1\ShippingRates::post()` |
| Retrieve a shipping rate | GET | `/v1/shipping_rates/{shipping_rate_token}` | `V1\ShippingRates::getByShippingRateToken()` |
| Update a shipping rate | POST | `/v1/shipping_rates/{shipping_rate_token}` | `V1\ShippingRates::postByShippingRateToken()` |
| Update an existing Sigma Query | POST | `/v1/sigma/saved_queries/{id}` | `V1\Sigma\SavedQueries::postById()` |
| List all scheduled query runs | GET | `/v1/sigma/scheduled_query_runs` | `V1\Sigma\ScheduledQueryRuns::get()` |
| Retrieve a scheduled query run | GET | `/v1/sigma/scheduled_query_runs/{scheduled_query_run}` | `V1\Sigma\ScheduledQueryRuns::getByScheduledQueryRun()` |
| Create a source | POST | `/v1/sources` | `V1\Sources::post()` |
| Retrieve a source | GET | `/v1/sources/{source}` | `V1\Sources::getBySource()` |
| Update a source | POST | `/v1/sources/{source}` | `V1\Sources::postBySource()` |
| Retrieve a Source MandateNotification | GET | `/v1/sources/{source}/mandate_notifications/{mandate_notification}` | `V1\Sources\BySource\MandateNotifications::getByMandateNotification()` |
| List source transactions for a given source. | GET | `/v1/sources/{source}/source_transactions` | `V1\Sources\BySource\SourceTransactions::get()` |
| Retrieve a source transaction | GET | `/v1/sources/{source}/source_transactions/{source_transaction}` | `V1\Sources\BySource\SourceTransactions::getBySourceTransaction()` |
| Verify a given source. | POST | `/v1/sources/{source}/verify` | `V1\Sources\BySource\Verify::post()` |
| List all subscription items | GET | `/v1/subscription_items` | `V1\SubscriptionItems::get()` |
| Create a subscription item | POST | `/v1/subscription_items` | `V1\SubscriptionItems::post()` |
| Delete a subscription item | DELETE | `/v1/subscription_items/{item}` | `V1\SubscriptionItems::deleteByItem()` |
| Retrieve a subscription item | GET | `/v1/subscription_items/{item}` | `V1\SubscriptionItems::getByItem()` |
| Update a subscription item | POST | `/v1/subscription_items/{item}` | `V1\SubscriptionItems::postByItem()` |
| List all schedules | GET | `/v1/subscription_schedules` | `V1\SubscriptionSchedules::get()` |
| Create a schedule | POST | `/v1/subscription_schedules` | `V1\SubscriptionSchedules::post()` |
| Retrieve a schedule | GET | `/v1/subscription_schedules/{schedule}` | `V1\SubscriptionSchedules::getBySchedule()` |
| Update a schedule | POST | `/v1/subscription_schedules/{schedule}` | `V1\SubscriptionSchedules::postBySchedule()` |
| Cancel a schedule | POST | `/v1/subscription_schedules/{schedule}/cancel` | `V1\SubscriptionSchedules\BySchedule\Cancel::post()` |
| Release a schedule | POST | `/v1/subscription_schedules/{schedule}/release` | `V1\SubscriptionSchedules\BySchedule\Release::post()` |
| List subscriptions | GET | `/v1/subscriptions` | `V1\Subscriptions::get()` |
| Create a subscription | POST | `/v1/subscriptions` | `V1\Subscriptions::post()` |
| Search subscriptions | GET | `/v1/subscriptions/search` | `V1\Subscriptions\Search::get()` |
| Cancel a subscription | DELETE | `/v1/subscriptions/{subscription_exposed_id}` | `V1\Subscriptions::deleteBySubscriptionExposedId()` |
| Retrieve a subscription | GET | `/v1/subscriptions/{subscription_exposed_id}` | `V1\Subscriptions::getBySubscriptionExposedId()` |
| Update a subscription | POST | `/v1/subscriptions/{subscription_exposed_id}` | `V1\Subscriptions::postBySubscriptionExposedId()` |
| Delete a subscription discount | DELETE | `/v1/subscriptions/{subscription_exposed_id}/discount` | `V1\Subscriptions\BySubscriptionExposedId\Discount::delete()` |
| Migrate a subscription | POST | `/v1/subscriptions/{subscription}/migrate` | `V1\Subscriptions\BySubscription\Migrate::post()` |
| Pause a subscription | POST | `/v1/subscriptions/{subscription}/pause` | `V1\Subscriptions\BySubscription\Pause::post()` |
| Resume a subscription | POST | `/v1/subscriptions/{subscription}/resume` | `V1\Subscriptions\BySubscription\Resume::post()` |
| Find a Tax Association | GET | `/v1/tax/associations/find` | `V1\Tax\Associations\Find::get()` |
| Create a Calculation | POST | `/v1/tax/calculations` | `V1\Tax\Calculations::post()` |
| Retrieve a Calculation | GET | `/v1/tax/calculations/{calculation}` | `V1\Tax\Calculations::getByCalculation()` |
| Retrieve a Calculation's line items | GET | `/v1/tax/calculations/{calculation}/line_items` | `V1\Tax\Calculations\ByCalculation\LineItems::get()` |
| List tax locations | GET | `/v1/tax/locations` | `V1\Tax\Locations::get()` |
| Create a tax location | POST | `/v1/tax/locations` | `V1\Tax\Locations::post()` |
| Retrieve a tax location | GET | `/v1/tax/locations/{location}` | `V1\Tax\Locations::getByLocation()` |
| List registrations | GET | `/v1/tax/registrations` | `V1\Tax\Registrations::get()` |
| Create a registration | POST | `/v1/tax/registrations` | `V1\Tax\Registrations::post()` |
| Retrieve a registration | GET | `/v1/tax/registrations/{id}` | `V1\Tax\Registrations::getById()` |
| Update a registration | POST | `/v1/tax/registrations/{id}` | `V1\Tax\Registrations::postById()` |
| Retrieve settings | GET | `/v1/tax/settings` | `V1\Tax\Settings::get()` |
| Update settings | POST | `/v1/tax/settings` | `V1\Tax\Settings::post()` |
| Create a Transaction from a Calculation | POST | `/v1/tax/transactions/create_from_calculation` | `V1\Tax\Transactions\CreateFromCalculation::post()` |
| Create a reversal Transaction | POST | `/v1/tax/transactions/create_reversal` | `V1\Tax\Transactions\CreateReversal::post()` |
| Retrieve a Transaction | GET | `/v1/tax/transactions/{transaction}` | `V1\Tax\Transactions::getByTransaction()` |
| Retrieve a Transaction's line items | GET | `/v1/tax/transactions/{transaction}/line_items` | `V1\Tax\Transactions\ByTransaction\LineItems::get()` |
| List all tax codes | GET | `/v1/tax_codes` | `V1\TaxCodes::get()` |
| Retrieve a tax code | GET | `/v1/tax_codes/{id}` | `V1\TaxCodes::getById()` |
| List all tax IDs | GET | `/v1/tax_ids` | `V1\TaxIds::get()` |
| Create a tax ID | POST | `/v1/tax_ids` | `V1\TaxIds::post()` |
| Delete a tax ID | DELETE | `/v1/tax_ids/{id}` | `V1\TaxIds::deleteById()` |
| Retrieve a tax ID | GET | `/v1/tax_ids/{id}` | `V1\TaxIds::getById()` |
| List all tax rates | GET | `/v1/tax_rates` | `V1\TaxRates::get()` |
| Create a tax rate | POST | `/v1/tax_rates` | `V1\TaxRates::post()` |
| Retrieve a tax rate | GET | `/v1/tax_rates/{tax_rate}` | `V1\TaxRates::getByTaxRate()` |
| Update a tax rate | POST | `/v1/tax_rates/{tax_rate}` | `V1\TaxRates::postByTaxRate()` |
| List all Configurations | GET | `/v1/terminal/configurations` | `V1\Terminal\Configurations::get()` |
| Create a Configuration | POST | `/v1/terminal/configurations` | `V1\Terminal\Configurations::post()` |
| Delete a Configuration | DELETE | `/v1/terminal/configurations/{configuration}` | `V1\Terminal\Configurations::deleteByConfiguration()` |
| Retrieve a Configuration | GET | `/v1/terminal/configurations/{configuration}` | `V1\Terminal\Configurations::getByConfiguration()` |
| Update a Configuration | POST | `/v1/terminal/configurations/{configuration}` | `V1\Terminal\Configurations::postByConfiguration()` |
| Create a Connection Token | POST | `/v1/terminal/connection_tokens` | `V1\Terminal\ConnectionTokens::post()` |
| List all Locations | GET | `/v1/terminal/locations` | `V1\Terminal\Locations::get()` |
| Create a Location | POST | `/v1/terminal/locations` | `V1\Terminal\Locations::post()` |
| Delete a Location | DELETE | `/v1/terminal/locations/{location}` | `V1\Terminal\Locations::deleteByLocation()` |
| Retrieve a Location | GET | `/v1/terminal/locations/{location}` | `V1\Terminal\Locations::getByLocation()` |
| Update a Location | POST | `/v1/terminal/locations/{location}` | `V1\Terminal\Locations::postByLocation()` |
| Create an Onboarding Link | POST | `/v1/terminal/onboarding_links` | `V1\Terminal\OnboardingLinks::post()` |
| List all Readers | GET | `/v1/terminal/readers` | `V1\Terminal\Readers::get()` |
| Create a Reader | POST | `/v1/terminal/readers` | `V1\Terminal\Readers::post()` |
| Delete a Reader | DELETE | `/v1/terminal/readers/{reader}` | `V1\Terminal\Readers::deleteByReader()` |
| Retrieve a Reader | GET | `/v1/terminal/readers/{reader}` | `V1\Terminal\Readers::getByReader()` |
| Update a Reader | POST | `/v1/terminal/readers/{reader}` | `V1\Terminal\Readers::postByReader()` |
| Cancel the current reader action | POST | `/v1/terminal/readers/{reader}/cancel_action` | `V1\Terminal\Readers\ByReader\CancelAction::post()` |
| Collect inputs using a Reader | POST | `/v1/terminal/readers/{reader}/collect_inputs` | `V1\Terminal\Readers\ByReader\CollectInputs::post()` |
| Hand off a PaymentIntent to a Reader and collect card details | POST | `/v1/terminal/readers/{reader}/collect_payment_method` | `V1\Terminal\Readers\ByReader\CollectPaymentMethod::post()` |
| Confirm a PaymentIntent on the Reader | POST | `/v1/terminal/readers/{reader}/confirm_payment_intent` | `V1\Terminal\Readers\ByReader\ConfirmPaymentIntent::post()` |
| Hand-off a PaymentIntent to a Reader | POST | `/v1/terminal/readers/{reader}/process_payment_intent` | `V1\Terminal\Readers\ByReader\ProcessPaymentIntent::post()` |
| Hand-off a SetupIntent to a Reader | POST | `/v1/terminal/readers/{reader}/process_setup_intent` | `V1\Terminal\Readers\ByReader\ProcessSetupIntent::post()` |
| Refund a Charge or a PaymentIntent in-person | POST | `/v1/terminal/readers/{reader}/refund_payment` | `V1\Terminal\Readers\ByReader\RefundPayment::post()` |
| Set reader display | POST | `/v1/terminal/readers/{reader}/set_reader_display` | `V1\Terminal\Readers\ByReader\SetReaderDisplay::post()` |
| Create a refund using a Terminal-supported device. | POST | `/v1/terminal/refunds` | `V1\Terminal\Refunds::post()` |
| Create a test Confirmation Token | POST | `/v1/test_helpers/confirmation_tokens` | `V1\TestHelpers\ConfirmationTokens::post()` |
| Fund a test mode cash balance | POST | `/v1/test_helpers/customers/{customer}/fund_cash_balance` | `V1\TestHelpers\Customers\ByCustomer\FundCashBalance::post()` |
| Create a test-mode authorization | POST | `/v1/test_helpers/issuing/authorizations` | `V1\TestHelpers\Issuing\Authorizations::post()` |
| Capture a test-mode authorization | POST | `/v1/test_helpers/issuing/authorizations/{authorization}/capture` | `V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture::post()` |
| Expire a test-mode authorization | POST | `/v1/test_helpers/issuing/authorizations/{authorization}/expire` | `V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Expire::post()` |
| Finalize a test-mode authorization's amount | POST | `/v1/test_helpers/issuing/authorizations/{authorization}/finalize_amount` | `V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount::post()` |
| Respond to fraud challenge | POST | `/v1/test_helpers/issuing/authorizations/{authorization}/fraud_challenges/respond` | `V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FraudChallenges\Respond::post()` |
| Increment a test-mode authorization | POST | `/v1/test_helpers/issuing/authorizations/{authorization}/increment` | `V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Increment::post()` |
| Reverse a test-mode authorization | POST | `/v1/test_helpers/issuing/authorizations/{authorization}/reverse` | `V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Reverse::post()` |
| Deliver a testmode card | POST | `/v1/test_helpers/issuing/cards/{card}/shipping/deliver` | `V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Deliver::post()` |
| Fail a testmode card | POST | `/v1/test_helpers/issuing/cards/{card}/shipping/fail` | `V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Fail::post()` |
| Return a testmode card | POST | `/v1/test_helpers/issuing/cards/{card}/shipping/return` | `V1\TestHelpers\Issuing\Cards\ByCard\Shipping\ReturnResource::post()` |
| Ship a testmode card | POST | `/v1/test_helpers/issuing/cards/{card}/shipping/ship` | `V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Ship::post()` |
| Submit a testmode card | POST | `/v1/test_helpers/issuing/cards/{card}/shipping/submit` | `V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Submit::post()` |
| Activate a testmode personalization design | POST | `/v1/test_helpers/issuing/personalization_designs/{personalization_design}/activate` | `V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Activate::post()` |
| Deactivate a testmode personalization design | POST | `/v1/test_helpers/issuing/personalization_designs/{personalization_design}/deactivate` | `V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Deactivate::post()` |
| Reject a testmode personalization design | POST | `/v1/test_helpers/issuing/personalization_designs/{personalization_design}/reject` | `V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject::post()` |
| Create a test-mode settlement | POST | `/v1/test_helpers/issuing/settlements` | `V1\TestHelpers\Issuing\Settlements::post()` |
| Complete a test-mode settlement | POST | `/v1/test_helpers/issuing/settlements/{settlement}/complete` | `V1\TestHelpers\Issuing\Settlements\BySettlement\Complete::post()` |
| Create a test-mode force capture | POST | `/v1/test_helpers/issuing/transactions/create_force_capture` | `V1\TestHelpers\Issuing\Transactions\CreateForceCapture::post()` |
| Create a test-mode unlinked refund | POST | `/v1/test_helpers/issuing/transactions/create_unlinked_refund` | `V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund::post()` |
| Refund a test-mode transaction | POST | `/v1/test_helpers/issuing/transactions/{transaction}/refund` | `V1\TestHelpers\Issuing\Transactions\ByTransaction\Refund::post()` |
| Expire a pending refund. | POST | `/v1/test_helpers/refunds/{refund}/expire` | `V1\TestHelpers\Refunds\ByRefund\Expire::post()` |
| Simulate presenting a payment method | POST | `/v1/test_helpers/terminal/readers/{reader}/present_payment_method` | `V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod::post()` |
| Simulate a successful input collection | POST | `/v1/test_helpers/terminal/readers/{reader}/succeed_input_collection` | `V1\TestHelpers\Terminal\Readers\ByReader\SucceedInputCollection::post()` |
| Simulate an input collection timeout | POST | `/v1/test_helpers/terminal/readers/{reader}/timeout_input_collection` | `V1\TestHelpers\Terminal\Readers\ByReader\TimeoutInputCollection::post()` |
| List all test clocks | GET | `/v1/test_helpers/test_clocks` | `V1\TestHelpers\TestClocks::get()` |
| Create a test clock | POST | `/v1/test_helpers/test_clocks` | `V1\TestHelpers\TestClocks::post()` |
| Delete a test clock | DELETE | `/v1/test_helpers/test_clocks/{test_clock}` | `V1\TestHelpers\TestClocks::deleteByTestClock()` |
| Retrieve a test clock | GET | `/v1/test_helpers/test_clocks/{test_clock}` | `V1\TestHelpers\TestClocks::getByTestClock()` |
| Advance a test clock | POST | `/v1/test_helpers/test_clocks/{test_clock}/advance` | `V1\TestHelpers\TestClocks\ByTestClock\Advance::post()` |
| Test mode: Fail an InboundTransfer | POST | `/v1/test_helpers/treasury/inbound_transfers/{id}/fail` | `V1\TestHelpers\Treasury\InboundTransfers\ById\Fail::post()` |
| Test mode: Return an InboundTransfer | POST | `/v1/test_helpers/treasury/inbound_transfers/{id}/return` | `V1\TestHelpers\Treasury\InboundTransfers\ById\ReturnResource::post()` |
| Test mode: Succeed an InboundTransfer | POST | `/v1/test_helpers/treasury/inbound_transfers/{id}/succeed` | `V1\TestHelpers\Treasury\InboundTransfers\ById\Succeed::post()` |
| Test mode: Update an OutboundPayment | POST | `/v1/test_helpers/treasury/outbound_payments/{id}` | `V1\TestHelpers\Treasury\OutboundPayments::postById()` |
| Test mode: Fail an OutboundPayment | POST | `/v1/test_helpers/treasury/outbound_payments/{id}/fail` | `V1\TestHelpers\Treasury\OutboundPayments\ById\Fail::post()` |
| Test mode: Post an OutboundPayment | POST | `/v1/test_helpers/treasury/outbound_payments/{id}/post` | `V1\TestHelpers\Treasury\OutboundPayments\ById\Post::post()` |
| Test mode: Return an OutboundPayment | POST | `/v1/test_helpers/treasury/outbound_payments/{id}/return` | `V1\TestHelpers\Treasury\OutboundPayments\ById\ReturnResource::post()` |
| Test mode: Update an OutboundTransfer | POST | `/v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}` | `V1\TestHelpers\Treasury\OutboundTransfers::postByOutboundTransfer()` |
| Test mode: Fail an OutboundTransfer | POST | `/v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}/fail` | `V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Fail::post()` |
| Test mode: Post an OutboundTransfer | POST | `/v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}/post` | `V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post::post()` |
| Test mode: Return an OutboundTransfer | POST | `/v1/test_helpers/treasury/outbound_transfers/{outbound_transfer}/return` | `V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource::post()` |
| Test mode: Create a ReceivedCredit | POST | `/v1/test_helpers/treasury/received_credits` | `V1\TestHelpers\Treasury\ReceivedCredits::post()` |
| Test mode: Create a ReceivedDebit | POST | `/v1/test_helpers/treasury/received_debits` | `V1\TestHelpers\Treasury\ReceivedDebits::post()` |
| List all 3D Secure Authentications | GET | `/v1/three_d_secure/authentications` | `V1\ThreeDSecure\Authentications::get()` |
| Create a 3DS Authentication | POST | `/v1/three_d_secure/authentications` | `V1\ThreeDSecure\Authentications::post()` |
| Retrieve a 3DS Authentication | GET | `/v1/three_d_secure/authentications/{authentication}` | `V1\ThreeDSecure\Authentications::getByAuthentication()` |
| Cancel a 3DS Authentication | POST | `/v1/three_d_secure/authentications/{authentication}/cancel` | `V1\ThreeDSecure\Authentications\ByAuthentication\Cancel::post()` |
| Submit a 3DS Authentication | POST | `/v1/three_d_secure/authentications/{authentication}/submit` | `V1\ThreeDSecure\Authentications\ByAuthentication\Submit::post()` |
| Create a bank account token | POST | `/v1/tokens` | `V1\Tokens::post()` |
| Retrieve a token | GET | `/v1/tokens/{token}` | `V1\Tokens::getByToken()` |
| List all top-ups | GET | `/v1/topups` | `V1\Topups::get()` |
| Create a top-up | POST | `/v1/topups` | `V1\Topups::post()` |
| Retrieve a top-up | GET | `/v1/topups/{topup}` | `V1\Topups::getByTopup()` |
| Update a top-up | POST | `/v1/topups/{topup}` | `V1\Topups::postByTopup()` |
| Cancel a top-up | POST | `/v1/topups/{topup}/cancel` | `V1\Topups\ByTopup\Cancel::post()` |
| List all transfers | GET | `/v1/transfers` | `V1\Transfers::get()` |
| Create a transfer | POST | `/v1/transfers` | `V1\Transfers::post()` |
| List all reversals | GET | `/v1/transfers/{id}/reversals` | `V1\Transfers\ById\Reversals::get()` |
| Create a transfer reversal | POST | `/v1/transfers/{id}/reversals` | `V1\Transfers\ById\Reversals::post()` |
| Retrieve a transfer | GET | `/v1/transfers/{transfer}` | `V1\Transfers::getByTransfer()` |
| Update a transfer | POST | `/v1/transfers/{transfer}` | `V1\Transfers::postByTransfer()` |
| Retrieve a reversal | GET | `/v1/transfers/{transfer}/reversals/{id}` | `V1\Transfers\ByTransfer\Reversals::getById()` |
| Update a reversal | POST | `/v1/transfers/{transfer}/reversals/{id}` | `V1\Transfers\ByTransfer\Reversals::postById()` |
| List all CreditReversals | GET | `/v1/treasury/credit_reversals` | `V1\Treasury\CreditReversals::get()` |
| Create a CreditReversal | POST | `/v1/treasury/credit_reversals` | `V1\Treasury\CreditReversals::post()` |
| Retrieve a CreditReversal | GET | `/v1/treasury/credit_reversals/{credit_reversal}` | `V1\Treasury\CreditReversals::getByCreditReversal()` |
| List all DebitReversals | GET | `/v1/treasury/debit_reversals` | `V1\Treasury\DebitReversals::get()` |
| Create a DebitReversal | POST | `/v1/treasury/debit_reversals` | `V1\Treasury\DebitReversals::post()` |
| Retrieve a DebitReversal | GET | `/v1/treasury/debit_reversals/{debit_reversal}` | `V1\Treasury\DebitReversals::getByDebitReversal()` |
| List all FinancialAccounts | GET | `/v1/treasury/financial_accounts` | `V1\Treasury\FinancialAccounts::get()` |
| Create a FinancialAccount | POST | `/v1/treasury/financial_accounts` | `V1\Treasury\FinancialAccounts::post()` |
| Retrieve a FinancialAccount | GET | `/v1/treasury/financial_accounts/{financial_account}` | `V1\Treasury\FinancialAccounts::getByFinancialAccount()` |
| Update a FinancialAccount | POST | `/v1/treasury/financial_accounts/{financial_account}` | `V1\Treasury\FinancialAccounts::postByFinancialAccount()` |
| Close a FinancialAccount | POST | `/v1/treasury/financial_accounts/{financial_account}/close` | `V1\Treasury\FinancialAccounts\ByFinancialAccount\Close::post()` |
| Retrieve FinancialAccount Features | GET | `/v1/treasury/financial_accounts/{financial_account}/features` | `V1\Treasury\FinancialAccounts\ByFinancialAccount\Features::get()` |
| Update FinancialAccount Features | POST | `/v1/treasury/financial_accounts/{financial_account}/features` | `V1\Treasury\FinancialAccounts\ByFinancialAccount\Features::post()` |
| List all InboundTransfers | GET | `/v1/treasury/inbound_transfers` | `V1\Treasury\InboundTransfers::get()` |
| Create an InboundTransfer | POST | `/v1/treasury/inbound_transfers` | `V1\Treasury\InboundTransfers::post()` |
| Retrieve an InboundTransfer | GET | `/v1/treasury/inbound_transfers/{id}` | `V1\Treasury\InboundTransfers::getById()` |
| Cancel an InboundTransfer | POST | `/v1/treasury/inbound_transfers/{inbound_transfer}/cancel` | `V1\Treasury\InboundTransfers\ByInboundTransfer\Cancel::post()` |
| List all OutboundPayments | GET | `/v1/treasury/outbound_payments` | `V1\Treasury\OutboundPayments::get()` |
| Create an OutboundPayment | POST | `/v1/treasury/outbound_payments` | `V1\Treasury\OutboundPayments::post()` |
| Retrieve an OutboundPayment | GET | `/v1/treasury/outbound_payments/{id}` | `V1\Treasury\OutboundPayments::getById()` |
| Cancel an OutboundPayment | POST | `/v1/treasury/outbound_payments/{id}/cancel` | `V1\Treasury\OutboundPayments\ById\Cancel::post()` |
| List all OutboundTransfers | GET | `/v1/treasury/outbound_transfers` | `V1\Treasury\OutboundTransfers::get()` |
| Create an OutboundTransfer | POST | `/v1/treasury/outbound_transfers` | `V1\Treasury\OutboundTransfers::post()` |
| Retrieve an OutboundTransfer | GET | `/v1/treasury/outbound_transfers/{outbound_transfer}` | `V1\Treasury\OutboundTransfers::getByOutboundTransfer()` |
| Cancel an OutboundTransfer | POST | `/v1/treasury/outbound_transfers/{outbound_transfer}/cancel` | `V1\Treasury\OutboundTransfers\ByOutboundTransfer\Cancel::post()` |
| List all ReceivedCredits | GET | `/v1/treasury/received_credits` | `V1\Treasury\ReceivedCredits::get()` |
| Retrieve a ReceivedCredit | GET | `/v1/treasury/received_credits/{id}` | `V1\Treasury\ReceivedCredits::getById()` |
| List all ReceivedDebits | GET | `/v1/treasury/received_debits` | `V1\Treasury\ReceivedDebits::get()` |
| Retrieve a ReceivedDebit | GET | `/v1/treasury/received_debits/{id}` | `V1\Treasury\ReceivedDebits::getById()` |
| List all TransactionEntries | GET | `/v1/treasury/transaction_entries` | `V1\Treasury\TransactionEntries::get()` |
| Retrieve a TransactionEntry | GET | `/v1/treasury/transaction_entries/{id}` | `V1\Treasury\TransactionEntries::getById()` |
| List all Transactions | GET | `/v1/treasury/transactions` | `V1\Treasury\Transactions::get()` |
| Retrieve a Transaction | GET | `/v1/treasury/transactions/{id}` | `V1\Treasury\Transactions::getById()` |
| List all webhook endpoints | GET | `/v1/webhook_endpoints` | `V1\WebhookEndpoints::get()` |
| Create a webhook endpoint | POST | `/v1/webhook_endpoints` | `V1\WebhookEndpoints::post()` |
| Delete a webhook endpoint | DELETE | `/v1/webhook_endpoints/{webhook_endpoint}` | `V1\WebhookEndpoints::deleteByWebhookEndpoint()` |
| Retrieve a webhook endpoint | GET | `/v1/webhook_endpoints/{webhook_endpoint}` | `V1\WebhookEndpoints::getByWebhookEndpoint()` |
| Update a webhook endpoint | POST | `/v1/webhook_endpoints/{webhook_endpoint}` | `V1\WebhookEndpoints::postByWebhookEndpoint()` |
