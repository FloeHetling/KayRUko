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

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'tickets'                               => 'Заявки',
	'tabgeneral'                            => 'Общие',
	'tabpermissions'                        => 'Доступ',
	'staffvisibilitycustom'                 => 'Ограничить права доступа команд сотрудников?',
	'desc_staffvisibilitycustom'            => 'Когда эта опция включена, только определенные команды сотрудников могут задавать зявке данный статус.',
	'staffgroups'                           => 'Команды сотрудников',
	'triggersurvey'                         => 'Начать опрос по электронной почте',
	'desc_triggersurvey'                    => 'Когда эта опция включена, каждый раз, когда статус заявки будет меняться на данный, пользователю будет отправляться опрос по электронной почте с просьбой  дать оценку или комментарий.',
	'statustitle'                           => 'Название статуса',
	'desc_statustitle'                      => 'Укажите название для статуса заявки',
	'statuscolor'                           => 'Цвет статуса',
	'desc_statuscolor'                      => 'Укажите код цвета, который Вы бы хотели использовать для этого статуса.',
	'statusbgcolor'                         => 'Цвет фона',
	'desc_statusbgcolor'                    => 'Укажите цвет фона, который Вы бы хотели использовать для этого статуса. Этот цвет будет отображаться при просмотре заявки во вкладке панели инструментов "Общие".',
	'displayorder'                          => 'Порядок отображения',
	'desc_displayorder'                     => 'Это порядок отображения элементов по умолчанию. Список элементов отображается в порядке возрастания.',
	'displayiconstatus'                     => 'Значок',
	'desc_displayiconstatus'                => 'Загрузите изображение (png, gif, jpg) или введите полный URL изображения, которое будет отображаться как индикатор этого статуса. Вы можете использовать {$themepath} как переменную замены для полного URL в каталоге. Рекомендуемый размер изображения - 16x16 пикселей.',
	'statusdep'                             => 'Связь статуса',
	'desc_statusdep'                        => 'Эта опция позволяет связывать данный статус с одним из существующих департаментов. Если статус связан с одним из департаментов, он будет отображаться только в выбраном департаменте.',
	'statusalldep'                          => '-- Не связан --',
	'markasresolved'                        => 'Отметить как решенную?',
	'desc_markasresolved'                   => 'Когда эта опция включена, все заявки в этом статусе будут отмечены как решенные/закрытые. Также эти заявки не будут отображаться в общих списках заявок. Рекомендуется активировать эту опцию для заявок в решенном статусе, как "Закрытая", "Решенная", "Исправленная" и т. п..',
	'displayinmainlist'                     => 'Отобразить в основном списке заявок',
	'desc_displayinmainlist'                => 'Когда эта опция включена, все заявки в этом статусе будут отображены в основном списке заявок. Рекомендуется отключить эту настройку для заявок в решенном статусе, как "Закрытая", "Исправленная" или "Требуется дополнительная информация"',
	'displaycount'                          => 'Отобразить количество заявок в дереве фильтров',
	'desc_displaycount'                     => 'Когда эта опция включена, количество всех заявок в этом статусе будут отображено в дереве фильтров заявок. Рекомендуется отключить эту настройку для заявок в статусе "Решенная" или "Исправленная".',
	'statustype2'                           => 'Тип статуса',
	'desc_statustype2'                      => 'Выберите тип статуса. Публичный статус виден в центре поддержки клиентов, тогда как статусы приватного типа видны только сотрудникам.',
	'resetduetime'                          => 'Очистить отведенное время',
	'desc_resetduetime'                     => 'Когда эта опция включена, система автоматически очищает отведенное время на заявку, когда ее статус меняется на этот.',
	'dispatchnotification'                  => 'Отправить уведомление пользователю',
	'desc_dispatchnotification'             => 'Когда эта опция включена, система отправляет уведомление пользователю/создателю каждый раз, когда заявка приобретает этот статус.',
	'insertstatus'                          => 'Добавить статус',
	'desc_insertstatus'                     => '',
	'invalidticketstatus'                   => 'Недопустимый статус заявки. Пожалуйста, убедитесь, что запись существует в базе данных.',
	'managestatus'                          => 'Статусы',
	'desc_managestatus'                     => '',
	'wineditticketstatus'                   => 'Редактировать статус: %s',
	'editstatus'                            => 'Редактировать статус',
	'desc_editstatus'                       => '',
	'taboptions'                            => 'Настройки',
	'titledelticketstatus'                  => 'Удалено "%d" статусов заявок',
	'msgdelticketstatus'                    => 'Следующие статусы заявок были успешно удалены из базы данных:',
	'titleticketstatusinsert'               => 'Добавлен статус заявки "%s"',
	'msgticketstatusinsert'                 => 'Статус заявки "%s" был успешно добавлен в базу данных.',
	'titleticketstatusupdate'               => 'Статус заявки "%s" обновлен',
	'msgticketstatusupdate'                 => 'Статус заявки "%s" был успешно обновлен.',
	'titlemasterstatusdelete'               => 'Невозможно удалить "%d" статусов заявок',
	'msgmasterstatusdelete'                 => 'Kayako не может удалить следующие основные статусы заявок:',
	'tablanguages'                          => 'Языки: перевод',
	'title_statusinuse'                     => 'Статус используется',
	'message_statusinuse_editassociation'   => 'Существуют заявки с этим статусом, которые связаны с существующими департаментами. Необходимо изменить статусы заявок, прежде чем вы сможете обновить связанные департаменты.',
	'message_statusinuse_createassociation' => 'Существуют заявки с этим статусом, которые связаны с существующим департаментам.  Необходимо изменить статусы заявок, прежде чем вы сможете обновить связанный департамент.',
	// ======= END v4 LOCALES =======
);
?>
