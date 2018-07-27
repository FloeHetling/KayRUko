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
	'notifications' => 'Уведомления',
	'manage' => 'Управление',
	'ruletitle' => 'Название Правила',
	'desc_ruletitle' => 'Введите название для Правила Уведомлений',
	'isenabled' => 'Включено',
	'desc_isenabled' => 'Управляйте выполнением даного правила путем включения/выключения.',
	'ruletype' => 'Тип',
	'desc_ruletype' => '',
	'next' => 'Следующее',
	'creator' => 'Автор',
	'wininsertnotification' => 'Добавить Уведомление',

	'unassigned' => '-- Нераспределенное --',

	'tabgeneral' => 'Общее',
	'tabactions' => 'Действия',
	'insertcriteria' => 'Добавить Критерий',

	'na_email' => 'Email',
	'na_sms' => 'SMS',
	'na_pool' => 'Десктопные приложения',
	'na_staff' => 'Работники',
	'na_staffgroup' => 'Команда Работников',
	'na_department' => 'Подразделение',
	'nactionemaildispatch' => 'Владелец Активных тикетов',
	'desc_nactionemaildispatch' => '',
	'nadispatchemail' => 'Email рассылка (ручная)',
	'desc_nadispatchemail' => '',
	'nadispatchemailstaff' => 'Email рассылка (Работникам)',
	'desc_nadispatchemailstaff' => '',
	'nactionpooldispatch' => 'Владелец Активных тикетов',
	'desc_nactionpooldispatch' => '',
	'nactionpoolcustomdispatch' => 'Работники',
	'desc_nactionpoolcustomdispatch' => '',
	'notificationruledesc' => 'Выберить тип правила уведомления из доступных опций.',
	'titlenocriteria' => 'Не выбраны критерии',
	'msgnocriteria' => 'Невозможно создать/обновить правило Уведомлений, т.к. не выбраны критерии.',
	'titlenotificationinsert' => 'Добавлено Правило Уведомлений "%s"',
	'msgnotificationinsert' => SWIFT_PRODUCT . ' успешно добавлено следующее правило уведомлений "%s".',
	'titlenotificationupdate' => 'Обновлено Правило Уведомлений "%s"',
	'msgnotificationupdate' => SWIFT_PRODUCT . ' успешно обновлено следующее правило уведомлений "%s".',
	'tabnotifyapp' => 'Приложение Уведомлений',
	'tabemail' => 'Email',
	'titleenablenotification' => 'Включено(ы) следующее(ие) правило(а) Уведомлений: "%d"',
	'msgenablenotification' => SWIFT_PRODUCT . ' успешно включено(ы) следующее(ие) правило(а) Уведомлений:<br/>%s',
	'titledisablenotification' => 'Отключено(ы) следующее(ие) правило(а) Уведомлений: "%d"',
	'msgdisablenotification' => SWIFT_PRODUCT . ' успешно отключено(ы) следующее(ие) правило(а) Уведомлений:<br/>%s',
	
	'emailprefix' => 'Префикс Темы',
	'desc_emailprefix' => 'Вы можете указать другой префикс темы, для легкой идентификации оповещений на почту для даных Уведомлений.',

	/**
	 * ---------------------------------------------
	 * RULE TYPES
	 * ---------------------------------------------
	 */
	'nrule_chat' => 'Чат',
	'nrule_message' => 'Оффлайн Сообщение',
	'nrule_survey' => 'Опросы Чатов',
	'nrule_ticket' => 'Тикет',
	'nrule_user' => 'Пользователь',

	/**
	 * ---------------------------------------------
	 * RULE CRITERIA: TICKETS
	 * ---------------------------------------------
	 */

	'ntickettype' => 'Тип тикета',
	'desc_ntickettype' => '',
	'nbayesian' => 'Базовая категория',
	'desc_nbayesian' => '',
	'notapplicable' => '-- Не доступно --',
	'nticketstatus' => 'Статус тикета',
	'desc_nticketstatus' => '',
	'nticketpriority' => 'Приоритет Тикета',
	'desc_nticketpriority' => '',
	'nusergroup' => 'Группа Пользователей',
	'desc_nusergroup' => '',
	'ndepartment' => 'Подразделение',
	'desc_ndepartment' => '',
	'nowner' => 'Создатель',
	'desc_nowner' => '',
	'nunassigned' => '-- Нераспределенные --',
	'nactivestaff' => '-- Активные Работники --',
	'nemailqueue' => 'Email очередь',
	'desc_nemailqueue' => '',
	'nflagtype' => 'Тип флага',
	'desc_nflagtype' => '',
	'purpleflag' => 'Фиолетовый Флаг',
	'orangeflag' => 'Оранжевый Флаг',
	'greenflag' => 'Зеленый Флаг',
	'yellowflag' => 'Желтый Флаг',
	'redflag' => 'Красный Флаг',
	'blueflag' => 'Голубой Флаг',
	'ncreator' => 'Создатель Тикета',
	'desc_ncreator' => '',
	'creatorstaff' => 'Работники',
	'creatorclient' => 'Клиент',
	'nslaplan' => 'SLA план',
	'desc_nslaplan' => '',
	'ndaterange' => 'Дата создания <диапазон>',
	'desc_ndaterange' => '',
	'nlastactivityrange' => 'Последняя активность <диапазон>',
	'desc_nlastactivityrange' => '',
	'nlaststaffreplyrange' => 'Последний ответ работников <диапазон>',
	'desc_nlaststaffreplyrange' => '',
	'nlastuserreplyrange' => 'Последний ответ пользователя <диапазон>',
	'desc_nlastuserreplyrange' => '',
	'nduerange' => 'График выполнения <диапазон>',
	'desc_nduerange' => '',
	'nisoverdue' => 'Просроченный?',
	'desc_nisoverdue' => '',
	'nresolutionduerange' => 'График выполнения решений <диапазон>',
	'desc_nresolutionduerange' => '',
	'nisresolutionoverdue' => 'Решение просроченное?',
	'desc_nisresolutionoverdue' => '',
	'ntemplategroup' => 'Группа шаблонов',
	'desc_ntemplategroup' => '',
	'ntimeworked' => 'Время выполнения (в минутах)',
	'desc_ntimeworked' => '',
	'ntotalreplies' => 'Общее колличество Ответов',
	'desc_ntotalreplies' => '',
	'npendingfollowups' => 'Ожидают выполнения',
	'desc_npendingfollowups' => '',
	'nipaddress' => 'IP адресс',
	'desc_nipaddress' => '',
	'nisemailed' => 'Отправлен на e-mail',
	'desc_nisemailed' => '',
	'nisedited' => 'Редактирован',
	'desc_nisedited' => '',
	'nhasnotes' => 'Есть заметки',
	'desc_nhasnotes' => '',
	'nhasattachments' => 'Есть вложения',
	'desc_nhasattachments' => '',
	'nisescalated' => 'Углубляется',
	'desc_nisescalated' => '',
	'nhasdraft' => 'Еть Черновики',
	'desc_nhasdraft' => '',
	'nhasbilling' => 'Есть платежи',
	'desc_nhasbilling' => '',
	'nisphonecall' => 'Является телефонным тикетом',
	'desc_nisphonecall' => '',
	'nislabeled' => 'Помеченный',
	'desc_nislabeled' => '',

	'nticketevent' => 'Событие',
	'desc_nticketevent' => '',
	'tevent_newticket' => 'Новый тикет',
	'tevent_newticketnotes' => 'Заметки Нового тикета',
	'tevent_newclientreply' => 'Ответы пользователей в Новом тикете',
	'tevent_newclientsurvey' => 'Новый опрос клиента',
	'tevent_newstaffreply' => 'Новый ответ Работника',
	'tevent_ticketassigned' => 'Тикет распределен',
	'tevent_newuser' => 'Регистрация нового пользователя',

	'nuserevent' => 'Событие',
	'desc_nuserevent' => '',

	
);
?>