<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'tickets' => 'Тикеты',
	'tabgeneral' => 'Общее',
	'tabpermissions' => 'Права',
	'staffvisibilitycustom' => 'Запретить изменения для Персональных Команд Персонала?',
	'desc_staffvisibilitycustom' => 'Если Включено, статус тикета может быть изменен только выбраныи командами Персонала.',
	'staffgroups' => 'Команды Персонала',
	'triggersurvey' => 'Отправить на обзорный Email',
	'desc_triggersurvey' => 'Если Включено, когда статус тикета будет изменен на выбранный письмо будет отправлено на адресс.',
	'statustitle' => 'Название Статуса',
	'desc_statustitle' => 'Введите Ваше личное навание Статуса Тикета',
	'statuscolor' => 'Цвет Статуса',
	'desc_statuscolor' => 'Введите код цвета, который Вы хотите использовать в этом Статусе.',
	'statusbgcolor' => 'Цвет Фона Статуса',
	'desc_statusbgcolor' => 'Введите код цвета фона, который Вы хотите использовать в этом Статусе.',
	'displayorder' => 'Порядок Отображения',
	'desc_displayorder' => 'Это стандартный Порядок отображения. Список отсортирован по Возрастанию.',
	'displayiconstatus' => 'Иконка',
	'desc_displayiconstatus' => 'Загруите изображение иконки (png, gif, jpg) или введите полный адресс, для отображения около статуса, Можете использовать функцию {$themepath} для указания полного пути в папку шаблона. Рекомендуемый рамер 16x16 пикселей.',
	'statusdep' => 'Связь Статуса',
	'desc_statusdep' => 'Эта функция позволяет Вам связывать тикеты, с выбранным статусом, с Подраделением. If a Status is linked to a Department, it will be visible only under the linked Department.',
	'statusalldep' => '-- Не связан --',
	'markasresolved' => 'Пометите как решенный?',
	'desc_markasresolved' => 'Если Включено, все тикеты с этим статусом будут отмеченны как Решенные/Закрытые. Также они не будут видны в глобальном списке тикетов.',
	'displayinmainlist' => 'Показывать в главном списке Тикетов',
	'desc_displayinmainlist' => 'Если Включено, все тикеты с этим статусом будут показаны в глобальном списке Тикетов."',
	'displaycount' => 'Отображать число тикетов в Дереве',
	'desc_displaycount' => 'Если Включено, общее колличество тикетов с даным статусом будет отображено в дереве тикетов.',
	'statustype2' => 'Тип Статуса',
	'desc_statustype2' => 'Выберите тип Статуса, публичные статусы видны клиентам, а приватные только персоналу',
	'resetduetime' => 'Очистить Актуальность',
	'desc_resetduetime' => 'Если Включено, система автоматом удалит актуальность тикета, когда эго статус будет изменен на выбранный.',
	'dispatchnotification' => 'Отправить уведомление Пользователю',
	'desc_dispatchnotification' => 'Если Включено, система отправит уведомление автору, когда статус тикета будет изменен на выбранный.',
	'insertstatus' => 'Добавить Статус',
	'desc_insertstatus' => '',
	'invalidticketstatus' => 'Неправильный Статус тикета. Пожалуйста убедитесь что запись существует.',
	'managestatus' => 'Статусы',
	'desc_managestatus' => '',
	'wineditticketstatus' => 'Редактировать Статус: %s',
	'editstatus' => 'Редактировать Статус',
	'desc_editstatus' => '',
	'taboptions' => 'Опции',
	'titledelticketstatus' => 'Удален "%d" Статус Тикета',
	'msgdelticketstatus' => 'Успешно удалены следующие тикеты из системы:',
	'titleticketstatusinsert' => 'Добавлен "%s" Статус Тикета',
	'msgticketstatusinsert' => 'Успешно добавлен "%s" Статус Тикета в базу данных.',
	'titleticketstatusupdate' => 'Обновлен "%s" Статус Тикета',
	'msgticketstatusupdate' => 'Успешно обновлен "%s" Статус Тикета.',
	'titlemasterstatusdelete' => 'Невозможно удалить "%d" Статус Тикета',
	'msgmasterstatusdelete' => SWIFT_PRODUCT . ' не может удалить следующие главные статусы тикетов:',
	'tablanguages' => 'Языки: Перевод',
	// ======= END v4 LOCALES =======
);
?>