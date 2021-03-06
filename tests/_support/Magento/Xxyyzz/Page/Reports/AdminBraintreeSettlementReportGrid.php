<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminBraintreeSettlementReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminBraintreeSettlementReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminBraintreeSettlementReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminBraintreeSettlementReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminBraintreeSettlementReportGrid);
        $I->see('Braintree Settlement Report', self::$globalPageTitle);
    }
}