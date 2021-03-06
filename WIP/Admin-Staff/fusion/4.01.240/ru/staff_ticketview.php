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

$__LANG = array(
	'titlemasterviewdel' => 'Невозможно удалить "%d" Список(ки)',
	'msgmasterviewdel' => SWIFT_PRODUCT . ' невозможно удалить следующие списки:',
	'manageviews' => 'Списки',
	'insertview' => 'Добавить список',
	'viewtitle' => 'Название',
	'desc_viewtitle' => 'Введите название списка. Разрешені только буквы, цыфры и пробелы.',
	'viewscope' => 'Область списка',
	'createdby' => 'Создал',
	'editview' => 'Редактировать Список',
	'titleticketviewinsert' => 'Добавлен список Тикетов "%s"',
	'msgticketviewinsert' => SWIFT_PRODUCT . ' успешно добавлен список тикетов "%s".',
	'titleticketviewupdate' => 'Обновлен список Тикетов "%s"',
	'msgticketviewupdate' => SWIFT_PRODUCT . ' успешно обновлен список тикетовw "%s".',
	'titleviewfieldempty' => 'Не выбраны колонки',
	'msgviewfieldempty' => 'Невозможно добавить/удалить список тикетов. Вы должны выбрать как минимум 1 колонку для продолжения.',

	'viewlinkdepartment' => 'Связать с Подразделение(ями)',
	'desc_viewlinkdepartment' => 'С помощью этой функции Вы можете связать список с выбранными подразделениями. Связанные подразделения будет видеть даный список при входе, но в случае, если с подразделением связано более 1 списка, он будет отсортирован в хронолигическом порядке.',

	'taboptions' => 'Опции',
	'tabcolumns' => 'Колонки',

	'viewscope_global' => 'Общие',
	'viewscope_private' => 'Приватные',
	'viewscope_team' => 'Команда',

	'viewunassigned' => 'Нераспределенные',
	'viewassigned' => 'Назначен мне',
	'viewalltickets' => 'Все тикеты',

	'viewassignedfield' => 'Отображать тикеты, предназначенные для',
	'desc_viewassignedfield' => 'Выберите тип тикетов, которые Вы хотите видеть в списке.<br /><br /><em>Нераспределенные:</em> Тикеты, которые не определены никому.<br /><br /><em>Назначеные мне:</em> Тикеты, которые предназначены для меня.<br /><br /><em>Все тикеты:</em> все тикеты, не зависимо от назначения.',
	'viewscope' => 'Область списка',
	'desc_viewscope' => '<em>Глобальные списки:</em> видимые для всех пользователей.<br /><br /><em>Приватные списки:</em> видимые только для создателей.<br /><br /><em>Командные списки:</em> видимые для членов Вашей команды.',

	'viewselectfields' => 'Выберите поля (Переместите нужные поля в желтую область)',
	'viewsortoptions' => 'Опции Сортировки',
	'viewsortby' => 'Сортировать по',
	'desc_viewsortby' => 'Выберите поле, по которому должны бить отсортированы тикеты.',
	'viewsortorder' => 'Порядок сортировки',
	'desc_viewsortorder' => 'Тикеты будет отсортированы, в выбранном здесь порядке.',
	'viewticketsperpage' => 'Тикетов на страницу',
	'desc_viewticketsperpage' => 'Выберите колличество тикетов, которое должно отображатся на страницу.',
	'generaloptions' => 'Общие параметры',
	'viewautorefresh' => 'Авто обновление',
	'desc_viewautorefresh' => 'Список тикетов может быть обновлен автоматически, после заданого колличества времени.',
	'autorefresh_disable' => '-- Отключите авто обновление --',
	'autorefresh_30s' => 'Каждые 30 секунд',
	'autorefresh_1m' => 'Каждую минуту',
	'autorefresh_5m' => 'Каждые 5 минут',
	'autorefresh_15m' => 'Каждые 15 минут',
	'autorefresh_30m' => 'Каждые 30 минут',
	'autorefresh_1h' => 'Каждый час',
	'viewsetasowner' => 'Выбрать Активного Работника как Исполнителя',
	'desc_viewsetasowner' => 'Если включено, тикет будет автоматически присвоен активному в данный момент работнику.',
	'viewdefaultstatusonreply' => 'Стандартный статус тикета во время Ответа/Перенаправления',
	'desc_viewdefaultstatusonreply' => 'Выберите статус, который должен быть присвоен тикету после ответа или переадресации тикета.<br /><br /><em>Приметка:</em> Функция <strong>не доступна</strong> для ответов через e-mail клиент.',
	'defaultstatus_unspecified' => '-- Не указано --',

	'afterreply_topticketlist' => 'Весь список Тикетов',
	'afterreply_activeticketlist' => 'Список активных тикетов (Подразделение/Поиск)',
	'afterreply_ticket' => 'Активный Тикет',
	'afterreply_nextticket' => 'Следующий доступный Тикет',
	'viewafterreplyaction' => 'После ответа/перенаправления отправить меня',
	'desc_viewafterreplyaction' => 'Выберите область, в которую ' . SWIFT_PRODUCT . ' должен отправить Вас после ответа на тикет.',

	'viewfilteroptions' => 'Опции Фильтра',
	'viewfilterdepartments' => 'Фильтровать Подразделения',
	'desc_viewfilterdepartments' => SWIFT_PRODUCT . ' по умолчанию будет отображать тикеты присвоенные выбранному подразделению. Но Вы также можете использовать данную опции для фильрации тикетов по подразделениях.',
	'viewfiltertype' => 'Фильтр Типов Тикетов',
	'desc_viewfiltertype' => 'Вы можете отфильтровать тикеты по типам.',
	'viewfilterstatus' => 'Фильтр Статусов Тикетов',
	'desc_viewfilterstatus' => 'Вы можете отфильтровать тикеты по статусам.',

	'sort_asc' => 'По Возрастанию',
	'sort_desc' => 'По Убыванию',
);
?>
