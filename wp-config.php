<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'almi41871664771');


/** Имя пользователя MySQL */
define('DB_USER', 'almi41871664771');


/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'HySa8/q9FVl');


/** Имя сервера MySQL */
define('DB_HOST', 'almi41871664771.db.41871664.413.hostedresource.net:3313');


/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');


/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r(^YnQcYrR|kEcGdn%&h{S~]].U#$YC70Q=B$%Io31R2yn(HB*F-mS=qxjRk:[2Z');

define('SECURE_AUTH_KEY',  '+zB[@:dYKcuM42FO9K*&NgFji-;~JrA?J@gxka?+t=;2}m+#L>WjDvrdxeZoI>B(');

define('LOGGED_IN_KEY',    'QVf)BM9$g5]apx&)bof}l?yw}3]:)8jt3}Lmhe$pxi[Jho!m16mCIJOCd8L^SE$F');

define('NONCE_KEY',        '5x`fC5pi7A5z|q])&=?[.vI>lnUXwV-X<i[={_6}cd^d>,T[BU<ub^V.[Sf#}hBm');

define('AUTH_SALT',        '-ooH.<BS$k%SU3WZz0aGMl0,7/9LgmoHq,@kPVY`{<:q60a$~4Tvt`r&ui~N{VcW');

define('SECURE_AUTH_SALT', 'oV*YmQJ-{k$c#>|u]AH=6}tz:PRLV#<dd1[ii7jp4qN.]zG:~3sZS-4BKixbD8Sj');

define('LOGGED_IN_SALT',   '= 16@bS*0_~s&,x<`>Yr&ER+Y4l)<ChQOz.ZycH8FHJ|6z$S1lz:nyziQLUq}GsV');

define('NONCE_SALT',       'BXr+1wMjndIgk^$MQO^,kwCFj.0wmF<U]2[IqipO8h#wY[&U-*XuKJOzL*#aA0^g');


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';
define( 'FORCE_SSL_ADMIN', true );


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
