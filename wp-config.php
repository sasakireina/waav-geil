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
define('DB_NAME', 'waav-geil');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6Q.59p!ibF,`ZZLxG$M@FPi?J3v%kmqc/#7%9ac%#~x;B(t_n85}q?n8u!ha(gbT');
define('SECURE_AUTH_KEY',  ';f1#Q)L2[ B7=|<nU=cv,tr=MJd.pf!s]pj@eFC{3<0kt.11SH<m>y Rr{_j#}Xh');
define('LOGGED_IN_KEY',    'f43{-L/17+gy{ZANEwGM136^e>:Up[~2VFbi)0Kx:y0F2~6Q+[J+Oss@5`xfy.l$');
define('NONCE_KEY',        'W}N0:SJGv L-Fz<E3b]c+ Ohi2]-e!Y|hu}vluZO4Z_(tkD]I_+:/V;T`{iR/$b}');
define('AUTH_SALT',        'frVNfKw[DVtPD4<`+X&p.}0_5&3ClrdN7DC6s!pgC(Fal8+_AjgF5rTUUC?(2.J2');
define('SECURE_AUTH_SALT', '8~&D{SJVt!cRsAI;OMV@O`R2&T]=i~~-N3{h7k-~D[8Hu;jw57kLXM(T^]z!FQr+');
define('LOGGED_IN_SALT',   '&9^B>BX] P_LRq;@Wf8AEYI1,,;//Z|4w; ;qqAq0d@;PUnS(~l#N_l6TM}$`>]C');
define('NONCE_SALT',       'Q!*7ja}}{VD^Dt[13C1E8cQ@!q<oi;1#^Az{/AS|- J@V;.Cy3m$rDCIX0#t)C8b');

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
