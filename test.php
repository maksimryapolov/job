<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?
$APPLICATION->IncludeComponent("bitrix:pdf.viewer", "template_pdf", Array(
	"HEIGHT" => "600",	// Высота
		"IFRAME" => "N",	// Будет показан во фрейме
		"PATH" => "/pdf/Ex1Demo1.pdf",	// Путь к файлу
		"PRINT" => "N",	// Выводить кнопку печати
		"PRINT_URL" => "",	// Ссылка на страницу печати
		"TITLE" => "Demo",	// Заголовок
		"VIEWER_ID" => "123123",	// Идентификатор просмотрщика
		"WIDTH" => "900",	// Ширина
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>