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
define( 'DB_NAME', 'dd_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BJ6gb5lL}SB&Pa,is.$t(dDA<sFST$|%y(QhM 6gE|K vKZt+2!}-KO=Gah54w8I' );
define( 'SECURE_AUTH_KEY',  ' ==K1j!]#v20MQI#v-GL.BBVj3`i5hsoHt(x^s8,o%+3P~NyD%##?Xx87x4t_wX^' );
define( 'LOGGED_IN_KEY',    '7W|Yw$WvYtocat~XL-2K6&hD/v@ax#>]e.6$.&alS=>0??K{U$Spz3k#UjZSor-L' );
define( 'NONCE_KEY',        '_^V]*6~nh; y7x5=H1n9,D`j{qpgt?Ub?d6-Fw-Z[6ZL2e:..4&&|vXe`aA/>Ev~' );
define( 'AUTH_SALT',        'mZ~-C;5WB:i!3<5j%3$hv5if88u?lbWKdw4 +QZF*9ovZt+|,#lyy7+nws=LzzzP' );
define( 'SECURE_AUTH_SALT', '&lCm@o@1>]`^<9p3@-s(ZeY6m5^51QLs?#EI$i9?YSF*`uGXUj}DwBmW)Y~qu[z1' );
define( 'LOGGED_IN_SALT',   '=z _G<Gfrg;42vASravR0W{dL ;9Sgs_LwvN2l^:^Z]*YaiJK4A=)lvi)nw*LMy.' );
define( 'NONCE_SALT',       ' A|~E6*Ojil>y}AU/c6HEn%fDl<V&)S@qJTm>tnN?-x%xT,F9oIc4E-9G=Q}B9F|' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_dd_bd';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
