<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author		Floe Hetling
 *
 * @package		SWIFT
 * @copyright	no data 
 * @license		no data 
 * @link		https://github.com/FloeHetling/KayRUko
 *
 * ###############################################
 */

$__LANG = array(
	'titleduplicatesgroup'      => 'Имя команды уже используется',
	'msgduplicatesgroup'        => 'Команда с таким именем уже существует. Пожалуйста, выберите другое имя.',
	'depnotassigned'            => '(Не назначено)',
	'tabskills'                 => 'Навыки',
	'noskillstodisplay'         => 'В системе службы поддержки нет навыков для чата онлайн. Вы можете создать новые навыки и назначить их персоналу в разделе Чат онлайн &gt; Добавить навык.',
	'titleextinvalid'           => 'Недопустимое расширение',
	'msgextinvalid'             => 'Недопустимое расширение. Пожалуйста, убедитесь, что расширение цифровое (0-9) и в нем отсутствуют пробелы или особые символы.',
	'livechatoptions'           => 'Настройки чата онлайн',
	'lcgreeting'                => 'Автоматическое приветствие',
	'desc_lcgreeting'           => 'Это приветствие будет автоматически отправляться этим сотрудником, при включении в чат онлайн. Например: <em>Здравствуйте, чем я могу Вам сегодня помочь?</em>',
	'titleinvalidfileext'       => 'Неподдерживаемый тип изображения',
	'msginvalidfileext'         => 'Поддерживаемые типы изображений: gif, jpeg, jpg, png.',
	'personalizeoptions'        => 'Персонализировать',
	'generaloptions'            => 'Общие настройки',
	'staffprofileimage'         => 'Изображение профиля',
	'desc_staffprofileimage'    => 'Вашим пользователям намного приятнее будет видеть Ваше лицо. Изображение профиля пользователя будет отображаться рядом с их сообщениями в заявке и в окнах чата онлайн.',
	'tabprofile'                => 'Профиль',
	'stafffirstname'            => 'Имя',
	'desc_stafffirstname'       => '',
	'stafflastname'             => 'Фамилия',
	'desc_stafflastname'        => '',
	'staffdesignation'          => 'Звание или должность',
	'desc_staffdesignation'     => 'Должность сотрудника будет отображаться в их сообщениях в заявках и в чате онлайн. Например, <em>CEO</em>, <em>Специалист по обслуживанию клиентов</em>, <em>Свой человек</em>.',
	'titleemailqueuematch'      => 'Данный Email адрес уже используется',
	'msgemailqueuematch'        => 'Email адрес %s уже используется в системе службы поддержки как адрес email очереди ожидания и не может быть одновременно использован как email адрес сотрудника (это может вызвать цикличность, так как Ваш сотрудник будет посылать сообщения с того же email адреса, с которого система службы поддержки извлекает почту).',
	'titlemobilenumberinvalid'  => 'Неверный номер мобильного телефона',
	'msgmobilenumberinvalid'    => 'Скорее всего введенный номер недействительный. Пожалуйста, введите только цифры, без префикса + или разделителя номеров.',
	'copyfrom'                  => 'Копировать права доступа с',
	'titleinsertstaff'          => 'Создан новый сотрудник - добро пожаловать в %s!',
	'msginsertstaff'            => 'Создана новая учетная запись сотрудника для %s: <strong>Имя:</strong> %s <strong>Фамилия:</strong> %s <strong>Email адрес:</strong> %s <strong>Команда:</strong> %s <strong>Включено:</strong> %s <strong>Мобильный номер:</strong> %s <strong>Использовать права доступа команды департамента:</strong> %s',
	'titleupdatestaff'          => 'Сотрудник %s обновлен',
	'msgupdatestaff'            => 'Сотрудник %s обновлен: <strong>Имя:</strong> %s <strong>Имя пользователя:</strong> %s <strong>Email адрес:</strong> %s <strong>Команда:</strong> %s <strong>Включено:</strong> %s <strong>Номер мобильного телефона:</strong> %s <strong>Использовать права доступа команды департамента:</strong> %s',
	'titlepwnomatch'            => 'Пароли не совпадают',
	'msgpwnomatch'              => 'Указанные пароли не совпадают (мы просим ввести новый пароль дважды для избежания опечаток).',
	'titlenodep'                => 'Этому сотруднику не назначен ни один департамент',
	'msgnodep'                  => 'Пожалуйста, выберите как минимум один департамент для этого сотрудника в заклдке Департаменты.',
	'titleemailexists'          => 'Email адрес уже используется',
	'msgemailexists'            => 'Email адрес %s уже используется %s.',
	'titleusernameexists'       => 'Такое имя пользователя уже используется',
	'msgusernameexists'         => 'Имя пользователя %s уже используется %s. Пожалуйста, выберите другое имя пользователя.',
	'titlegrouperror'           => 'У последнего человека есть особые права',
	'msggrouperror'             => 'Невозможно переместить этого сотрудника из команды администраторов, так как его учетная запись - единственная с правами администратора.',
	'titlestaffdelsame'         => 'Невозможно самоуничтожиться',
	'msgstaffdelsame'           => 'Я не могу Вам позволить удалить самого себя, пока Вы находитесь в системе... Вы мне слишком сильно нравитесь, %s. Вам нужно попросить кого-нибудь другого войти в систему и спустить курок.',
	'titledelstaffmul'          => 'Учетные записи сотрудников удалены (%d)',
	'msgdelstaffmul'            => 'Следующие учетные записи сотрудников удалены:<br />%s',
	'titledelstaff'             => 'Сотрудник %s удален (%s)',
	'msgdelstaff'               => 'Сотрудник %s (%s) был удален.',
	'titleinsertstaffgroup'     => 'Создана новая команда (%s)',
	'msginsertstaffgroup'       => 'Новая команда (%s) была успешно создана: <strong>Название:</strong> %s <strong>Администратор:</strong> %s <strong>Назначенные департаменты:</strong> %s',
	'titleupdatestaffgroup'     => 'Команда (%s) обновлена',
	'msgupdatestaffgroup'       => 'Команда (%s) успешно обновлена: <strong>Название:</strong> %s <strong>Администратор:</strong> %s <strong>Назначенные департаменты:</strong> %s',
	'titlestaffgroupdelsame'    => 'Невозможно удалить свою сосбтвенную команду',
	'msgstaffgroupdelsame'      => 'Невозможно удалить команду, так как сейчас Вы ее участник. Вам необходимо стать участником другой команды перед тем, как Вы сможете удалить команду %s. Может, стоит решить это за чашечкой кофе?',
	'titledelstaffteammul'      => 'Команда удалена (%d)',
	'msgdelstaffteammul'        => 'Следующие команды удалены:<br />%s',
	'titledelstaffteam'         => 'Команда (%s) удалена',
	'msgdelstaffteam'           => 'Команда %s (%s) удалена.',
	'loginshare'                => 'LoginShare',
	'tabsettings'               => 'Настройки',
	'tabfilter'                 => 'Фильтр',
	'send'                      => 'Отправить',
	'isenabled'                 => 'Учетная запись активирована',
	'desc_isenabled'            => 'Если учетная запись сотрудника не активирована, сотрудник не сможет войти ни в одну панель управления или взаимодействовать со службой поддержки.',
	'assigneddepartments'       => 'Назначенные департаменты',
	'titlenoenable'             => 'Вы не можете деактивировать самого себя',
	'msgnoenable'               => 'Я не могу позволить Вам деактивировать самого себя, пока Вы находитесь в системе, %s. Кто-то другой должен войти в систему и деактивировать вашу учетную запись.',
	'titledisablestaff'         => 'Персонал деактивирован (%d)',
	'msgdisablestaff'           => 'Следующие учетные записи сотрудников деактивированы и больше не могут быть использованы для входа в систему службы поддержки:<br />%s',
	'titleenablestaff'          => 'Персонал активирован (%d)',
	'msgenablestaff'            => 'Следующие учетные записи сотрудников активированы и снова могут быть использованы для входа в систему службы поддержки:<br />%s',
	'attachments'               => 'Вложения',
	'tabimport'                 => 'Импорт',
	'import'                    => 'Импорт',
	'tabpermissionsstaff'       => 'Доступ: Персонал',
	'tabpermissionsadmin'       => 'Доступ: Администратор',
	'iprestriction'             => 'Запретить для IP адресов',
	'desc_iprestriction'        => 'Учетные записи сотрудников можно запретить для определенных IP адресов. Используйте запятую для разделения значений. Например: <br/><br/><strong>12.345.6.78</strong> Один IP адрес.<br /><strong>202.1.192.0-202.1.192.255</strong> Несколько IP адресов.<br /><strong>200.36.161.0/24</strong> Несколько IP адресов, используя <a href="https://en.wikipedia.org/wiki/Subnetwork" target="_blank">маску сети</a>.',
	'tzusedefault'              => '-- Использовать настройки системы по умолчанию --',
	'stafftimezone'             => 'Временная зона',
	'desc_stafftimezone'        => 'Если временная зона для сотрудника не установлена, будет использована зона системы по умолчанию.',
	'staffenabledst'            => 'Определение летнего времени',
	'desc_staffenabledst'       => 'Если эта опция активирована, Kayako будет автоматически определять летнее время и переходить на него.',
	'staff'                     => 'Персонал',
	'desc_staff'                => '',
	'managestaff'               => 'Управление персоналом',

	// Staff List
	'stafflist'                 => 'Список сотрудников',
	'fullname'                  => 'Имя',
	'staffgroup'                => 'Команда',
	'wineditstaff'              => 'Редактировать сотрудника',
	'tabedit'                   => 'Редактировать',
	'tabinsert'                 => 'Добавить',
	'tabdepartments'            => 'Назначенные департаменты',
	'taboptions'                => 'Опции',
	'permissions'               => 'Права доступа',
	'wineditteam'               => 'Редактировать команду',

	// Staff Group
	'staffgroups'               => 'Команды',
	'managegroups'              => 'Управление командами',
	'isadmin'                   => 'Администратор',

	// Insert Staff
	'insertstaff'               => 'Добавить сотрудника',
	'staffusername'             => 'Имя пользователя',
	'desc_staffusername'        => 'Имя пользователя будет использовано с паролем сотрудника для входа в панели управления.',
	'staffpassword'             => 'Пароль',
	'desc_staffpassword'        => 'Придумайте надежный пароль.',
	'staffpasswordconfirm'      => 'Введите пароль еще раз',
	'desc_staffpasswordconfirm' => 'Пожалуйста, введите пароль еще раз, чтобы убедиться, что он введен верно.',
	'staffemail'                => 'Email адрес',
	'desc_staffemail'           => 'Все email уведомления для этого пользователя будут отправляться на этот адрес.',
	'staffgroup'                => 'Команда',
	'desc_staffgroup'           => 'Этот сотрудник получит такие же права доступа, как и все члены выбранной команды.',
	'staffmobilenumber'         => 'Номер мобильного телефона',
	'desc_staffmobilenumber'    => 'Введите только цифры без префикса + и разделителей. Например, <em>18889529256</em>.',
	'staffsignature'            => 'Подпись',
	'desc_staffsignature'       => 'Подпись будет сопровождать все исходящие сообщения, отправленные данным сотрудником (ответы на заявки и почту).',
	'staffassigneddep'          => 'Назначенные департаменты',
	'usegroupdep'               => 'Использовать назначения департамента команды',
	'desc_usegroupdep'          => 'Если эта опция включена, сотрудник унаследует существующие департаменты команды. Если эта опция отключена, ниже Вы можете задать особые параметры назначения департаментов сотруднику.',
	'assigneddep'               => 'Назначенные департаменты',
	'passworddontmatch'         => 'Введенные пароли не совпадают',

	// Edit Staff
	'updatestaff'               => 'Обновить персонал',
	'editstaff'                 => 'Редактировать персонал',
	'desc_staffpasswordedit'    => 'Для того, чтобы изменит пароль для этого пользователя, введите здесь новый пароль. Оставьте эти поля пустыми, если не хотите менять пароль.',

	// Insert Staff Group
	'insertstaffgroup'          => 'Добавить команду',
	'grouptitle'                => 'Название команды',
	'desc_grouptitle'           => 'Например, <em>Продажи</em> или <em>Поддержка - Ганноверский офис</em>.',
	'groupisadmin'              => 'Команда администраторов',
	'desc_groupisadmin'         => 'Если это команда администраторов, ее члены смогут входить в панель управления администраторов и изменять общесистемные настройки.',
	'groupassigneddep'          => 'Назначенные департаменты',

	// License
	'titlestafflicense'         => 'Максимально возможное количество учетных записей сотрудников',
	'msgstafflicense'           => 'Kayako не удалось добавить новую учетную запись для сотрудника, так как достигнут лимит количества учетных записей, указанный в вашей лицензии или подписке. Пожалуйста, <a href="http://www.kayako.com/company/contact/">обратитесь в Kayako за обновлением или дальнейшей поддержкой</a>.',
	'msgenablestafflicense'     => 'Kayako не удалось активировать еще одну учетную запись для сотрудника, так как достигнут лимит количества активных сотрудников, указанный в вашей лицензии или подписке. Пожалуйста, <a href="http://www.kayako.com/company/contact/">обратитесь в Kayako за обновлением или дальнейшей поддержкой</a>.',

	// Potentialy unused phrases in staff.php
	'tabplugins'                => 'Plugins',
	'ls_app'                    => 'LoginShare Plugins',
	'wineditls'                 => 'Edit LoginShare Settings: %s',
	'lsnotitle'                 => 'No Settings Available',
	'lsnomsg'                   => 'There are no settings available for the LoginShare plugin <b>"%s"</b>.',
	'tabmassmail'               => 'Mass Mail',
	'filterbyteams'             => 'Filter by Teams',
	'filterbystaff'             => 'Filter by Staff Users',
	'titleupdatedsettings'      => 'Updated "%s" Settings',
	'msgupdatedsettings'        => 'Successfully updated all settings for category "%s" under "%s"',
	'titleselectonerecord'      => 'No Staff/Team Selected',
	'msgselectonerecord'        => 'You need to select atleast one Staff User/Team to dispatch a Mass Mail.',
	'titlemassmailsent'         => 'Dispatched Mail to "%d" Staff',
	'msgmassmailsent'           => 'Successfully dispatched Mass Mail to the following Staff Users:',
	'loginsharefile'            => 'LoginShare XML File',
	'desc_loginsharefile'       => 'Upload the LoginShare XML File',
	'ignoreversion'             => 'Ignore Version',
	'desc_ignoreversion'        => 'If selected, the import file version will be ignored. It is recommended that you do not enable this option as it can result in problems in the Client Support Center.',
	'titlenoelevatedls'         => 'Unable to Import Staff LoginShare XML',
	'msgnoelevatedls'           => 'Kayako is unabled to import the Staff LoginShare XML file as it is required that you login with a staff user that has elevated rights. You can add your user to elevated right list in config/config.php file of the package.',
	'titlelsversioncheckfail'   => 'Version Check Failed',
	'msglsversioncheckfail'     => 'Kayako is unable to import the Staff LoginShare Plugin as the plugin was created for an older version of Kayako',
	'titlelsinvaliduniqueid'    => 'Duplicate Unique ID Error',
	'msglsinvaliduniqueid'      => 'Kayako is unable to import the Staff LoginShare Plugin due to a conflict in Unique ID. This usually means that the plugin has already been imported into the database.',
	'titlelsinvalidxml'         => 'Invalid XML File',
	'msglsinvalidxml'           => 'Kayako is unable to import the Staff LoginShare Plugin as the XML file corrupt or contains invalid data.',
	'titlelsimported'           => 'Imported Staff LoginShare Plugin',
	'msglsimported'             => 'Kayako has successfully imported the "%s" Staff LoginShare Plugin.',
	'titlelsdeleted'            => 'Deleted Staff LoginShare Plugin',
	'msglsdeleted'              => 'Successfully deleted the "%s" Staff LoginShare Plugin from the database.',
	'invalidloginshareplugin'   => 'Invalid LoginShare Plugin, Please make sure the LoginShare plugin exists in the database.',
	'titleupdatedls'            => 'Updated Staff LoginShare Settings',
	'msgupdatedls'              => 'Successfully updated the settings for "%s" Staff LoginShare Plugin',
	'staffdeletefailedsame'     => 'You cannot delete your own staff user account. Please log in using different staff user credentials in order to delete "%s"',
	'staffdeleteconfirm'        => 'Staff user "%s" deleted successfully',
	'sgroupdeletefailedsame'    => 'You cannot delete the team to which your staff user account belongs. Please log in using different staff user credentials in order to delete "%s"',
	'sgroupdeleteconfirm'       => 'Team "%s" deleted successfully',
	'sgroupactionconfirm'       => 'IMPORTANT: Deleting a team results in the deletion of all the staff user accounts under that team! Are you sure you wish to delete?',
	'staffdetails'              => 'Staff Details',
	'stafffullname'             => 'Full Name',
	'desc_stafffullname'        => 'The full name of the staff user (e.g. <i>Joe Bloggs</i>).',
	'optionalfields'            => 'Optional Fields',
	'desc_assigneddep'          => 'Specify individual department permissions if the team access option (above) is not enabled.',
	'usernameexists'            => 'This staff username already exists',
	'selectdepartment'          => 'You must assign the staff user to at least one department',
	'redirect_staffinsert'      => 'Staff inserted successfully',
	'staffinsertconfirm'        => 'Staff "%s" inserted successfully',
	'invalidstaff'              => 'ERROR: Invalid staff ID',
	'staffgroupdetails'         => 'Team Details',
	'generalfields'             => 'General Fields',
	'desc_groupassigneddep'     => 'Select the department(s) to which the staff users under this team will be assigned.',
	'redirect_staffgroupinsert' => 'Team inserted successfully',
	'staffgroupinsertconfirm' => 'Team "%s" inserted successfully',
	'staffupdateconfirm' => 'Staff Member "%s" updated successfully',
	'grouperror' => 'You cannot change the team to a non-administrator team as it is the only one remaining with administrator privileges',
	'editstaffgroup' => 'Edit Team',
	'invalidstaffgroup' => 'Invalid team',
	'staffgroupupdateconfirm' => 'Group "%s" updated successfully',
	'groupadminerror' => 'You cannot disable administrator privileges for this team as it is the only one remaining with administrator privileges',
	'massmail' => 'Mass Mail',
	'subject' => 'Subject',
	'desc_subject' => '',
	'mailcontents' => 'Mail Contents',
	'mailstaffgroup' => 'Team',
	'desc_mailstaffgroup' => '',
	'selectonegroup' => 'ERROR: Please select at least one team',
	'sentmailconfirm' => 'Dispatched email to %s staff members',
	'mmcontents' => 'Mail Contents',
);

?>
