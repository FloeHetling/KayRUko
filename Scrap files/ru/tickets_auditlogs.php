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
	// Activity Log
	'log_newreply' => 'Ответил на Тикет: #%s',
	'log_forward' => 'Перенаправил Тикет #%s : %s',
	'log_newticket' => 'Создал Тикет #%s: %s',

	// Audit Log
	'al_newticket' => 'Новый тикет был создан %s (%s), Тема: %s', // DONE
	'al_newreply' => 'Новый ответ был создан %s (%s)', // DONE
	'al_watch' => 'Активирован Таймер Тикета: #%s : %s', // DONE
	'al_owner' => 'Исполнитель изменен с: %s на: %s', // DONE
	'al_priority' => 'Приоритет тикета изменен с: %s на: %s', // DONE
	'al_status' => 'Статус тикета изменен с: %s на: %s', // DONE
	'al_type' => 'Тип Тикета изменен с: %s на: %s', // DONE
	'al_department' => 'Подразделение тикета изменено с: %s на: %s', // DONE
	'al_due' => 'Установлена актуальность: %s', // DONE
	'al_resolutiondue' => 'Установлена актуальность решения: %s', // DONE
	'al_sla' => 'SLA план выбран: %s', // DONE
	'al_slaclear' => 'Связанный SLA план удален', // DONE
	'al_flag' => 'Флаг Тикетов изменен на: %s', // DONE
	'al_flagclear' => 'Флаги Тикетов удалены', // DONE
	'al_duestaffoverdue' => 'Тикет отмечен как просроченный', // DONE
	'al_duestaffclear' => 'Актуальность Тикетов очищена', // DONE
	'al_resduestaffclear' => 'Актуальность Решения Тикетов очищена', // DONE
	'al_ban' => 'Автор Тикета забанен. ID тикета: #%s, Email: %s', // DONE
	'al_merge' => 'Тикет объеденен. ID тикета: #%s, Тема: %s, Полное Имя: %s, Email: %s', // DONE
	'al_untrashticket' => 'Тикет возобновлен из Корзины. ID тикета: #%s, Тема: %s, Полное Имя: %s, Email: %s', // DONE
	'al_deleteticket' => 'Удаленный Тикет. ID тикета: #%s, Тема: %s, Полное Имя: %s, Email: %s', // DONE
	'al_trashticket' => 'Тикет перемещен в корзину. ID тикета: #%s, Тема: %s, Полное Имя: %s, Email: %s', // DONE
	'al_updateticketpost' => 'Сообщение тикета обновлено. Автор: %s (%s)', // DONE
	'al_deleteticketpost' => 'Сообщение тикета удалено. Автор: %s (%s)', // DONE
	'al_ticketnote' => 'Заметка добавлена к тикету', // DONE
	'al_usernote' => 'Заметка пользователя добавлена к тикету', // DONE
	'al_deletenote' => 'Заметка Тикета удалена', // DONE
	'al_updatenote' => 'Заметка Тикета обновлена', // DONE
	'al_delbilling' => 'Платежная запись тикета удалена', // DONE
	'al_ticketbilling' => 'Платежная запись тикета добавлена к тикету', // DONE
	'al_updticketbilling' => 'Обновлена Платежная запись тикета', // DONE
	'al_delfollowup' => 'Запись Исполнения тикета удалена', // DONE
	'al_createfollowup' => 'Создана запись исполнения тикета', // DONE
	'al_updateproperties' => 'Обновлены свойства тикетов. Тема: %s > %s, Полное имя: %s > %s, Email: %s > %s',

	'al_newforward' => 'Создано новое переадресованное сообщение %s (%s)',
	'al_escalated' => 'Тикет обострился в соответствии с правилом: %s',
	'al_print' => 'Тикет напечатал: %s',
	'al_cleardraft' => 'Очищены черновики тикета: %s',
	'al_savedraft' => 'Сохранены черновики тикета: %s',
	'al_forward' => 'Тикет перенаправлен: %s by: %s',
	'al_recipientdel' => 'Получатель тикета: %s удален: %s',
	'al_timetrackdel' => 'Учет времени до просмотра: #%s удалено: %s',
	'al_timetrack' => 'Время слежения за записью: %s кем: %s (Работал: %s Оплачеваемый: %s)',
	'al_prule' => 'Обработан в связи с правилом: %s',
	'al_statusac' => 'АвтоЗакрытие: Статус Тикета изменен с: %s на: %s',
	'al_xmlexport' => 'Тикет экспортирован как XML: %s',
	'al_pdfexport' => 'Тикет экспортирован как PDF: %s',
);
?>