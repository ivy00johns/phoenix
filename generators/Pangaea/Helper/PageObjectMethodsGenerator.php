<?php
$selectors = [
    ['logoLink' => [
        'type' => 'link',
        'selector' => '.logo',
        'wait' => 'true',
        'override' => 'true'
    ]],
    ['logoImage' => [
        'type' => 'image',
        'selector' => '.logo-img',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['title' => [
        'type' => 'title',
        'selector' => '.admin__legend',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['userNameTitle' => [
        'type' => 'title',
        'selector' => '.field-username label',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['userName' => [
        'type' => 'field',
        'selector' => '#username',
        'variable' => '$username',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['passwordTitle' => [
        'type' => 'title',
        'selector' => '.field-password label',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['passwordField' => [
        'type' => 'field',
        'selector' => '#login',
        'variable' => '$password',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['forgotYourPassword' => [
        'type' => 'link',
        'selector' => '.action-forgotpassword',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['signIn' => [
        'type' => 'button',
        'selector' => '.actions .action-primary',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['copyRight' => [
        'type' => 'text',
        'selector' => '.login-footer',
        'wait' => 'false',
        'override' => 'false'
    ]]
];

$ordersPageSelectors = [
    ['selectCustomerBackButton' => [
        'type' => 'button',
        'selector' => '#back_order_top_button',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['selectStoreCancelButton' => [
        'type' => 'button',
        'selector' => '#reset_order_top_button',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['bottomSubmitOrderButton' => [
        'type' => 'button',
        'selector' => '#submit_order_top_button',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['sendEmailButton' => [
        'type' => 'button',
        'selector' => '#send_notification',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['creditMemoButton' => [
        'type' => 'button',
        'selector' => '#order_creditmemo',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['orderDetailsHoldButton' => [
        'type' => 'button',
        'selector' => '#order-view-hold-button',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['orderDetailsShipButton' => [
        'type' => 'button',
        'selector' => '#order_ship',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['orderDetailsReorderButton' => [
        'type' => 'button',
        'selector' => '#order_reorder',
        'wait' => 'true',
        'override' => 'false'
    ]],
    ['selectCustomerCreateNewCustomerButton' => [
        'type' => 'button',
        'selector' => 'button[title="Create New Customer"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['selectCustomerSearchButton' => [
        'type' => 'button',
        'selector' => '#sales_order_create_customer_grid button[title="Search"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['selectCustomerResetFilterButton' => [
        'type' => 'button',
        'selector' => '#sales_order_create_customer_grid button[title="Reset Filter"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['selectCustomerIdSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_entity_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerNameSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_name',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerEmailSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_email',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerPhoneSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_Telephone',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerZipPostCodeSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_billing_postcode',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerCountrySearchDropDown' => [
        'type' => 'dropDown',
        'selector' => '#sales_order_create_customer_grid_filter_billing_country_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerStateProvinceSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_billing_regione',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['selectCustomerSignedUpPointSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_customer_grid_filter_store_name',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['defaultStoreViewLink' => [
        'type' => 'link',
        'selector' => '#store_1',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['cancelButton' => [
        'type' => 'button',
        'selector' => '#reset_order_top_button',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['topSubmitOrderButton' => [
        'type' => 'button',
        'selector' => '#submit_order_top_button',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['addProductsToOrderButton' => [
        'type' => 'button',
        'selector' => '#order-items .action-add',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['addSelectedProductToOrderButton' => [
        'type' => 'button',
        'selector' => '#order-search .action-add',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['productsSearchButton' => [
        'type' => 'button',
        'selector' => '#sales_order_create_search_grid button[title="Search"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['productsResetFilterButton' => [
        'type' => 'button',
        'selector' => '#sales_order_create_search_grid button[title="Reset Filter"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['updateItemsAndQuantitiesButton' => [
        'type' => 'button',
        'selector' => 'button[title="Update Items and Quantities"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['productIdSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_search_grid_filter_entity_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['productNameSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_search_grid_filter_name',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['productSkuSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_search_grid_filter_sku',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['productPriceFromSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_search_grid_filter_price_from',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['productPriceToSearchField' => [
        'type' => 'field',
        'selector' => '#sales_order_create_search_grid_filter_price_to',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['productSelectSearchDropDown' => [
        'type' => 'dropDown',
        'selector' => '#sales_order_create_search_grid_filter_in_products',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['applyCouponCodeField' => [
        'type' => 'field',
        'selector' => 'input[name="coupon_code"]',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['applyCouponCodeButton' => [
        'type' => 'button',
        'selector' => '#order-coupons button[title="Apply"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['groupDropDown' => [
        'type' => 'dropDown',
        'selector' => '#group_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['emailAddressField' => [
        'type' => 'field',
        'selector' => '#email',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['savedBillAddressesDropDown' => [
        'type' => 'dropDown',
        'selector' => '#order-billing_address_customer_address_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingPrefixField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_prefix',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingFirstNameField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_firstname',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingMiddleNameField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_middlename',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingLastNameField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_lastname',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingSuffixField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_suffix',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingCompanyField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_company',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingAddress1Field' => [
        'type' => 'field',
        'selector' => '#order-billing_address_street0',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingAddress2Field' => [
        'type' => 'field',
        'selector' => '#order-billing_address_street1',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingCityField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_city',
        'wait' => 'false',
        'variable' => '$value'
    ]],
    ['billingCountryDropDown' => [
        'type' => 'dropDown',
        'selector' => '#order-billing_address_country_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingStateDropDown' => [
        'type' => 'dropDown',
        'selector' => '#order-billing_address_region_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingProvinceField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_region',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingZipPostalCodeField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_postcode',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingPhoneNumberField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_telephone',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingFaxNumberField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_fax',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingVatNumberField' => [
        'type' => 'field',
        'selector' => '#order-billing_address_vat_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['billingValidateVatNumberLink' => [
        'type' => 'link',
        'selector' => '#order-billing_address button[title="Validate VAT Number"]]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['billingSaveInAddressBook' => [
        'type' => 'checkbox',
        'selector' => '#order-billing_address_save_in_address_book',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['sameAsBillingAddressCheckbox' => [
        'type' => 'checkbox',
        'selector' => '#order-shipping_same_as_billing',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['savedShippingAddressesDropDown' => [
        'type' => 'dropDown',
        'selector' => '#order-shipping_address_customer_address_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingPrefixField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_prefix',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingFirstNameField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_firstname',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingMiddleNameField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_middlename',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingLastNameField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_lastname',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingSuffixField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_suffix',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingCompanyField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_company',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingAddress1Field' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_street0',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingAddress2Field' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_street1',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingCityField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_city',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingCountryDropDown' => [
        'type' => 'dropDown',
        'selector' => '#order-shipping_address_country_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingStateDropDown' => [
        'type' => 'dropDown',
        'selector' => '#order-shipping_address_region_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingProvinceField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_region',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingZipPostalCodeField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_postcode',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingPhoneNumberField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_telephone',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingFaxNumberField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_fax',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingVatNumberField' => [
        'type' => 'field',
        'selector' => '#order-shipping_address_vat_id',
        'wait' => 'false',
        'variable' => '$value',
        'override' => 'false'
    ]],
    ['shippingValidateVatNumberLink' => [
        'type' => 'link',
        'selector' => '#order-shipping_address button[title="Validate VAT Number"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['shippingSaveInAddressBookCheckbox' => [
        'type' => 'checkbox',
        'selector' => '#order-shipping_address_save_in_address_book',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['paymentShippingInformationMainArea' => [
        'type' => 'mainArea',
        'selector' => '#order-methods',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['paymentMethodMainArea' => [
        'type' => 'mainArea',
        'selector' => '#order-billing_method',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['noPaymentInformationRequiredText' => [
        'type' => 'text',
        'selector' => '#admin__payment-methods label[for="p_method_free"]',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['shippingMethodMainArea' => [
        'type' => 'mainArea',
        'selector' => '#order-shipping_method',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['getShippingMethodsAndRatesLink' => [
        'type' => 'link',
        'selector' => '#order-shipping-method-summary a',
        'wait' => 'false',
        'override' => 'false'
    ]],
    ['sorryNoQuotesAreAvailableText' => [
        'type' => 'text',
        'selector' => '.order-shipping-method-not-available',
        'wait' => 'false',
        'override' => 'false'
    ]]
];

function createMethods($selectorArray)
{
    $name       = key($selectorArray);
    $properName = ucwords($name);
    $type       = $selectorArray[$name]['type'];
    $selector   = $selectorArray[$name]['selector'];
    $variable   = '';
    $method     = '';
    $wait       = '';
    $override   = '';


    if (isset($selectorArray[$name]['variable']))
    {
        $variable = $selectorArray[$name]['variable'];
    }

    if (isset($selectorArray[$name]['wait']))
    {
        $wait = $selectorArray[$name]['wait'];
    }

    if (isset($selectorArray[$name]['override']))
    {
        $override = $selectorArray[$name]['override'];
    }


    if ($type == ('link' || 'button'))
    {
        $method = sprintf("\tpublic function clickOn%s() {\n", $properName);
        $method .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
    } else if ($type == 'field')
    {
        $method = sprintf("\tpublic function enter%s(%s) {\n", $properName, $variable);
        $method .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
    } else if ($type == 'dropDown')
    {
        $method = sprintf("\tpublic function select%s(%s) {\n", $properName, $variable);
        $method .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
    }


    if ($type == ('link' || 'button') && $override !== 'true')
    {
        $method .= sprintf("\t\t" . '$I->click(\'%s\');' . "\n", $selector);
    } else if ($type == 'field' && $override !== 'true')
    {
        $method .= sprintf("\t\t" . '$I->fillField(\'%s\', %s);' . "\n", $selector, $variable);
    } else if ($type == 'dropDown' && $override !== 'true')
    {
        $method .= sprintf("\t\t" . '$I->selectOption(\'%s\', %s);' . "\n", $selector, $variable);
    }


    if ($wait == 'true' && $type !== '' && $override !== 'true')
    {
        $method .= "\t\t" . '$I->waitForPageLoad();' . "\n";
    }


    if ($type !== '') {
        $method .= "\t}\n\n";
    }


    return $method;
}

function createClickMethod($selectorArray)
{
    $name = key($selectorArray);

    if ($selectorArray[$name]['type'] == ('link' || 'button' || 'dropDown')) {
        $properName = ucwords($name);
        $selector = $selectorArray[$name]['selector'];

        $clickMethod = sprintf("\tpublic function clickOn%s() {\n", $properName);
        $clickMethod .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
        $clickMethod .= sprintf("\t\t" . '$I->click(\'%s\');' . "\n", $selector);

        if ($selectorArray[$name]['wait'] == 'true')
        {
            $clickMethod .= "\t\t" . '$I->waitForPageLoad();' . "\n";
        }

        $clickMethod .= "\t}\n\n";

        return $clickMethod;
    }
}

function createEnterFieldMethod($selectorArray)
{
    $name = key($selectorArray);

    if ($selectorArray[$name]['type'] == 'field') {
        $properName = ucwords($name);
        $selector = $selectorArray[$name]['selector'];
        $variable = $selectorArray[$name]['variable'];

        $enterFieldMethod = sprintf("\tpublic function enter%s(%s) {\n", $properName, $variable);
        $enterFieldMethod .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
        $enterFieldMethod .= sprintf("\t\t" . '$I->fillField(\'%s\', %s);' . "\n", $selector, $variable);
        $enterFieldMethod .= "\t}\n\n";

        return $enterFieldMethod;
    }
}

function createSelectMethod($selectorArray)
{
    $name = key($selectorArray);

    if ($selectorArray[$name]['type'] == 'dropDown') {
        $properName = ucwords($name);
        $selector = $selectorArray[$name]['selector'];
        $variable = $selectorArray[$name]['variable'];

        $selectMethod = sprintf("\tpublic function select%s(%s) {\n", $properName, $variable);
        $selectMethod .= "\t\t" . '$I = $this->acceptanceTester;' . "\n";
        $selectMethod .= sprintf("\t\t" . '$I->selectOption(\'%s\', %s);' . "\n", $selector, $variable);

        if ($selectorArray[$name]['wait'] == 'true')
        {
            $selectMethod .= "\t\t" . '$I->waitForPageLoad();' . "\n";
        }

        $selectMethod .= "\t}\n\n";

        return $selectMethod;
    }
}

/**
 * Start of Document string
 */
$pageObjectName = 'AdminLogin';
$extends = '\Magento\Xxyyzz\Page\AbstractAdminPage';
$namespace = '';

$pageObject =  "<?php\n";
$pageObject .= sprintf("class %sGeneratedMethods extends %s\n", $pageObjectName, $extends);
$pageObject .= "{\n";


for ($i = 0; count($selectors) > $i; $i++)
{
    $pageObject .= createMethods($selectors[$i]);
}

for ($i = 0; count($ordersPageSelectors) > $i; $i++)
{
    $pageObject .= createMethods($ordersPageSelectors[$i]);
}


/**
 * End of Document string
 */
$pageObject .= "}";

/**
 * Create the GeneratedMethods.php files.
 */
$myFile = sprintf("%sGeneratedMethods.php", $pageObjectName);
$file = fopen($myFile, 'w') or die('Unable to open file!');
fwrite($file, $pageObject);
fclose($file);





/**
 * Random
 */
//$files = glob('../Page/*/*Details.php', GLOB_BRACE);
//
//foreach($files as $file) {
//    ECHO $file;
//}