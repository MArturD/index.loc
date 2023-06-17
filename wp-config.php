<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'index' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jZj{=Zb<Tc%LZG_+dA&riTb+?|?!L)-:$#Zr^%2Dy]3n3.rUx3e/$X#x&!*gDx2$' );
define( 'SECURE_AUTH_KEY',  'Ca_qjC-~j=0!sD}ZOjyPN@D{jBA$&}yUYd8)zy`(|HE<B%xX[>s@0fBWK@|Zn7<r' );
define( 'LOGGED_IN_KEY',    'H9:)}`qup::G x(Um?EruL{gcGat}3 Mgyy+/*i_oSSR}l?=&`<RkY:<Q%~y6AEX' );
define( 'NONCE_KEY',        '02?jznTT((VZEJkZ}~yJQ0`#R1ya=!8o!2sJ6Zw&2JW^IWD|/-3Pt*%<}=lz[,8o' );
define( 'AUTH_SALT',        '@J4~.[, 7`6>zTx%`D0Fm,lNL;=|w*J[|O.4`rL}uDc!i[9)-Gk|.]gI]oH`T@`s' );
define( 'SECURE_AUTH_SALT', 'RZlvJHRST@kHog+=_*9E&>vWDE$92/6+Js:w$z?e>ab&~-HV3cpf~PlNMLM#Dn&Q' );
define( 'LOGGED_IN_SALT',   'j=TPib4MXZrJmOOROA0Q=npLTx&eMA?Q5`723,/|evMk=#R5&rsR,$A?jTHH+3ra' );
define( 'NONCE_SALT',       'dU2<`JUo@2T8XBd(`&;ZSxE_-#j`pz`7p8a066/<#9*) ;W{]]}JsZ{]g##B&mu(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
