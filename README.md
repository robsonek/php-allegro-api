# robsonek/php-allegro-api

https://developer.allegro.pl/about

Documentation is generated from [this OpenAPI 3.0 specification file](https://developer.allegro.pl/swagger.yaml).
To start working with our API, you can also check our [official Allegro REST API public collection](https://www.postman.com/allegro-rest-api/allegro-rest-api/collection/4puh6ls/allegro-rest-api) in Postman.

For more information, please visit [https://github.com/allegro/allegro-api/issues](https://github.com/allegro/allegro-api/issues).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings, simply run the following command:

```sh
composer require robsonek/php-allegro-api
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = robsonek\phpAllegroApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new robsonek\phpAllegroApi\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_services_group_request = new \robsonek\phpAllegroApi\Model\AdditionalServicesGroupRequest(); // \robsonek\phpAllegroApi\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->createAdditionalServicesGroupUsingPOST($additional_services_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->createAdditionalServicesGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.allegro.pl*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdditionalServicesApi* | [**createAdditionalServicesGroupUsingPOST**](docs/Api/AdditionalServicesApi.md#createadditionalservicesgroupusingpost) | **POST** /sale/offer-additional-services/groups | Create additional services group
*AdditionalServicesApi* | [**getAdditionalServicesGroupUsingGET**](docs/Api/AdditionalServicesApi.md#getadditionalservicesgroupusingget) | **GET** /sale/offer-additional-services/groups/{groupId} | Get the details of an additional services group
*AdditionalServicesApi* | [**getListOfAdditionalServicesDefinitionsCategoriesUsingGET**](docs/Api/AdditionalServicesApi.md#getlistofadditionalservicesdefinitionscategoriesusingget) | **GET** /sale/offer-additional-services/categories | Get the additional services definitions by categories
*AdditionalServicesApi* | [**getListOfAdditionalServicesGroupsUsingGET**](docs/Api/AdditionalServicesApi.md#getlistofadditionalservicesgroupsusingget) | **GET** /sale/offer-additional-services/groups | Get the user&#39;s additional services groups
*AdditionalServicesApi* | [**modifyAdditionalServicesGroupUsingPUT**](docs/Api/AdditionalServicesApi.md#modifyadditionalservicesgroupusingput) | **PUT** /sale/offer-additional-services/groups/{groupId} | Modify an additional services group
*AdditionalServicesTranslationsApi* | [**deleteAdditionalServiceGroupTranslation**](docs/Api/AdditionalServicesTranslationsApi.md#deleteadditionalservicegrouptranslation) | **DELETE** /sale/offer-additional-services/groups/{groupId}/translations/{language} | Delete a translation for a specified group and language
*AdditionalServicesTranslationsApi* | [**getAdditionalServiceGroupTranslations**](docs/Api/AdditionalServicesTranslationsApi.md#getadditionalservicegrouptranslations) | **GET** /sale/offer-additional-services/groups/{groupId}/translations | Get translations for specified group
*AdditionalServicesTranslationsApi* | [**updateAdditionalServiceGroupTranslation**](docs/Api/AdditionalServicesTranslationsApi.md#updateadditionalservicegrouptranslation) | **PATCH** /sale/offer-additional-services/groups/{groupId}/translations/{language} | Create/Update translations for specified group and language
*AdvanceShipNoticesApi* | [**cancelAdvanceShipNotice**](docs/Api/AdvanceShipNoticesApi.md#canceladvanceshipnotice) | **PUT** /fulfillment/advance-ship-notices/{id}/cancel | Cancel Advance Ship Notice
*AdvanceShipNoticesApi* | [**createAdvanceShipNotice**](docs/Api/AdvanceShipNoticesApi.md#createadvanceshipnotice) | **POST** /fulfillment/advance-ship-notices | Create an Advance Ship Notice
*AdvanceShipNoticesApi* | [**deleteAdvanceShipNotice**](docs/Api/AdvanceShipNoticesApi.md#deleteadvanceshipnotice) | **DELETE** /fulfillment/advance-ship-notices/{id} | Delete Advance Ship Notice
*AdvanceShipNoticesApi* | [**getAdvanceShipNotice**](docs/Api/AdvanceShipNoticesApi.md#getadvanceshipnotice) | **GET** /fulfillment/advance-ship-notices/{id} | Get single Advance Ship Notice
*AdvanceShipNoticesApi* | [**getAdvanceShipNoticeLabels**](docs/Api/AdvanceShipNoticesApi.md#getadvanceshipnoticelabels) | **GET** /fulfillment/advance-ship-notices/{id}/labels | Get labels for Advance Ship Notice
*AdvanceShipNoticesApi* | [**getAdvanceShipNoticeReceivingState**](docs/Api/AdvanceShipNoticesApi.md#getadvanceshipnoticereceivingstate) | **GET** /fulfillment/advance-ship-notices/{id}/receiving-state | Check current state and details of Advance Ship Notice receiving
*AdvanceShipNoticesApi* | [**getAdvanceShipNotices**](docs/Api/AdvanceShipNoticesApi.md#getadvanceshipnotices) | **GET** /fulfillment/advance-ship-notices | Get list of Advance Ship Notices
*AdvanceShipNoticesApi* | [**getSubmitCommand**](docs/Api/AdvanceShipNoticesApi.md#getsubmitcommand) | **GET** /fulfillment/submit-commands/{command-id} | Get submit status
*AdvanceShipNoticesApi* | [**submitCommand**](docs/Api/AdvanceShipNoticesApi.md#submitcommand) | **PUT** /fulfillment/submit-commands/{command-id} | Submit the Advance Ship Notice
*AdvanceShipNoticesApi* | [**updateAdvanceShipNotice**](docs/Api/AdvanceShipNoticesApi.md#updateadvanceshipnotice) | **PUT** /fulfillment/advance-ship-notices/{id} | Update Advance Ship Notice
*AdvanceShipNoticesApi* | [**updateSubmittedAdvanceShipNotice**](docs/Api/AdvanceShipNoticesApi.md#updatesubmittedadvanceshipnotice) | **PUT** /fulfillment/advance-ship-notices/{id}/submitted | Update submitted Advance Ship Notice
*AfterSaleServicesApi* | [**createAfterSalesServiceConditionsAttachmentUsingPOST**](docs/Api/AfterSaleServicesApi.md#createaftersalesserviceconditionsattachmentusingpost) | **POST** /after-sales-service-conditions/attachments | Create a warranty attachment metadata
*AfterSaleServicesApi* | [**createAfterSalesServiceImpliedWarrantyUsingPOST**](docs/Api/AfterSaleServicesApi.md#createaftersalesserviceimpliedwarrantyusingpost) | **POST** /after-sales-service-conditions/implied-warranties | Create new user&#39;s implied warranty
*AfterSaleServicesApi* | [**createAfterSalesServiceReturnPolicyUsingPOST**](docs/Api/AfterSaleServicesApi.md#createaftersalesservicereturnpolicyusingpost) | **POST** /after-sales-service-conditions/return-policies | Create new user&#39;s return policy
*AfterSaleServicesApi* | [**createAfterSalesServiceWarrantyUsingPOST**](docs/Api/AfterSaleServicesApi.md#createaftersalesservicewarrantyusingpost) | **POST** /after-sales-service-conditions/warranties | Create new user&#39;s warranty
*AfterSaleServicesApi* | [**getAfterSalesServiceImpliedWarrantyUsingGET**](docs/Api/AfterSaleServicesApi.md#getaftersalesserviceimpliedwarrantyusingget) | **GET** /after-sales-service-conditions/implied-warranties/{impliedWarrantyId} | Get the user&#39;s implied warranty
*AfterSaleServicesApi* | [**getAfterSalesServiceReturnPolicyUsingGET**](docs/Api/AfterSaleServicesApi.md#getaftersalesservicereturnpolicyusingget) | **GET** /after-sales-service-conditions/return-policies/{returnPolicyId} | Get the user&#39;s return policy
*AfterSaleServicesApi* | [**getAfterSalesServiceWarrantyUsingGET**](docs/Api/AfterSaleServicesApi.md#getaftersalesservicewarrantyusingget) | **GET** /after-sales-service-conditions/warranties/{warrantyId} | Get the user&#39;s warranty
*AfterSaleServicesApi* | [**getPublicSellerListingUsingGET**](docs/Api/AfterSaleServicesApi.md#getpublicsellerlistingusingget) | **GET** /after-sales-service-conditions/implied-warranties | Get the user&#39;s implied warranties
*AfterSaleServicesApi* | [**getPublicSellerListingUsingGET1**](docs/Api/AfterSaleServicesApi.md#getpublicsellerlistingusingget1) | **GET** /after-sales-service-conditions/return-policies | Get the user&#39;s return policies
*AfterSaleServicesApi* | [**getPublicSellerListingUsingGET2**](docs/Api/AfterSaleServicesApi.md#getpublicsellerlistingusingget2) | **GET** /after-sales-service-conditions/warranties | Get the user&#39;s warranties
*AfterSaleServicesApi* | [**updateAfterSalesServiceImpliedWarrantyUsingPUT**](docs/Api/AfterSaleServicesApi.md#updateaftersalesserviceimpliedwarrantyusingput) | **PUT** /after-sales-service-conditions/implied-warranties/{impliedWarrantyId} | Change the user&#39;s implied warranty
*AfterSaleServicesApi* | [**updateAfterSalesServiceReturnPolicyUsingPUT**](docs/Api/AfterSaleServicesApi.md#updateaftersalesservicereturnpolicyusingput) | **PUT** /after-sales-service-conditions/return-policies/{returnPolicyId} | Change the user&#39;s return policy
*AfterSaleServicesApi* | [**updateAfterSalesServiceWarrantyUsingPUT**](docs/Api/AfterSaleServicesApi.md#updateaftersalesservicewarrantyusingput) | **PUT** /after-sales-service-conditions/warranties/{warrantyId} | Change the user&#39;s warranty
*AfterSaleServicesApi* | [**uploadAfterSalesServiceConditionsAttachmentUsingPUT**](docs/Api/AfterSaleServicesApi.md#uploadaftersalesserviceconditionsattachmentusingput) | **PUT** /after-sales-service-conditions/attachments/{attachmentId} | Upload an warranty attachment
*AlleDiscountApi* | [**getAlleDiscountCampaigns**](docs/Api/AlleDiscountApi.md#getallediscountcampaigns) | **GET** /sale/alle-discount/campaigns | List AlleDiscount campaigns
*AlleDiscountApi* | [**getOffersEligibleForAlleDiscount**](docs/Api/AlleDiscountApi.md#getofferseligibleforallediscount) | **GET** /sale/alle-discount/{campaignId}/eligible-offers | List eligible offers
*AlleDiscountApi* | [**getOffersSubmittedToAlleDiscount**](docs/Api/AlleDiscountApi.md#getofferssubmittedtoallediscount) | **GET** /sale/alle-discount/{campaignId}/submitted-offers | List offer participations
*AlleDiscountApi* | [**getSubmitOfferToAlleDiscountCommandsStatus**](docs/Api/AlleDiscountApi.md#getsubmitoffertoallediscountcommandsstatus) | **GET** /sale/alle-discount/submit-offer-commands/{commandId} | Get the offer submission command status
*AlleDiscountApi* | [**getWithdrawOfferFromAlleDiscountCommandsStatus**](docs/Api/AlleDiscountApi.md#getwithdrawofferfromallediscountcommandsstatus) | **GET** /sale/alle-discount/withdraw-offer-commands/{commandId} | Get the offer withdrawal command status
*AlleDiscountApi* | [**submitOfferToAlleDiscountCommands**](docs/Api/AlleDiscountApi.md#submitoffertoallediscountcommands) | **POST** /sale/alle-discount/submit-offer-commands | Create submit offer command
*AlleDiscountApi* | [**withdrawOfferFromAlleDiscountCommands**](docs/Api/AlleDiscountApi.md#withdrawofferfromallediscountcommands) | **POST** /sale/alle-discount/withdraw-offer-commands | Create withdraw offer command
*AllegroPricesApi* | [**getAllegroPricesConsentForOffer**](docs/Api/AllegroPricesApi.md#getallegropricesconsentforoffer) | **GET** /sale/allegro-prices-offer-consents/{offerId} | Get the current consents&#39; state for an offer
*AllegroPricesApi* | [**getAllegroPricesEligibilityForAccount**](docs/Api/AllegroPricesApi.md#getallegropriceseligibilityforaccount) | **GET** /sale/allegro-prices-account-eligibility | Get the current eligibility information for the account
*AllegroPricesApi* | [**updateAllegroPricesConsentForAccount**](docs/Api/AllegroPricesApi.md#updateallegropricesconsentforaccount) | **PUT** /sale/allegro-prices-account-consent | Update consents for the account
*AllegroPricesApi* | [**updateAllegroPricesConsentForOffer**](docs/Api/AllegroPricesApi.md#updateallegropricesconsentforoffer) | **PUT** /sale/allegro-prices-offer-consents/{offerId} | Update consents for an offer
*AuctionsAndBiddingApi* | [**getBid**](docs/Api/AuctionsAndBiddingApi.md#getbid) | **GET** /bidding/offers/{offerId}/bid | Get current user&#39;s bid information
*AuctionsAndBiddingApi* | [**placeBid**](docs/Api/AuctionsAndBiddingApi.md#placebid) | **PUT** /bidding/offers/{offerId}/bid | Place a bid in an auction
*AutomaticPricingApi* | [**createAutomaticPricingRulesUsingPost**](docs/Api/AutomaticPricingApi.md#createautomaticpricingrulesusingpost) | **POST** /sale/price-automation/rules | Post automatic pricing rule
*AutomaticPricingApi* | [**deleteAutomaticPricingRuleUsingDelete**](docs/Api/AutomaticPricingApi.md#deleteautomaticpricingruleusingdelete) | **DELETE** /sale/price-automation/rules/{ruleId} | Delete automatic pricing rule
*AutomaticPricingApi* | [**getAutomaticPricingRuleByIdUsingGET**](docs/Api/AutomaticPricingApi.md#getautomaticpricingrulebyidusingget) | **GET** /sale/price-automation/rules/{ruleId} | Get automatic pricing rule by id
*AutomaticPricingApi* | [**getAutomaticPricingRulesForOfferUsingGET**](docs/Api/AutomaticPricingApi.md#getautomaticpricingrulesforofferusingget) | **GET** /sale/price-automation/offers/{offerId}/rules | Get automatic pricing rules assigned to the offer
*AutomaticPricingApi* | [**getAutomaticPricingRulesUsingGET**](docs/Api/AutomaticPricingApi.md#getautomaticpricingrulesusingget) | **GET** /sale/price-automation/rules | Get automatic pricing rules
*AutomaticPricingApi* | [**updateAutomaticPricingRuleUsingPut**](docs/Api/AutomaticPricingApi.md#updateautomaticpricingruleusingput) | **PUT** /sale/price-automation/rules/{ruleId} | Edit automatic pricing rule
*BadgeCampaignsApi* | [**badgeApplicationsGetAll**](docs/Api/BadgeCampaignsApi.md#badgeapplicationsgetall) | **GET** /sale/badge-applications | Get a list of badge applications
*BadgeCampaignsApi* | [**badgeApplicationsGetOne**](docs/Api/BadgeCampaignsApi.md#badgeapplicationsgetone) | **GET** /sale/badge-applications/{applicationId} | Get a badge application details
*BadgeCampaignsApi* | [**badgeCampaignsGetAll**](docs/Api/BadgeCampaignsApi.md#badgecampaignsgetall) | **GET** /sale/badge-campaigns | Get a list of available badge campaigns
*BadgeCampaignsApi* | [**badgeOperationsGetOne**](docs/Api/BadgeCampaignsApi.md#badgeoperationsgetone) | **GET** /sale/badge-operations/{operationId} | Get badge operation details
*BadgeCampaignsApi* | [**getBadges**](docs/Api/BadgeCampaignsApi.md#getbadges) | **GET** /sale/badges | Get a list of badges
*BadgeCampaignsApi* | [**patchBadge**](docs/Api/BadgeCampaignsApi.md#patchbadge) | **PATCH** /sale/badges/offers/{offerId}/campaigns/{campaignId} | Update campaign badge for the given offer
*BadgeCampaignsApi* | [**postBadges**](docs/Api/BadgeCampaignsApi.md#postbadges) | **POST** /sale/badges | Apply for badge in selected offer
*BatchOfferModificationApi* | [**getGeneralReportUsingGET**](docs/Api/BatchOfferModificationApi.md#getgeneralreportusingget) | **GET** /sale/offer-modification-commands/{commandId} | Modification command summary
*BatchOfferModificationApi* | [**getPriceModificationCommandStatusUsingGET**](docs/Api/BatchOfferModificationApi.md#getpricemodificationcommandstatususingget) | **GET** /sale/offer-price-change-commands/{commandId} | Change price command summary
*BatchOfferModificationApi* | [**getPriceModificationCommandTasksStatusesUsingGET**](docs/Api/BatchOfferModificationApi.md#getpricemodificationcommandtasksstatusesusingget) | **GET** /sale/offer-price-change-commands/{commandId}/tasks | Change price command detailed report
*BatchOfferModificationApi* | [**getQuantityModificationCommandStatusUsingGET**](docs/Api/BatchOfferModificationApi.md#getquantitymodificationcommandstatususingget) | **GET** /sale/offer-quantity-change-commands/{commandId} | Change quantity command summary
*BatchOfferModificationApi* | [**getQuantityModificationCommandTasksStatusesUsingGET**](docs/Api/BatchOfferModificationApi.md#getquantitymodificationcommandtasksstatusesusingget) | **GET** /sale/offer-quantity-change-commands/{commandId}/tasks | Change quantity command detailed report
*BatchOfferModificationApi* | [**getTasksUsingGET**](docs/Api/BatchOfferModificationApi.md#gettasksusingget) | **GET** /sale/offer-modification-commands/{commandId}/tasks | Modification command detailed report
*BatchOfferModificationApi* | [**getofferAutomaticPricingModificationCommandStatusUsingGET**](docs/Api/BatchOfferModificationApi.md#getofferautomaticpricingmodificationcommandstatususingget) | **GET** /sale/offer-price-automation-commands/{commandId} | Automatic pricing command summary
*BatchOfferModificationApi* | [**getofferAutomaticPricingModificationCommandTasksStatusesUsingGET**](docs/Api/BatchOfferModificationApi.md#getofferautomaticpricingmodificationcommandtasksstatusesusingget) | **GET** /sale/offer-price-automation-commands/{commandId}/tasks | Automatic pricing command detailed report
*BatchOfferModificationApi* | [**modificationCommandUsingPUT**](docs/Api/BatchOfferModificationApi.md#modificationcommandusingput) | **PUT** /sale/offer-modification-commands/{commandId} | Batch offer modification
*BatchOfferModificationApi* | [**offerAutomaticPricingModificationCommandUsingPOST**](docs/Api/BatchOfferModificationApi.md#offerautomaticpricingmodificationcommandusingpost) | **POST** /sale/offer-price-automation-commands | Batch offer automatic pricing rules modification
*BatchOfferModificationApi* | [**priceModificationCommandUsingPUT**](docs/Api/BatchOfferModificationApi.md#pricemodificationcommandusingput) | **PUT** /sale/offer-price-change-commands/{commandId} | Batch offer price modification
*BatchOfferModificationApi* | [**quantityModificationCommandUsingPUT**](docs/Api/BatchOfferModificationApi.md#quantitymodificationcommandusingput) | **PUT** /sale/offer-quantity-change-commands/{commandId} | Batch offer quantity modification
*BillingApi* | [**getBillingEntries**](docs/Api/BillingApi.md#getbillingentries) | **GET** /billing/billing-entries | Get a list of billing entries
*BillingApi* | [**getBillingTypes**](docs/Api/BillingApi.md#getbillingtypes) | **GET** /billing/billing-types | Get a list of billing types
*CategoriesAndParametersApi* | [**categorySuggestionUsingGET**](docs/Api/CategoriesAndParametersApi.md#categorysuggestionusingget) | **GET** /sale/matching-categories | Get categories suggestions
*CategoriesAndParametersApi* | [**getCategoriesUsingGET**](docs/Api/CategoriesAndParametersApi.md#getcategoriesusingget) | **GET** /sale/categories | Get IDs of Allegro categories
*CategoriesAndParametersApi* | [**getCategoryEventsUsingGET1**](docs/Api/CategoriesAndParametersApi.md#getcategoryeventsusingget1) | **GET** /sale/category-events | Get changes in categories
*CategoriesAndParametersApi* | [**getCategoryParametersScheduledChangesUsingGET1**](docs/Api/CategoriesAndParametersApi.md#getcategoryparametersscheduledchangesusingget1) | **GET** /sale/category-parameters-scheduled-changes | Get planned changes in category parameters
*CategoriesAndParametersApi* | [**getCategoryUsingGET1**](docs/Api/CategoriesAndParametersApi.md#getcategoryusingget1) | **GET** /sale/categories/{categoryId} | Get a category by ID
*CategoriesAndParametersApi* | [**getFlatParametersUsingGET2**](docs/Api/CategoriesAndParametersApi.md#getflatparametersusingget2) | **GET** /sale/categories/{categoryId}/parameters | Get parameters supported by a category
*CharityApi* | [**searchFundraisingCampaigns**](docs/Api/CharityApi.md#searchfundraisingcampaigns) | **GET** /charity/fundraising-campaigns | Search fundraising campaigns
*ClassifiedsApi* | [**assignClassifiedPackagesUsingPUT**](docs/Api/ClassifiedsApi.md#assignclassifiedpackagesusingput) | **PUT** /sale/offer-classifieds-packages/{offerId} | Assign packages to a classified
*ClassifiedsApi* | [**classifiedOffersStatsGET**](docs/Api/ClassifiedsApi.md#classifiedoffersstatsget) | **GET** /sale/classified-offers-stats | Get the advertisements daily statistics
*ClassifiedsApi* | [**classifiedSellerOfferStatsGET**](docs/Api/ClassifiedsApi.md#classifiedsellerofferstatsget) | **GET** /sale/classified-seller-stats | Get the seller&#39;s advertisements daily statistics
*ClassifiedsApi* | [**getClassifiedPackageConfigurationUsingGET**](docs/Api/ClassifiedsApi.md#getclassifiedpackageconfigurationusingget) | **GET** /sale/classifieds-packages/{packageId} | Get the configuration of a package
*ClassifiedsApi* | [**getClassifiedPackageConfigurationsForCategoryUsingGET**](docs/Api/ClassifiedsApi.md#getclassifiedpackageconfigurationsforcategoryusingget) | **GET** /sale/classifieds-packages | Get configurations of packages
*ClassifiedsApi* | [**getClassifiedPackagesUsingGET**](docs/Api/ClassifiedsApi.md#getclassifiedpackagesusingget) | **GET** /sale/offer-classifieds-packages/{offerId} | Get classified packages assigned to an offer
*CommissionRefundsApi* | [**cancelRefundApplication**](docs/Api/CommissionRefundsApi.md#cancelrefundapplication) | **DELETE** /order/refund-claims/{claimId} | Cancel a refund application
*CommissionRefundsApi* | [**createRefundApplication**](docs/Api/CommissionRefundsApi.md#createrefundapplication) | **POST** /order/refund-claims | Create a refund application
*CommissionRefundsApi* | [**getRefundApplication**](docs/Api/CommissionRefundsApi.md#getrefundapplication) | **GET** /order/refund-claims/{claimId} | Get a refund application details
*CommissionRefundsApi* | [**getRefundApplications**](docs/Api/CommissionRefundsApi.md#getrefundapplications) | **GET** /order/refund-claims | Get a list of refund applications
*CompatibilityListApi* | [**getCategoriesThatSupportCompatibilityList**](docs/Api/CompatibilityListApi.md#getcategoriesthatsupportcompatibilitylist) | **GET** /sale/compatibility-list/supported-categories | Get list of categories where compatibility list is supported
*CompatibilityListApi* | [**getCompatibilityListSuggestion**](docs/Api/CompatibilityListApi.md#getcompatibilitylistsuggestion) | **GET** /sale/compatibility-list-suggestions | Get suggested compatibility list.
*CompatibilityListApi* | [**getCompatibleProducts**](docs/Api/CompatibilityListApi.md#getcompatibleproducts) | **GET** /sale/compatible-products | Get list of compatible products
*CompatibilityListApi* | [**getCompatibleProductsGroups**](docs/Api/CompatibilityListApi.md#getcompatibleproductsgroups) | **GET** /sale/compatible-products/groups | Get list of compatible product groups
*ContactsApi* | [**createContactUsingPOST**](docs/Api/ContactsApi.md#createcontactusingpost) | **POST** /sale/offer-contacts | Create a new contact
*ContactsApi* | [**getContactUsingGET**](docs/Api/ContactsApi.md#getcontactusingget) | **GET** /sale/offer-contacts/{id} | Get contact details
*ContactsApi* | [**getListOfContactsUsingGET**](docs/Api/ContactsApi.md#getlistofcontactsusingget) | **GET** /sale/offer-contacts | Get the user&#39;s contacts
*ContactsApi* | [**modifyContactUsingPUT**](docs/Api/ContactsApi.md#modifycontactusingput) | **PUT** /sale/offer-contacts/{id} | Modify contact details
*CustomerReturnsApi* | [**getCustomerReturnById**](docs/Api/CustomerReturnsApi.md#getcustomerreturnbyid) | **GET** /order/customer-returns/{customerReturnId} | [BETA] Get customer return by id
*CustomerReturnsApi* | [**getCustomerReturns**](docs/Api/CustomerReturnsApi.md#getcustomerreturns) | **GET** /order/customer-returns | [BETA] Get customer returns by provided query parameters
*CustomerReturnsApi* | [**rejectCustomerReturnRefund**](docs/Api/CustomerReturnsApi.md#rejectcustomerreturnrefund) | **POST** /order/customer-returns/{customerReturnId}/rejection | [BETA] Reject customer return refund
*DeliveryApi* | [**createShippingRatesSetUsingPOST**](docs/Api/DeliveryApi.md#createshippingratessetusingpost) | **POST** /sale/shipping-rates | Create a new shipping rates set
*DeliveryApi* | [**getListOfDeliveryMethodsUsingGET**](docs/Api/DeliveryApi.md#getlistofdeliverymethodsusingget) | **GET** /sale/delivery-methods | Get the list of delivery methods
*DeliveryApi* | [**getListOfShippingRatestUsingGET**](docs/Api/DeliveryApi.md#getlistofshippingratestusingget) | **GET** /sale/shipping-rates | Get the user&#39;s shipping rates
*DeliveryApi* | [**getSaleDeliverySettings**](docs/Api/DeliveryApi.md#getsaledeliverysettings) | **GET** /sale/delivery-settings | Get the user&#39;s delivery settings
*DeliveryApi* | [**getShippingRatesSetUsingGET**](docs/Api/DeliveryApi.md#getshippingratessetusingget) | **GET** /sale/shipping-rates/{id} | Get the details of a shipping rates set
*DeliveryApi* | [**modifyShippingRatesSetUsingPUT**](docs/Api/DeliveryApi.md#modifyshippingratessetusingput) | **PUT** /sale/shipping-rates/{id} | Edit a user&#39;s shipping rates set
*DeliveryApi* | [**putSaleDeliverySettings**](docs/Api/DeliveryApi.md#putsaledeliverysettings) | **PUT** /sale/delivery-settings | Modify the user&#39;s delivery settings
*DisputesApi* | [**addMessageToDisputeUsingPOST**](docs/Api/DisputesApi.md#addmessagetodisputeusingpost) | **POST** /sale/disputes/{disputeId}/messages | Add a message to a dispute
*DisputesApi* | [**createAnAttachmentUsingPOST**](docs/Api/DisputesApi.md#createanattachmentusingpost) | **POST** /sale/dispute-attachments | Create an attachment declaration
*DisputesApi* | [**getAttachmentUsingGET**](docs/Api/DisputesApi.md#getattachmentusingget) | **GET** /sale/dispute-attachments/{attachmentId} | Get an attachment
*DisputesApi* | [**getDisputeUsingGET**](docs/Api/DisputesApi.md#getdisputeusingget) | **GET** /sale/disputes/{disputeId} | Get a single dispute
*DisputesApi* | [**getListOfDisputesUsingGET**](docs/Api/DisputesApi.md#getlistofdisputesusingget) | **GET** /sale/disputes | Get the user&#39;s disputes
*DisputesApi* | [**getMessagesFromDisputeUsingGET**](docs/Api/DisputesApi.md#getmessagesfromdisputeusingget) | **GET** /sale/disputes/{disputeId}/messages | Get the messages within a dispute
*DisputesApi* | [**uploadDisputeAttachmentUsingPUT**](docs/Api/DisputesApi.md#uploaddisputeattachmentusingput) | **PUT** /sale/dispute-attachments/{attachmentId} | Upload a dispute message attachment
*FulfillmentParcelsApi* | [**getFulfillmentOrderParcels**](docs/Api/FulfillmentParcelsApi.md#getfulfillmentorderparcels) | **GET** /fulfillment/orders/{orderId}/parcels | Get list of shipped parcels
*FulfillmentProductsApi* | [**getAvailableProducts**](docs/Api/FulfillmentProductsApi.md#getavailableproducts) | **GET** /fulfillment/available-products | Get list of available products
*FulfillmentStockApi* | [**getFulfillmentStock**](docs/Api/FulfillmentStockApi.md#getfulfillmentstock) | **GET** /fulfillment/stock | Get available stock
*ImagesAndAttachmentsApi* | [**createOfferAttachmentUsingPOST**](docs/Api/ImagesAndAttachmentsApi.md#createofferattachmentusingpost) | **POST** /sale/offer-attachments | Create an offer attachment
*ImagesAndAttachmentsApi* | [**getOfferAttachment**](docs/Api/ImagesAndAttachmentsApi.md#getofferattachment) | **GET** /sale/offer-attachments/{attachmentId} | Get offer attachment details
*ImagesAndAttachmentsApi* | [**uploadOfferAttachmentUsingPUT**](docs/Api/ImagesAndAttachmentsApi.md#uploadofferattachmentusingput) | **PUT** /sale/offer-attachments/{attachmentId} | Upload an offer attachment
*ImagesAndAttachmentsApi* | [**uploadOfferImageUsingPOST**](docs/Api/ImagesAndAttachmentsApi.md#uploadofferimageusingpost) | **POST** /sale/images | Upload an offer image
*InformationAboutMarketplacesApi* | [**marketplacesGET**](docs/Api/InformationAboutMarketplacesApi.md#marketplacesget) | **GET** /marketplaces | Get details for all marketplaces in allegro
*InformationAboutUserApi* | [**addAdditionalEmailUsingPOST**](docs/Api/InformationAboutUserApi.md#addadditionalemailusingpost) | **POST** /account/additional-emails | Add a new additional email address to user&#39;s account
*InformationAboutUserApi* | [**answerUserRatingUsingPUT**](docs/Api/InformationAboutUserApi.md#answeruserratingusingput) | **PUT** /sale/user-ratings/{ratingId}/answer | Answer for user&#39;s rating
*InformationAboutUserApi* | [**deleteAdditionalEmailUsingDELETE**](docs/Api/InformationAboutUserApi.md#deleteadditionalemailusingdelete) | **DELETE** /account/additional-emails/{emailId} | Delete an additional email address
*InformationAboutUserApi* | [**getAdditionalEmailUsingGET**](docs/Api/InformationAboutUserApi.md#getadditionalemailusingget) | **GET** /account/additional-emails/{emailId} | Get information about a particular additional email
*InformationAboutUserApi* | [**getListOfAdditionalEmailsUsingGET**](docs/Api/InformationAboutUserApi.md#getlistofadditionalemailsusingget) | **GET** /account/additional-emails | Get user&#39;s additional emails
*InformationAboutUserApi* | [**getSaleQualityUsingGET**](docs/Api/InformationAboutUserApi.md#getsalequalityusingget) | **GET** /sale/quality | Get sales quality
*InformationAboutUserApi* | [**getSellerSmartClassificationGET**](docs/Api/InformationAboutUserApi.md#getsellersmartclassificationget) | **GET** /sale/smart | Get Smart! seller classification report
*InformationAboutUserApi* | [**getUserRatingUsingGET**](docs/Api/InformationAboutUserApi.md#getuserratingusingget) | **GET** /sale/user-ratings/{ratingId} | Get the user&#39;s rating by given rating id
*InformationAboutUserApi* | [**getUserRatingsUsingGET**](docs/Api/InformationAboutUserApi.md#getuserratingsusingget) | **GET** /sale/user-ratings | Get the user&#39;s ratings
*InformationAboutUserApi* | [**meGET**](docs/Api/InformationAboutUserApi.md#meget) | **GET** /me | Get basic information about user
*InformationAboutUserApi* | [**userRatingRemovalUsingPUT**](docs/Api/InformationAboutUserApi.md#userratingremovalusingput) | **PUT** /sale/user-ratings/{ratingId}/removal | Request removal of user&#39;s rating
*MessageCenterApi* | [**changeReadFlagOnThreadPUT**](docs/Api/MessageCenterApi.md#changereadflagonthreadput) | **PUT** /messaging/threads/{threadId}/read | Mark a particular thread as read
*MessageCenterApi* | [**deleteMessageDELETE**](docs/Api/MessageCenterApi.md#deletemessagedelete) | **DELETE** /messaging/messages/{messageId} | Delete single message
*MessageCenterApi* | [**downloadAttachmentGET**](docs/Api/MessageCenterApi.md#downloadattachmentget) | **GET** /messaging/message-attachments/{attachmentId} | Download attachment
*MessageCenterApi* | [**getMessageGET**](docs/Api/MessageCenterApi.md#getmessageget) | **GET** /messaging/messages/{messageId} | Get single message
*MessageCenterApi* | [**getThreadGET**](docs/Api/MessageCenterApi.md#getthreadget) | **GET** /messaging/threads/{threadId} | Get user thread
*MessageCenterApi* | [**listMessagesGET**](docs/Api/MessageCenterApi.md#listmessagesget) | **GET** /messaging/threads/{threadId}/messages | List messages in thread
*MessageCenterApi* | [**listThreadsGET**](docs/Api/MessageCenterApi.md#listthreadsget) | **GET** /messaging/threads | List user threads
*MessageCenterApi* | [**newAttachmentDeclarationPOST**](docs/Api/MessageCenterApi.md#newattachmentdeclarationpost) | **POST** /messaging/message-attachments | Add attachment declaration
*MessageCenterApi* | [**newMessageInThreadPOST**](docs/Api/MessageCenterApi.md#newmessageinthreadpost) | **POST** /messaging/threads/{threadId}/messages | Write a new message in thread
*MessageCenterApi* | [**newMessagePOST**](docs/Api/MessageCenterApi.md#newmessagepost) | **POST** /messaging/messages | Write a new message
*MessageCenterApi* | [**uploadAttachmentPUT**](docs/Api/MessageCenterApi.md#uploadattachmentput) | **PUT** /messaging/message-attachments/{attachmentId} | Upload attachment binary data
*OfferBundlesApi* | [**createOfferBundleUsingPOST**](docs/Api/OfferBundlesApi.md#createofferbundleusingpost) | **POST** /sale/bundles | Create a new offer bundle
*OfferBundlesApi* | [**deleteOfferBundleUsingGET**](docs/Api/OfferBundlesApi.md#deleteofferbundleusingget) | **DELETE** /sale/bundles/{bundleId} | Delete bundle by ID
*OfferBundlesApi* | [**getOfferBundleUsingGET**](docs/Api/OfferBundlesApi.md#getofferbundleusingget) | **GET** /sale/bundles/{bundleId} | Get bundle by ID
*OfferBundlesApi* | [**listSellersOfferBundlesUsingGET**](docs/Api/OfferBundlesApi.md#listsellersofferbundlesusingget) | **GET** /sale/bundles | List seller&#39;s bundles
*OfferBundlesApi* | [**updateOfferBundleDiscountUsingPUT**](docs/Api/OfferBundlesApi.md#updateofferbundlediscountusingput) | **PUT** /sale/bundles/{bundleId}/discount | Update discount associated with bundle
*OfferManagementApi* | [**changePublicationStatusUsingPUT**](docs/Api/OfferManagementApi.md#changepublicationstatususingput) | **PUT** /sale/offer-publication-commands/{commandId} | Batch offer publish / unpublish
*OfferManagementApi* | [**createChangePriceCommandUsingPUT**](docs/Api/OfferManagementApi.md#createchangepricecommandusingput) | **PUT** /offers/{offerId}/change-price-commands/{commandId} | Modify the Buy Now price in an offer
*OfferManagementApi* | [**createProductOffers**](docs/Api/OfferManagementApi.md#createproductoffers) | **POST** /sale/product-offers | Create offer based on product
*OfferManagementApi* | [**deleteOfferUsingDELETE**](docs/Api/OfferManagementApi.md#deleteofferusingdelete) | **DELETE** /sale/offers/{offerId} | Delete a draft offer
*OfferManagementApi* | [**editProductOffers**](docs/Api/OfferManagementApi.md#editproductoffers) | **PATCH** /sale/product-offers/{offerId} | Edit an offer
*OfferManagementApi* | [**getAvailableOfferPromotionPackages**](docs/Api/OfferManagementApi.md#getavailableofferpromotionpackages) | **GET** /sale/offer-promotion-packages | Get all available offer promotion packages
*OfferManagementApi* | [**getOfferPromoOptionsUsingGET**](docs/Api/OfferManagementApi.md#getofferpromooptionsusingget) | **GET** /sale/offers/{offerId}/promo-options | Get offer promotion packages
*OfferManagementApi* | [**getOffersUnfilledParametersUsingGET1**](docs/Api/OfferManagementApi.md#getoffersunfilledparametersusingget1) | **GET** /sale/offers/unfilled-parameters | Get offers with missing parameters
*OfferManagementApi* | [**getProductOfferProcessingStatus**](docs/Api/OfferManagementApi.md#getproductofferprocessingstatus) | **GET** /sale/product-offers/{offerId}/operations/{operationId} | Check the processing status of a POST or PATCH request
*OfferManagementApi* | [**getPromoModificationCommandDetailedResultUsingGET**](docs/Api/OfferManagementApi.md#getpromomodificationcommanddetailedresultusingget) | **GET** /sale/offers/promo-options-commands/{commandId}/tasks | Modification command detailed result
*OfferManagementApi* | [**getPromoModificationCommandResultUsingGET**](docs/Api/OfferManagementApi.md#getpromomodificationcommandresultusingget) | **GET** /sale/offers/promo-options-commands/{commandId} | Modification command summary
*OfferManagementApi* | [**getPromoOptionsForSellerOffersUsingGET**](docs/Api/OfferManagementApi.md#getpromooptionsforselleroffersusingget) | **GET** /sale/offers/promo-options | Get promo options for seller&#39;s offers
*OfferManagementApi* | [**getPublicationReportUsingGET**](docs/Api/OfferManagementApi.md#getpublicationreportusingget) | **GET** /sale/offer-publication-commands/{commandId} | Publish command summary
*OfferManagementApi* | [**getPublicationTasksUsingGET**](docs/Api/OfferManagementApi.md#getpublicationtasksusingget) | **GET** /sale/offer-publication-commands/{commandId}/tasks | Publish command detailed report
*OfferManagementApi* | [**modifyOfferPromoOptionsUsingPOST**](docs/Api/OfferManagementApi.md#modifyofferpromooptionsusingpost) | **POST** /sale/offers/{offerId}/promo-options-modification | Modify offer promotion packages
*OfferManagementApi* | [**promoModificationCommandUsingPUT**](docs/Api/OfferManagementApi.md#promomodificationcommandusingput) | **PUT** /sale/offers/promo-options-commands/{commandId} | Batch offer promotion package modification
*OfferRatingApi* | [**offerRatingGET**](docs/Api/OfferRatingApi.md#offerratingget) | **GET** /sale/offers/{offerId}/rating | Get offer rating
*OfferTagsApi* | [**assignTagToOfferPOST**](docs/Api/OfferTagsApi.md#assigntagtoofferpost) | **POST** /sale/offers/{offerId}/tags | Assign tags to an offer
*OfferTagsApi* | [**createTagPOST1**](docs/Api/OfferTagsApi.md#createtagpost1) | **POST** /sale/offer-tags | Create a tag
*OfferTagsApi* | [**deleteTagUsingDELETE**](docs/Api/OfferTagsApi.md#deletetagusingdelete) | **DELETE** /sale/offer-tags/{tagId} | Delete a tag
*OfferTagsApi* | [**listAssignedOfferTagsGET**](docs/Api/OfferTagsApi.md#listassignedoffertagsget) | **GET** /sale/offers/{offerId}/tags | Get tags assigned to an offer
*OfferTagsApi* | [**listSellerTagsGET1**](docs/Api/OfferTagsApi.md#listsellertagsget1) | **GET** /sale/offer-tags | Get the user&#39;s tags
*OfferTagsApi* | [**updateTagPUT**](docs/Api/OfferTagsApi.md#updatetagput) | **PUT** /sale/offer-tags/{tagId} | Modify a tag
*OfferTranslationsApi* | [**deleteManualTranslationUsingDELETE**](docs/Api/OfferTranslationsApi.md#deletemanualtranslationusingdelete) | **DELETE** /sale/offers/{offerId}/translations/{language} | Delete offer translation
*OfferTranslationsApi* | [**getOfferTranslationUsingGET**](docs/Api/OfferTranslationsApi.md#getoffertranslationusingget) | **GET** /sale/offers/{offerId}/translations | Get offer translations
*OfferTranslationsApi* | [**updateOfferTranslationUsingPATCH**](docs/Api/OfferTranslationsApi.md#updateoffertranslationusingpatch) | **PATCH** /sale/offers/{offerId}/translations/{language} | Update offer translation
*OfferVariantsApi* | [**createVariantSet**](docs/Api/OfferVariantsApi.md#createvariantset) | **POST** /sale/offer-variants | Create variant set
*OfferVariantsApi* | [**deleteVariantSet**](docs/Api/OfferVariantsApi.md#deletevariantset) | **DELETE** /sale/offer-variants/{setId} | Delete a variant set
*OfferVariantsApi* | [**getVariantSet**](docs/Api/OfferVariantsApi.md#getvariantset) | **GET** /sale/offer-variants/{setId} | Get a variant set
*OfferVariantsApi* | [**getVariantSets**](docs/Api/OfferVariantsApi.md#getvariantsets) | **GET** /sale/offer-variants | Get the user&#39;s variant sets
*OfferVariantsApi* | [**updateVariantSet**](docs/Api/OfferVariantsApi.md#updatevariantset) | **PUT** /sale/offer-variants/{setId} | Update variant set
*OrderManagementApi* | [**addOrderInvoicesMetadata**](docs/Api/OrderManagementApi.md#addorderinvoicesmetadata) | **POST** /order/checkout-forms/{id}/invoices | Post new invoice
*OrderManagementApi* | [**createOrderShipmentsUsingPOST**](docs/Api/OrderManagementApi.md#createordershipmentsusingpost) | **POST** /order/checkout-forms/{id}/shipments | Add a parcel tracking number
*OrderManagementApi* | [**getAllegroPickupDropOffPointsGET**](docs/Api/OrderManagementApi.md#getallegropickupdropoffpointsget) | **GET** /order/carriers/ALLEGRO/points | Get Allegro pickup drop off points
*OrderManagementApi* | [**getListOfOrdersUsingGET**](docs/Api/OrderManagementApi.md#getlistofordersusingget) | **GET** /order/checkout-forms | Get the user&#39;s orders
*OrderManagementApi* | [**getOrderEventsStatisticsUsingGET**](docs/Api/OrderManagementApi.md#getordereventsstatisticsusingget) | **GET** /order/event-stats | Get order events statistics
*OrderManagementApi* | [**getOrderEventsUsingGET**](docs/Api/OrderManagementApi.md#getordereventsusingget) | **GET** /order/events | Get order events
*OrderManagementApi* | [**getOrderInvoicesDetails**](docs/Api/OrderManagementApi.md#getorderinvoicesdetails) | **GET** /order/checkout-forms/{id}/invoices | Get order invoices details
*OrderManagementApi* | [**getOrderShipmentsUsingGET**](docs/Api/OrderManagementApi.md#getordershipmentsusingget) | **GET** /order/checkout-forms/{id}/shipments | Get a list of parcel tracking numbers
*OrderManagementApi* | [**getOrdersCarriersUsingGET**](docs/Api/OrderManagementApi.md#getorderscarriersusingget) | **GET** /order/carriers | Get a list of available shipping carriers
*OrderManagementApi* | [**getOrdersDetailsUsingGET**](docs/Api/OrderManagementApi.md#getordersdetailsusingget) | **GET** /order/checkout-forms/{id} | Get an order&#39;s details
*OrderManagementApi* | [**getParcelTrackingUsingGET**](docs/Api/OrderManagementApi.md#getparceltrackingusingget) | **GET** /order/carriers/{carrierId}/tracking | Get carrier parcel tracking history
*OrderManagementApi* | [**setOrderFulfillmentUsingPUT**](docs/Api/OrderManagementApi.md#setorderfulfillmentusingput) | **PUT** /order/checkout-forms/{id}/fulfillment | Set seller order status
*OrderManagementApi* | [**uploadOrderInvoiceFile**](docs/Api/OrderManagementApi.md#uploadorderinvoicefile) | **PUT** /order/checkout-forms/{id}/invoices/{invoiceId}/file | Upload invoice file
*ParcelManagementApi* | [**cancelParcel**](docs/Api/ParcelManagementApi.md#cancelparcel) | **PUT** /parcel-management/parcel-cancel-commands/{commandId} | Cancel parcel
*ParcelManagementApi* | [**createNewParcel**](docs/Api/ParcelManagementApi.md#createnewparcel) | **PUT** /parcel-management/parcel-create-commands/{commandId} | Create a new parcel
*ParcelManagementApi* | [**getAvailableDeliveryServices**](docs/Api/ParcelManagementApi.md#getavailabledeliveryservices) | **GET** /parcel-management/delivery-services | Get available delivery services
*ParcelManagementApi* | [**getParcelCancellationStatus**](docs/Api/ParcelManagementApi.md#getparcelcancellationstatus) | **GET** /parcel-management/parcel-cancel-commands/{commandId} | Get parcel cancellation status
*ParcelManagementApi* | [**getParcelCreationStatus**](docs/Api/ParcelManagementApi.md#getparcelcreationstatus) | **GET** /parcel-management/parcel-create-commands/{commandId} | Get parcel creation status
*ParcelManagementApi* | [**getParcelDetails**](docs/Api/ParcelManagementApi.md#getparceldetails) | **GET** /parcel-management/parcels/{parcelId} | Get parcel details
*ParcelManagementApi* | [**getParcelLabel**](docs/Api/ParcelManagementApi.md#getparcellabel) | **GET** /parcel-management/parcels/label | Get parcel label
*ParcelManagementApi* | [**getParcelPickupStatus**](docs/Api/ParcelManagementApi.md#getparcelpickupstatus) | **GET** /parcel-management/parcel-pickup-request-commands/{commandId} | Get parcel pickup status
*ParcelManagementApi* | [**getParcelsPickupDateProposals**](docs/Api/ParcelManagementApi.md#getparcelspickupdateproposals) | **GET** /parcel-management/pickup-date-proposals | Get parcels pickup date proposals
*ParcelManagementApi* | [**getParcelsProtocol**](docs/Api/ParcelManagementApi.md#getparcelsprotocol) | **GET** /parcel-management/parcels/protocol | Get parcels protocol
*ParcelManagementApi* | [**requestParcelPickup**](docs/Api/ParcelManagementApi.md#requestparcelpickup) | **PUT** /parcel-management/parcel-pickup-request-commands/{commandId} | Request parcel pickup
*PaymentsApi* | [**getPaymentsOperationHistory**](docs/Api/PaymentsApi.md#getpaymentsoperationhistory) | **GET** /payments/payment-operations | Payment operations history
*PaymentsApi* | [**getRefundedPayments**](docs/Api/PaymentsApi.md#getrefundedpayments) | **GET** /payments/refunds | Get a list of refunded payments
*PaymentsApi* | [**initiateRefund**](docs/Api/PaymentsApi.md#initiaterefund) | **POST** /payments/refunds | Initiate a refund of a payment
*PointsOfServiceApi* | [**createPOSUsingPOST**](docs/Api/PointsOfServiceApi.md#createposusingpost) | **POST** /points-of-service | Create a point of service
*PointsOfServiceApi* | [**deletePOSUsingDELETE**](docs/Api/PointsOfServiceApi.md#deleteposusingdelete) | **DELETE** /points-of-service/{id} | Delete a point of service
*PointsOfServiceApi* | [**getPOSDataUsingGET**](docs/Api/PointsOfServiceApi.md#getposdatausingget) | **GET** /points-of-service/{id} | Get the details of a point of service
*PointsOfServiceApi* | [**getPOSListUsingGET**](docs/Api/PointsOfServiceApi.md#getposlistusingget) | **GET** /points-of-service | Get the user&#39;s points of service
*PointsOfServiceApi* | [**modifyPOSUsingPUT**](docs/Api/PointsOfServiceApi.md#modifyposusingput) | **PUT** /points-of-service/{id} | Modify a point of service
*PricingApi* | [**calculateFeePreviewUsingPOST**](docs/Api/PricingApi.md#calculatefeepreviewusingpost) | **POST** /pricing/offer-fee-preview | Calculate fee and commission for an offer
*PricingApi* | [**offerQuotesPublicUsingGET**](docs/Api/PricingApi.md#offerquotespublicusingget) | **GET** /pricing/offer-quotes | Get the user&#39;s current offer quotes
*ProductsApi* | [**getFlatProductParametersUsingGET**](docs/Api/ProductsApi.md#getflatproductparametersusingget) | **GET** /sale/categories/{categoryId}/product-parameters | Get product parameters available in given category
*ProductsApi* | [**getProductChangeProposal**](docs/Api/ProductsApi.md#getproductchangeproposal) | **GET** /sale/products/change-proposals/{changeProposalId} | Get all data of the particular product changes proposal
*ProductsApi* | [**getSaleProduct**](docs/Api/ProductsApi.md#getsaleproduct) | **GET** /sale/products/{productId} | Get all data of the particular product
*ProductsApi* | [**getSaleProducts**](docs/Api/ProductsApi.md#getsaleproducts) | **GET** /sale/products | Get search products results
*ProductsApi* | [**productChangeProposal**](docs/Api/ProductsApi.md#productchangeproposal) | **POST** /sale/products/{productId}/change-proposals | Propose changes in product
*ProductsApi* | [**proposeSaleProduct**](docs/Api/ProductsApi.md#proposesaleproduct) | **POST** /sale/product-proposals | Propose a product
*PublicOfferInformationApi* | [**getListing**](docs/Api/PublicOfferInformationApi.md#getlisting) | **GET** /offers/listing | Search offers
*PublicUserInformationApi* | [**getUserSummaryUsingGET**](docs/Api/PublicUserInformationApi.md#getusersummaryusingget) | **GET** /users/{userId}/ratings-summary | Get any user&#39;s ratings summary
*RebatesAndPromotionsApi* | [**createPromotionUsingPOST1**](docs/Api/RebatesAndPromotionsApi.md#createpromotionusingpost1) | **POST** /sale/loyalty/promotions | Create a new promotion
*RebatesAndPromotionsApi* | [**deactivatePromotionUsingDELETE**](docs/Api/RebatesAndPromotionsApi.md#deactivatepromotionusingdelete) | **DELETE** /sale/loyalty/promotions/{promotionId} | Deactivate a promotion by id
*RebatesAndPromotionsApi* | [**getPromotionUsingGET**](docs/Api/RebatesAndPromotionsApi.md#getpromotionusingget) | **GET** /sale/loyalty/promotions/{promotionId} | Get a promotion data by id
*RebatesAndPromotionsApi* | [**listSellerPromotionsUsingGET1**](docs/Api/RebatesAndPromotionsApi.md#listsellerpromotionsusingget1) | **GET** /sale/loyalty/promotions | Get the user&#39;s list of promotions
*RebatesAndPromotionsApi* | [**updatePromotionUsingPUT**](docs/Api/RebatesAndPromotionsApi.md#updatepromotionusingput) | **PUT** /sale/loyalty/promotions/{promotionId} | Modify a promotion
*ResponsiblePersonsApi* | [**responsiblePersonsGET**](docs/Api/ResponsiblePersonsApi.md#responsiblepersonsget) | **GET** /sale/responsible-persons | Get the list of responsible persons
*ResponsiblePersonsApi* | [**responsiblePersonsPOST**](docs/Api/ResponsiblePersonsApi.md#responsiblepersonspost) | **POST** /sale/responsible-persons | Create responsible person
*ResponsiblePersonsApi* | [**responsiblePersonsPUT**](docs/Api/ResponsiblePersonsApi.md#responsiblepersonsput) | **PUT** /sale/responsible-persons/{id} | Update responsible person
*ResponsibleProducersApi* | [**responsibleProducerGET**](docs/Api/ResponsibleProducersApi.md#responsibleproducerget) | **GET** /sale/responsible-producers/{id} | Get responsible producer
*ResponsibleProducersApi* | [**responsibleProducersGET**](docs/Api/ResponsibleProducersApi.md#responsibleproducersget) | **GET** /sale/responsible-producers | Get the list of responsible producers
*ResponsibleProducersApi* | [**responsibleProducersPOST**](docs/Api/ResponsibleProducersApi.md#responsibleproducerspost) | **POST** /sale/responsible-producers | Create responsible producer
*ResponsibleProducersApi* | [**responsibleProducersPUT**](docs/Api/ResponsibleProducersApi.md#responsibleproducersput) | **PUT** /sale/responsible-producers/{id} | Update responsible producer
*ShipmentManagementApi* | [**cancelShipment**](docs/Api/ShipmentManagementApi.md#cancelshipment) | **POST** /shipment-management/shipments/cancel-commands | Cancel shipment
*ShipmentManagementApi* | [**createNewShipment**](docs/Api/ShipmentManagementApi.md#createnewshipment) | **POST** /shipment-management/shipments/create-commands | Create new shipment
*ShipmentManagementApi* | [**createPickup**](docs/Api/ShipmentManagementApi.md#createpickup) | **POST** /shipment-management/pickups/create-commands | Request shipments pickup
*ShipmentManagementApi* | [**createPickupStatus**](docs/Api/ShipmentManagementApi.md#createpickupstatus) | **GET** /shipment-management/pickups/create-commands/{commandId} | Create pickup command status
*ShipmentManagementApi* | [**getDeliveryServices**](docs/Api/ShipmentManagementApi.md#getdeliveryservices) | **GET** /shipment-management/delivery-services | Get available delivery services
*ShipmentManagementApi* | [**getPickupProposals**](docs/Api/ShipmentManagementApi.md#getpickupproposals) | **POST** /shipment-management/pickup-proposals | Get shipments pickup proposals
*ShipmentManagementApi* | [**getShipmentCancellationStatus**](docs/Api/ShipmentManagementApi.md#getshipmentcancellationstatus) | **GET** /shipment-management/shipments/cancel-commands/{commandId} | Get shipment cancellation status
*ShipmentManagementApi* | [**getShipmentCreationStatus**](docs/Api/ShipmentManagementApi.md#getshipmentcreationstatus) | **GET** /shipment-management/shipments/create-commands/{commandId} | Get shipment creation command status
*ShipmentManagementApi* | [**getShipmentDetails**](docs/Api/ShipmentManagementApi.md#getshipmentdetails) | **GET** /shipment-management/shipments/{shipmentId} | Get shipment details
*ShipmentManagementApi* | [**getShipmentLabels**](docs/Api/ShipmentManagementApi.md#getshipmentlabels) | **POST** /shipment-management/label | Get shipments labels
*ShipmentManagementApi* | [**getShipmentProtocol**](docs/Api/ShipmentManagementApi.md#getshipmentprotocol) | **POST** /shipment-management/protocol | Get shipments protocol
*SizeTablesApi* | [**createTableUsingPOST**](docs/Api/SizeTablesApi.md#createtableusingpost) | **POST** /sale/size-tables | Create a size table
*SizeTablesApi* | [**getTableUsingGET**](docs/Api/SizeTablesApi.md#gettableusingget) | **GET** /sale/size-tables/{tableId} | Get a size table
*SizeTablesApi* | [**getTablesTemplatesUsingGET**](docs/Api/SizeTablesApi.md#gettablestemplatesusingget) | **GET** /sale/size-tables-templates | Get the size tables templates
*SizeTablesApi* | [**getTablesUsingGET**](docs/Api/SizeTablesApi.md#gettablesusingget) | **GET** /sale/size-tables | Get the user&#39;s size tables
*SizeTablesApi* | [**modifyTableUsingPUT**](docs/Api/SizeTablesApi.md#modifytableusingput) | **PUT** /sale/size-tables/{tableId} | Update a size table
*TaxSettingsApi* | [**getTaxSettingsForCategory**](docs/Api/TaxSettingsApi.md#gettaxsettingsforcategory) | **GET** /sale/tax-settings | Get all tax settings for category
*UsersOfferInformationApi* | [**getOfferEvents**](docs/Api/UsersOfferInformationApi.md#getofferevents) | **GET** /sale/offer-events | Get events about the seller&#39;s offers
*UsersOfferInformationApi* | [**getOfferSmartClassificationGET**](docs/Api/UsersOfferInformationApi.md#getoffersmartclassificationget) | **GET** /sale/offers/{offerId}/smart | Get Smart! classification report of the particular offer
*UsersOfferInformationApi* | [**getProductOffer**](docs/Api/UsersOfferInformationApi.md#getproductoffer) | **GET** /sale/product-offers/{offerId} | Get all data of the particular product-offer
*UsersOfferInformationApi* | [**searchOffersUsingGET**](docs/Api/UsersOfferInformationApi.md#searchoffersusingget) | **GET** /sale/offers | Get seller&#39;s offers

## Models

- [AdditionalEmail](docs/Model/AdditionalEmail.md)
- [AdditionalEmailRequest](docs/Model/AdditionalEmailRequest.md)
- [AdditionalEmailsResponse](docs/Model/AdditionalEmailsResponse.md)
- [AdditionalMarketplacePromoOptionsCommandModification](docs/Model/AdditionalMarketplacePromoOptionsCommandModification.md)
- [AdditionalMarketplacePromoOptionsModification](docs/Model/AdditionalMarketplacePromoOptionsModification.md)
- [AdditionalMarketplacePublication](docs/Model/AdditionalMarketplacePublication.md)
- [AdditionalMarketplacePublicationState](docs/Model/AdditionalMarketplacePublicationState.md)
- [AdditionalMarketplacePublicationStatus](docs/Model/AdditionalMarketplacePublicationStatus.md)
- [AdditionalMarketplaceSellingMode](docs/Model/AdditionalMarketplaceSellingMode.md)
- [AdditionalMarketplacesRefusalReasonResponse](docs/Model/AdditionalMarketplacesRefusalReasonResponse.md)
- [AdditionalMarketplacesRequestValue](docs/Model/AdditionalMarketplacesRequestValue.md)
- [AdditionalMarketplacesRequestValueSellingMode](docs/Model/AdditionalMarketplacesRequestValueSellingMode.md)
- [AdditionalMarketplacesResponseValue](docs/Model/AdditionalMarketplacesResponseValue.md)
- [AdditionalMarketplacesResponseValuePublication](docs/Model/AdditionalMarketplacesResponseValuePublication.md)
- [AdditionalMarketplacesVisibility](docs/Model/AdditionalMarketplacesVisibility.md)
- [AdditionalPropertyDto](docs/Model/AdditionalPropertyDto.md)
- [AdditionalServiceDefinitionRequest](docs/Model/AdditionalServiceDefinitionRequest.md)
- [AdditionalServiceDto](docs/Model/AdditionalServiceDto.md)
- [AdditionalServiceGroupTranslation](docs/Model/AdditionalServiceGroupTranslation.md)
- [AdditionalServiceGroupTranslationPatchResponse](docs/Model/AdditionalServiceGroupTranslationPatchResponse.md)
- [AdditionalServiceGroupTranslationResponse](docs/Model/AdditionalServiceGroupTranslationResponse.md)
- [AdditionalServiceRequest](docs/Model/AdditionalServiceRequest.md)
- [AdditionalServiceResponse](docs/Model/AdditionalServiceResponse.md)
- [AdditionalServiceTranslation](docs/Model/AdditionalServiceTranslation.md)
- [AdditionalServicesGroup](docs/Model/AdditionalServicesGroup.md)
- [AdditionalServicesGroupRequest](docs/Model/AdditionalServicesGroupRequest.md)
- [AdditionalServicesGroupResponse](docs/Model/AdditionalServicesGroupResponse.md)
- [AdditionalServicesGroupTranslationRequest](docs/Model/AdditionalServicesGroupTranslationRequest.md)
- [AdditionalServicesGroupTranslationWrapper](docs/Model/AdditionalServicesGroupTranslationWrapper.md)
- [AdditionalServicesGroupTranslationWrapperWithType](docs/Model/AdditionalServicesGroupTranslationWrapperWithType.md)
- [AdditionalServicesGroups](docs/Model/AdditionalServicesGroups.md)
- [Address](docs/Model/Address.md)
- [AddressDto](docs/Model/AddressDto.md)
- [AdvanceShipNotice](docs/Model/AdvanceShipNotice.md)
- [AdvanceShipNoticeList](docs/Model/AdvanceShipNoticeList.md)
- [AdvanceShipNoticeResponse](docs/Model/AdvanceShipNoticeResponse.md)
- [AdvanceShipNoticeStatus](docs/Model/AdvanceShipNoticeStatus.md)
- [AfterSalesServices](docs/Model/AfterSalesServices.md)
- [AfterSalesServicesAddress](docs/Model/AfterSalesServicesAddress.md)
- [AfterSalesServicesAttachment](docs/Model/AfterSalesServicesAttachment.md)
- [AfterSalesServicesProductOfferRequest](docs/Model/AfterSalesServicesProductOfferRequest.md)
- [AfterSalesServicesProductOfferRequestImpliedWarranty](docs/Model/AfterSalesServicesProductOfferRequestImpliedWarranty.md)
- [AfterSalesServicesProductOfferRequestReturnPolicy](docs/Model/AfterSalesServicesProductOfferRequestReturnPolicy.md)
- [AfterSalesServicesProductOfferRequestWarranty](docs/Model/AfterSalesServicesProductOfferRequestWarranty.md)
- [AiCoCreatedContent](docs/Model/AiCoCreatedContent.md)
- [AlleDiscountEligibleOfferDto](docs/Model/AlleDiscountEligibleOfferDto.md)
- [AlleDiscountEligibleOfferDtoAlleDiscount](docs/Model/AlleDiscountEligibleOfferDtoAlleDiscount.md)
- [AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions](docs/Model/AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditions.md)
- [AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsInner](docs/Model/AlleDiscountEligibleOfferDtoAlleDiscountCampaignConditionsViolationsInner.md)
- [AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount](docs/Model/AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount.md)
- [AlleDiscountEligibleOfferDtoBasePrice](docs/Model/AlleDiscountEligibleOfferDtoBasePrice.md)
- [AlleDiscountEligibleOfferDtoProduct](docs/Model/AlleDiscountEligibleOfferDtoProduct.md)
- [AlleDiscountGetSubmitCommandResponse](docs/Model/AlleDiscountGetSubmitCommandResponse.md)
- [AlleDiscountGetSubmitCommandResponseOutput](docs/Model/AlleDiscountGetSubmitCommandResponseOutput.md)
- [AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation](docs/Model/AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation.md)
- [AlleDiscountGetWithdrawCommandResponse](docs/Model/AlleDiscountGetWithdrawCommandResponse.md)
- [AlleDiscountGetWithdrawCommandResponseInput](docs/Model/AlleDiscountGetWithdrawCommandResponseInput.md)
- [AlleDiscountGetWithdrawCommandResponseOutput](docs/Model/AlleDiscountGetWithdrawCommandResponseOutput.md)
- [AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation](docs/Model/AlleDiscountGetWithdrawCommandResponseOutputWithdrawnOfferParticipation.md)
- [AlleDiscountListCampaignsResponse](docs/Model/AlleDiscountListCampaignsResponse.md)
- [AlleDiscountListCampaignsResponseAlleDiscountCampaignsInner](docs/Model/AlleDiscountListCampaignsResponseAlleDiscountCampaignsInner.md)
- [AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerApplication](docs/Model/AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerApplication.md)
- [AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerMarketplace](docs/Model/AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerMarketplace.md)
- [AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerPublication](docs/Model/AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerPublication.md)
- [AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerVisibility](docs/Model/AlleDiscountListCampaignsResponseAlleDiscountCampaignsInnerVisibility.md)
- [AlleDiscountListEligibleResponse](docs/Model/AlleDiscountListEligibleResponse.md)
- [AlleDiscountListSubmittedResponse](docs/Model/AlleDiscountListSubmittedResponse.md)
- [AlleDiscountRequiredMerchantPriceDto](docs/Model/AlleDiscountRequiredMerchantPriceDto.md)
- [AlleDiscountSubmitCommandRequest](docs/Model/AlleDiscountSubmitCommandRequest.md)
- [AlleDiscountSubmitCommandRequestInput](docs/Model/AlleDiscountSubmitCommandRequestInput.md)
- [AlleDiscountSubmitCommandRequestInputCampaign](docs/Model/AlleDiscountSubmitCommandRequestInputCampaign.md)
- [AlleDiscountSubmitCommandRequestInputOffer](docs/Model/AlleDiscountSubmitCommandRequestInputOffer.md)
- [AlleDiscountSubmitCommandRequestInputProposedPrice](docs/Model/AlleDiscountSubmitCommandRequestInputProposedPrice.md)
- [AlleDiscountSubmitCommandResponse](docs/Model/AlleDiscountSubmitCommandResponse.md)
- [AlleDiscountSubmitCommandResponseInput](docs/Model/AlleDiscountSubmitCommandResponseInput.md)
- [AlleDiscountSubmitCommandResponseInputCampaign](docs/Model/AlleDiscountSubmitCommandResponseInputCampaign.md)
- [AlleDiscountSubmitCommandResponseInputOffer](docs/Model/AlleDiscountSubmitCommandResponseInputOffer.md)
- [AlleDiscountSubmitCommandResponseInputProposedPrice](docs/Model/AlleDiscountSubmitCommandResponseInputProposedPrice.md)
- [AlleDiscountSubmitCommandResponseOutput](docs/Model/AlleDiscountSubmitCommandResponseOutput.md)
- [AlleDiscountSubmittedOfferDto](docs/Model/AlleDiscountSubmittedOfferDto.md)
- [AlleDiscountSubmittedOfferDtoCampaign](docs/Model/AlleDiscountSubmittedOfferDtoCampaign.md)
- [AlleDiscountSubmittedOfferDtoOffer](docs/Model/AlleDiscountSubmittedOfferDtoOffer.md)
- [AlleDiscountSubmittedOfferDtoPrices](docs/Model/AlleDiscountSubmittedOfferDtoPrices.md)
- [AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice](docs/Model/AlleDiscountSubmittedOfferDtoPricesMaximumSellingPrice.md)
- [AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction](docs/Model/AlleDiscountSubmittedOfferDtoPricesMinimalPriceReduction.md)
- [AlleDiscountSubmittedOfferDtoProcess](docs/Model/AlleDiscountSubmittedOfferDtoProcess.md)
- [AlleDiscountSubmittedOfferDtoProcessErrorsInner](docs/Model/AlleDiscountSubmittedOfferDtoProcessErrorsInner.md)
- [AlleDiscountWithdrawCommandRequest](docs/Model/AlleDiscountWithdrawCommandRequest.md)
- [AlleDiscountWithdrawCommandRequestInput](docs/Model/AlleDiscountWithdrawCommandRequestInput.md)
- [AlleDiscountWithdrawCommandResponse](docs/Model/AlleDiscountWithdrawCommandResponse.md)
- [AlleDiscountWithdrawCommandResponseInput](docs/Model/AlleDiscountWithdrawCommandResponseInput.md)
- [AlleDiscountWithdrawCommandResponseOutput](docs/Model/AlleDiscountWithdrawCommandResponseOutput.md)
- [AllegroCarrier](docs/Model/AllegroCarrier.md)
- [AllegroMarketplaces](docs/Model/AllegroMarketplaces.md)
- [AllegroParcelTrackingHistory](docs/Model/AllegroParcelTrackingHistory.md)
- [AllegroParcelTrackingHistoryTrackingDetails](docs/Model/AllegroParcelTrackingHistoryTrackingDetails.md)
- [AllegroParcelTrackingStatus](docs/Model/AllegroParcelTrackingStatus.md)
- [AllegroPickupDropOffPoint](docs/Model/AllegroPickupDropOffPoint.md)
- [AllegroPickupDropOffPointAddress](docs/Model/AllegroPickupDropOffPointAddress.md)
- [AllegroPickupDropOffPointOpeningInner](docs/Model/AllegroPickupDropOffPointOpeningInner.md)
- [AllegroPickupDropOffPointPaymentsInner](docs/Model/AllegroPickupDropOffPointPaymentsInner.md)
- [AllegroPickupDropOffPointRestrictionsInner](docs/Model/AllegroPickupDropOffPointRestrictionsInner.md)
- [AllegroPickupDropOffPointServicesInner](docs/Model/AllegroPickupDropOffPointServicesInner.md)
- [AllegroPickupDropOffPointsResponse](docs/Model/AllegroPickupDropOffPointsResponse.md)
- [AllegroPricesAccountChangeRequest](docs/Model/AllegroPricesAccountChangeRequest.md)
- [AllegroPricesAccountChangeRequestAdditionalMarketplacesValue](docs/Model/AllegroPricesAccountChangeRequestAdditionalMarketplacesValue.md)
- [AllegroPricesAccountConsentChangeResponse](docs/Model/AllegroPricesAccountConsentChangeResponse.md)
- [AllegroPricesEligibilityResponse](docs/Model/AllegroPricesEligibilityResponse.md)
- [AllegroPricesEligibilityResponseAdditionalMarketplacesValue](docs/Model/AllegroPricesEligibilityResponseAdditionalMarketplacesValue.md)
- [AllegroPricesOfferChangeRequest](docs/Model/AllegroPricesOfferChangeRequest.md)
- [AllegroPricesOfferConsentChangeResponse](docs/Model/AllegroPricesOfferConsentChangeResponse.md)
- [AllegroPricesQualificationResponse](docs/Model/AllegroPricesQualificationResponse.md)
- [Answer](docs/Model/Answer.md)
- [ApplicationTimePolicy](docs/Model/ApplicationTimePolicy.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentDeclaration](docs/Model/AttachmentDeclaration.md)
- [AttachmentFile](docs/Model/AttachmentFile.md)
- [AttachmentFileRequest](docs/Model/AttachmentFileRequest.md)
- [AttachmentType](docs/Model/AttachmentType.md)
- [AuctionDetails](docs/Model/AuctionDetails.md)
- [AuthError](docs/Model/AuthError.md)
- [AutomaticPricingOfferRuleConfiguration](docs/Model/AutomaticPricingOfferRuleConfiguration.md)
- [AutomaticPricingOfferRuleConfigurationPriceRange](docs/Model/AutomaticPricingOfferRuleConfigurationPriceRange.md)
- [AutomaticPricingRuleConfiguration](docs/Model/AutomaticPricingRuleConfiguration.md)
- [AutomaticPricingRuleConfigurationChangeByPercentage](docs/Model/AutomaticPricingRuleConfigurationChangeByPercentage.md)
- [AutomaticPricingRulePostRequest](docs/Model/AutomaticPricingRulePostRequest.md)
- [AutomaticPricingRulePutRequest](docs/Model/AutomaticPricingRulePutRequest.md)
- [AutomaticPricingRuleResponse](docs/Model/AutomaticPricingRuleResponse.md)
- [AutomaticPricingRuleType](docs/Model/AutomaticPricingRuleType.md)
- [AutomaticPricingRulesResponse](docs/Model/AutomaticPricingRulesResponse.md)
- [AvailableConstraint](docs/Model/AvailableConstraint.md)
- [AvailableProductResponse](docs/Model/AvailableProductResponse.md)
- [AvailableProductsList](docs/Model/AvailableProductsList.md)
- [AvailablePromotionPackage](docs/Model/AvailablePromotionPackage.md)
- [AvailablePromotionPackages](docs/Model/AvailablePromotionPackages.md)
- [AverageRates](docs/Model/AverageRates.md)
- [B2b](docs/Model/B2b.md)
- [Badge](docs/Model/Badge.md)
- [BadgeApplication](docs/Model/BadgeApplication.md)
- [BadgeApplicationBargainPrice](docs/Model/BadgeApplicationBargainPrice.md)
- [BadgeApplicationCampaign](docs/Model/BadgeApplicationCampaign.md)
- [BadgeApplicationOffer](docs/Model/BadgeApplicationOffer.md)
- [BadgeApplicationPrices](docs/Model/BadgeApplicationPrices.md)
- [BadgeApplicationProcess](docs/Model/BadgeApplicationProcess.md)
- [BadgeApplicationPurchaseConstraints](docs/Model/BadgeApplicationPurchaseConstraints.md)
- [BadgeApplicationPurchaseConstraintsLimit](docs/Model/BadgeApplicationPurchaseConstraintsLimit.md)
- [BadgeApplicationPurchaseConstraintsLimitPerUser](docs/Model/BadgeApplicationPurchaseConstraintsLimitPerUser.md)
- [BadgeApplicationRejectionReason](docs/Model/BadgeApplicationRejectionReason.md)
- [BadgeApplicationRejectionReasonMessage](docs/Model/BadgeApplicationRejectionReasonMessage.md)
- [BadgeApplicationRequest](docs/Model/BadgeApplicationRequest.md)
- [BadgeApplicationSubsidySellerPrice](docs/Model/BadgeApplicationSubsidySellerPrice.md)
- [BadgeApplicationSubsidyTargetPrice](docs/Model/BadgeApplicationSubsidyTargetPrice.md)
- [BadgeApplications](docs/Model/BadgeApplications.md)
- [BadgeCampaign](docs/Model/BadgeCampaign.md)
- [BadgeMarketPrice](docs/Model/BadgeMarketPrice.md)
- [BadgeOperation](docs/Model/BadgeOperation.md)
- [BadgeOperationProcess](docs/Model/BadgeOperationProcess.md)
- [BadgePatchPrices](docs/Model/BadgePatchPrices.md)
- [BadgePatchPricesPrices](docs/Model/BadgePatchPricesPrices.md)
- [BadgePatchPricesPricesBargain](docs/Model/BadgePatchPricesPricesBargain.md)
- [BadgePatchProcess](docs/Model/BadgePatchProcess.md)
- [BadgePatchProcessProcess](docs/Model/BadgePatchProcessProcess.md)
- [BadgePatchRequest](docs/Model/BadgePatchRequest.md)
- [BadgePrices](docs/Model/BadgePrices.md)
- [BadgeProcess](docs/Model/BadgeProcess.md)
- [BadgePublicationTimePolicy](docs/Model/BadgePublicationTimePolicy.md)
- [BadgeSubsidyPrices](docs/Model/BadgeSubsidyPrices.md)
- [BadgesList](docs/Model/BadgesList.md)
- [BaseOperation](docs/Model/BaseOperation.md)
- [BaseSaleProductResponseDto](docs/Model/BaseSaleProductResponseDto.md)
- [BasicDefinitionResponse](docs/Model/BasicDefinitionResponse.md)
- [Benefit](docs/Model/Benefit.md)
- [BenefitSpecification](docs/Model/BenefitSpecification.md)
- [BidRequest](docs/Model/BidRequest.md)
- [BillingEntries](docs/Model/BillingEntries.md)
- [BillingEntry](docs/Model/BillingEntry.md)
- [BillingEntryBalance](docs/Model/BillingEntryBalance.md)
- [BillingEntryOffer](docs/Model/BillingEntryOffer.md)
- [BillingEntryOrder](docs/Model/BillingEntryOrder.md)
- [BillingEntryTax](docs/Model/BillingEntryTax.md)
- [BillingEntryType](docs/Model/BillingEntryType.md)
- [BillingEntryValue](docs/Model/BillingEntryValue.md)
- [BillingType](docs/Model/BillingType.md)
- [BlockadeOperation](docs/Model/BlockadeOperation.md)
- [BlockadeReleaseOperation](docs/Model/BlockadeReleaseOperation.md)
- [BundleBenefitSpecification](docs/Model/BundleBenefitSpecification.md)
- [BundleDiscountDTO](docs/Model/BundleDiscountDTO.md)
- [BundleMarketplaceDTO](docs/Model/BundleMarketplaceDTO.md)
- [BundledOfferDTO](docs/Model/BundledOfferDTO.md)
- [BuyNowPrice](docs/Model/BuyNowPrice.md)
- [BuyerParticipant](docs/Model/BuyerParticipant.md)
- [BuyerPreferencesReference](docs/Model/BuyerPreferencesReference.md)
- [BuyerReference](docs/Model/BuyerReference.md)
- [CampaignRefusalReason](docs/Model/CampaignRefusalReason.md)
- [CampaignRequestDto](docs/Model/CampaignRequestDto.md)
- [CampaignResponseDto](docs/Model/CampaignResponseDto.md)
- [CancelParcel201Response](docs/Model/CancelParcel201Response.md)
- [CancelParcelParameters](docs/Model/CancelParcelParameters.md)
- [CancelShipmentCommandStatusDto](docs/Model/CancelShipmentCommandStatusDto.md)
- [Caption](docs/Model/Caption.md)
- [CarrierParcelTrackingResponse](docs/Model/CarrierParcelTrackingResponse.md)
- [CashOnDeliveryDto](docs/Model/CashOnDeliveryDto.md)
- [CashOnDeliveryLimitDto](docs/Model/CashOnDeliveryLimitDto.md)
- [CategoriesDto](docs/Model/CategoriesDto.md)
- [CategoriesResponse](docs/Model/CategoriesResponse.md)
- [Category](docs/Model/Category.md)
- [CategoryBaseEvent](docs/Model/CategoryBaseEvent.md)
- [CategoryCreatedEvent](docs/Model/CategoryCreatedEvent.md)
- [CategoryDefinitionDescriptionResponse](docs/Model/CategoryDefinitionDescriptionResponse.md)
- [CategoryDefinitionResponse](docs/Model/CategoryDefinitionResponse.md)
- [CategoryDeletedEvent](docs/Model/CategoryDeletedEvent.md)
- [CategoryDeletedEventAllOfRedirectCategory](docs/Model/CategoryDeletedEventAllOfRedirectCategory.md)
- [CategoryDto](docs/Model/CategoryDto.md)
- [CategoryDtoParent](docs/Model/CategoryDtoParent.md)
- [CategoryEventBaseCategory](docs/Model/CategoryEventBaseCategory.md)
- [CategoryEventBaseCategoryParent](docs/Model/CategoryEventBaseCategoryParent.md)
- [CategoryEventsResponse](docs/Model/CategoryEventsResponse.md)
- [CategoryMovedEvent](docs/Model/CategoryMovedEvent.md)
- [CategoryOptionsDto](docs/Model/CategoryOptionsDto.md)
- [CategoryParameter](docs/Model/CategoryParameter.md)
- [CategoryParameterDisplayConditions](docs/Model/CategoryParameterDisplayConditions.md)
- [CategoryParameterList](docs/Model/CategoryParameterList.md)
- [CategoryParameterOptions](docs/Model/CategoryParameterOptions.md)
- [CategoryParameterRequirementConditions](docs/Model/CategoryParameterRequirementConditions.md)
- [CategoryParameterWithValue](docs/Model/CategoryParameterWithValue.md)
- [CategoryParameterWithoutValue](docs/Model/CategoryParameterWithoutValue.md)
- [CategoryParametersScheduledBaseChange](docs/Model/CategoryParametersScheduledBaseChange.md)
- [CategoryParametersScheduledBaseChangeCategory](docs/Model/CategoryParametersScheduledBaseChangeCategory.md)
- [CategoryParametersScheduledBaseChangeParameter](docs/Model/CategoryParametersScheduledBaseChangeParameter.md)
- [CategoryParametersScheduledChangesResponse](docs/Model/CategoryParametersScheduledChangesResponse.md)
- [CategoryProductParameter](docs/Model/CategoryProductParameter.md)
- [CategoryProductParameterList](docs/Model/CategoryProductParameterList.md)
- [CategoryRenamedEvent](docs/Model/CategoryRenamedEvent.md)
- [CategoryResponse](docs/Model/CategoryResponse.md)
- [CategorySuggestionCategoryNode](docs/Model/CategorySuggestionCategoryNode.md)
- [CategorySuggestionResponse](docs/Model/CategorySuggestionResponse.md)
- [CategoryTaxSettings](docs/Model/CategoryTaxSettings.md)
- [Cells](docs/Model/Cells.md)
- [ChangePrice](docs/Model/ChangePrice.md)
- [ChangePriceInput](docs/Model/ChangePriceInput.md)
- [ChangePriceWithoutOutput](docs/Model/ChangePriceWithoutOutput.md)
- [ChangedParameterDto](docs/Model/ChangedParameterDto.md)
- [ChangedTranslation](docs/Model/ChangedTranslation.md)
- [CharityOrganization](docs/Model/CharityOrganization.md)
- [CheckFormsNewOrderInvoice](docs/Model/CheckFormsNewOrderInvoice.md)
- [CheckFormsNewOrderInvoiceFile](docs/Model/CheckFormsNewOrderInvoiceFile.md)
- [CheckFormsNewOrderInvoiceId](docs/Model/CheckFormsNewOrderInvoiceId.md)
- [CheckoutForm](docs/Model/CheckoutForm.md)
- [CheckoutFormAddWaybillCreated](docs/Model/CheckoutFormAddWaybillCreated.md)
- [CheckoutFormAddWaybillCreatedLineItemsInner](docs/Model/CheckoutFormAddWaybillCreatedLineItemsInner.md)
- [CheckoutFormAddWaybillRequest](docs/Model/CheckoutFormAddWaybillRequest.md)
- [CheckoutFormAddWaybillRequestLineItemsInner](docs/Model/CheckoutFormAddWaybillRequestLineItemsInner.md)
- [CheckoutFormAdditionalService](docs/Model/CheckoutFormAdditionalService.md)
- [CheckoutFormBuyerAddressReference](docs/Model/CheckoutFormBuyerAddressReference.md)
- [CheckoutFormBuyerReference](docs/Model/CheckoutFormBuyerReference.md)
- [CheckoutFormDeliveryAddress](docs/Model/CheckoutFormDeliveryAddress.md)
- [CheckoutFormDeliveryMethod](docs/Model/CheckoutFormDeliveryMethod.md)
- [CheckoutFormDeliveryPickupPoint](docs/Model/CheckoutFormDeliveryPickupPoint.md)
- [CheckoutFormDeliveryPickupPointAddress](docs/Model/CheckoutFormDeliveryPickupPointAddress.md)
- [CheckoutFormDeliveryReference](docs/Model/CheckoutFormDeliveryReference.md)
- [CheckoutFormDeliveryTime](docs/Model/CheckoutFormDeliveryTime.md)
- [CheckoutFormDeliveryTimeDispatch](docs/Model/CheckoutFormDeliveryTimeDispatch.md)
- [CheckoutFormDeliveryTimeGuaranteed](docs/Model/CheckoutFormDeliveryTimeGuaranteed.md)
- [CheckoutFormDiscount](docs/Model/CheckoutFormDiscount.md)
- [CheckoutFormFulfillment](docs/Model/CheckoutFormFulfillment.md)
- [CheckoutFormFulfillmentShipmentSummary](docs/Model/CheckoutFormFulfillmentShipmentSummary.md)
- [CheckoutFormFulfillmentShipmentSummaryLineItemsSent](docs/Model/CheckoutFormFulfillmentShipmentSummaryLineItemsSent.md)
- [CheckoutFormFulfillmentStatus](docs/Model/CheckoutFormFulfillmentStatus.md)
- [CheckoutFormInvoiceAddress](docs/Model/CheckoutFormInvoiceAddress.md)
- [CheckoutFormInvoiceAddressCompany](docs/Model/CheckoutFormInvoiceAddressCompany.md)
- [CheckoutFormInvoiceAddressCompanyId](docs/Model/CheckoutFormInvoiceAddressCompanyId.md)
- [CheckoutFormInvoiceAddressNaturalPerson](docs/Model/CheckoutFormInvoiceAddressNaturalPerson.md)
- [CheckoutFormInvoiceInfo](docs/Model/CheckoutFormInvoiceInfo.md)
- [CheckoutFormLineItem](docs/Model/CheckoutFormLineItem.md)
- [CheckoutFormLineItemTax](docs/Model/CheckoutFormLineItemTax.md)
- [CheckoutFormMarketplace](docs/Model/CheckoutFormMarketplace.md)
- [CheckoutFormNoteReference](docs/Model/CheckoutFormNoteReference.md)
- [CheckoutFormOrderWaybillResponse](docs/Model/CheckoutFormOrderWaybillResponse.md)
- [CheckoutFormPaymentProvider](docs/Model/CheckoutFormPaymentProvider.md)
- [CheckoutFormPaymentReference](docs/Model/CheckoutFormPaymentReference.md)
- [CheckoutFormPaymentType](docs/Model/CheckoutFormPaymentType.md)
- [CheckoutFormReference](docs/Model/CheckoutFormReference.md)
- [CheckoutFormStatus](docs/Model/CheckoutFormStatus.md)
- [CheckoutFormSummary](docs/Model/CheckoutFormSummary.md)
- [CheckoutFormSummaryTotalToPay](docs/Model/CheckoutFormSummaryTotalToPay.md)
- [CheckoutForms](docs/Model/CheckoutForms.md)
- [CheckoutFormsOrderInvoice](docs/Model/CheckoutFormsOrderInvoice.md)
- [CheckoutFormsOrderInvoiceFile](docs/Model/CheckoutFormsOrderInvoiceFile.md)
- [CheckoutFormsOrderInvoiceFileSecurityVerification](docs/Model/CheckoutFormsOrderInvoiceFileSecurityVerification.md)
- [CheckoutFormsOrderInvoices](docs/Model/CheckoutFormsOrderInvoices.md)
- [ClassifiedDailyEventStatResponseDto](docs/Model/ClassifiedDailyEventStatResponseDto.md)
- [ClassifiedEventStat](docs/Model/ClassifiedEventStat.md)
- [ClassifiedExtension](docs/Model/ClassifiedExtension.md)
- [ClassifiedExtraPackage](docs/Model/ClassifiedExtraPackage.md)
- [ClassifiedPackage](docs/Model/ClassifiedPackage.md)
- [ClassifiedPackageConfig](docs/Model/ClassifiedPackageConfig.md)
- [ClassifiedPackageConfigs](docs/Model/ClassifiedPackageConfigs.md)
- [ClassifiedPackages](docs/Model/ClassifiedPackages.md)
- [ClassifiedPromotion](docs/Model/ClassifiedPromotion.md)
- [ClassifiedPublication](docs/Model/ClassifiedPublication.md)
- [ClassifiedResponse](docs/Model/ClassifiedResponse.md)
- [ClassifiedStatEventType](docs/Model/ClassifiedStatEventType.md)
- [ClassifiedsPackages](docs/Model/ClassifiedsPackages.md)
- [CommandOutput](docs/Model/CommandOutput.md)
- [CommandTask](docs/Model/CommandTask.md)
- [CommissionResponse](docs/Model/CommissionResponse.md)
- [Company](docs/Model/Company.md)
- [CompatibilityList](docs/Model/CompatibilityList.md)
- [CompatibilityListIdItem](docs/Model/CompatibilityListIdItem.md)
- [CompatibilityListIdItemAdditionalInfo](docs/Model/CompatibilityListIdItemAdditionalInfo.md)
- [CompatibilityListItem](docs/Model/CompatibilityListItem.md)
- [CompatibilityListItemProductBased](docs/Model/CompatibilityListItemProductBased.md)
- [CompatibilityListManual](docs/Model/CompatibilityListManual.md)
- [CompatibilityListManualType](docs/Model/CompatibilityListManualType.md)
- [CompatibilityListProductBased](docs/Model/CompatibilityListProductBased.md)
- [CompatibilityListProductBasedProductOfferResponse](docs/Model/CompatibilityListProductBasedProductOfferResponse.md)
- [CompatibilityListProductOfferResponse](docs/Model/CompatibilityListProductOfferResponse.md)
- [CompatibilityListSupportedCategoriesDto](docs/Model/CompatibilityListSupportedCategoriesDto.md)
- [CompatibilityListSupportedCategoriesDtoSupportedCategoriesInner](docs/Model/CompatibilityListSupportedCategoriesDtoSupportedCategoriesInner.md)
- [CompatibilityListSupportedCategoriesDtoSupportedCategoriesInnerValidationRules](docs/Model/CompatibilityListSupportedCategoriesDtoSupportedCategoriesInnerValidationRules.md)
- [CompatibilityListTextItem](docs/Model/CompatibilityListTextItem.md)
- [CompatibleProductDto](docs/Model/CompatibleProductDto.md)
- [CompatibleProductDtoAttributesInner](docs/Model/CompatibleProductDtoAttributesInner.md)
- [CompatibleProductDtoGroup](docs/Model/CompatibleProductDtoGroup.md)
- [CompatibleProductsGroupsDto](docs/Model/CompatibleProductsGroupsDto.md)
- [CompatibleProductsGroupsDtoGroupsInner](docs/Model/CompatibleProductsGroupsDtoGroupsInner.md)
- [CompatibleProductsListDto](docs/Model/CompatibleProductsListDto.md)
- [CompensationOperation](docs/Model/CompensationOperation.md)
- [Configuration](docs/Model/Configuration.md)
- [ConstraintCriteria](docs/Model/ConstraintCriteria.md)
- [Contact](docs/Model/Contact.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactResponse](docs/Model/ContactResponse.md)
- [ContactResponseList](docs/Model/ContactResponseList.md)
- [ContributionOperation](docs/Model/ContributionOperation.md)
- [Coordinates](docs/Model/Coordinates.md)
- [CorrectionOperation](docs/Model/CorrectionOperation.md)
- [Courier](docs/Model/Courier.md)
- [CourierBySellerShipping](docs/Model/CourierBySellerShipping.md)
- [CreateAdvanceShipNoticeRequest](docs/Model/CreateAdvanceShipNoticeRequest.md)
- [CreateAdvanceShipNoticeResponse](docs/Model/CreateAdvanceShipNoticeResponse.md)
- [CreateAfterSalesServiceConditionsAttachmentUsingPOSTRequest](docs/Model/CreateAfterSalesServiceConditionsAttachmentUsingPOSTRequest.md)
- [CreateLabelsCommand](docs/Model/CreateLabelsCommand.md)
- [CreateLabelsCommandInput](docs/Model/CreateLabelsCommandInput.md)
- [CreateLabelsCommandOnlyInput](docs/Model/CreateLabelsCommandOnlyInput.md)
- [CreateLabelsCommandOutput](docs/Model/CreateLabelsCommandOutput.md)
- [CreateLabelsFailedCommandOutput](docs/Model/CreateLabelsFailedCommandOutput.md)
- [CreateLabelsRunningCommandOutput](docs/Model/CreateLabelsRunningCommandOutput.md)
- [CreateLabelsSuccessfulCommandOutput](docs/Model/CreateLabelsSuccessfulCommandOutput.md)
- [CreateLabelsSuccessfulCommandOutputAllOfLabels](docs/Model/CreateLabelsSuccessfulCommandOutputAllOfLabels.md)
- [CreateNewParcel201Response](docs/Model/CreateNewParcel201Response.md)
- [CreateOfferBundleDTO](docs/Model/CreateOfferBundleDTO.md)
- [CreatePickupCommandStatusDto](docs/Model/CreatePickupCommandStatusDto.md)
- [CreateProductOffers422Response](docs/Model/CreateProductOffers422Response.md)
- [CreateResponsiblePersonRequest](docs/Model/CreateResponsiblePersonRequest.md)
- [CreateResponsiblePersonRequestPersonalData](docs/Model/CreateResponsiblePersonRequestPersonalData.md)
- [CreateResponsibleProducerRequest](docs/Model/CreateResponsibleProducerRequest.md)
- [CreateShipmentCommandStatusDto](docs/Model/CreateShipmentCommandStatusDto.md)
- [CurrentPrice](docs/Model/CurrentPrice.md)
- [CustomerReturn](docs/Model/CustomerReturn.md)
- [CustomerReturnBuyer](docs/Model/CustomerReturnBuyer.md)
- [CustomerReturnItem](docs/Model/CustomerReturnItem.md)
- [CustomerReturnItemReason](docs/Model/CustomerReturnItemReason.md)
- [CustomerReturnParcelSender](docs/Model/CustomerReturnParcelSender.md)
- [CustomerReturnRefund](docs/Model/CustomerReturnRefund.md)
- [CustomerReturnRefundBankAccount](docs/Model/CustomerReturnRefundBankAccount.md)
- [CustomerReturnRefundBankAccountAddress](docs/Model/CustomerReturnRefundBankAccountAddress.md)
- [CustomerReturnRefundRejectionRequest](docs/Model/CustomerReturnRefundRejectionRequest.md)
- [CustomerReturnRefundRejectionRequestRejection](docs/Model/CustomerReturnRefundRejectionRequestRejection.md)
- [CustomerReturnRejection](docs/Model/CustomerReturnRejection.md)
- [CustomerReturnResponse](docs/Model/CustomerReturnResponse.md)
- [CustomerReturnReturnParcel](docs/Model/CustomerReturnReturnParcel.md)
- [Deduction](docs/Model/Deduction.md)
- [DeductionChargeOperation](docs/Model/DeductionChargeOperation.md)
- [DeductionIncreaseOperation](docs/Model/DeductionIncreaseOperation.md)
- [DeliveryBasic](docs/Model/DeliveryBasic.md)
- [DeliveryFull](docs/Model/DeliveryFull.md)
- [DeliveryMethodId](docs/Model/DeliveryMethodId.md)
- [DeliveryProductOfferRequest](docs/Model/DeliveryProductOfferRequest.md)
- [DeliveryProductOfferRequestShippingRates](docs/Model/DeliveryProductOfferRequestShippingRates.md)
- [DeliveryProductOfferResponse](docs/Model/DeliveryProductOfferResponse.md)
- [DeliveryService](docs/Model/DeliveryService.md)
- [DeliveryServiceDto](docs/Model/DeliveryServiceDto.md)
- [DeliveryServiceIdDto](docs/Model/DeliveryServiceIdDto.md)
- [DeliveryServices](docs/Model/DeliveryServices.md)
- [DeliveryServicesDto](docs/Model/DeliveryServicesDto.md)
- [DeliverySettingsRequest](docs/Model/DeliverySettingsRequest.md)
- [DeliverySettingsRequestAbroadFreeDelivery](docs/Model/DeliverySettingsRequestAbroadFreeDelivery.md)
- [DeliverySettingsRequestFreeDelivery](docs/Model/DeliverySettingsRequestFreeDelivery.md)
- [DeliverySettingsRequestMarketplace](docs/Model/DeliverySettingsRequestMarketplace.md)
- [DeliverySettingsResponse](docs/Model/DeliverySettingsResponse.md)
- [DeliverySettingsResponseAbroadFreeDelivery](docs/Model/DeliverySettingsResponseAbroadFreeDelivery.md)
- [DeliverySettingsResponseCustomCost](docs/Model/DeliverySettingsResponseCustomCost.md)
- [DeliverySettingsResponseFreeDelivery](docs/Model/DeliverySettingsResponseFreeDelivery.md)
- [DeliverySettingsResponseJoinPolicy](docs/Model/DeliverySettingsResponseJoinPolicy.md)
- [DeliverySettingsResponseMarketplace](docs/Model/DeliverySettingsResponseMarketplace.md)
- [DescribesListingFee](docs/Model/DescribesListingFee.md)
- [DescribesSuccessCommissionFee](docs/Model/DescribesSuccessCommissionFee.md)
- [DescriptionSection](docs/Model/DescriptionSection.md)
- [DescriptionSectionItem](docs/Model/DescriptionSectionItem.md)
- [DescriptionSectionItemImage](docs/Model/DescriptionSectionItemImage.md)
- [DescriptionSectionItemText](docs/Model/DescriptionSectionItemText.md)
- [DictionaryCategoryParameter](docs/Model/DictionaryCategoryParameter.md)
- [DictionaryCategoryParameterAllOfDictionary](docs/Model/DictionaryCategoryParameterAllOfDictionary.md)
- [DictionaryCategoryProductParameter](docs/Model/DictionaryCategoryProductParameter.md)
- [DictionaryCategoryProductParameterAllOfDictionary](docs/Model/DictionaryCategoryProductParameterAllOfDictionary.md)
- [DictionaryCategoryProductParameterAllOfRestrictions](docs/Model/DictionaryCategoryProductParameterAllOfRestrictions.md)
- [DimensionItem](docs/Model/DimensionItem.md)
- [DimensionValue](docs/Model/DimensionValue.md)
- [Discounts](docs/Model/Discounts.md)
- [DiscountsProductOfferRequest](docs/Model/DiscountsProductOfferRequest.md)
- [DiscountsProductOfferRequestWholesalePriceList](docs/Model/DiscountsProductOfferRequestWholesalePriceList.md)
- [DiscountsProductOfferResponse](docs/Model/DiscountsProductOfferResponse.md)
- [DiscountsWholesalePriceList](docs/Model/DiscountsWholesalePriceList.md)
- [Dispute](docs/Model/Dispute.md)
- [DisputeAttachment](docs/Model/DisputeAttachment.md)
- [DisputeAttachmentId](docs/Model/DisputeAttachmentId.md)
- [DisputeAuthor](docs/Model/DisputeAuthor.md)
- [DisputeAuthorRole](docs/Model/DisputeAuthorRole.md)
- [DisputeCheckoutForm](docs/Model/DisputeCheckoutForm.md)
- [DisputeClaim](docs/Model/DisputeClaim.md)
- [DisputeFirstMessage](docs/Model/DisputeFirstMessage.md)
- [DisputeListResponse](docs/Model/DisputeListResponse.md)
- [DisputeMessage](docs/Model/DisputeMessage.md)
- [DisputeMessageAuthor](docs/Model/DisputeMessageAuthor.md)
- [DisputeMessageList](docs/Model/DisputeMessageList.md)
- [DisputeUser](docs/Model/DisputeUser.md)
- [EditProductOffers422Response](docs/Model/EditProductOffers422Response.md)
- [EmailRequest](docs/Model/EmailRequest.md)
- [EmailResponse](docs/Model/EmailResponse.md)
- [Error](docs/Model/Error.md)
- [Error200](docs/Model/Error200.md)
- [Error400](docs/Model/Error400.md)
- [Error403](docs/Model/Error403.md)
- [Error404](docs/Model/Error404.md)
- [Error504](docs/Model/Error504.md)
- [ErrorsHolder](docs/Model/ErrorsHolder.md)
- [ExternalId](docs/Model/ExternalId.md)
- [Fee](docs/Model/Fee.md)
- [FeePreviewResponse](docs/Model/FeePreviewResponse.md)
- [FloatCategoryParameter](docs/Model/FloatCategoryParameter.md)
- [FloatCategoryProductParameter](docs/Model/FloatCategoryProductParameter.md)
- [FloatCategoryProductParameterAllOfRestrictions](docs/Model/FloatCategoryProductParameterAllOfRestrictions.md)
- [FulfillmentOrder](docs/Model/FulfillmentOrder.md)
- [FulfillmentOrderParcel](docs/Model/FulfillmentOrderParcel.md)
- [FulfillmentOrderParcelItem](docs/Model/FulfillmentOrderParcelItem.md)
- [FundraisingCampaign](docs/Model/FundraisingCampaign.md)
- [FundraisingCampaigns](docs/Model/FundraisingCampaigns.md)
- [GeneralReport](docs/Model/GeneralReport.md)
- [GetBadgeCampaignsList](docs/Model/GetBadgeCampaignsList.md)
- [GetDeliveryServices504Response](docs/Model/GetDeliveryServices504Response.md)
- [GetListOfDeliveryMethodsUsingGET200Response](docs/Model/GetListOfDeliveryMethodsUsingGET200Response.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInner](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInner.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraints.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsFirstItemRate](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsFirstItemRate.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsMaxPackageWeight](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsMaxPackageWeight.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsMaxQuantityPerPackage](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsMaxQuantityPerPackage.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsNextItemRate](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsNextItemRate.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsShippingTime](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsShippingTime.md)
- [GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsShippingTimeDefault](docs/Model/GetListOfDeliveryMethodsUsingGET200ResponseDeliveryMethodsInnerShippingRatesConstraintsShippingTimeDefault.md)
- [GetListOfShippingRatestUsingGET200Response](docs/Model/GetListOfShippingRatestUsingGET200Response.md)
- [GetListOfShippingRatestUsingGET200ResponseShippingRatesInner](docs/Model/GetListOfShippingRatestUsingGET200ResponseShippingRatesInner.md)
- [GetListOfShippingRatestUsingGET200ResponseShippingRatesInnerMarketplacesInner](docs/Model/GetListOfShippingRatestUsingGET200ResponseShippingRatesInnerMarketplacesInner.md)
- [GetOfferSmartClassificationGET400Response](docs/Model/GetOfferSmartClassificationGET400Response.md)
- [GetOfferSmartClassificationGET403Response](docs/Model/GetOfferSmartClassificationGET403Response.md)
- [GetParcelCancellationStatus200Response](docs/Model/GetParcelCancellationStatus200Response.md)
- [GetParcelCreationStatus200Response](docs/Model/GetParcelCreationStatus200Response.md)
- [GetParcelPickupStatus200Response](docs/Model/GetParcelPickupStatus200Response.md)
- [GetRefundApplications200Response](docs/Model/GetRefundApplications200Response.md)
- [GetRefundedPayments200Response](docs/Model/GetRefundedPayments200Response.md)
- [GetSaleProductsResponse](docs/Model/GetSaleProductsResponse.md)
- [GetSaleProductsResponseNextPage](docs/Model/GetSaleProductsResponseNextPage.md)
- [GetShipmentDetails404Response](docs/Model/GetShipmentDetails404Response.md)
- [HandlingUnit](docs/Model/HandlingUnit.md)
- [Header](docs/Model/Header.md)
- [ImageUrl](docs/Model/ImageUrl.md)
- [ImpliedWarrantiesListImpliedWarrantyBasic](docs/Model/ImpliedWarrantiesListImpliedWarrantyBasic.md)
- [ImpliedWarranty](docs/Model/ImpliedWarranty.md)
- [ImpliedWarrantyBasic](docs/Model/ImpliedWarrantyBasic.md)
- [ImpliedWarrantyPeriod](docs/Model/ImpliedWarrantyPeriod.md)
- [ImpliedWarrantyRequest](docs/Model/ImpliedWarrantyRequest.md)
- [ImpliedWarrantyResponse](docs/Model/ImpliedWarrantyResponse.md)
- [InitializeRefund](docs/Model/InitializeRefund.md)
- [InitializeRefundAdditionalServices](docs/Model/InitializeRefundAdditionalServices.md)
- [InitializeRefundDelivery](docs/Model/InitializeRefundDelivery.md)
- [InitializeRefundOverpaid](docs/Model/InitializeRefundOverpaid.md)
- [InsuranceDto](docs/Model/InsuranceDto.md)
- [IntegerCategoryParameter](docs/Model/IntegerCategoryParameter.md)
- [IntegerCategoryProductParameter](docs/Model/IntegerCategoryProductParameter.md)
- [IntegerCategoryProductParameterAllOfRestrictions](docs/Model/IntegerCategoryProductParameterAllOfRestrictions.md)
- [Interlocutor](docs/Model/Interlocutor.md)
- [JustId](docs/Model/JustId.md)
- [LabelRequestDto](docs/Model/LabelRequestDto.md)
- [Labels](docs/Model/Labels.md)
- [LargeOrderDiscountBenefitSpecification](docs/Model/LargeOrderDiscountBenefitSpecification.md)
- [LargeOrderDiscountBenefitSpecificationAllOfDiscount](docs/Model/LargeOrderDiscountBenefitSpecificationAllOfDiscount.md)
- [LargeOrderDiscountBenefitSpecificationAllOfOrderValue](docs/Model/LargeOrderDiscountBenefitSpecificationAllOfOrderValue.md)
- [LargeOrderDiscountBenefitSpecificationAllOfThresholds](docs/Model/LargeOrderDiscountBenefitSpecificationAllOfThresholds.md)
- [LatestOrderEvent](docs/Model/LatestOrderEvent.md)
- [LimitWithCurrencyDto](docs/Model/LimitWithCurrencyDto.md)
- [LineItemReconciliation](docs/Model/LineItemReconciliation.md)
- [LineItemVoucher](docs/Model/LineItemVoucher.md)
- [LineItemVoucherValue](docs/Model/LineItemVoucherValue.md)
- [ListingCategory](docs/Model/ListingCategory.md)
- [ListingCategoryWithCount](docs/Model/ListingCategoryWithCount.md)
- [ListingOffer](docs/Model/ListingOffer.md)
- [ListingResponse](docs/Model/ListingResponse.md)
- [ListingResponseCategories](docs/Model/ListingResponseCategories.md)
- [ListingResponseFilters](docs/Model/ListingResponseFilters.md)
- [ListingResponseFiltersValues](docs/Model/ListingResponseFiltersValues.md)
- [ListingResponseOffers](docs/Model/ListingResponseOffers.md)
- [ListingResponseSearchMeta](docs/Model/ListingResponseSearchMeta.md)
- [ListingResponseSort](docs/Model/ListingResponseSort.md)
- [Location](docs/Model/Location.md)
- [ManualDescriptionTranslation](docs/Model/ManualDescriptionTranslation.md)
- [ManualTitleTranslation](docs/Model/ManualTitleTranslation.md)
- [ManualTranslationUpdateRequest](docs/Model/ManualTranslationUpdateRequest.md)
- [MarketedBeforeGPSRObligation](docs/Model/MarketedBeforeGPSRObligation.md)
- [MarketplaceAvailablePromotionPackages](docs/Model/MarketplaceAvailablePromotionPackages.md)
- [MarketplaceItem](docs/Model/MarketplaceItem.md)
- [MarketplaceItemCurrencies](docs/Model/MarketplaceItemCurrencies.md)
- [MarketplaceItemCurrency](docs/Model/MarketplaceItemCurrency.md)
- [MarketplaceItemLanguage](docs/Model/MarketplaceItemLanguage.md)
- [MarketplaceItemLanguages](docs/Model/MarketplaceItemLanguages.md)
- [MarketplaceItemShippingCountry](docs/Model/MarketplaceItemShippingCountry.md)
- [MarketplaceOfferPromoOption](docs/Model/MarketplaceOfferPromoOption.md)
- [MarketplaceReference](docs/Model/MarketplaceReference.md)
- [MarketplacesVisibility](docs/Model/MarketplacesVisibility.md)
- [MaxPrice](docs/Model/MaxPrice.md)
- [MeResponse](docs/Model/MeResponse.md)
- [MeResponseBaseMarketplace](docs/Model/MeResponseBaseMarketplace.md)
- [Message](docs/Model/Message.md)
- [MessageAdditionalInformation](docs/Model/MessageAdditionalInformation.md)
- [MessageAttachmentId](docs/Model/MessageAttachmentId.md)
- [MessageAttachmentInfo](docs/Model/MessageAttachmentInfo.md)
- [MessageAuthor](docs/Model/MessageAuthor.md)
- [MessageAuthorRole](docs/Model/MessageAuthorRole.md)
- [MessageOffer](docs/Model/MessageOffer.md)
- [MessageOrder](docs/Model/MessageOrder.md)
- [MessageRelatedObject](docs/Model/MessageRelatedObject.md)
- [MessageRequest](docs/Model/MessageRequest.md)
- [MessageToSellerSettings](docs/Model/MessageToSellerSettings.md)
- [MessagesList](docs/Model/MessagesList.md)
- [MinimalPrice](docs/Model/MinimalPrice.md)
- [Modification](docs/Model/Modification.md)
- [ModificationAttachmentSafetyInformation](docs/Model/ModificationAttachmentSafetyInformation.md)
- [ModificationAttachmentSafetyInformationAllOfAttachments](docs/Model/ModificationAttachmentSafetyInformationAllOfAttachments.md)
- [ModificationDelivery](docs/Model/ModificationDelivery.md)
- [ModificationDiscounts](docs/Model/ModificationDiscounts.md)
- [ModificationDiscountsWholesalePriceList](docs/Model/ModificationDiscountsWholesalePriceList.md)
- [ModificationNoSafetyInformation](docs/Model/ModificationNoSafetyInformation.md)
- [ModificationPayments](docs/Model/ModificationPayments.md)
- [ModificationPublication](docs/Model/ModificationPublication.md)
- [ModificationResponsiblePerson](docs/Model/ModificationResponsiblePerson.md)
- [ModificationResponsibleProducer](docs/Model/ModificationResponsibleProducer.md)
- [ModificationSafetyInformation](docs/Model/ModificationSafetyInformation.md)
- [ModificationTextSafetyInformation](docs/Model/ModificationTextSafetyInformation.md)
- [MultiPackBenefitSpecification](docs/Model/MultiPackBenefitSpecification.md)
- [MultiPackBenefitSpecificationAllOfConfiguration](docs/Model/MultiPackBenefitSpecificationAllOfConfiguration.md)
- [MultiPackBenefitSpecificationAllOfTrigger](docs/Model/MultiPackBenefitSpecificationAllOfTrigger.md)
- [MyBidResponse](docs/Model/MyBidResponse.md)
- [NetPrice](docs/Model/NetPrice.md)
- [NewAttachmentDeclaration](docs/Model/NewAttachmentDeclaration.md)
- [NewMessage](docs/Model/NewMessage.md)
- [NewMessageInThread](docs/Model/NewMessageInThread.md)
- [NewProductParameterDto](docs/Model/NewProductParameterDto.md)
- [OfferActivatedEvent](docs/Model/OfferActivatedEvent.md)
- [OfferAdditionalMarketplace](docs/Model/OfferAdditionalMarketplace.md)
- [OfferAdditionalServices](docs/Model/OfferAdditionalServices.md)
- [OfferArchivedEvent](docs/Model/OfferArchivedEvent.md)
- [OfferAttachment](docs/Model/OfferAttachment.md)
- [OfferAttachmentRequest](docs/Model/OfferAttachmentRequest.md)
- [OfferAutomaticPricingCommand](docs/Model/OfferAutomaticPricingCommand.md)
- [OfferAutomaticPricingCommandModification](docs/Model/OfferAutomaticPricingCommandModification.md)
- [OfferAutomaticPricingModificationRemove](docs/Model/OfferAutomaticPricingModificationRemove.md)
- [OfferAutomaticPricingModificationRemoveRemoveInner](docs/Model/OfferAutomaticPricingModificationRemoveRemoveInner.md)
- [OfferAutomaticPricingModificationSet](docs/Model/OfferAutomaticPricingModificationSet.md)
- [OfferAutomaticPricingModificationSetSetInner](docs/Model/OfferAutomaticPricingModificationSetSetInner.md)
- [OfferAutomaticPricingModificationSetSetInnerRule](docs/Model/OfferAutomaticPricingModificationSetSetInnerRule.md)
- [OfferBadgeCampaign](docs/Model/OfferBadgeCampaign.md)
- [OfferBidCanceledEvent](docs/Model/OfferBidCanceledEvent.md)
- [OfferBidPlacedEvent](docs/Model/OfferBidPlacedEvent.md)
- [OfferBundleDTO](docs/Model/OfferBundleDTO.md)
- [OfferBundleDTOPublication](docs/Model/OfferBundleDTOPublication.md)
- [OfferBundlesDTO](docs/Model/OfferBundlesDTO.md)
- [OfferBundlesDTONextPage](docs/Model/OfferBundlesDTONextPage.md)
- [OfferCategory](docs/Model/OfferCategory.md)
- [OfferCategoryRequest](docs/Model/OfferCategoryRequest.md)
- [OfferChangeCommand](docs/Model/OfferChangeCommand.md)
- [OfferChangedEvent](docs/Model/OfferChangedEvent.md)
- [OfferCriterium](docs/Model/OfferCriterium.md)
- [OfferDelivery](docs/Model/OfferDelivery.md)
- [OfferDescriptionTranslation](docs/Model/OfferDescriptionTranslation.md)
- [OfferEndedEvent](docs/Model/OfferEndedEvent.md)
- [OfferEventBaseOffer](docs/Model/OfferEventBaseOffer.md)
- [OfferEventEndedOffer](docs/Model/OfferEventEndedOffer.md)
- [OfferEventEndedOfferAllOfPublication](docs/Model/OfferEventEndedOfferAllOfPublication.md)
- [OfferEventExternalOffer](docs/Model/OfferEventExternalOffer.md)
- [OfferEventExternalOfferForPriceChanges](docs/Model/OfferEventExternalOfferForPriceChanges.md)
- [OfferEventExternalOfferWithPublication](docs/Model/OfferEventExternalOfferWithPublication.md)
- [OfferFixedPrice](docs/Model/OfferFixedPrice.md)
- [OfferId](docs/Model/OfferId.md)
- [OfferImageLinkUploadRequest](docs/Model/OfferImageLinkUploadRequest.md)
- [OfferImageUploadResponse](docs/Model/OfferImageUploadResponse.md)
- [OfferImages](docs/Model/OfferImages.md)
- [OfferListingDto](docs/Model/OfferListingDto.md)
- [OfferListingDtoImage](docs/Model/OfferListingDtoImage.md)
- [OfferListingDtoV1AdditionalMarketplace](docs/Model/OfferListingDtoV1AdditionalMarketplace.md)
- [OfferListingDtoV1AdditionalMarketplacePublication](docs/Model/OfferListingDtoV1AdditionalMarketplacePublication.md)
- [OfferListingDtoV1AdditionalMarketplaceSellingMode](docs/Model/OfferListingDtoV1AdditionalMarketplaceSellingMode.md)
- [OfferListingDtoV1AdditionalMarketplaceStock](docs/Model/OfferListingDtoV1AdditionalMarketplaceStock.md)
- [OfferListingDtoV1B2b](docs/Model/OfferListingDtoV1B2b.md)
- [OfferListingDtoV1Delivery](docs/Model/OfferListingDtoV1Delivery.md)
- [OfferListingDtoV1Publication](docs/Model/OfferListingDtoV1Publication.md)
- [OfferListingDtoV1PublicationMarketplaces](docs/Model/OfferListingDtoV1PublicationMarketplaces.md)
- [OfferListingDtoV1SaleInfo](docs/Model/OfferListingDtoV1SaleInfo.md)
- [OfferListingDtoV1SellingMode](docs/Model/OfferListingDtoV1SellingMode.md)
- [OfferListingDtoV1Stats](docs/Model/OfferListingDtoV1Stats.md)
- [OfferListingDtoV1Stock](docs/Model/OfferListingDtoV1Stock.md)
- [OfferLowestPrice](docs/Model/OfferLowestPrice.md)
- [OfferMarketplacesPriceChanges](docs/Model/OfferMarketplacesPriceChanges.md)
- [OfferMarketplacesPublication](docs/Model/OfferMarketplacesPublication.md)
- [OfferPrice](docs/Model/OfferPrice.md)
- [OfferPriceChangeCommand](docs/Model/OfferPriceChangeCommand.md)
- [OfferPriceChangedEvent](docs/Model/OfferPriceChangedEvent.md)
- [OfferProductSetProductReference](docs/Model/OfferProductSetProductReference.md)
- [OfferProductSetReference](docs/Model/OfferProductSetReference.md)
- [OfferPromoOption](docs/Model/OfferPromoOption.md)
- [OfferPromoOptions](docs/Model/OfferPromoOptions.md)
- [OfferPromoOptionsForSeller](docs/Model/OfferPromoOptionsForSeller.md)
- [OfferPromoOptionsPendingChanges](docs/Model/OfferPromoOptionsPendingChanges.md)
- [OfferPromotion](docs/Model/OfferPromotion.md)
- [OfferPublication](docs/Model/OfferPublication.md)
- [OfferQuantityChangeCommand](docs/Model/OfferQuantityChangeCommand.md)
- [OfferQuoteDto](docs/Model/OfferQuoteDto.md)
- [OfferQuotesDto](docs/Model/OfferQuotesDto.md)
- [OfferRating](docs/Model/OfferRating.md)
- [OfferRatingScoreDistributionInner](docs/Model/OfferRatingScoreDistributionInner.md)
- [OfferRatingSizeFeedbackInner](docs/Model/OfferRatingSizeFeedbackInner.md)
- [OfferReference](docs/Model/OfferReference.md)
- [OfferRequirements](docs/Model/OfferRequirements.md)
- [OfferRules](docs/Model/OfferRules.md)
- [OfferRulesRulesInner](docs/Model/OfferRulesRulesInner.md)
- [OfferRulesRulesInnerMarketplace](docs/Model/OfferRulesRulesInnerMarketplace.md)
- [OfferRulesRulesInnerRule](docs/Model/OfferRulesRulesInnerRule.md)
- [OfferSeller](docs/Model/OfferSeller.md)
- [OfferSellingMode](docs/Model/OfferSellingMode.md)
- [OfferShippingRates](docs/Model/OfferShippingRates.md)
- [OfferStatModelDto](docs/Model/OfferStatModelDto.md)
- [OfferStatResponseDto](docs/Model/OfferStatResponseDto.md)
- [OfferStatsResponseDto](docs/Model/OfferStatsResponseDto.md)
- [OfferStatus](docs/Model/OfferStatus.md)
- [OfferStock](docs/Model/OfferStock.md)
- [OfferStockChangedEvent](docs/Model/OfferStockChangedEvent.md)
- [OfferTaxRate](docs/Model/OfferTaxRate.md)
- [OfferTaxSettings](docs/Model/OfferTaxSettings.md)
- [OfferTitleTranslation](docs/Model/OfferTitleTranslation.md)
- [OfferTranslation](docs/Model/OfferTranslation.md)
- [OfferTranslationType](docs/Model/OfferTranslationType.md)
- [OfferTranslationUpdatedEvent](docs/Model/OfferTranslationUpdatedEvent.md)
- [OfferTranslations](docs/Model/OfferTranslations.md)
- [OfferVendor](docs/Model/OfferVendor.md)
- [OfferVisibilityChangedEvent](docs/Model/OfferVisibilityChangedEvent.md)
- [OffersSearchResultDto](docs/Model/OffersSearchResultDto.md)
- [OpenHour](docs/Model/OpenHour.md)
- [OperationParticipantAddress](docs/Model/OperationParticipantAddress.md)
- [OperationPayment](docs/Model/OperationPayment.md)
- [OperationValue](docs/Model/OperationValue.md)
- [Order](docs/Model/Order.md)
- [OrderEvent](docs/Model/OrderEvent.md)
- [OrderEventData](docs/Model/OrderEventData.md)
- [OrderEventStats](docs/Model/OrderEventStats.md)
- [OrderEventType](docs/Model/OrderEventType.md)
- [OrderEventsList](docs/Model/OrderEventsList.md)
- [OrderLineItem](docs/Model/OrderLineItem.md)
- [OrderLineItemOfferReference](docs/Model/OrderLineItemOfferReference.md)
- [OrderMarketplace](docs/Model/OrderMarketplace.md)
- [OrderOffersInner](docs/Model/OrderOffersInner.md)
- [OrdersShippingCarrier](docs/Model/OrdersShippingCarrier.md)
- [OrdersShippingCarriersResponse](docs/Model/OrdersShippingCarriersResponse.md)
- [OwnTransportShipping](docs/Model/OwnTransportShipping.md)
- [PackageDto](docs/Model/PackageDto.md)
- [PackageRequestDto](docs/Model/PackageRequestDto.md)
- [Parameter](docs/Model/Parameter.md)
- [ParameterProductOfferRequest](docs/Model/ParameterProductOfferRequest.md)
- [ParameterProductOfferResponse](docs/Model/ParameterProductOfferResponse.md)
- [ParameterRangeValue](docs/Model/ParameterRangeValue.md)
- [ParametersForPreviewPrice](docs/Model/ParametersForPreviewPrice.md)
- [ParcelAdditionalServices](docs/Model/ParcelAdditionalServices.md)
- [ParcelAdditionalServicesAvailability](docs/Model/ParcelAdditionalServicesAvailability.md)
- [ParcelAdditionalServicesCashOnDelivery](docs/Model/ParcelAdditionalServicesCashOnDelivery.md)
- [ParcelAdditionalServicesCashOnDeliveryAvailability](docs/Model/ParcelAdditionalServicesCashOnDeliveryAvailability.md)
- [ParcelAdditionalServicesCashOnDeliveryValue](docs/Model/ParcelAdditionalServicesCashOnDeliveryValue.md)
- [ParcelAdditionalServicesOptionAvailability](docs/Model/ParcelAdditionalServicesOptionAvailability.md)
- [ParcelCreationAddress](docs/Model/ParcelCreationAddress.md)
- [ParcelCreationAddressWithMandatoryPlace](docs/Model/ParcelCreationAddressWithMandatoryPlace.md)
- [ParcelCreationParameters](docs/Model/ParcelCreationParameters.md)
- [ParcelCreationParametersLabel](docs/Model/ParcelCreationParametersLabel.md)
- [ParcelDetails](docs/Model/ParcelDetails.md)
- [ParcelDetailsLabel](docs/Model/ParcelDetailsLabel.md)
- [ParcelItemDetails](docs/Model/ParcelItemDetails.md)
- [ParcelItemDetailsValue](docs/Model/ParcelItemDetailsValue.md)
- [ParcelItemDetailsWithWaybill](docs/Model/ParcelItemDetailsWithWaybill.md)
- [ParcelItemDetailsWithWaybillDimensions](docs/Model/ParcelItemDetailsWithWaybillDimensions.md)
- [ParcelItemDetailsWithWaybillValue](docs/Model/ParcelItemDetailsWithWaybillValue.md)
- [ParcelItemDetailsWithWaybillWeight](docs/Model/ParcelItemDetailsWithWaybillWeight.md)
- [ParcelTrackingHistory](docs/Model/ParcelTrackingHistory.md)
- [ParcelTrackingHistoryTrackingDetails](docs/Model/ParcelTrackingHistoryTrackingDetails.md)
- [ParcelTrackingStatus](docs/Model/ParcelTrackingStatus.md)
- [Participant](docs/Model/Participant.md)
- [PatchBadge202Response](docs/Model/PatchBadge202Response.md)
- [Payment](docs/Model/Payment.md)
- [PaymentOperations](docs/Model/PaymentOperations.md)
- [Payments](docs/Model/Payments.md)
- [PaymentsSurcharge](docs/Model/PaymentsSurcharge.md)
- [Payout](docs/Model/Payout.md)
- [PayoutOperation](docs/Model/PayoutOperation.md)
- [PayoutOperationCancel](docs/Model/PayoutOperationCancel.md)
- [PhonesRequest](docs/Model/PhonesRequest.md)
- [PhonesResponse](docs/Model/PhonesResponse.md)
- [Pickup](docs/Model/Pickup.md)
- [PickupAddressDto](docs/Model/PickupAddressDto.md)
- [PickupCreateCommandDto](docs/Model/PickupCreateCommandDto.md)
- [PickupCreateRequestDto](docs/Model/PickupCreateRequestDto.md)
- [PickupDateParcelsProposals](docs/Model/PickupDateParcelsProposals.md)
- [PickupDateProposal](docs/Model/PickupDateProposal.md)
- [PickupDateProposalDto](docs/Model/PickupDateProposalDto.md)
- [PickupDateProposals](docs/Model/PickupDateProposals.md)
- [PickupDateProposalsDto](docs/Model/PickupDateProposalsDto.md)
- [PickupParcelParameters](docs/Model/PickupParcelParameters.md)
- [PickupProposalsRequestDto](docs/Model/PickupProposalsRequestDto.md)
- [PickupProposalsResponseDto](docs/Model/PickupProposalsResponseDto.md)
- [Pos](docs/Model/Pos.md)
- [PosLocation](docs/Model/PosLocation.md)
- [Price](docs/Model/Price.md)
- [PriceAutomation](docs/Model/PriceAutomation.md)
- [PriceAutomationRule](docs/Model/PriceAutomationRule.md)
- [PriceModification](docs/Model/PriceModification.md)
- [PriceModificationFixedPrice](docs/Model/PriceModificationFixedPrice.md)
- [PriceModificationFixedPriceHolder](docs/Model/PriceModificationFixedPriceHolder.md)
- [PriceModificationPercentageChangeDecrease](docs/Model/PriceModificationPercentageChangeDecrease.md)
- [PriceModificationPercentageChangeIncrease](docs/Model/PriceModificationPercentageChangeIncrease.md)
- [PriceModificationValueChangeDecrease](docs/Model/PriceModificationValueChangeDecrease.md)
- [PriceModificationValueChangeHolder](docs/Model/PriceModificationValueChangeHolder.md)
- [PriceModificationValueChangeIncrease](docs/Model/PriceModificationValueChangeIncrease.md)
- [PricingOffer](docs/Model/PricingOffer.md)
- [PricingPublication](docs/Model/PricingPublication.md)
- [ProcessingStatus](docs/Model/ProcessingStatus.md)
- [Product](docs/Model/Product.md)
- [ProductCategory](docs/Model/ProductCategory.md)
- [ProductCategoryProposal](docs/Model/ProductCategoryProposal.md)
- [ProductCategoryWithPath](docs/Model/ProductCategoryWithPath.md)
- [ProductChangeDto](docs/Model/ProductChangeDto.md)
- [ProductChangeDtoProduct](docs/Model/ProductChangeDtoProduct.md)
- [ProductChangeProposalDto](docs/Model/ProductChangeProposalDto.md)
- [ProductChangeProposalRequest](docs/Model/ProductChangeProposalRequest.md)
- [ProductChangesResponse](docs/Model/ProductChangesResponse.md)
- [ProductImageProposal](docs/Model/ProductImageProposal.md)
- [ProductItem](docs/Model/ProductItem.md)
- [ProductNameProposal](docs/Model/ProductNameProposal.md)
- [ProductOffer](docs/Model/ProductOffer.md)
- [ProductOfferAdditionalServicesRequest](docs/Model/ProductOfferAdditionalServicesRequest.md)
- [ProductOfferAdditionalServicesResponse](docs/Model/ProductOfferAdditionalServicesResponse.md)
- [ProductOfferAttachmentInner](docs/Model/ProductOfferAttachmentInner.md)
- [ProductOfferBase](docs/Model/ProductOfferBase.md)
- [ProductOfferFundraisingCampaignRequest](docs/Model/ProductOfferFundraisingCampaignRequest.md)
- [ProductOfferFundraisingCampaignResponse](docs/Model/ProductOfferFundraisingCampaignResponse.md)
- [ProductOfferResponse](docs/Model/ProductOfferResponse.md)
- [ProductOfferResponsePublication](docs/Model/ProductOfferResponsePublication.md)
- [ProductParameter](docs/Model/ProductParameter.md)
- [ProductParameterDto](docs/Model/ProductParameterDto.md)
- [ProductParameterDtoOptions](docs/Model/ProductParameterDtoOptions.md)
- [ProductParameterOptions](docs/Model/ProductParameterOptions.md)
- [ProductParameterProposal](docs/Model/ProductParameterProposal.md)
- [ProductParameterValueProposal](docs/Model/ProductParameterValueProposal.md)
- [ProductProposalsRequest](docs/Model/ProductProposalsRequest.md)
- [ProductProposalsResponse](docs/Model/ProductProposalsResponse.md)
- [ProductProposalsResponseCategory](docs/Model/ProductProposalsResponseCategory.md)
- [ProductProposalsResponseCategoryAllOfSimilarInner](docs/Model/ProductProposalsResponseCategoryAllOfSimilarInner.md)
- [ProductProposalsResponsePublication](docs/Model/ProductProposalsResponsePublication.md)
- [ProductSafetyDto](docs/Model/ProductSafetyDto.md)
- [ProductSafetyDtoSafetyInformation](docs/Model/ProductSafetyDtoSafetyInformation.md)
- [ProductSetElement](docs/Model/ProductSetElement.md)
- [ProductSetElementAttachmentSafetyInformation](docs/Model/ProductSetElementAttachmentSafetyInformation.md)
- [ProductSetElementAttachmentSafetyInformationAllOfAttachments](docs/Model/ProductSetElementAttachmentSafetyInformationAllOfAttachments.md)
- [ProductSetElementNoSafetyInformation](docs/Model/ProductSetElementNoSafetyInformation.md)
- [ProductSetElementQuantity](docs/Model/ProductSetElementQuantity.md)
- [ProductSetElementQuantityQuantity](docs/Model/ProductSetElementQuantityQuantity.md)
- [ProductSetElementResponsiblePersonRequest](docs/Model/ProductSetElementResponsiblePersonRequest.md)
- [ProductSetElementResponsiblePersonRequestResponsiblePerson](docs/Model/ProductSetElementResponsiblePersonRequestResponsiblePerson.md)
- [ProductSetElementResponsibleProducerIdRequest](docs/Model/ProductSetElementResponsibleProducerIdRequest.md)
- [ProductSetElementResponsibleProducerNameRequest](docs/Model/ProductSetElementResponsibleProducerNameRequest.md)
- [ProductSetElementResponsibleProducerRequest](docs/Model/ProductSetElementResponsibleProducerRequest.md)
- [ProductSetElementResponsibleProducerRequestWrapper](docs/Model/ProductSetElementResponsibleProducerRequestWrapper.md)
- [ProductSetElementSafetyInformation](docs/Model/ProductSetElementSafetyInformation.md)
- [ProductSetElementSafetyInformationWrapper](docs/Model/ProductSetElementSafetyInformationWrapper.md)
- [ProductSetElementTextSafetyInformation](docs/Model/ProductSetElementTextSafetyInformation.md)
- [ProductSimilarCategoryWithPath](docs/Model/ProductSimilarCategoryWithPath.md)
- [ProductsCategoryPath](docs/Model/ProductsCategoryPath.md)
- [ProductsCategorySubcategories](docs/Model/ProductsCategorySubcategories.md)
- [PromoGeneralReport](docs/Model/PromoGeneralReport.md)
- [PromoModificationReport](docs/Model/PromoModificationReport.md)
- [PromoModificationTask](docs/Model/PromoModificationTask.md)
- [PromoOptionsCommand](docs/Model/PromoOptionsCommand.md)
- [PromoOptionsCommandModification](docs/Model/PromoOptionsCommandModification.md)
- [PromoOptionsCommandModificationPackage](docs/Model/PromoOptionsCommandModificationPackage.md)
- [PromoOptionsModification](docs/Model/PromoOptionsModification.md)
- [PromoOptionsModifications](docs/Model/PromoOptionsModifications.md)
- [Promotion](docs/Model/Promotion.md)
- [PromotionCampaignResponseDto](docs/Model/PromotionCampaignResponseDto.md)
- [PromotionCampaignsResponseDto](docs/Model/PromotionCampaignsResponseDto.md)
- [PromotionRequestDto](docs/Model/PromotionRequestDto.md)
- [PromotionResponseDto](docs/Model/PromotionResponseDto.md)
- [PublicOfferPreviewRequest](docs/Model/PublicOfferPreviewRequest.md)
- [PublicTableDto](docs/Model/PublicTableDto.md)
- [PublicTablesDto](docs/Model/PublicTablesDto.md)
- [Publication](docs/Model/Publication.md)
- [PublicationChangeCommandDto](docs/Model/PublicationChangeCommandDto.md)
- [PublicationModification](docs/Model/PublicationModification.md)
- [PublicationRequest](docs/Model/PublicationRequest.md)
- [PublicationTimePolicy](docs/Model/PublicationTimePolicy.md)
- [QuantityModification](docs/Model/QuantityModification.md)
- [QuoteResponse](docs/Model/QuoteResponse.md)
- [Rates](docs/Model/Rates.md)
- [Receiver](docs/Model/Receiver.md)
- [ReceiverAddressDto](docs/Model/ReceiverAddressDto.md)
- [ReceivingEntry](docs/Model/ReceivingEntry.md)
- [ReceivingState](docs/Model/ReceivingState.md)
- [ReceivingStatus](docs/Model/ReceivingStatus.md)
- [Recipient](docs/Model/Recipient.md)
- [Reference](docs/Model/Reference.md)
- [RefundAdditionalServicesValue](docs/Model/RefundAdditionalServicesValue.md)
- [RefundCancelOperation](docs/Model/RefundCancelOperation.md)
- [RefundChargeOperation](docs/Model/RefundChargeOperation.md)
- [RefundClaim](docs/Model/RefundClaim.md)
- [RefundClaimBuyer](docs/Model/RefundClaimBuyer.md)
- [RefundClaimCommission](docs/Model/RefundClaimCommission.md)
- [RefundClaimLineItem](docs/Model/RefundClaimLineItem.md)
- [RefundClaimLineItemOffer](docs/Model/RefundClaimLineItemOffer.md)
- [RefundClaimRequest](docs/Model/RefundClaimRequest.md)
- [RefundClaimRequestLineItem](docs/Model/RefundClaimRequestLineItem.md)
- [RefundClaimResponse](docs/Model/RefundClaimResponse.md)
- [RefundDeliveryValue](docs/Model/RefundDeliveryValue.md)
- [RefundDetails](docs/Model/RefundDetails.md)
- [RefundIncreaseOperation](docs/Model/RefundIncreaseOperation.md)
- [RefundLineItem](docs/Model/RefundLineItem.md)
- [RefundLineItemValue](docs/Model/RefundLineItemValue.md)
- [RefundOverpaidValue](docs/Model/RefundOverpaidValue.md)
- [RefundPayment](docs/Model/RefundPayment.md)
- [RefundSurchargeValue](docs/Model/RefundSurchargeValue.md)
- [RefundTotalValue](docs/Model/RefundTotalValue.md)
- [RefusalMessage](docs/Model/RefusalMessage.md)
- [RefusalReason](docs/Model/RefusalReason.md)
- [RelatedReason](docs/Model/RelatedReason.md)
- [Removal](docs/Model/Removal.md)
- [RemovalRequest](docs/Model/RemovalRequest.md)
- [RequestParcelPickup201Response](docs/Model/RequestParcelPickup201Response.md)
- [RequirementChange](docs/Model/RequirementChange.md)
- [ReserveInfo](docs/Model/ReserveInfo.md)
- [ResponsiblePersonAddress](docs/Model/ResponsiblePersonAddress.md)
- [ResponsiblePersonContact](docs/Model/ResponsiblePersonContact.md)
- [ResponsiblePersonResponse](docs/Model/ResponsiblePersonResponse.md)
- [ResponsiblePersonResponsePersonalData](docs/Model/ResponsiblePersonResponsePersonalData.md)
- [ResponsiblePersonsGET200Response](docs/Model/ResponsiblePersonsGET200Response.md)
- [ResponsibleProducerAddress](docs/Model/ResponsibleProducerAddress.md)
- [ResponsibleProducerContact](docs/Model/ResponsibleProducerContact.md)
- [ResponsibleProducerResponse](docs/Model/ResponsibleProducerResponse.md)
- [ResponsibleProducerResponseProducerData](docs/Model/ResponsibleProducerResponseProducerData.md)
- [ResponsibleProducersGET200Response](docs/Model/ResponsibleProducersGET200Response.md)
- [RestrictionCause](docs/Model/RestrictionCause.md)
- [ReturnPoliciesListReturnPolicyBasic](docs/Model/ReturnPoliciesListReturnPolicyBasic.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnPolicyAddress](docs/Model/ReturnPolicyAddress.md)
- [ReturnPolicyAvailability](docs/Model/ReturnPolicyAvailability.md)
- [ReturnPolicyBasic](docs/Model/ReturnPolicyBasic.md)
- [ReturnPolicyContact](docs/Model/ReturnPolicyContact.md)
- [ReturnPolicyOptions](docs/Model/ReturnPolicyOptions.md)
- [ReturnPolicyRequest](docs/Model/ReturnPolicyRequest.md)
- [ReturnPolicyResponse](docs/Model/ReturnPolicyResponse.md)
- [ReturnPolicyReturnCost](docs/Model/ReturnPolicyReturnCost.md)
- [SaleProductCompatibilityList](docs/Model/SaleProductCompatibilityList.md)
- [SaleProductDto](docs/Model/SaleProductDto.md)
- [SaleProductDtoPublication](docs/Model/SaleProductDtoPublication.md)
- [SaleProductOffer](docs/Model/SaleProductOffer.md)
- [SaleProductOfferPatchRequestV1](docs/Model/SaleProductOfferPatchRequestV1.md)
- [SaleProductOfferPatchRequestV1AllOfDelivery](docs/Model/SaleProductOfferPatchRequestV1AllOfDelivery.md)
- [SaleProductOfferPatchRequestV1AllOfProductSet](docs/Model/SaleProductOfferPatchRequestV1AllOfProductSet.md)
- [SaleProductOfferPublicationMarketplacesResponse](docs/Model/SaleProductOfferPublicationMarketplacesResponse.md)
- [SaleProductOfferPublicationRequest](docs/Model/SaleProductOfferPublicationRequest.md)
- [SaleProductOfferPublicationResponse](docs/Model/SaleProductOfferPublicationResponse.md)
- [SaleProductOfferRequestBase](docs/Model/SaleProductOfferRequestBase.md)
- [SaleProductOfferRequestBaseAllOfContact](docs/Model/SaleProductOfferRequestBaseAllOfContact.md)
- [SaleProductOfferRequestBaseAllOfDelivery](docs/Model/SaleProductOfferRequestBaseAllOfDelivery.md)
- [SaleProductOfferRequestBaseAllOfPublication](docs/Model/SaleProductOfferRequestBaseAllOfPublication.md)
- [SaleProductOfferRequestBaseAllOfSizeTable](docs/Model/SaleProductOfferRequestBaseAllOfSizeTable.md)
- [SaleProductOfferRequestV1](docs/Model/SaleProductOfferRequestV1.md)
- [SaleProductOfferRequestV1AllOfDelivery](docs/Model/SaleProductOfferRequestV1AllOfDelivery.md)
- [SaleProductOfferRequestV1AllOfProductSet](docs/Model/SaleProductOfferRequestV1AllOfProductSet.md)
- [SaleProductOfferResponseV1](docs/Model/SaleProductOfferResponseV1.md)
- [SaleProductOfferResponseV1AllOfProductSet](docs/Model/SaleProductOfferResponseV1AllOfProductSet.md)
- [SaleProductOfferResponseV1AllOfProductSetAllOfProduct](docs/Model/SaleProductOfferResponseV1AllOfProductSetAllOfProduct.md)
- [SaleProductOfferResponseV1AllOfProductSetAllOfResponsiblePerson](docs/Model/SaleProductOfferResponseV1AllOfProductSetAllOfResponsiblePerson.md)
- [SaleProductOfferResponseV1AllOfProductSetAllOfResponsibleProducer](docs/Model/SaleProductOfferResponseV1AllOfProductSetAllOfResponsibleProducer.md)
- [SaleProductOfferResponseV1AllOfWarnings](docs/Model/SaleProductOfferResponseV1AllOfWarnings.md)
- [SaleProductOfferStatusResponse](docs/Model/SaleProductOfferStatusResponse.md)
- [SaleProductOfferStatusResponseOperation](docs/Model/SaleProductOfferStatusResponseOperation.md)
- [SaleProductOffersRequestStock](docs/Model/SaleProductOffersRequestStock.md)
- [SaleProductResponseCategoriesDto](docs/Model/SaleProductResponseCategoriesDto.md)
- [SalesQualityForDay](docs/Model/SalesQualityForDay.md)
- [SalesQualityHistoryResponse](docs/Model/SalesQualityHistoryResponse.md)
- [SalesQualityMetric](docs/Model/SalesQualityMetric.md)
- [SearchResult](docs/Model/SearchResult.md)
- [Seller](docs/Model/Seller.md)
- [SellerCreateRebateRequestDto](docs/Model/SellerCreateRebateRequestDto.md)
- [SellerOfferBaseEvent](docs/Model/SellerOfferBaseEvent.md)
- [SellerOfferEventsResponse](docs/Model/SellerOfferEventsResponse.md)
- [SellerOfferStatsResponseDto](docs/Model/SellerOfferStatsResponseDto.md)
- [SellerParticipant](docs/Model/SellerParticipant.md)
- [SellerRebateDto](docs/Model/SellerRebateDto.md)
- [SellerRebateOfferCriterion](docs/Model/SellerRebateOfferCriterion.md)
- [SellerRebateOfferCriterionOffersInner](docs/Model/SellerRebateOfferCriterionOffersInner.md)
- [SellerRebatesDto](docs/Model/SellerRebatesDto.md)
- [SellerReference](docs/Model/SellerReference.md)
- [SellingMode](docs/Model/SellingMode.md)
- [SellingModeFormat](docs/Model/SellingModeFormat.md)
- [SellingModeWithNetPrice](docs/Model/SellingModeWithNetPrice.md)
- [Sender](docs/Model/Sender.md)
- [SenderAddressDto](docs/Model/SenderAddressDto.md)
- [ShipmentCancelCommandDto](docs/Model/ShipmentCancelCommandDto.md)
- [ShipmentCancelRequestDto](docs/Model/ShipmentCancelRequestDto.md)
- [ShipmentCreateCommandDto](docs/Model/ShipmentCreateCommandDto.md)
- [ShipmentCreateRequestDto](docs/Model/ShipmentCreateRequestDto.md)
- [ShipmentDto](docs/Model/ShipmentDto.md)
- [ShipmentIdsDto](docs/Model/ShipmentIdsDto.md)
- [Shipping](docs/Model/Shipping.md)
- [ShippingRate](docs/Model/ShippingRate.md)
- [ShippingRateDeliveryMethod](docs/Model/ShippingRateDeliveryMethod.md)
- [ShippingRateFirstItemRate](docs/Model/ShippingRateFirstItemRate.md)
- [ShippingRateMaxPackageWeight](docs/Model/ShippingRateMaxPackageWeight.md)
- [ShippingRateNextItemRate](docs/Model/ShippingRateNextItemRate.md)
- [ShippingRateShippingTime](docs/Model/ShippingRateShippingTime.md)
- [ShippingRates](docs/Model/ShippingRates.md)
- [ShippingRatesSet](docs/Model/ShippingRatesSet.md)
- [SinglePromotionCampaignResponseDto](docs/Model/SinglePromotionCampaignResponseDto.md)
- [SizeTable](docs/Model/SizeTable.md)
- [SizeTablePostRequest](docs/Model/SizeTablePostRequest.md)
- [SizeTablePutRequest](docs/Model/SizeTablePutRequest.md)
- [SizeTableTemplateImageResponse](docs/Model/SizeTableTemplateImageResponse.md)
- [SizeTableTemplateResponse](docs/Model/SizeTableTemplateResponse.md)
- [SizeTableTemplatesResponse](docs/Model/SizeTableTemplatesResponse.md)
- [SmartDeliveryMethod](docs/Model/SmartDeliveryMethod.md)
- [SmartOfferClassificationReport](docs/Model/SmartOfferClassificationReport.md)
- [SmartOfferClassificationReportClassification](docs/Model/SmartOfferClassificationReportClassification.md)
- [SmartOfferClassificationReportConditionsInner](docs/Model/SmartOfferClassificationReportConditionsInner.md)
- [SmartSellerClassificationReport](docs/Model/SmartSellerClassificationReport.md)
- [SmartSellerClassificationReportClassification](docs/Model/SmartSellerClassificationReportClassification.md)
- [SmartSellerClassificationReportConditionsInner](docs/Model/SmartSellerClassificationReportConditionsInner.md)
- [StandardizedDescription](docs/Model/StandardizedDescription.md)
- [StartingPrice](docs/Model/StartingPrice.md)
- [Stock](docs/Model/Stock.md)
- [StockProduct](docs/Model/StockProduct.md)
- [StockProductItem](docs/Model/StockProductItem.md)
- [StockProductList](docs/Model/StockProductList.md)
- [StockQuantity](docs/Model/StockQuantity.md)
- [StockSellingStats](docs/Model/StockSellingStats.md)
- [StockStorageFee](docs/Model/StockStorageFee.md)
- [StockStorageFeeDetails](docs/Model/StockStorageFeeDetails.md)
- [StringCategoryParameter](docs/Model/StringCategoryParameter.md)
- [StringCategoryProductParameter](docs/Model/StringCategoryProductParameter.md)
- [StringCategoryProductParameterAllOfRestrictions](docs/Model/StringCategoryProductParameterAllOfRestrictions.md)
- [Subject](docs/Model/Subject.md)
- [SubmitCommand](docs/Model/SubmitCommand.md)
- [SubmitCommandInput](docs/Model/SubmitCommandInput.md)
- [SubmitCommandOutput](docs/Model/SubmitCommandOutput.md)
- [SubmitFailedCommandOutput](docs/Model/SubmitFailedCommandOutput.md)
- [SubmitRunningCommandOutput](docs/Model/SubmitRunningCommandOutput.md)
- [SubmitSuccessfulCommandOutput](docs/Model/SubmitSuccessfulCommandOutput.md)
- [SupplierDto](docs/Model/SupplierDto.md)
- [Surcharge](docs/Model/Surcharge.md)
- [SurchargeOperation](docs/Model/SurchargeOperation.md)
- [TagId](docs/Model/TagId.md)
- [TagIdsRequest](docs/Model/TagIdsRequest.md)
- [TagListResponse](docs/Model/TagListResponse.md)
- [TagRequest](docs/Model/TagRequest.md)
- [TagResponse](docs/Model/TagResponse.md)
- [TaskCount](docs/Model/TaskCount.md)
- [TaskReport](docs/Model/TaskReport.md)
- [Tax](docs/Model/Tax.md)
- [TaxExemption](docs/Model/TaxExemption.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxRateValue](docs/Model/TaxRateValue.md)
- [TaxSubject](docs/Model/TaxSubject.md)
- [TecdocSpecification](docs/Model/TecdocSpecification.md)
- [TecdocSpecificationItem](docs/Model/TecdocSpecificationItem.md)
- [ThirdParty](docs/Model/ThirdParty.md)
- [ThirdPartyDeliveryShipping](docs/Model/ThirdPartyDeliveryShipping.md)
- [Thread](docs/Model/Thread.md)
- [ThreadId](docs/Model/ThreadId.md)
- [ThreadReadFlag](docs/Model/ThreadReadFlag.md)
- [ThreadsList](docs/Model/ThreadsList.md)
- [UnfilledParametersResponse](docs/Model/UnfilledParametersResponse.md)
- [UnfilledParametersResponseOffersInner](docs/Model/UnfilledParametersResponseOffersInner.md)
- [UnfilledParametersResponseOffersInnerCategory](docs/Model/UnfilledParametersResponseOffersInnerCategory.md)
- [UnfilledParametersResponseOffersInnerParametersInner](docs/Model/UnfilledParametersResponseOffersInnerParametersInner.md)
- [UpdateOfferBundleDiscountDTO](docs/Model/UpdateOfferBundleDiscountDTO.md)
- [UpdateResponsiblePersonRequest](docs/Model/UpdateResponsiblePersonRequest.md)
- [UpdateResponsibleProducerRequest](docs/Model/UpdateResponsibleProducerRequest.md)
- [UpdateSubmittedAdvanceShipNoticeRequest](docs/Model/UpdateSubmittedAdvanceShipNoticeRequest.md)
- [UpdateSubmittedHandlingUnitInput](docs/Model/UpdateSubmittedHandlingUnitInput.md)
- [UpdateSubmittedShippingInput](docs/Model/UpdateSubmittedShippingInput.md)
- [User](docs/Model/User.md)
- [UserCampaignEligibility](docs/Model/UserCampaignEligibility.md)
- [UserRating](docs/Model/UserRating.md)
- [UserRatingAnswerRequest](docs/Model/UserRatingAnswerRequest.md)
- [UserRatingListResponse](docs/Model/UserRatingListResponse.md)
- [UserRatingRemovalRequest](docs/Model/UserRatingRemovalRequest.md)
- [UserRatingRemovalRequestRequest](docs/Model/UserRatingRemovalRequestRequest.md)
- [UserRatingSummaryResponse](docs/Model/UserRatingSummaryResponse.md)
- [UserRatingSummaryResponseNotRecommended](docs/Model/UserRatingSummaryResponseNotRecommended.md)
- [UserRatingSummaryResponseRecommended](docs/Model/UserRatingSummaryResponseRecommended.md)
- [Validation](docs/Model/Validation.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationWarning](docs/Model/ValidationWarning.md)
- [VariantSet](docs/Model/VariantSet.md)
- [VariantSetOffer](docs/Model/VariantSetOffer.md)
- [VariantSetParameter](docs/Model/VariantSetParameter.md)
- [VariantSetResponse](docs/Model/VariantSetResponse.md)
- [VariantSets](docs/Model/VariantSets.md)
- [VariantSetsVariantSet](docs/Model/VariantSetsVariantSet.md)
- [VisibilityTimePolicy](docs/Model/VisibilityTimePolicy.md)
- [Wallet](docs/Model/Wallet.md)
- [WalletBalance](docs/Model/WalletBalance.md)
- [WarrantiesListWarrantyBasic](docs/Model/WarrantiesListWarrantyBasic.md)
- [Warranty](docs/Model/Warranty.md)
- [WarrantyAttachment](docs/Model/WarrantyAttachment.md)
- [WarrantyBasic](docs/Model/WarrantyBasic.md)
- [WarrantyPeriod](docs/Model/WarrantyPeriod.md)
- [WarrantyRequest](docs/Model/WarrantyRequest.md)
- [WarrantyResponse](docs/Model/WarrantyResponse.md)
- [WarrantyType](docs/Model/WarrantyType.md)
- [WeightValue](docs/Model/WeightValue.md)
- [WholesalePriceListBenefitSpecification](docs/Model/WholesalePriceListBenefitSpecification.md)
- [WholesalePriceListBenefitSpecificationAllOfQuantity](docs/Model/WholesalePriceListBenefitSpecificationAllOfQuantity.md)
- [WholesalePriceListBenefitSpecificationAllOfThresholds](docs/Model/WholesalePriceListBenefitSpecificationAllOfThresholds.md)
- [WrapperTypeForPreviewConditions](docs/Model/WrapperTypeForPreviewConditions.md)
- [WrapsListingAndCommissionsFees](docs/Model/WrapsListingAndCommissionsFees.md)

## Authorization

Authentication schemes defined for the API:
### bearer-token-for-user

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://allegro.pl/auth/oauth/authorize`
- **Scopes**: N/A

### bearer-token-for-application

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `latest`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
