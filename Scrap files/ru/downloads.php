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
	'downloads' => 'Загрузки',

	'categories' => 'Категории',

	// Import from v3
	'errorurlregex' => 'ОШИБКА: Вы ввели неверный URL для внешнего файла. Пожалуйста, введите URL-адрес в виде "http://domain.com/file"',

	// Insert Category
	'selectonetgroup' => 'ОШИБКА: По крайней мере один шаблон группы должен быть указан',
	'insertcategory' => 'Добавить Категорию',
	'dlcatdetails' => 'Детали Категории',
	'dlcattitle' => 'Название Категории',
	'desc_dlcattitle' => 'Название загруженой Категории.',
	'dlcatdisporder' => 'Порядок отображения',
	'desc_dlcatdisporder' => 'Категории будут отсортированы в порядку отображения, установленном здесь (возрастание).',
	'usergroups' => 'Пользовательские Группы',
	'desc_usergroups' => '',
	'insertdlcat' => 'Добавить Категорию',
	'updatedlcat' => 'Обновить Категорию',
	'parentcategory' => 'Родительская Категория',
	'desc_parentcategory' => 'Родительская категория, в которой будет создана новая категория .',
	'cattype' => 'Тип Категории',
	'desc_cattype' => '<i>Общественный:</i> Видимый как штабным пользователям, так и клиентским пользователям через интерфейс клиентской поддержки.<br><br><i>Личные:</i> Видна только сотрудникам пользователей через панель управления персоналом.',
	'maincategory' => 'Главная Категория',
	'downloadscat' => '(Загрузки)',
	'dlinsertconfirm' => 'Категория "%s" добавлена успешно',
	'templategroups' => 'Шаблон группы',
	'desc_templategroups' => 'Категории могут быть отнесены к конкретным группам шаблона. Это делает эту категорию видимой только в пределах указанных групп.',
	'filtertgroupid' =>'Шаблон группы',
	'desc_filtertgroupid' => 'Категории могут быть отфильтрованы по шаблону группы, чтобы сделать их управляемость легче.',

	// Manage Categories
	'managecategories' => 'Управление категориями',
	'categorylist' => 'Список Категорий',
	'filter' => 'Фильтр',
	'addsubcat' => 'Добавить Подкатегорию',
	'addfile' => 'Добавить Файл',
	'dlcatdelconfirmmsg' => 'Вы уверены, что хотите удалить эту Категорию? Удаление категории приведет к удалению, всех подкатегорий и содержащиехся загруженых элементов. Это действие необратимо!',
	'dlcatdeleteconfirm' => 'Загружена Категория удалена "%s"',

	// Manage Files
	'managefiles' => 'Управление файлами',
	'dlitemlist' => 'Список Файлов',
	'passprotected' => 'Пароль безопасности',
	'legend' => 'Обозначения: ',
	'filelinkact' => 'Ссылка',
	'dlitemsdelconfirm' => 'Загруженная запись успешно удален',
	'dlitemdelconfirm' => 'Загруженная запись успешно удален',
	'dlitemdelconfirmmsg' => 'Вы уверены, что хотите удалить эту загруженную запись? После удаления, как файл, так и записи базы данных будут удалены.',

	// Insert File
	'insertfile' => 'Вставить Файл',
	'dlitemtitle' => 'Загрузить название',
	'desc_dlitemtitle' => 'Загрузить имя или название.',
	'dlitemdesc' => 'Скачать Описание',
	'desc_dlitemdesc' => 'Описание загруженной записи.',
	'dlitemfilename' => 'Название загрузки',
	'dlitemfilesize' => 'Размер загружаемого файла',
	'dltotaldownloads' => 'Всего загрузок',
	'dlfiledetails' => 'Детали загрузки',
	'dlfiledisplayorder' => 'Порядок отображения',
	'desc_dlfiledisplayorder' => 'Загрузки будут упорядочены в соответствии с порядком отображения (возрастанию) указаном здесь.',
	'insertfile' => 'Вставить Файл',
	'dlitemfile' => 'Загрузить файл',
	'desc_dlitemfile' => 'Просмотрите и выберите файл, чтобы переслать серверу.',
	'passwordprotection' => 'Пароль Безопасности',
	'enablepassword' => 'Включить защиту паролем',
	'desc_enablepassword' => 'Если защищен паролем, требуется, чтобы клиентский пользователь ввел пароль перед возможностью загрузить файл.',
	'password' => 'Пароль',
	'desc_password' => 'Введите пароль (смотрите <i>Включить защиту паролем</i> выше).',
	'passwordconfirm' => 'Подтверждение пароля',
	'desc_passwordconfirm' => 'Подтвердите пароль.',
	'errorfilesize' => 'ОШИБКА: Файл слишком большой. <b>upload_max_filesize set</b> in the php.ini (PHP configuration file) is set lower than is needed.',
	'errorpartialupload' => 'ОШИБКА: файл не был загружен надлежащим образом',
	'errornofile' => 'ОШИБКА: Файл не был загружен',
	'filetype' => 'Тип Файла',
	'dlitemfilelink' => 'Или ссылку на существующий файл',
	'desc_dlitemfilelink' => 'Вместо загрузки файла вы можете ссылаться на внешние размещение файла.',
	'passworddontmatch' => 'ОШИБКА: Пароли не совпадают',
	'dliteminsertconfirm' => 'Загруженая информация "%s" вставлена успешно',

	// Update File
	'updatefile' => 'Обновите Загрузку',
	'editfile' => 'Измените Загрузку',
	'invaliddlitem' => 'Неверная загрузка позиции',
	'dlitemupdateconfirm' => 'Загрузка позиции "%s" обновлена успешно',
	'resetpassword' => 'Сброс пароля',

	// Edit Category
	'invaliddlcat' => 'Неверная загрузка категории',
	'editcategory' => 'Изменить категорию',
	'dlupdateconfirm' => 'Загруженая категория "%s" успешно обновлена',

	// Comments
	'comments' => 'Комментарии',

	// Reports
	'populardownloads' => 'Популярные загрузки',
	'downloadno' => 'Загрузки',
	'filetitle' => 'Загрузка названия',
	'chartfiles' => 'Файлы',
);
?>