<?php
namespace Magento\Xxyyzz\Page\Reports;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminGrid;

class AdminProductViewsReportGrid extends AbstractAdminGrid
{
    public function goToTheAdminProductViewsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminProductViewsReportGrid);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminProductViewsReportGrid()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminProductViewsReportGrid);
        $I->see('Product Views Report', self::$globalPageTitle);
    }

    public static $productViewsReportShowReportButton = '#filter_form_submit';

    public function clickOnProductViewsReportShowReportButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$productViewsReportShowReportButton);
        $I->waitForPageLoad();
    }
}