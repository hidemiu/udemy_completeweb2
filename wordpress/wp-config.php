<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'userhide');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mmmiuraaa');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F %.(/DdF3;PW5#D^4BbEJA8+RzN6&AT^m)f-KM 4&~bSR5%Dz9I{H2?=gQqjq7v');
define('SECURE_AUTH_KEY',  'ZT$a=q+.ynKl:q2=W.`sr]49qZ~?E;J1a!n}H {|Z!I{]5tq=,QjO:&mT=+pER@j');
define('LOGGED_IN_KEY',    'k7nqSc6G0fq_C8<Ryj6FVR<xn&b1 +^9=wEomylkX;JE3l#RE6x6yChe# 5aKGLL');
define('NONCE_KEY',        'Wnet31S5d .<[#F&6&=B>|4jv*K0bOI|,}d>*rrtU:kL4y)z/>ttt1?i_mGr7yU4');
define('AUTH_SALT',        '<Pm7^onZ;hn#d8rwTQv;N/`2W00&,3}TL#bhE+,O[)6s^UkJ)R29E5v%U5Bu!7.H');
define('SECURE_AUTH_SALT', '7_(m[i*WW yEKW=jKo#D.U~#IOhHjk0_gOQu#} $j5,g##q/pCSVP+00yx#CEy#P');
define('LOGGED_IN_SALT',   'p=UHzhd/E@I<D7Aox~J3`v]6SiUh#ktR/oT=>s0ZzsV$kFs;hRe~7Q@kR[RbnzPw');
define('NONCE_SALT',       'G,)X`+wW~UShx3)[:6_)nq3G,HGs#;}&:`O(#}v?v7Rq z7?R&qW%Xm+T$u5h;Vn');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
