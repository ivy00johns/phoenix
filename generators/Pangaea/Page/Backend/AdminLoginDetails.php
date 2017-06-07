<?php

$folder    = 'Backend';
$pageName  = 'AdminLogin';
$namespace = 'Magento\Xxyyzz\Page\Backend';
$use       = ['Magento\Xxyyzz\Page\AbstractAdminPage;',
              'Magento\Xxyyzz\Helper\AdminUrlList'];
$extends   = 'AbstractAdminPage';

$urls      = [['adminLoginPage' => 'AdminUrlList::$adminLoginPage'],
              ['adminLogoutPage' => 'AdminUrlList::$adminLogoutPage'],
              ['adminDashboardPage' => 'AdminUrlList::$adminDashboardPage'],
              ['adminForgotYourPasswordPage' => 'AdminUrlList::$adminForgotYourPasswordPage']];

$title     = [['adminLoginPage' =>''],
              ['adminLogoutPage' => ''],
              ['adminDashboardPage' => ''],
              ['adminForgotYourPasswordPage' => '']];

$selectors = [['logoLink' => [
                  'type' => 'link',
                  'selector' => '.logo'
              ]],
              ['logoImage' => [
                  'type' => 'image',
                  'selector' => '.logo-img'
              ]],
              ['title' => [
                  'type' => 'title',
                  'selector' => '.admin__legend'
              ]],
              ['userNameTitle' => [
                  'type' => 'title',
                  'selector' => '.field-username label'
              ]],
              ['userName' => [
                  'type' => 'field',
                  'selector' => '#username',
                  'variable' => '$userName'
              ]],
              ['passwordTitle' => [
                  'type' => 'title',
                  'selector' => '.field-password label'
              ]],
              ['passwordField' => [
                  'type' => 'field',
                  'selector' => '#login',
                  'variable' => '$password'
              ]],
              ['forgotYourPassword' => [
                  'type' => 'link',
                  'selector' => '.action-forgotpassword'
              ]],
              ['signIn' => [
                  'type' => 'button',
                  'selector' => '.actions .action-primary'
              ]],
              ['copyRight' => [
                  'type' => 'text',
                  'selector' => '.login-footer'
              ]]];