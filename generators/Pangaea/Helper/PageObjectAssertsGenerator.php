<?php
$selectors = [
    ['logoLink' => [
        'type' => 'link',
        'selector' => '.logo',
        'wait' => 'true'
    ]],
    ['logoImage' => [
        'type' => 'image',
        'selector' => '.logo-img',
        'wait' => 'true'
    ]],
    ['title' => [
        'type' => 'title',
        'selector' => '.admin__legend',
        'wait' => 'false'
    ]],
    ['userNameTitle' => [
        'type' => 'title',
        'selector' => '.field-username label',
        'wait' => 'false'
    ]],
    ['userName' => [
        'type' => 'field',
        'selector' => '#username',
        'variable' => '$userName',
        'wait' => 'false'
    ]],
    ['passwordTitle' => [
        'type' => 'title',
        'selector' => '.field-password label',
        'wait' => 'false'
    ]],
    ['passwordField' => [
        'type' => 'field',
        'selector' => '#login',
        'variable' => '$password',
        'wait' => 'false'
    ]],
    ['forgotYourPassword' => [
        'type' => 'link',
        'selector' => '.action-forgotpassword',
        'wait' => 'true'
    ]],
    ['signIn' => [
        'type' => 'button',
        'selector' => '.actions .action-primary',
        'wait' => 'true'
    ]],
    ['copyRight' => [
        'type' => 'text',
        'selector' => '.login-footer',
        'wait' => 'false'
    ]]
];

$ordersPageSelectors = [
    ['selectCustomerBackButton' => [
        'type' => '',
        'selector' => '#back_order_top_button',
        'wait' => 'true'
    ]],
    ['selectStoreCancelButton' => [
        'type' => '',
        'selector' => '#reset_order_top_button',
        'wait' => 'true'
    ]],
    ['submitOrderButton' => [
        'type' => '',
        'selector' => '#submit_order_top_button',
        'wait' => 'true'
    ]],
    ['sendEmailButton' => [
        'type' => '',
        'selector' => '#send_notification',
        'wait' => 'true'
    ]],
    ['creditMemoButton' => [
        'type' => '',
        'selector' => '#order_creditmemo',
        'wait' => 'true'
    ]],
    ['orderDetailsHoldButton' => [
        'type' => '',
        'selector' => '#order-view-hold-button',
        'wait' => 'true'
    ]],
    ['orderDetailsShipButton' => [
        'type' => '',
        'selector' => '#order_ship',
        'wait' => 'true'
    ]],
    ['orderDetailsReorderButton' => [
        'type' => '',
        'selector' => '#order_reorder',
        'wait' => 'true'
    ]],
    ['selectCustomerCreateNewCustomerButton' => [
        'type' => '',
        'selector' => 'button[title="Create New Customer"]',
        'wait' => 'false'
    ]],
    ['selectCustomerSearchButton' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid button[title="Search"]',
        'wait' => 'false'
    ]],
    ['selectCustomerResetFilterButton' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid button[title="Reset Filter"]',
        'wait' => 'false'
    ]],
    ['selectCustomerIdSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_entity_id',
        'wait' => 'false'
    ]],
    ['selectCustomerNameSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_name',
        'wait' => 'false'
    ]],
    ['selectCustomerEmailSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_email',
        'wait' => 'false'
    ]],
    ['selectCustomerPhoneSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_Telephone',
        'wait' => 'false'
    ]],
    ['selectCustomerZipPostCodeSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_billing_postcode',
        'wait' => 'false'
    ]],
    ['selectCustomerCountrySearchDropDown' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_billing_country_id',
        'wait' => 'false'
    ]],
    ['selectCustomerStateProvinceSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_billing_regione',
        'wait' => 'false'
    ]],
    ['selectCustomerSignedUpPointSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_customer_grid_filter_store_name',
        'wait' => 'false'
    ]],
    ['defaultStoreViewLink' => [
        'type' => '',
        'selector' => '#store_1',
        'wait' => 'false'
    ]],
    ['cancelButton' => [
        'type' => '',
        'selector' => '#reset_order_top_button',
        'wait' => 'false'
    ]],
    ['submitOrderButton' => [
        'type' => '',
        'selector' => '#submit_order_top_button',
        'wait' => 'false'
    ]],
    ['addProductsToOrderButton' => [
        'type' => '',
        'selector' => '#order-items .action-add',
        'wait' => 'false'
    ]],
    ['addSelectedProductToOrderButton' => [
        'type' => '',
        'selector' => '#order-search .action-add',
        'wait' => 'false'
    ]],
    ['productsSearchButton' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid button[title="Search"]',
        'wait' => 'false'
    ]],
    ['productsResetFilterButton' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid button[title="Reset Filter"]',
        'wait' => 'false'
    ]],
    ['updateItemsAndQuantitiesButton' => [
        'type' => '',
        'selector' => 'button[title="Update Items and Quantities"]',
        'wait' => 'false'
    ]],
    ['productIdSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid_filter_entity_id',
        'wait' => 'false'
    ]],
    ['productNameSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid_filter_name',
        'wait' => 'false'
    ]],
    ['productSkuSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid_filter_sku',
        'wait' => 'false'
    ]],
    ['productPriceFromSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid_filter_price_from',
        'wait' => 'false'
    ]],
    ['productPriceToSearchField' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid_filter_price_to',
        'wait' => 'false'
    ]],
    ['productSelectSearchDropDown' => [
        'type' => '',
        'selector' => '#sales_order_create_search_grid_filter_in_products',
        'wait' => 'false'
    ]],
    ['applyCouponCodeField' => [
        'type' => '',
        'selector' => 'input[name="coupon_code"]',
        'wait' => 'false'
    ]],
    ['applyCouponCodeButton' => [
        'type' => '',
        'selector' => '#order-coupons button[title="Apply"]',
        'wait' => 'false'
    ]],
    ['groupDropDown' => [
        'type' => '',
        'selector' => '#group_id',
        'wait' => 'false'
    ]],
    ['emailAddressField' => [
        'type' => '',
        'selector' => '#email',
        'wait' => 'false'
    ]],
    ['savedBillAddressesDropDown' => [
        'type' => '',
        'selector' => '#order-billing_address_customer_address_id',
        'wait' => 'false'
    ]],
    ['billingPrefixField' => [
        'type' => '',
        'selector' => '#order-billing_address_prefix',
        'wait' => 'false'
    ]],
    ['billingFirstNameField' => [
        'type' => '',
        'selector' => '#order-billing_address_firstname',
        'wait' => 'false'
    ]],
    ['billingMiddleNameField' => [
        'type' => '',
        'selector' => '#order-billing_address_middlename',
        'wait' => 'false'
    ]],
    ['billingLastNameField' => [
        'type' => '',
        'selector' => '#order-billing_address_lastname',
        'wait' => 'false'
    ]],
    ['billingSuffixField' => [
        'type' => '',
        'selector' => '#order-billing_address_suffix',
        'wait' => 'false'
    ]],
    ['billingCompanyField' => [
        'type' => '',
        'selector' => '#order-billing_address_company',
        'wait' => 'false'
    ]],
    ['billingAddress1Field' => [
        'type' => '',
        'selector' => '#order-billing_address_street0',
        'wait' => 'false'
    ]],
    ['billingAddress2Field' => [
        'type' => '',
        'selector' => '#order-billing_address_street1',
        'wait' => 'false'
    ]],
    ['billingCityField' => [
        'type' => '',
        'selector' => '#order-billing_address_city',
        'wait' => 'false'
    ]],
    ['billingCountryDropDown' => [
        'type' => '',
        'selector' => '#order-billing_address_country_id',
        'wait' => 'false'
    ]],
    ['billingStateDropDown' => [
        'type' => '',
        'selector' => '#order-billing_address_region_id',
        'wait' => 'false'
    ]],
    ['billingProvinceField' => [
        'type' => '',
        'selector' => '#order-billing_address_region',
        'wait' => 'false'
    ]],
    ['billingZipPostalCodeField' => [
        'type' => '',
        'selector' => '#order-billing_address_postcode',
        'wait' => 'false'
    ]],
    ['billingPhoneNumberField' => [
        'type' => '',
        'selector' => '#order-billing_address_telephone',
        'wait' => 'false'
    ]],
    ['billingFaxNumberField' => [
        'type' => '',
        'selector' => '#order-billing_address_fax',
        'wait' => 'false'
    ]],
    ['billingVatNumberField' => [
        'type' => '',
        'selector' => '#order-billing_address_vat_id',
        'wait' => 'false'
    ]],
    ['billingValidateVatNumberLink' => [
        'type' => '',
        'selector' => '#order-billing_address button[title="Validate VAT Number"]]',
        'wait' => 'false'
    ]],
    ['billingSaveInAddressBook' => [
        'type' => '',
        'selector' => '#order-billing_address_save_in_address_book',
        'wait' => 'false'
    ]],
    ['sameAsBillingAddressCheckbox' => [
        'type' => '',
        'selector' => '#order-shipping_same_as_billing',
        'wait' => 'false'
    ]],
    ['savedShippingAddressesDropDown' => [
        'type' => '',
        'selector' => '#order-shipping_address_customer_address_id',
        'wait' => 'false'
    ]],
    ['shippingPrefixField' => [
        'type' => '',
        'selector' => '#order-shipping_address_prefix',
        'wait' => 'false'
    ]],
    ['shippingFirstNameField' => [
        'type' => '',
        'selector' => '#order-shipping_address_firstname',
        'wait' => 'false'
    ]],
    ['shippingMiddleNameField' => [
        'type' => '',
        'selector' => '#order-shipping_address_middlename',
        'wait' => 'false'
    ]],
    ['shippingLastNameField' => [
        'type' => '',
        'selector' => '#order-shipping_address_lastname',
        'wait' => 'false'
    ]],
    ['shippingSuffixField' => [
        'type' => '',
        'selector' => '#order-shipping_address_suffix',
        'wait' => 'false'
    ]],
    ['shippingCompanyField' => [
        'type' => '',
        'selector' => '#order-shipping_address_company',
        'wait' => 'false'
    ]],
    ['shippingAddress1Field' => [
        'type' => '',
        'selector' => '#order-shipping_address_street0',
        'wait' => 'false'
    ]],
    ['shippingAddress2Field' => [
        'type' => '',
        'selector' => '#order-shipping_address_street1',
        'wait' => 'false'
    ]],
    ['shippingCityField' => [
        'type' => '',
        'selector' => '#order-shipping_address_city',
        'wait' => 'false'
    ]],
    ['shippingCountryDropDown' => [
        'type' => '',
        'selector' => '#order-shipping_address_country_id',
        'wait' => 'false'
    ]],
    ['shippingStateDropDown' => [
        'type' => '',
        'selector' => '#order-shipping_address_region_id',
        'wait' => 'false'
    ]],
    ['shippingProvinceField' => [
        'type' => '',
        'selector' => '#order-shipping_address_region',
        'wait' => 'false'
    ]],
    ['shippingZipPostalCodeField' => [
        'type' => '',
        'selector' => '#order-shipping_address_postcode',
        'wait' => 'false'
    ]],
    ['shippingPhoneNumberField' => [
        'type' => '',
        'selector' => '#order-shipping_address_telephone',
        'wait' => 'false'
    ]],
    ['shippingFaxNumberField' => [
        'type' => '',
        'selector' => '#order-shipping_address_fax',
        'wait' => 'false'
    ]],
    ['shippingVatNumberField' => [
        'type' => '',
        'selector' => '#order-shipping_address_vat_id',
        'wait' => 'false'
    ]],
    ['shippingValidateVatNumberLink' => [
        'type' => '',
        'selector' => '#order-shipping_address button[title="Validate VAT Number"]',
        'wait' => 'false'
    ]],
    ['shippingSaveInAddressBookCheckbox' => [
        'type' => '',
        'selector' => '#order-shipping_address_save_in_address_book',
        'wait' => 'false'
    ]],
    ['paymentShippingInformationMainArea' => [
        'type' => '',
        'selector' => '#order-methods',
        'wait' => 'false'
    ]],
    ['paymentMethodMainArea' => [
        'type' => '',
        'selector' => '#order-billing_method',
        'wait' => 'false'
    ]],
    ['noPaymentInformationRequiredText' => [
        'type' => '',
        'selector' => '#admin__payment-methods label[for="p_method_free"]',
        'wait' => 'false'
    ]],
    ['shippingMethodMainArea' => [
        'type' => '',
        'selector' => '#order-shipping_method',
        'wait' => 'false'
    ]],
    ['getShippingMethodsAndRatesLink' => [
        'type' => '',
        'selector' => '#order-shipping-method-summary a',
        'wait' => 'false'
    ]],
    ['sorryNoQuotesAreAvailableText' => [
        'type' => '',
        'selector' => '.order-shipping-method-not-available',
        'wait' => 'false'
    ]]
];

function createVerifyFieldValueMethod($selectorArray)
{
    $name = key($selectorArray);

    if ($selectorArray[$name]['type'] == 'field') {
        $properName = ucwords($name);
        $selector = $selectorArray[$name]['selector'];
        $variable = $selectorArray[$name]['variable'];

        $verifyFieldMethod = sprintf("\tpublic function verify%sField(%s) {\n", $properName, $variable);
        $verifyFieldMethod .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
        $verifyFieldMethod .= sprintf("\t\t" . '$I->seeInField("%s", %s);' . "\n", $selector, $variable);
        $verifyFieldMethod .= "\t}\n\n";

        return $verifyFieldMethod;
    }
}

function createVerifySelectValueMethod($selectorArray)
{
    $name = key($selectorArray);

    if ($selectorArray[$name]['type'] == 'select') {
        $properName = ucwords($name);
        $selector = $selectorArray[$name]['selector'];
        $variable = $selectorArray[$name]['variable'];

        $verifySelectMethod = sprintf("\tpublic function verify%(%s) {\n", $properName, $variable);
        $verifySelectMethod .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
        $verifySelectMethod .= sprintf("\t\t" . '$I->seeOptionIsSelected("%s", %s);' . "\n", $selector, $variable);
        $verifySelectMethod .= "\t}\n\n";

        return $verifySelectMethod;
    }
}

function generatePageObjectMethods($pageObject, $selectors)
{
    for ($i = 0; count($selectors) > $i; $i++)
    {
        $pageObject .= createVerifyFieldValueMethod($selectors[$i]);
        $pageObject .= createVerifySelectValueMethod($selectors[$i]);
    }
}

$pageObjectName = 'AdminLogin';
$extends = '\Magento\Xxyyzz\Page\AbstractAdminPage';
$namespace = '';

$pageObject =  "<?php\n";
$pageObject .= sprintf("class %sGeneratedAsserts extends %s\n", $pageObjectName, $extends);
$pageObject .= "{\n";

generatePageObjectMethods($pageObject, $selectors);
generatePageObjectMethods($pageObject, $ordersPageSelectors);

$pageObject .= "}";

// Create the PageObject Asserts File.
$myFile = sprintf("%sGeneratedAsserts.php", $pageObjectName);
$file = fopen($myFile, 'w') or die('Unable to open file!');
fwrite($file, $pageObject);
fclose($file);