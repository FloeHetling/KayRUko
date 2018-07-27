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
	'dbexport' => 'Экспортировать XML',
	'desc_dbexport' => '',
	'tabexportxml' => 'Экспортировать XML',
	'export' => 'Экспортировать',
	'dbtables' => 'Таблицы базы данных',
	'exportdata' => 'Экспорт данных',
	'desc_exportdata' => 'Если разрешено, '. SWIFT_PRODUCT .' будет экспортировать данные таблицы вместе со схемой.',
	'dbdiagnostics' => 'Диагностика',
	'desc_dbdiagnostics' => '',
	'tabdiagnostics' => 'Диагностика',
	'fieldname' => 'Название поля',
	'maxlength' => 'Максимальная длина',
	'fieldtype' => 'Тип',
	'fieldprimary' => 'Первичный ключ',
	'fieldautoincrement' => 'Автоматическое увеличение',
	// ======= END v4 LOCALES =======

	'backup' => 'Резервная копия',
	'database' => 'База данных',
	'desc_backup' => 'Резервное копирование базы данных путем генерации и загрузки файла дампа MySQL. Если база данных большая, то рекомендуется, чтобы вы использывали <b>mysqldump</b> utility (via the MySQL command line interface). Вы можете восстановить файл дампа на более позднее время здесь использованием MySQL CLI или третьих приложений баз данных участника управления, такие как PhpMyAdmin.',
	'backupoptions' => 'Опции Резервной копии',
	'genbackup' => 'Создание резервного копирования',
	'title_createtable' => 'Добавить "СОЗДАЙТЕ ТАБЛИЦУ" SQL заявления',
	'desc_createtable' => 'Включение этой опции будет добавлять "CREATE TABLE tablename;" SQL выступлении перед вставкой заявления (включить эту, если вы планируете восстановить файл дампа в пустую базу данных).',
	'title_compressdump' => 'Сжатие SQL Dump',
	'desc_compressdump' => 'Сжатие Dump файла используя <b>gzip</b> сжатие.',
	'repairoptimize' => 'Восстановление / Оптимизация',
	'desc_repairoptimize' => 'Оптимизация базы данных приводит к перезаписи индексов и есть ресурсоемким процессом для больших таблиц.',
	'repair' => 'Восстановление',
	'optimize' => 'Оптимизация',
	'repairall' => 'Восстановление всего',
	'optimizeall' => 'Оптимизация всего',
	'tablelist' => 'Список таблиц',
	'tablename' => 'Название таблицы',
	'tabletype' => 'Тип таблицы',
	'rows' => 'Строки',
	'indexsize' => 'Размер Индекса',
	'optimizedtable' => 'Оптимизирована таблица %s. MySQL статус сообщения: %s',
	'repairedtable' => 'Восстановлена таблица %s. MySQL статус сообщения: %s',
	'optimizedalltables' => 'Оптимизированы %s таблицы',
	'repairedalltables' => 'Восстановлены %s таблицы',
);

?>