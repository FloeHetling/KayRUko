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
	'dashboard' => 'Панель записей',
	'preferences' => 'Настройки',
	'privatemessages' => 'Приватные сообщения',

	// ======= BEGIN v3 IMPORT =======
	'timezonephp' => 'Часовой пояс',
	'desc_timezonephp' => 'Пожалуйста, выберите часовой пояс, в котором Вы проживаете.  При выборе часового пояса здесь, он заменит стандартный часовой пояс.',
	'defaulttimezone' => '-- Использовать часовой пояс по умолчанию --',
	// ======= END v3 IMPORT =======

	// Preferences
	'staffdetails' => 'Детали Работника',
	'requiredfields' => 'Обязательные для заполнения поля',
	'staffgroup' => 'Команда',
	'updatedetails' => 'Обновить Детали',
	'stafffullname' => 'Полное имя',
	'desc_stafffullname' => 'Введите Ваше полное имя. Оно будет отображено для пользователей, а также использоватся в письмах.',
	'changepassword' => 'Изменить Пароль',
	'staffpassword' => 'Сбросить Парол',
	'desc_staffpassword' => 'Если Вы хотите изменить Ваш пароль, введите здесь новый пароль.',
	'staffpasswordconfirm' => 'Пароль (Подтверждение)',
	'desc_staffpasswordconfirm' => 'Введите Ваш пароль еще раз.',
	'staffemail' => 'Email',
	'optionalfields' => 'Дополнительные поля',
	'staffmobilenumber' => 'Номер мобильного',
	'desc_staffmobilenumber' => 'Если Вы хотите получать смс-оповещения, введите номер Вашего мобильного.<br/><i>Примечание: Введите только цифры номера телефона, без разделителей, проблелов и т.д..<br/>Например: \'18005551212\'</i> ',
	'staffsignature' => 'Подпись',
	'desc_staffsignature' => 'Введите подпись, которая будет использована для всех Ваших исходящих писем.<br/><i>Например:<br/>\'John Smith<br/>My Company<br/>http://mycompany.com/\'</i>',
	'timezoneoffset' => 'Часовой пояс',
	'desc_timezoneoffset' => 'Выберите Ваш Часовой Пояс. Если выбран, он перепишет часовой пояс по умолчанию.',
	'enabledst' => 'Включить переход на летнее время и обратно',
	'desc_enabledst' => 'Укажите, хотите ли Вы использовать переход на летнее время и обратно.',
	'passworddontmatch' => 'Ошибка: Пароли не совпадают',
	'informationupdated' => 'Информация успешно обновлена',
	'enablepmalerts' => 'Включить оповещения по электронной почте',
	'enablepmjsalerts' => 'Включить оповощения в Всплывающих окошках',
	'desc_enablepmalerts' => 'Укажите, хотите ли Вы получать оповещения на e-mail, о получении новых приватных сообщений.',
	'desc_enablepmjsalerts' => 'Укажите, хотите ли Вы чтобы при получении нового приватного сообщение, оповещение отображалось в всплывающем окошке.',
	'generalsettings' => 'Общие настройки',
	'desc_staffemail' => 'Введите здесь Ваш персональный e-mail. Все оповещение, на которые Вы подписаны, будут отправлятся туда.'.IIF(SWIFT_Module::IsRegistered(MODULE_PARSER), ' Make sure that this address has not been associated with an email queue.  If there is an already existing email queue with the same address, it may create bounce-back loops, causing performance problems.'),

	// Time Zones
	'time_99' => '-- Настройки стандартных Часовых Поясов --',
	'time_-12' => 'GMT -12:00 hours : Enitwetok, Kwajalien',
	'time_-11' => 'GMT -11:00 hours : Midway Island, Samoa',
	'time_-10' => 'GMT -10:00 hours : Hawaii',
	'time_-9' => 'GMT -9:00 hours : Alaska',
	'time_-8' => 'GMT -8:00 hours : Pacific Time (US & Canada)',
	'time_-7' => 'GMT -7:00 hours : Mountain Time (US & Canada)',
	'time_-6' => 'GMT -6:00 hours : Central Time (US & Canada), Mexico City',
	'time_-5' => 'GMT -5:00 hours : Eastern Time (US & Canada), Bogota, Lima, Quito',
	'time_-4' => 'GMT -4:00 hours : Atlantic Time (Canada), Caracas, La Paz',
	'time_-3.5' => 'GMT -3:30 hours : Newfoundland',
	'time_-3' => 'GMT -3:00 hours : Brazil, Buenos Aires, Georgetown, Falkland Is.',
	'time_-2' => 'GMT -2:00 hours : Mid-Atlantic, Ascention Is., St Helena',
	'time_-1' => 'GMT -1:00 hours : Azores, Cape Verde Islands',
	'time_0' => 'GMT : Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia',
	'time_1' => 'GMT +1:00 hours : Berlin, Brussels, Copenhagen, Madrid, Paris, Rome',
	'time_2' => 'GMT +2:00 hours : Kaliningrad, South Africa, Warsaw',
	'time_3' => 'GMT +3:00 hours : Baghdad, Riyadh, Moscow, Nairobi',
	'time_3.5' => 'GMT +3:30 hours : Tehran',
	'time_4' => 'GMT +4:00 hours : Abu Dhabi, Baku, Muscat, Tbilisi',
	'time_4.5' => 'GMT +4:30 hours : Kabul',
	'time_5' => 'GMT +5:00 hours : Ekaterinburg, Islamabad, Karachi, Tashkent',
	'time_5.5' => 'GMT +5:30 hours : Bombay, Calcutta, Madras, New Delhi',
	'time_6' => 'GMT +6:00 hours : Almaty, Colomba, Dhaka',
	'time_7' => 'GMT +7:00 hours : Bangkok, Hanoi, Jakarta',
	'time_8' => 'GMT +8:00 hours : Beijing, Hong Kong, Perth, Singapore, Taipei',
	'time_9' => 'GMT +9:00 hours : Osaka, Sapporo, Seoul, Tokyo, Yakutsk',
	'time_9.5' => 'GMT +9:30 hours : Adelaide, Darwin',
	'time_10' => 'GMT +10:00 hours : Melbourne, Papua New Guinea, Sydney, Vladivostok',
	'time_11' => 'GMT +11:00 hours : Magadan, New Caledonia, Solomon Islands',
	'time_12' => 'GMT +12:00 hours : Auckland, Wellington, Fiji, Marshall Island',


	// Work Schedule
	'workschedule' => 'Рабочий график',
	'closed' => 'Не работает',
	'invalidschedule' => 'Указан неправильный рабочий график',
	'hourrangeerror' => 'Ошибка: Интервал дней неправильный',
	'workscheduleconfirm' => 'Рабочий график успешно обновлен',
);
?>