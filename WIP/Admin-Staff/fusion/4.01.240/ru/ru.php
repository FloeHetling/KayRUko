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

/**
* BASE LANGUAGE CODES
*/

$_SWIFT = SWIFT::GetInstance();

$__LANG = array (
	'charset' => 'UTF-8',
	'html_encoding' => '8bit',
	'text_encoding' => '8bit',
	'html_charset' => 'UTF-8',
	'text_charset' => 'UTF-8',
	'yes' => 'Да',
	'no' => 'Нет',
	'menusupportcenter' => 'Центр поддержки',
	'menustaffcp' => 'Персонал CP',
	'menuadmincp' => 'Админ CP',
	'module_notreg' => '%s Модуль не зарегистрирован',
	'event_notreg' => '%s Событие не зарегистрировано',
	'unable_to_execute' => 'Невозможно выполнить %s',
	'action_notreg' => '%s действия не зарегистрировано',
	'username' => 'Имя пользователя',
	'password' => 'Пароль',
	'rememberme' => 'Запомнить меня',
	'defaulttitle' => '%s - Усилено Кэяко %s',
	'defaultloginapi' => SWIFT_PRODUCT . ' Шаблон Логина',
	'login' => 'Логин',
	'global' => 'Глобальный',
	'first' => 'Первый',
	'last' => 'Последний',
	'pagination' => 'Страница %s из %s',
	'submit' => 'Отправить',
	'reset' => 'Сброс',
	'poweredby' => 'Служба поддержки программного обеспечения Работает на Кэяко %s',
	'copyright' => 'Авторские права &copy; 2001-%s Kayako Infotech Ltd.',
	'titlecsrfhash' => 'Неверный CSRF добавлен',
	'msgcsrfhash' => SWIFT_PRODUCT . ' обнаружена попытка подделки запросов Cross Site и не может продолжать необходимые действия.',
	'invaliduser' => 'Неверное имя пользователя или пароль',
	'invaliduseripres' => 'Неверный Персонал - Несанкционированное IP (Попытка: %d/%d)',
	'invaliduserdisabled' => 'Неверный Персонал - Счет Блокировано (Попытка: %d/%d)',
	'invalid_sessionid' => 'Сеанс окончен из-за неактивности',
	'staff_not_admin' => 'Пользователь не имеет прав администратора',
	'redirect_login' => 'Обработка Логина...',
	'redirect_dashboard' => 'Перенаправление на Приборную панель...',
	'no_wait' => 'Пожалуйста, нажмите здесь, если Ваш браузер не поддерживает автоматической переадресации',
	'select_un_all' => 'Установить или снять все Элементы',
	'sort_desc' => 'Сортировка по убыванию',
	'sort_asc' => 'Сортировка по возрастанию',
	'options' => 'Опции',
	'delete' => 'Удалить',
	'settings' => 'Установки',
	'search' => 'Поиск',
	'quicksearch' => 'Быстрый поиск',
	'mass_action' => 'Массовые действия',
	'massfieldaction' => 'Действие: ',
	'advanced_search' => 'Расширенный поиск',
	'searchfieldquery' => 'Запрос: ',
	'searchfieldfield' => 'Поле: ',
	'searchbutton' => 'Поиск',
	'settingsfieldresultsperpage' => 'Результатов на страницу: ',
	'actionconfirm' => 'Вы уверены, что желаете продолжыть?',
	'clidefault' => "%s v%s\nCopyright (c) 2001-%s Kayako Infotech Ltd.\n",
	'loggedout' => 'Выходит успешно',
	'firstselect' => '- Выбрать -',
	'exportasxml' => 'XML',
	'exportascsv' => 'CSV',
	'exportassql' => 'SQL',
	'exportaspdf' => 'PDF',
	'view' => 'Показать',
	'dashboard' => 'Панель управления',
	'help' => 'Помощь',
	'size' => 'Размер',
	'home' => 'Главная',
	'logout' => 'Выйти',
	'clientarea' => 'Центр поддержки',
	'staffcp' => 'Персонал CP',
	'admincp' => 'Админ CP',
	'winapp' => 'Winapp',
	'pdainterface' => 'PDA интерфейс',
	'kayakomobile' => 'Мобильных Кэяко',
	'bytes' => 'Байт',
	'kb' => 'KB',
	'mb' => 'MB',
	'gb' => 'GB',
	'noitemstodisplay' => 'Нет материала для отображения',
	'thousandsseperator' => ',',
	'manage' => 'Управление',
	'title' => 'Название',
	'disable' => 'Отключить',
	'enable' => 'Включить',
	'edit' => 'Изменить',
	'back' => 'Назад',
	'forward' => 'Дальше',
	'insert' => 'Вставить',
	'edit' => 'Изменить',
	'update' => 'Обновить',
	'public' => 'Общественный',
	'private' => 'Личный',
	'requiredfieldempty' => 'Одно из обязательных для заполнения поле(s) пустое',
	'clierror' => '[ОШИБКА]: ',
	'cliwarning' => '[ПРЕДУПРЕЖДЕНИЕ]: ',
	'cliok' => '[OK]: ',
	'cliinfo' => '[Информация]: ',
	'clifatalerror' => 'ФАТАЛЬНАЯ ОШИБКА',
	'clienterchoice' => 'Пожалуйста, введите ваш выбор: ',
	'clinotvalidchoice' => '"%s" не обоснованный выбор: ',
	'description' => 'Описание',
	'success' => 'Успех',
	'failure' => 'Провал',
	'status' => 'Статус',
	'date' => 'Дата',
	'seconds' => 'Секунды',
	'order' => 'Порядок',
	'email' => 'Электронная почта',
	'subject' => 'Предмет',
	'contents' => 'Содержание',
	'sections' => 'Разделы',
	'twodesc' => '%s (%s)', // Change only for RTL Languages
	'sunday' => 'Воскресенье',
	'monday' => 'Понедельник',
	'tuesday' => 'Вторник',
	'wednesday' => 'Среда',
	'thursday' => 'Четверг',
	'friday' => 'Пятница',
	'saturday' => 'Субота',
	'hourrenderus' => '%s:%s %s',
	'hourrendereu' => '%s:%s',
	'am' => 'AM',
	'pm' => 'PM',
	'pfieldreveal' => '[Раскрывать]',
	'pfieldhide' => '[Скрыть]',
	'loadingwindow' => 'Загрузка...',
	'customfields' => 'Настраиваемые поля',
	'jump' => 'Перейти',
	'newprvmsgconfirm' => 'У вас есть новое личное сообщение \ nНажмите OK, чтобы открыть личный список сообщений в новом окне.',
	'nopermission' => 'ОШИБКА: У вас нет необходимых разрешений для выполнения этого действия.<BR />Вы можете редактировать маски группы доступа в <i>Админ CP > Персонал > Управление группами > Изменить</i>',
	'nopermissiontext' => "ОШИБКА: У вас нет необходимых разрешений для выполнения этого действия.\nВы можете редактировать маски группы доступа в Админ CP > Персонал > Управление группами > Изменить",
	'generationdate' => 'XML, образующихся на: %s',
	'commentdelconfirm' => 'Комментарий успешно удален',
	'commentstatusconfirm' => 'Измена комментария статуса успешно завершена',
	'commentupdconfirm' => 'Комментарий "%s" успешно обновлен',
	'unapprove' => 'Отклонить',
	'approve' => 'Утвердить',
	'paginall' => 'Все',
	'approvedcomments' => 'Утвердить Комментарии',
	'unapprovedcomments' => 'отклонить Комментарии',
	'fullname' => 'Полное Название',
	'editcomment' => 'Изменить комментарий',
	'onlineusers' => 'Онлайн-персонал',
	'quickjump' => 'Быстрый переход',
	'vardate1' => '%dd %dh %dm',
	'vardate2' => '%dh %dm %ds',
	'vardate3' => '%dm %ds',
	'vardate4' => '%ds',
	'choiceadd' => 'Добавить >',
	'choicerem' => '< Переместить',
	'choicemup' => 'Вверх',
	'choicemdn' => 'Вниз',
	'ticketsubjectformat' => '[%s#%s]: %s',
	'forwardticketsubjectformat' => '[%s~%s]: %s',
	'loggedinas' => 'Зарегистрированный в: ',
	'tcustomize' => 'Настройка...',
	'reports' => 'Отчеты',
	'demomode' => 'Не может выполнять действия в демо-режиме',
	'titledemomode' => 'Невозможно продолжать',
	'msgdemomode' => 'Не может выполнять необходимые действия в демо-режиме',
	'filter' => 'Фильтр',
	'editor' => 'Редактор',
	'images' => 'Изображения',
	'uploadfile' => 'Загрузить файл: ',
	'uploadedimages' => 'Загруженные изображения',
	'tabinsert' => 'Вставить',
	'tabedit' => 'Изменить',
	'titlefieldempty' => 'Неверные данные, не в состоянии продолжать.',
	'msgfieldempty' => 'Одно из обязательных для заполнения поле(s) пустое или содержит неверные данные. Пожалуйста, убедитесь, что вы ввели всю необходимую информацию в поля ниже и в формате в соответствии с требованиями.',
	'save' => 'Сохранить',
	'viewall' => 'Просмотреть все',
	'allpages' => 'Все страницы',
	'cancel' => 'Отменить',
	'save' => 'Сохранить',
	'tabgeneral' => 'Общий',
	'maddimage' => 'Изображение',
	'maddlinktoimage' => 'Ссылка на изображение',
	'maddthumbnail' => 'Миниатюра',
	'maddthumbnailwithlink' => 'Миниатюра со ссылкой',
	'checkuncheckall' => 'Проверить / снять все',
	'language' => 'Язык',
	'loginshare' => 'Доля Логина',
	'defaultloginshare' => SWIFT_PRODUCT.' Доля Логина',
	'help' => 'Помощь',
	'name' => 'Имя',
	'value' => 'Соотношение',
	'engagevisitor' => 'Привлечение посетителей',
	'inlinechat' => 'Встроенный чат',
	'url' => 'URL',
	'hexcode' => 'Шестнадцатеричный код',
	'vactionvariables' => 'Действие: Переменные',
	'vactionvexp' => 'Действие: опыт посетителя',
	'vactionsalerts' => 'Действие: Предупреждение Персонала',
	'vactionsetdepartment' => 'Действие: Установить подразделение',
	'vactionsetskill' => 'Действие: набор навыков',
	'vactionsetgroup' => 'Действие: Установить группу',
	'vactionsetcolor' => 'Действие: Установить цвет',
	'vactionbanvisitor' => 'Действие: Забаненый посетитель',
	'customengagevisitor' => 'Пользовательские Привлечения посетителей',
	'managerules' => 'Управление правилами',
	'open' => 'Открыть',
	'close' => 'Закрыть',
	'invalidusernoapiaccess' => 'Неверный персонал. Эти сотрудники не имеют API доступа, пожалуйста, настроить в меню Настройки> Общие.',
	'titleupdatedswiftsettings' => 'Обновлены "%s" Настройки',
	'msgupdatedswiftsettings' => 'Успешно обновлены все настройки для "%s" категории.',
	'geoipprocessrunning' => 'Невозможно перезапустить процесс сборки. GeoIP процесс восстановления уже запущен.',
	'continueprocessquestion' => 'Существующая задача по-прежнему выполняется. Вы хотите отменить ее, чтобы продолжить?',
	'titleupdsettings' => 'Обновлены "%s" Настройки',
	'msgupdsettings' => 'Успешно обновлены все параметры для "%s"',
	'type' => 'Тип',
	'banip' => 'IP (255.255.255.255)',
	'banclassc' => 'Class C (255.255.255.*)',
	'banclassb' => 'Class B (255.255.*.*)',
	'banclassa' => 'Class A (255.*.*.*)',
	'if' => 'Если',
	'loginlogerror' => 'Логин Закрыт для %d минут (Попытка: %d/%d)',
	'loginlogwarning' => 'Неверное имя пользователя или пароль (Попытка: %d/%d)',
	'na' => '- NA -',
	'redirectloading' => 'Загрузка...',
	'noinfoinview' => 'Нет Информации, Доступной в этом Виде',
	'nochange' => '-- Без изменений --',
	'activestaff' => '-- Активный Персонал --',
	'notificationuser' => 'Пользователь',
	'notificationuserorganization' => 'Организация Пользователя',
	'notificationstaff' => 'Персонал (Владелец)',
	'notificationteam' => 'Штабная Команда',
	'notificationdepartment' => 'Отдел',
	'notificationsubject' => 'Тема: ',
	'lastupdate' => 'Последнее обновление',
	'interface_admin' => 'Админ CP',
	'interface_staff' => 'Персонал CP',
	'interface_intranet' => 'Интранет',
	'interface_api' => 'API',
	'interface_winapp' => 'Winapp',
	'interface_syncworks' => 'SyncWorks',
	'interface_instaalert' => 'InstaAlert',
	'interface_pda' => 'PDA',
	'interface_rss' => 'RSS',
	'error_database' => 'База данных',
	'error_php' => 'PHP',
	'error_exception' => 'Исключение',
	'error_mail' => 'Почта',
	'error_loginshare' => 'Доля Логина',
	'loading' => 'Загрузка...',
	'pwtooshort' => 'Слишком короткий',
	'pwveryweak' => 'Очень слабый',
	'pwweak' => 'Слабый',
	'pwmedium' => 'Средний',
	'pwstrong' => 'Сильный',
	'pwverystrong' => 'Очень сильный',
        'pwunsafeword' => 'Unsafe password word!',
	'staffpasswordpolicy' => '<span class="tabletitle">Политика паролей:</span> Минимальная длина пароля: %d, Минимальное количество чисел: %d, Минимальное количество символов: %d, Минимальный Главный Символьный Граф: %d',
	'titlepwpolicy' => 'Несоответствие Политики Пароля',
	'msgpwpolicy' => 'Указанный пароль не соответствует требованиям Политики Пароля.',
	'passwordpolicymismatch' => 'Указанный пароль не соответствует требованиям Политики Пароля.',
	'passwordexpired' => 'Срок действия пароля истек',
	'newpassword' => 'Новый пароль',
	'passwordagain' => 'Пароль (еще раз)',
	'passworddontmatch' => 'Новый пароль не соответствует или пуст',
	'defaulttimezone' => '-- Часовой пояс по умолчанию --',
	'tagcloud' => 'Облако тегов',
	'searchmodeactive' => 'Передовой действительный Залог Поискового Метода',
	'titlesearchfailed' => '"0" Найдено результатов',
	'msgsearchfailed' => SWIFT_PRODUCT . ' не удалось обнаружить каких-либо соответствующих записей указанным критериям.',
	'quickfilter' => 'Быстрый фильтр',
	'fuenterurl' => 'Введите URL:',
	'fuorupload' => 'или Загрузка:',
	'errorsmtpconnect' => 'Невозможно подключиться к серверу SMTP',
	'starttypingtags' => 'Начните вводить для вставки тегов...',
	'titleinvalidfileext' => 'Неверное Разширение Файла Изображения',
	'msginvalidfileext' => 'Значок файла изображения неверного расширения. Допускается расширения: gif, jpeg, jpg, png',
	'notset' => '-- Не указан --',
	'benchmarks' => 'Оценки',
	'system' => 'Система',
	'schatid' => 'ID чата',
	'smessagesurvey' => 'Сообщения / Обзоры',

	// Operators
	'opcontains' => 'Содержит',
	'opnotcontains' => 'Не Содержит',
	'opequal' => 'Равный',
	'opnotequal' => 'Не Равный',
	'opgreater' => 'Больше чем',
	'opless' => 'Меньше чем',
	'opregexp' => 'Регулярные выражения',
	'opchanged' => 'Изменены',
	'opnotchanged' => 'Не Изменены',
	'opchangedfrom' => 'Изменен от',
	'opchangedto' => 'Изменено на',
	'opnotchangedfrom' => 'Не менялось с',
	'opnotchangedto' => 'Не менялась на',
	'matchand' => 'И',
	'matchor' => 'ИЛИ',
	'strue' => 'Правельний',
	'sfalse' => 'Ложный',
	'titlenoperm' => 'Не Разрешаемое действие',
	'msgnoperm' => SWIFT_PRODUCT.' не в состоянии продолжаться, так как в настоящий момент штабный пользователь не имеет достаточно разрешения осуществлять это действие.',
	'cyesterday' => 'Вчера',
	'ctoday' => 'Сегодня',
	'ccurrentwtd' => 'Текущая неделя на сегодняшний день',
	'ccurrentmtd' => 'За текущий месяц на сегодняшний день',
	'ccurrentytd' => 'В текущем году на сегодняшний день',
	'cl7days' => 'За последние 7 дней',
	'cl30days' => 'За последние 30 дней',
	'cl90days' => 'За последние 90 дней',
	'cl180days' => 'За последние 180 дней',
	'cl365days' => 'За последние 365 дней',
	'ctomorrow' => 'Завтра',
	'cnextwfd' => 'Текущая неделя с даты',
	'cnextmfd' => 'Текущий месяц от даты',
	'cnextyfd' => 'Текущий год с даты',
	'cn7days' => 'Следующие 7 дней',
	'cn30days' => 'Следующие 30 дней',
	'cn90days' => 'Следующие 90 дней',
	'cn180days' => 'Следующие 180 дней',
	'cn365days' => 'Следующие 365 дней',
	'new' => 'Новый',
	'phoneext' => 'Телефон: %s',
	'snewtickets' => 'Новые Билеты',
	'sadvancedsearch' => 'Расширенный поиск',
	'squicksearch' => 'Быстрый Поиск:',
	'sticketidlookup' => 'Просмотр ID тикета:',
	'screatorreplier' => 'Создатель/Ответчик:',
	'smanage' => 'Управление',
	'clear' => 'Очистить',
	'never' => 'Никогда',
	'seuser' => 'Пользователи',
	'seuserorg' => 'Организация Пользователя',
	'manage' => 'Управление',
	'import' => 'Импорт',
	'export' => 'Экспорт',
	'comments' => 'Комментарии',
	'commentdata' => 'Комментарии:',
	'postnewcomment' => 'Опубликовать новый комментарий',
	'buttonsubmit' => 'Отправить',
	'reply' => 'Повторить',

	// Import from v3
	'short_all_tickets' => 'Все',
	'iprestrictdenial' => 'Доступ запрещен (%s): IP не допускается (%s), пожалуйста, добавьте IP в список разрешенных в /config/config.php',

	// ======= CALENDAR LOCALE =======
	'calendar' => 'Календарь',
	'cal_clear' => 'Очистить',
	'cal_close' => 'Закрыть',
	'cal_prev' => '&laquo; Предыдущый',
	'cal_next' => 'Следующый &raquo;',
	'cal_today' => 'Сегодня',
	'cal_sunday' => 'Вс',
	'cal_monday' => 'Пн',
	'cal_tuesday' => 'Вт',
	'cal_wednesday' => 'Ср',
	'cal_thursday' => 'Чт',
	'cal_friday' => 'Пт',
	'cal_saturday' => 'Сб',
	'cal_january' => 'Январь',
	'cal_february' => 'Февраль',
	'cal_march' => 'Март',
	'cal_april' => 'Апрель',
	'cal_may' => 'Май',
	'cal_june' => 'Июнь',
	'cal_july' => 'Июль',
	'cal_august' => 'Август',
	'cal_september' => 'Сентябрь',
	'cal_october' => 'Октябрь',
	'cal_november' => 'Ноябрь',
	'cal_december' => 'Декабрь',

	/**
	* ###############################################
	* MODULE LIST
	* ###############################################
	*/
	'module_base' => 'База',
	'module_tickets' => 'Тикеты',
	'module_bugs' => 'Ошибки',
	'module_knowledgebase' => 'База знаний',
	'module_parser' => 'Почтовый Анализатор',
	'module_livechat' => 'Живой Чат',
	'module_issues' => 'Вопросы',
	'module_troubleshooter' => 'Устранение неполадок',
	'module_ringroute' => 'Маршрут Звонка',
	'module_news' => 'Новости',
	'module_downloads' => 'Загрузки',
	'module_core' => 'Суть',
);


/*
 * ###############################################
 * BEGIN INTERFACE RELATED CODE
 * ###############################################
 */



if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_ADMIN)
{
	/**
	* Admin Area Navigation Bar
	*/

	$_adminBarContainer = array (

		14 => array ('Settings', 'bar_settings.gif', MODULE_CORE, '/Base/Settings/Index'),
		26 => array ('REST API', 'bar_restapi.gif', MODULE_BASE),
		27 => array ('Tag Generator', 'bar_tag.gif', MODULE_BASE, '/Base/TagGenerator/Index'),
		0 => array ('Templates', 'bar_templates.gif', MODULE_BASE),
		1 => array ('Languages', 'bar_languages.gif', MODULE_CORE),
		2 => array ('Custom Fields', 'bar_customfields.gif', MODULE_CORE),
		25 => array ('GeoIP', 'bar_geoip.gif', MODULE_CORE, '/Base/GeoIP/Manage'),
		13 => array ('Live Chat', 'bar_livesupport.gif', MODULE_LIVECHAT),
		3 => array ('RingRoute', 'bar_ringroute.gif', MODULE_RINGROUTE),
		4 => array ('Mail Parser', 'bar_mailparser.gif', MODULE_PARSER),
		5 => array ('Tickets', 'bar_tickets.gif', MODULE_TICKETS),
		29 => array ('Workflow', 'bar_workflow.gif', MODULE_TICKETS, '/Tickets/Workflow/Manage'),
		30 => array ('Ratings', 'bar_benchmarks.gif', MODULE_TICKETS, '/Base/Benchmark/Manage'),
		6 => array ('SLA', 'bar_sla.gif', MODULE_TICKETS),
		7 => array ('Escalations', 'bar_escalations.gif', MODULE_TICKETS, '/Tickets/Escalation/Manage'),
		20 => array ('Bayesian', 'bar_bayesian.gif', MODULE_TICKETS),
		21 => array ('Knowledgebase', 'bar_knowledgebase.gif', MODULE_KNOWLEDGEBASE),
		22 => array ('Downloads', 'bar_downloads.gif', MODULE_DOWNLOADS),
		23 => array ('News', 'bar_news.gif', MODULE_NEWS),
		24 => array ('Troubleshooter', 'bar_troubleshooter.gif', MODULE_TROUBLESHOOTER),
		17 => array ('Reports', 'bar_reports.gif', MODULE_REPORTS),
		31 => array ('Widgets', 'bar_widgets.gif', MODULE_BASE, '/Core/Widget/Manage'),
		32 => array ('Modules', 'bar_modules.gif', MODULE_BASE, '/Core/Module/Manage'),
		9 => array ('Logs', 'bar_logs.gif', MODULE_BASE),
		10 => array ('Scheduled Tasks', 'bar_cron.gif', MODULE_BASE),
		11 => array ('Database', 'bar_database.gif', MODULE_BASE),
		33 => array ('Import', 'bar_import.gif', MODULE_BASE),
		12 => array ('Diagnostics', 'bar_diagnostics.gif', MODULE_BASE),
		34 => array ('Maintenance', 'bar_maintenance.gif', MODULE_BASE),
	);

	SWIFT::Set('adminbar', $_adminBarContainer);

	$_adminBarItemContainer = array (
		0 => array (
				0 => array ('Groups', '/Base/TemplateGroup/Manage'),
				1 => array ('Templates', '/Base/Template/Manage'),
				2 => array ('Search', '/Base/TemplateSearch/Index'),
				3 => array ('Import/Export', '/Base/TemplateManager/ImpEx'),
				4 => array ('Restore', '/Base/TemplateRestore/Index'),
				5 => array ('Diagnostics', '/Base/TemplateDiagnostics/Index'),
				6 => array ('Personalize', '/Base/TemplateManager/Personalize'),
			),

		1 => array (
				0 => array ('Languages', '/Base/Language/Manage'),
				1 => array ('Phrases', '/Base/LanguagePhrase/Manage'),
				2 => array ('Search', '/Base/LanguagePhrase/Search'),
				3 => array ('Import/Export', '/Base/LanguageManager/ImpEx'),
				4 => array ('Restore', '/Base/LanguageManager/Restore'),
				5 => array ('Diagnostics', '/Base/LanguageManager/Diagnostics'),
			),

		2 => array (
				0 => array ('Groups', '/Base/CustomFieldGroup/Manage'),
				1 => array ('Fields', '/Base/CustomField/Manage'),
			),

		3 => array (
				0 => array ('Settings', '/RingRoute/SettingsManager/Index'),
				1 => array ('Manage Profiles', '/RingRoute/ProfileManager/Index')
			),

		4 => array (
				0 => array ('Settings', '/Parser/SettingsManager/Index'),
				1 => array ('Email Queues', '/Parser/EmailQueue/Manage'),
				2 => array ('Rules', '/Parser/Rule/Manage'),
				3 => array ('Breaklines', '/Parser/Breakline/Manage'),
				4 => array ('Bans', '/Parser/Ban/Manage'),
				5 => array ('Catch-All', '/Parser/CatchAll/Manage'),
				6 => array ('Loop Blockages', '/Parser/LoopBlock/Manage'),
				7 => array ('Loop Rules', '/Parser/LoopRule/Manage'),
				9 => array ('Parser Log', '/Parser/ParserLog/Manage'),
			),

		5 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Index'),
				1 => array ('Types', '/Tickets/Type/Manage'),
				2 => array ('Statuses', '/Tickets/Status/Manage'),
				3 => array ('Priorities', '/Tickets/Priority/Manage'),
				4 => array ('File Types', '/Tickets/FileType/Manage'),
				5 => array ('Links', '/Tickets/Link/Manage'),
				8 => array ('Auto Close', 'Tickets/AutoClose/Manage'),
				7 => array ('Maintenance', '/Tickets/Maintenance/Index'),
			),

		6 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/SLA'),
				1 => array ('Plans', '/Tickets/SLA/Manage'),
				2 => array ('Schedules', '/Tickets/Schedule/Manage'),
				3 => array ('Holidays', '/Tickets/Holiday/Manage'),
				4 => array ('Import/Export', '/Tickets/HolidayManager/Index'),
			),

		20 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Bayesian'),
				1 => array ('Categories', '/Tickets/BayesianCategory/Manage'),
				2 => array ('Diagnostics', '/Tickets/BayesianDiagnostics/Index'),
		),

		17 => array (
				0 => array ('Settings', '/Reports/SettingsManager/Index'),
		),

		9 => array (
				0 => array ('Error Log', '/Core/ErrorLog/Manage'),
				1 => array ('Task Log', '/Core/ScheduledTasks/TaskLog'),
				3 => array ('Activity Log', '/Core/ActivityLog/Manage'),
				4 => array ('Login Log', '/Core/LoginLog/Manage'),
		),

		10 => array (
				0 => array ('Manage', '/Core/ScheduledTasks/Manage'),
				1 => array ('Task Log', '/Core/ScheduledTasks/TaskLog'),
			),

		11 => array (
				0 => array ('Table Information', '/Core/Database/TableInfo'),
				1 => array ('Export XML', '/Core/Database/Export'),
			),

		12 => array (
				0 => array ('Active Sessions', '/Core/Diagnostics/ActiveSessions'),
				1 => array ('Cache Info', '/Core/Diagnostics/CacheInformation'),
				2 => array ('Rebuild Cache', '/Core/Diagnostics/RebuildCache'),
				3 => array ('PHP Info', '/Core/Diagnostics/PHPInfo'),
				4 => array ('Report Bug', '/Core/Diagnostics/ReportBug'),
				5 => array ('License Info', '/Core/Diagnostics/LicenseInformation'),
			),

		13 => array (
				0 => array ('Settings', '/LiveChat/SettingsManager/Index'),
				1 => array ('Rules', '/LiveChat/Rule/Manage'),
				2 => array ('Groups', '/LiveChat/Group/Manage'),
				3 => array ('Skills', '/LiveChat/Skill/Manage'),
				4 => array ('Bans', '/LiveChat/Ban/Manage'),
				5 => array ('Message Routing', '/LiveChat/MessageRouting/Index'),
				6 => array ('Online Status', '/LiveChat/OnlineStatus/Index'),
			),

		19 => array (
				0 => array ('Settings', '/Manuals/SettingsManager/Index'),
			),

		21 => array (
				0 => array ('Settings', '/KnowledgeBase/SettingsManager/Index'),
				1 => array ('Maintenance', '/KnowledgeBase/Maintenance/Index'),
			),

		22 => array (
				0 => array ('Settings', '/Downloads/SettingsManager/Index'),
			),

		23 => array (
				0 => array ('Settings', '/News/SettingsManager/Index'),
				1 => array ('Import/Export', '/News/ImpEx/Manage'),
			),

		24 => array (
				0 => array ('Settings', '/Troubleshooter/SettingsManager/Index'),
			),

		25 => array (
				0 => array ('Maintenance', '/Base/GeoIP/Manage'),
			),

		26 => array (
				0 => array ('Settings', '/Base/Settings/RESTAPI'),
				1 => array ('API Information', '/Base/RESTAPI/Index'),
			),

		33 => array (
				0 => array ('Manage', '/Base/Import/Manage'),
				1 => array ('Import Log', '/Base/ImportLog/Manage'),
			),

		34 => array (
				0 => array ('Purge Attachments', '/Base/PurgeAttachments/Index'),
				1 => array ('Move Attachments', '/Base/MoveAttachments/Index'),
			),

	);

	// Log stuff
	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Resolve')
	{
		$_adminBarItemContainer[9][2] = array ('Parser Log', '/Parser/ParserLog/Manage');
	}

	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Engage')
	{
		unset($_adminBarContainer[27]);
	}

	SWIFT::Set('adminbaritems', $_adminBarItemContainer);


	/**
	* Admin Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100, MODULE_NAME),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_adminMenuContainer = array (

		1 => array ('Home', 80, MODULE_CORE),
		2 => array ('Staff', 100, MODULE_BASE),
		3 => array ('Departments', 120, MODULE_BASE),
		4 => array ('Users', 100, MODULE_BASE),
	);

	SWIFT::Set('adminmenu', $_adminMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_adminLinkContainer = array (

		1 => array (
				0 => array ('Dashboard', '/Core/Dashboard/Index'),
				1 => array ('Settings', '/Base/Settings/Index'),
				),

		2 => array (
				0 => array ('Manage Staff', '/Base/Staff/Manage'),
				1 => array ('Manage Teams', '/Base/StaffGroup/Manage'),
				2 => array ('Insert Staff', '/Base/Staff/Insert'),
				3 => array ('Insert Team', '/Base/StaffGroup/Insert'),
				4 => array ('LoginShare', '/Base/Settings/StaffLoginShare'),
				5 => array ('Settings', '/Base/Settings/Staff'),
				),

		3 => array (
				0 => array ('Manage Departments', '/Base/Department/Manage'),
				1 => array ('Insert Department', '/Base/Department/Insert'),
				2 => array ('Access Overview', '/Base/Department/AccessOverview'),
				),

		4 => array (
				0 => array ('Manage User Groups', '/Base/UserGroup/Manage'),
				1 => array ('Insert User Group', '/Base/UserGroup/Insert'),
				2 => array ('LoginShare', '/Base/Settings/UserLoginShare'),
				3 => array ('Settings', '/Base/Settings/User'),
				),
	);

	SWIFT::Set('adminlinks', $_adminLinkContainer);
} else if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_STAFF) {
	/**
	* Staff Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_staffMenuContainer = array (
		1 => array ('Home', 80, MODULE_CORE),
		2 => array ('Tickets', 100, MODULE_TICKETS, 't_entab'),
		3 => array ('Live Chat', 120, MODULE_LIVECHAT, 'ls_entab'),
		4 => array ('Knowledgebase', 140, MODULE_KNOWLEDGEBASE, 'kb_entab'),
		5 => array ('Downloads', 110, MODULE_DOWNLOADS, 'dl_entab'),
		6 => array ('Troubleshooter', 140, MODULE_TROUBLESHOOTER, 'tr_entab'),
		7 => array ('News', 90, MODULE_NEWS, 'nw_entab'),
		8 => array ('Users', 90, MODULE_CORE, 'cu_entab'),
		9 => array ('Reports', 90, MODULE_REPORTS, 'rp_entab'),
	);

	SWIFT::Set('staffmenu', $_staffMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the seperater items for the menu items
	*/
	$_staffLinkContainer = array (

		1 => array (
				0 => array ('Dashboard', '/Core/Dashboard/Index'),
				1 => array ('Preferences', '/Base/Preferences/ViewPreferences'),
				2 => array ('Notifications', '/Base/Notification/Manage', 'staff_canviewnotifications'),
				3 => array ('Comments', '/Base/Comment/Manage', 'staff_canviewcomments'),
				),

		2 => array (
				0 => array ('Manage Tickets', '/Tickets/Manage/Index', 'staff_tcanviewtickets'),
				1 => array ('Search', ':UIDropDown(\'ticketsearchmenu\', event, \'linkmenu2_1\', \'linksdiv\'); LinkTicketSearchForms();'),
				2 => array ('New Ticket', ':UICreateWindow(\'/Tickets/Ticket/NewTicket/\', \'newticket\', \'New Ticket\', \'Loading..\', 600, 350, true);', 'staff_tcaninsertticket'),
				3 => array ('Macros', '/Tickets/MacroCategory/Manage', 'staff_tcanviewmacro'),
				4 => array ('Views', '/Tickets/View/Manage', 'staff_tcanview_views'),
				5 => array ('Filters', ':UIDropDown(\'ticketfiltermenu\', event, \'linkmenu2_5\', \'linksdiv\');'),
				),

		3 => array (
				0 => array ('Chat History', '/LiveChat/ChatHistory/Manage', 'staff_lscanviewchat'),
				1 => array ('Messages/Surveys', '/LiveChat/Message/Manage', 'staff_lscanviewmessages'),
				2 => array ('Call Logs', '/LiveChat/Call/Manage', 'staff_lscanviewcalls'),
				3 => array ('Canned', '/LiveChat/CannedCategory/Manage', 'admin_lscanviewcanned'),
				4 => array ('Search', ':UIDropDown(\'chatsearchmenu\', event, \'linkmenu3_4\', \'linksdiv\'); LinkChatSearchForms();'),
				),

		4 => array (
				0 => array ('View Knowledgebase', '/Knowledgebase/ViewKnowledgebase/Index'),
				1 => array ('Manage Knowledgebase', '/Knowledgebase/Article/Manage'),
				2 => array ('Categories', '/Knowledgebase/Category/Manage'),
				3 => array ('New Article', '/Knowledgebase/Article/Insert'),
				),

		5 => array (
				0 => array ('View Downloads', '/Downloads/Downloads/Manage'),
				1 => array ('Manage Downloads', '/Downloads/Downloads/Manage'),
				2 => array ('Categories', '/Downloads/Category/Insert'),
				3 => array ('New File', '/Downloads/File/Insert'),
				),

		6 => array (
				0 => array ('View Troubleshooter', '/Troubleshooter/Category/ViewAll'),
				1 => array ('Manage Troubleshooter', '/Troubleshooter/Step/Manage'),
				2 => array ('Categories', '/Troubleshooter/Category/Manage'),
				3 => array ('New Step', ':UICreateWindow(\'/Troubleshooter/Step/InsertDialog/\', \'newstep\', \'Insert Step\', \'Loading..\', 400, 200, true);'),
				),

		7 => array (
				0 => array ('View News', '/News/NewsItem/ViewAll', 'staff_nwcanviewitems'),
				1 => array ('Manage News', '/News/NewsItem/Manage', 'staff_nwcanmanageitems'),
				2 => array ('Categories', '/News/Category/Manage', 'staff_nwcanviewcategories'),
				3 => array ('Subscribers', '/News/Subscriber/Manage', 'staff_nwcanviewsubscribers'),
				4 => array ('Insert News', ':UICreateWindow(\'/News/NewsItem/InsertDialog/\', \'newnews\', \'Insert News\', \'Loading..\', 600, 350, true);'),
				),

		8 => array (
				0 => array ('Manage Users', '/Base/User/Manage', 'staff_canviewusers'),
				1 => array ('Manage Organizations', '/Base/UserOrganization/Manage', 'staff_canviewuserorganizations'),
				2 => array ('Search', ':UIDropDown(\'usersearchmenu\', event, \'linkmenu8_2\', \'linksdiv\'); LinkUserSearchForms();'),
				3 => array ('Insert User', '/Base/User/Insert', 'staff_caninsertuser'),
				4 => array ('Insert Organization', '/Base/UserOrganization/Insert', 'staff_caninsertuserorganization'),
				),

		9 => array (
				0 => array ('Manage Reports', '/Reports/Report/Manage'),
				1 => array ('New Report', '/Reports/Report/Insert'),
				2 => array ('Import/Export', '/Reports/ReportManager/ImpEx'),
				//2 => array ('Schedule', '/Reports/Schedule'),
				//4 => array ('Saved Reports', '/Reports/SavedReports'),
				),
	);

	$_staffLinkContainer[2][1][15] = true;
	$_staffLinkContainer[2][5][15] = true;
	$_staffLinkContainer[8][2][15] = true;
	$_staffLinkContainer[3][4][15] = true;

	SWIFT::Set('stafflinks', $_staffLinkContainer);
}


?>