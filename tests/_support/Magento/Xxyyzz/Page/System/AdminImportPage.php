<?php
namespace Magento\Xxyyzz\Page\System;

use Magento\Xxyyzz\Helper\AdminUrlList;
use Magento\Xxyyzz\Page\AbstractAdminPage;

class AdminImportPage extends AbstractAdminPage
{
    public function goToTheAdminImportPage()
    {
        $I = $this->acceptanceTester;
        $I->amOnPage(AdminUrlList::$adminImportPage);
        $I->waitForPageLoad();
    }

    public function shouldBeOnTheAdminImportPage()
    {
        $I = $this->acceptanceTester;
        $I->seeInCurrentUrl(AdminUrlList::$adminImportPage);
        self::verifyGlobalAdminPageTitle('Import');
    }

    public static $importCheckDataButton = '#upload_button';

    public function clickOnImportCheckDataButton()
    {
        $I = $this->acceptanceTester;
        $I->click(self::$importCheckDataButton);
        $I->waitForPageLoad();
    }
}