<?php
class AdminLoginGeneratedMethods extends \Magento\Xxyyzz\Page\AbstractAdminPage
{
	public function clickOnLogoLink() {
		$I = $this->acceptanceTester;
	}

	public function clickOnLogoImage() {
		$I = $this->acceptanceTester;
		$I->click('.logo-img');
		$I->waitForPageLoad();
	}

	public function clickOnTitle() {
		$I = $this->acceptanceTester;
		$I->click('.admin__legend');
	}

	public function clickOnUserNameTitle() {
		$I = $this->acceptanceTester;
		$I->click('.field-username label');
	}

	public function clickOnUserName() {
		$I = $this->acceptanceTester;
		$I->click('#username');
	}

	public function clickOnPasswordTitle() {
		$I = $this->acceptanceTester;
		$I->click('.field-password label');
	}

	public function clickOnPasswordField() {
		$I = $this->acceptanceTester;
		$I->click('#login');
	}

	public function clickOnForgotYourPassword() {
		$I = $this->acceptanceTester;
		$I->click('.action-forgotpassword');
		$I->waitForPageLoad();
	}

	public function clickOnSignIn() {
		$I = $this->acceptanceTester;
		$I->click('.actions .action-primary');
		$I->waitForPageLoad();
	}

	public function clickOnCopyRight() {
		$I = $this->acceptanceTester;
		$I->click('.login-footer');
	}

	public function clickOnSelectCustomerBackButton() {
		$I = $this->acceptanceTester;
		$I->click('#back_order_top_button');
		$I->waitForPageLoad();
	}

	public function clickOnSelectStoreCancelButton() {
		$I = $this->acceptanceTester;
		$I->click('#reset_order_top_button');
		$I->waitForPageLoad();
	}

	public function clickOnBottomSubmitOrderButton() {
		$I = $this->acceptanceTester;
		$I->click('#submit_order_top_button');
		$I->waitForPageLoad();
	}

	public function clickOnSendEmailButton() {
		$I = $this->acceptanceTester;
		$I->click('#send_notification');
		$I->waitForPageLoad();
	}

	public function clickOnCreditMemoButton() {
		$I = $this->acceptanceTester;
		$I->click('#order_creditmemo');
		$I->waitForPageLoad();
	}

	public function clickOnOrderDetailsHoldButton() {
		$I = $this->acceptanceTester;
		$I->click('#order-view-hold-button');
		$I->waitForPageLoad();
	}

	public function clickOnOrderDetailsShipButton() {
		$I = $this->acceptanceTester;
		$I->click('#order_ship');
		$I->waitForPageLoad();
	}

	public function clickOnOrderDetailsReorderButton() {
		$I = $this->acceptanceTester;
		$I->click('#order_reorder');
		$I->waitForPageLoad();
	}

	public function clickOnSelectCustomerCreateNewCustomerButton() {
		$I = $this->acceptanceTester;
		$I->click('button[title="Create New Customer"]');
	}

	public function clickOnSelectCustomerSearchButton() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid button[title="Search"]');
	}

	public function clickOnSelectCustomerResetFilterButton() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid button[title="Reset Filter"]');
	}

	public function clickOnSelectCustomerIdSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_entity_id');
	}

	public function clickOnSelectCustomerNameSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_name');
	}

	public function clickOnSelectCustomerEmailSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_email');
	}

	public function clickOnSelectCustomerPhoneSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_Telephone');
	}

	public function clickOnSelectCustomerZipPostCodeSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_billing_postcode');
	}

	public function clickOnSelectCustomerCountrySearchDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_billing_country_id');
	}

	public function clickOnSelectCustomerStateProvinceSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_billing_regione');
	}

	public function clickOnSelectCustomerSignedUpPointSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_customer_grid_filter_store_name');
	}

	public function clickOnDefaultStoreViewLink() {
		$I = $this->acceptanceTester;
		$I->click('#store_1');
	}

	public function clickOnCancelButton() {
		$I = $this->acceptanceTester;
		$I->click('#reset_order_top_button');
	}

	public function clickOnTopSubmitOrderButton() {
		$I = $this->acceptanceTester;
		$I->click('#submit_order_top_button');
	}

	public function clickOnAddProductsToOrderButton() {
		$I = $this->acceptanceTester;
		$I->click('#order-items .action-add');
	}

	public function clickOnAddSelectedProductToOrderButton() {
		$I = $this->acceptanceTester;
		$I->click('#order-search .action-add');
	}

	public function clickOnProductsSearchButton() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid button[title="Search"]');
	}

	public function clickOnProductsResetFilterButton() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid button[title="Reset Filter"]');
	}

	public function clickOnUpdateItemsAndQuantitiesButton() {
		$I = $this->acceptanceTester;
		$I->click('button[title="Update Items and Quantities"]');
	}

	public function clickOnProductIdSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid_filter_entity_id');
	}

	public function clickOnProductNameSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid_filter_name');
	}

	public function clickOnProductSkuSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid_filter_sku');
	}

	public function clickOnProductPriceFromSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid_filter_price_from');
	}

	public function clickOnProductPriceToSearchField() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid_filter_price_to');
	}

	public function clickOnProductSelectSearchDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#sales_order_create_search_grid_filter_in_products');
	}

	public function clickOnApplyCouponCodeField() {
		$I = $this->acceptanceTester;
		$I->click('input[name="coupon_code"]');
	}

	public function clickOnApplyCouponCodeButton() {
		$I = $this->acceptanceTester;
		$I->click('#order-coupons button[title="Apply"]');
	}

	public function clickOnGroupDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#group_id');
	}

	public function clickOnEmailAddressField() {
		$I = $this->acceptanceTester;
		$I->click('#email');
	}

	public function clickOnSavedBillAddressesDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_customer_address_id');
	}

	public function clickOnBillingPrefixField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_prefix');
	}

	public function clickOnBillingFirstNameField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_firstname');
	}

	public function clickOnBillingMiddleNameField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_middlename');
	}

	public function clickOnBillingLastNameField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_lastname');
	}

	public function clickOnBillingSuffixField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_suffix');
	}

	public function clickOnBillingCompanyField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_company');
	}

	public function clickOnBillingAddress1Field() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_street0');
	}

	public function clickOnBillingAddress2Field() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_street1');
	}

	public function clickOnBillingCityField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_city');
	}

	public function clickOnBillingCountryDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_country_id');
	}

	public function clickOnBillingStateDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_region_id');
	}

	public function clickOnBillingProvinceField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_region');
	}

	public function clickOnBillingZipPostalCodeField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_postcode');
	}

	public function clickOnBillingPhoneNumberField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_telephone');
	}

	public function clickOnBillingFaxNumberField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_fax');
	}

	public function clickOnBillingVatNumberField() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_vat_id');
	}

	public function clickOnBillingValidateVatNumberLink() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address button[title="Validate VAT Number"]]');
	}

	public function clickOnBillingSaveInAddressBook() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_address_save_in_address_book');
	}

	public function clickOnSameAsBillingAddressCheckbox() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_same_as_billing');
	}

	public function clickOnSavedShippingAddressesDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_customer_address_id');
	}

	public function clickOnShippingPrefixField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_prefix');
	}

	public function clickOnShippingFirstNameField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_firstname');
	}

	public function clickOnShippingMiddleNameField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_middlename');
	}

	public function clickOnShippingLastNameField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_lastname');
	}

	public function clickOnShippingSuffixField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_suffix');
	}

	public function clickOnShippingCompanyField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_company');
	}

	public function clickOnShippingAddress1Field() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_street0');
	}

	public function clickOnShippingAddress2Field() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_street1');
	}

	public function clickOnShippingCityField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_city');
	}

	public function clickOnShippingCountryDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_country_id');
	}

	public function clickOnShippingStateDropDown() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_region_id');
	}

	public function clickOnShippingProvinceField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_region');
	}

	public function clickOnShippingZipPostalCodeField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_postcode');
	}

	public function clickOnShippingPhoneNumberField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_telephone');
	}

	public function clickOnShippingFaxNumberField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_fax');
	}

	public function clickOnShippingVatNumberField() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_vat_id');
	}

	public function clickOnShippingValidateVatNumberLink() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address button[title="Validate VAT Number"]');
	}

	public function clickOnShippingSaveInAddressBookCheckbox() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_address_save_in_address_book');
	}

	public function clickOnPaymentShippingInformationMainArea() {
		$I = $this->acceptanceTester;
		$I->click('#order-methods');
	}

	public function clickOnPaymentMethodMainArea() {
		$I = $this->acceptanceTester;
		$I->click('#order-billing_method');
	}

	public function clickOnNoPaymentInformationRequiredText() {
		$I = $this->acceptanceTester;
		$I->click('#admin__payment-methods label[for="p_method_free"]');
	}

	public function clickOnShippingMethodMainArea() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping_method');
	}

	public function clickOnGetShippingMethodsAndRatesLink() {
		$I = $this->acceptanceTester;
		$I->click('#order-shipping-method-summary a');
	}

	public function clickOnSorryNoQuotesAreAvailableText() {
		$I = $this->acceptanceTester;
		$I->click('.order-shipping-method-not-available');
	}

}