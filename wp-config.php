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
define('DB_NAME', 'kproject');

/** Имя пользователя MySQL */
define('DB_USER', 'kproject');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'kropro37');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7);rpFAD2[sEj[Xq`$+>1~MupewQ9!YI-oS@ss.s~q;?i]D[D^XD)vDP7UQZ2SNy');
define('SECURE_AUTH_KEY',  'aPLJ~T8KPVIfK=?z3@x{+{o0jf6:}Z%W*%jqKi_g[9,`B%&7i0Qi^Nb,t]l k, 7');
define('LOGGED_IN_KEY',    'uyIq/ Ctwjkb_Y>cezGK+M+n1I6j) 3MBq=-q;ME^GPOX-K&uk~`GAL@INx<3Rx_');
define('NONCE_KEY',        'Q#nm/s=NqPJr_HjAB@_U:/*VBSx@(h@K (,^fXi&Z:65jHuVrC)Ee}u<]NYA99It');
define('AUTH_SALT',        'QU_HLe$93z_Sg6Pg`eqfQ7pt-rjcLkcJX<E>%DF+CPftym2[G)R+od6OhW.M3fd{');
define('SECURE_AUTH_SALT', '6.$7AK-zZXBjZpb<F7z@H_0x%N9(Du%1;OuhS:d^baoai<[(_QGl3eEJod<}.4M5');
define('LOGGED_IN_SALT',   'eX:a|@Nxy+t097BOl%@@7cKhAO!;UlMYSd_q+s&<x+I;E{UR%66DT@H)D_:}2F)G');
define('NONCE_SALT',       'IyL*$*]MvhR.nlfV8w9roPARtMbS#Qa<`iHXv*@f.lzEZ(I.Ch:wTBzMYS%<fXxa');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
