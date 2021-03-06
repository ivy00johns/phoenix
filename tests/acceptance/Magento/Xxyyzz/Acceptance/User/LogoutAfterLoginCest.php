<?php
namespace Magento\Xxyyzz\Acceptance\User;

use Magento\Xxyyzz\Helper\AdminNavigation;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class LogoutAfterLoginCest
 *
 * Allure annotations
 * @Features({"Admin Login"})
 * @Stories({"Logging Out"})
 *
 * Codeception annotations
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class LogoutAfterLoginCest
{
    /**
     * Allure annotations
     * @Title("You should be able to Logout of the Admin")
     * @Description("You should land on the Login page after Logging Out.")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @TestCaseId("")
     * @Parameter(name = "AdminNavigation", value = "$I")
     *
     * Codeception annotations
     * @param AdminNavigation $I
     * @return void
     */
    public function shouldBeAbleToLogout(AdminNavigation $I)
    {
        $I->loginAsAdmin();
        $I->goToTheAdminLogoutPage();
        $I->shouldBeOnTheAdminLoginPage();
    }
}
