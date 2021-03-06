<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminShippingReportGrid extends AbstractAdminPage
{
    public function goToTheAdminShippingReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminShippingReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminShippingReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminShippingReportGrid);
        self::verifyGlobalAdminPageTitle('Shipping Report');
    }

    public function clickOnShippingReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$genericAdminShowReportButton);
        $I->waitForPageLoad();
    }
}