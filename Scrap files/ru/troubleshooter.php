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
	'troubleshooter' => 'Устранение неполадок',

	// Manage Categories
	'categories' => 'Категории',
	'managecategories' => 'Управление категориями',
	'desc_troubleshootercat' => '',
	'tscattitle' => 'Название Категорий',
	'desc_tscattitle' => '',
	'tscatviews' => 'Списки',
	'desc_tscatviews' => 'Колличество списков, которые есть в категории. Они увеличиваются автоматически, когда пользователь нажимает на категорию. Но число, может быть изменено так, как Вам нужно.',
	'tscatdisporder' => 'Порядок отображения',
	'desc_tscatdisporder' => 'Выберите Порядок отображения в категории. Категории сортируются в зависимости от Порядока отображения по возрастанию.',
	'tscatlist' => 'Список категорий',
	'tscatdesc' => 'Описание',
	'desc_tscatdesc' => 'Описание категории отображается справа под названием категории. Рекомендуется описать категорию здесь. Лимит 255 символов на описание.',
	'steps' => 'Шаги',

	// Insert Category
	'insertcategory' => 'Добавить Категорию',
	'tscatdetails' => 'Детали Категории',
	'templategroups' => 'Группы Шаблонов',
	'desc_templategroups' => 'Выберите группу шаблонов, которая будет применена к этой категории.',
	'inserttscat' => 'Добавить Категорию',
	'updatetscat' => 'Обновить Категорию',
	'selectonetgroup' => 'ОШИБКА: Вы должны выбрать как минимум одну Группу Шаблонов',
	'troubleshootercatinsertconfirm' => 'Категория Устранения неполадок "%s" успешно добавлена',
	'tcatdeleteconfirm' => 'Категория Устранения неполадок успешно удалена',
	'tcatsdeleteconfirm' => 'Категории Устранения неполадок успешно удалены',
	'tcatdelconfirm' => 'Вы уверены, что хотите удалить эту Категорию?\n Удаление категории также удалить все созданные для нее Шаги.',
	'invalidtroubleshootercategory' => 'Неправильная Категория Устранения неполадок',

	// Edit Category
	'editcategory' => 'Редактировать Категорию',
	'troubleshootercatupdateconfirm' => 'Категория Устранения неполадок "%s" успешно обновлена',
	
	// Manage Steps
	'troubleshootersteps' => 'Шаги Устранения неполадок',
	'managesteps' => 'Управление шагами',
	'addstep' => 'Добавить Шаг',
	'addcategory' => 'Длобавить Категорию',
	'troubleshooters' => 'Устранения неполадок',
	'filter' => 'Фильтр',
	'stepdelconfirmmsg' => 'Вы уверены, что хотите удалить этот шаг? Удаление шага, удалит все следующие шаги.',
	'tsdelconfirm' => 'Шаг Устранения неполадок успешно удален',
	'stepdeleteconfirm' => 'Удалены "%s" шаги Устранения неполадок',
	'filtertgroupid' => 'Группа Шаблонов',
	'desc_filtertgroupid' => 'Выберите группу шаблоно для фильтрации данных. Будут видны только категории, которые относятся к этой Группе шаблонов.',
	'listview' => 'Отображение Списка',
	'tssteplist' => 'Список шагов Устранения неполадок',
	'treeview' => 'Древовидный вид',

	// Insert Step
	'insertstep' => 'Добавить Шаг',
	'stepdetails' => 'Детали Шага Устранения неполадок',
	'tssubject' => 'Тема',
	'tsdisporder' => 'Порядок отображения',
	'desc_tsdisporder' => 'Выберите порядок отображения шагов Устранения неполадок. Шаги сортируются по возрастанию.',
	'updatestep' => 'Обновить Шаг',
	'tslinks' => 'Предыдущие Шаги',
	'desc_tslinks' => 'Выберите предыдущие Шаги для этого Шага.',
	'selectonelink' => 'ОШИБКА: Пожалуйста, выберите хотя бы 1 предыдущий шаг',
	'tsaddconfirm' => 'Шаг Устранения неполадок "%s" успешно добавлен',
	'editstep' => 'Редактировать Шаг',

	// Edit Step
	'invalidtroubleshooter' => 'Неправильный Устранение неполадок',
	'tsupdateconfirm' => 'Шаг Устранения неполадок "%s" успешно обновлен',
	'updatestep' => 'Обновить Шаг',
	'editstep' => 'Редактировать Шаг',

	// Import/Export
	'importexport' => 'Импорт/Экспорт',
	'export' => 'Экспорт',
	'exportxml' => 'Экспорт XML',
	'exportcat' => 'Категории Устранения неполадок',
	'desc_exportcat' => 'Выберите категории Устранения неполадок для экспорта. Будут экспортированы только шаги из выбранных категорий.',
	'importtroubleshooter' => 'Импорт Устранения неполадок',
	'troubleshooterfile' => 'Импортировать файл',
	'desc_troubleshooterfile' => 'Выберите XML файл для импорта',
	'importxml' => 'Импорт XML',
	'importconfirm' => 'Импортированные данные из файла XML',

	// Comments
	'comments' => 'Комментарии',
	'legend' => 'Легенда: ',

	// Reports
	'popularcategories' => 'Популярные Категории',
	'popularsteps' => 'Популярные Шаги',
	'views' => 'Просмотры',
	'steptitle' => 'Название Шага',
);
?>