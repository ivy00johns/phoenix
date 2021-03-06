<?php
namespace Magento\Xxyyzz\Acceptance\Customer;

use Magento\Xxyyzz\AcceptanceTester;
use Magento\Xxyyzz\Page\Storefront\Luma\CustomerAccountLoginPage;
use Magento\Xxyyzz\Page\Storefront\Luma\CustomerAccountDashboardPage;
use Magento\Xxyyzz\Step\Customer\Api\CustomerApiStep;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class SignInCustomerFrontendCest
 *
 * Allure annotations
 * @Features({"Customer"})
 * @Stories({"Sign in existing customer storefront"})
 *
 * Codeception annotations
 * @group customers
 * @group simple_customer
 * @group storefront_luma
 * @group add
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class SignInCustomerFrontendCest
{
    /**
     * @var array
     */
    protected $customer;

    /**
     * @param AcceptanceTester $I
     * @param CustomerApiStep $api
     */
    public function _before(AcceptanceTester $I, CustomerApiStep $api)
    {
        $this->customer = $I->getCustomerApiDataWithPassword();
        $api->amAdminTokenAuthenticated();
        $this->customer = array_merge($this->customer, ['id' => $api->createCustomer($this->customer)]);
        $this->customer = array_merge($this->customer['customer'], $this->customer);
        unset($this->customer['customer']);
    }

    /**
     * Sign in existing customer.
     *
     * Allure annotations
     * @Title("Sign in existing customer storefront")
     * @Description("Sign in existing customer storefront")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AcceptanceTester", value = "$acceptanceTester")
     * @Parameter(name = "CustomerAccountLoginPage", value = "$I")
     * @Parameter(name = "CustomerAccountDashboardPage", value = "$lumaCustomerAccountDashboardPage")
     *
     * @param AcceptanceTester $acceptanceTester
     * @param CustomerAccountLoginPage $I
     * @param CustomerAccountDashboardPage $lumaCustomerAccountDashboardPage
     * @return void
     */
    public function signInWithExistingCustomer(
        AcceptanceTester $acceptanceTester,
        CustomerAccountLoginPage $I,
        CustomerAccountDashboardPage $lumaCustomerAccountDashboardPage
    ) {
        $acceptanceTester->wantTo('create customer in frontend page.');
        $I->amOnCustomerAccountLoginPage();
        $I->fillFieldCustomerEmail($this->customer['email']);
        $I->fillFieldCustomerPassword($this->customer['password']);
        $I->clickSignInButton();

        $lumaCustomerAccountDashboardPage->seeContactInformationName(
            $this->customer['firstname'] . ' ' .  $this->customer['lastname']
        );
        $lumaCustomerAccountDashboardPage->seeContactInformationEmail($this->customer['email']);
        $lumaCustomerAccountDashboardPage->seeNewsletterText('subscribed to');
    }
}
