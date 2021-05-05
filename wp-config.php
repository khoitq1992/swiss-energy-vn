<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'swiss_landing_page' );

/** Username của database */
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'wP12345678!@#' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm3x@d}o9aWq a{b7RuKl`ykqCvJ]p~at<@E>V&UI:ViaM4:l:F5#o#hRcBGUH35/' );
define( 'SECURE_AUTH_KEY',  '(jfoFf7Bc,MvD}aMI+gBV;C;_o|>p/5(5I`k?ir_dJAd9bWX3<Gz&:.OC)gAOiD?' );
define( 'LOGGED_IN_KEY',    'ADN>C)g! jzI9g6N1Ci)#3213R@$sU+#p{Zgo6Ibn!;!|bH7_A`bSe<rFD-6g(jv' );
define( 'NONCE_KEY',        'N5@*a,DAFyH(dv.7.XRoUP|V&-Whrtx;30(9E398]5r>]a|I~^T|J[In|X0H+IX#' );
define( 'AUTH_SALT',        'Hr9)rt0=XrX3M`!T7_$;wx+plII:a)*g;zZpC6T5pAK<~EnonY2DP3kJm_O|S)=l' );
define( 'SECURE_AUTH_SALT', '8oyIm@}@aWDq9<WonnXkgmQn1^u_3QN8)`6E4=#f}Ed2f|Yo|2z%sRO@g$xqcp@c' );
define( 'LOGGED_IN_SALT',   '%LcX90sCb:u-9sWT*D-gL@RtBO{t@;bm1XKdhNP=P_Q@qMM&Q~7a ce+L3?+o!jZ' );
define( 'NONCE_SALT',       'jaJcp5a]i;h8d:bbE/d]HXCKd1d|TbMzgr[}IOEw6-isb9.59ZEI~5CTpKQKOoAn' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'webtestkt_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
