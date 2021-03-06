<?php
namespace Magento\Xxyyzz\Acceptance\Catalog;

use Magento\Xxyyzz\AcceptanceTester;
use Magento\Xxyyzz\Helper\AdminNavigation;
use Magento\Xxyyzz\Page\Catalog\AdminCategoriesPage;
use Magento\Xxyyzz\Page\Storefront\Luma\CategoryPage;
use Yandex\Allure\Adapter\Annotation\Stories;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\Severity;
use Yandex\Allure\Adapter\Annotation\Parameter;
use Yandex\Allure\Adapter\Model\SeverityLevel;
use Yandex\Allure\Adapter\Annotation\TestCaseId;

/**
 * Class CreateSubCategoryCest
 *
 * Allure annotations
 * @Features({"Category"})
 * @Stories({"Create a sub-Category"})
 *
 * Codeception annotations
 * @group catalog
 * @group products
 * @group categories
 * @group simple_category
 * @group storefront_luma
 * @group add
 * @env chrome
 * @env firefox
 * @env phantomjs
 */
class CreateCategoryCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
    }

    public function _after(AdminNavigation $I)
    {
        $I->goToTheAdminLogoutPage();
    }

    /**
     * Allure annotations
     * @Title("Create sub category with required fields")
     * @Description("Create sub category with required fields")
     * @TestCaseId("")
     * @Severity(level = SeverityLevel::CRITICAL)
     * @Parameter(name = "AdminNavigation", value = "$acceptanceTester")
     * @Parameter(name = "AdminCategoryPage", value = "$I")
     * @Parameter(name = "CategoryPage", value = "$lumaCategoryPage")
     *
     * Codeception annotations
     * @group banana
     * @param AcceptanceTester $acceptanceTester
     * @param AdminCategoriesPage $I
     * @param CategoryPage $lumaCategoryPage
     * @return void
     */
    public function createCategoryTest(
        AcceptanceTester $acceptanceTester,
        AdminCategoriesPage $I,
        CategoryPage $lumaCategoryPage
    ) {
        $acceptanceTester->wantTo('create sub category with required fields in admin Category page.');
        $category = $acceptanceTester->getCategoryApiData();
        
        $I->goToTheAdminCategoriesPage();
        $I->clickOnSddSubCategoryButton();
        $I->fillFieldCategoryName($category['name']);

        $I->clickOnSearchEngineOptimization();
        $I->fillFieldCategoryUrlKey($category['custom_attributes'][0]['value']);
        $I->saveCategory();
        $I->seeGlobalAdminSuccessMessage();

        $acceptanceTester->wantTo('verify created category in frontend category page.');
        $lumaCategoryPage->amOnCategoryPage(str_replace('_', '-', $category['custom_attributes'][0]['value']));
        $lumaCategoryPage->seeCategoryNameInTitleHeading($category['name']);
    }
}
