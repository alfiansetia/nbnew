<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-03-07 21:05:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\laragon\www\nb\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2024-03-07 21:05:52 --> Unable to connect to the database
ERROR - 2024-03-07 21:05:53 --> 404 Page Not Found: Faviconico/index
ERROR - 2024-03-07 21:06:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\laragon\www\nb\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2024-03-07 21:06:05 --> Unable to connect to the database
ERROR - 2024-03-07 21:10:11 --> 404 Page Not Found: Login/index
ERROR - 2024-03-07 21:11:37 --> 404 Page Not Found: Public/uploads
ERROR - 2024-03-07 21:12:47 --> 404 Page Not Found: Public/uploads
ERROR - 2024-03-07 21:21:39 --> Severity: error --> Exception: Too few arguments to function Model_howto::load_data(), 0 passed in C:\laragon\www\nb\application\controllers\Howto.php on line 22 and exactly 2 expected C:\laragon\www\nb\application\models\Model_howto.php 6
ERROR - 2024-03-07 21:21:39 --> Severity: error --> Exception: Too few arguments to function Model_howto::load_data(), 0 passed in C:\laragon\www\nb\application\controllers\Howto.php on line 22 and exactly 2 expected C:\laragon\www\nb\application\models\Model_howto.php 6
ERROR - 2024-03-07 21:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '? and b1.name like ? and c2.name like ?
                ORDER BY b1.id ASC' at line 9 - Invalid query: SELECT b1.*,c2.name as cityname,p3.name as provincename,t3.lang_name
				FROM tbl_distributor b1
				left JOIN tbl_city c2
				ON b1.tbl_city = c2.id
				left JOIN tbl_province p3
                ON b1.tbl_province = p3.id
                left JOIN tbl_lang t3
                ON b1.lang_id = t3.lang_id
                WHERE b1.lang_id=? and b1.name like ? and c2.name like ?
                ORDER BY b1.id ASC
ERROR - 2024-03-07 21:29:41 --> Query error: Table 'nbvixpro.tbl_province' doesn't exist - Invalid query: SELECT b1.*,c2.name as cityname,p3.name as provincename,t3.lang_name
				FROM tbl_distributor b1
				left JOIN tbl_city c2
				ON b1.tbl_city = c2.id
				left JOIN tbl_province p3
                ON b1.tbl_province = p3.id
                left JOIN tbl_lang t3
                ON b1.lang_id = t3.lang_id
                ORDER BY b1.id ASC
ERROR - 2024-03-07 21:56:31 --> 404 Page Not Found: Public/js
ERROR - 2024-03-07 21:56:31 --> 404 Page Not Found: Public/js
ERROR - 2024-03-07 21:56:31 --> 404 Page Not Found: Public/css
ERROR - 2024-03-07 21:57:16 --> 404 Page Not Found: Public/js
ERROR - 2024-03-07 21:57:16 --> 404 Page Not Found: Public/js
ERROR - 2024-03-07 21:57:17 --> 404 Page Not Found: Public/css
