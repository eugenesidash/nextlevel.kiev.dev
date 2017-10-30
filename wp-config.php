<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/nextlevel/nextlevel.kiev.ua/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'nextlevel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
define('ALLOW_UNFILTERED_UPLOADS', true);
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hk&x#15Zl`i?o?q7[of<ADaH4`j8[X7w:o+x+EU*)]au*RP~N,Mfu[fh7-c[gLxH');
define('SECURE_AUTH_KEY',  'tL7SMFo<uJERcaE8U0axbaCXUS_HH14ELDAOX|,]4pn!M/%MZ>ftOpVMq<l/j/0]');
define('LOGGED_IN_KEY',    'Gu,?AdI1k~Alc)+N]AO~&@fc;~V<)&kRm}7$c#!$2?&a9a=#1eX*-=M.,dYXxC;{');
define('NONCE_KEY',        'YD/M/UR+Zdg&eI$|cl{ql4<!HVt<;X-]`E~Q0hk<Em5;|8S8,:.5jQo-CYl[ZO--');
define('AUTH_SALT',        'W(OISK?YiXkWw_a/=J8PUsiEOEtjuGAdg}4*nj}0C?+nR#?X<[ae,0#4CS2}5w>(');
define('SECURE_AUTH_SALT', 'O_~4,:*h|}T(Y|JfI/K gH#^bWs-BGZmq+vPF.V;hO;cF2lv5-u)[}m*M)~3bK!@');
define('LOGGED_IN_SALT',   '`[M+#[j>Ak4`EfQ5Bv705ZUi*BY+r<I+a&V|R-2JqE5U#M%o.Cy4?uAf^YH3DG_+');
define('NONCE_SALT',       'W{$& 7e]()wDRg|LUQuIddTQ[FtyHa|0H(=Dd?=CNd}-;0_u(zTXZNk$Kh^z[Scg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
