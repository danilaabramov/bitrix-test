<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Example, Один");
$APPLICATION->SetPageProperty("description", "Это Example 1");
$APPLICATION->SetTitle("Приветствие");
dd(\Bitrix\Main\Config\Configuration::getValue('exception_handling'));
?>q1q2<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>