<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-19 06:44:29 --> 404 Page Not Found: user/Dashboard/index
ERROR - 2018-04-19 06:45:16 --> 404 Page Not Found: user/Dashboard/index
ERROR - 2018-04-19 06:48:38 --> Severity: error --> Exception: Unable to locate the model you have specified: Profile_model C:\wamp64\www\ci_material_admin\system\core\Loader.php 344
ERROR - 2018-04-19 06:50:18 --> Severity: error --> Exception: Call to undefined method User_model::user_detail() C:\wamp64\www\ci_material_admin\application\controllers\user\Profile.php 26
ERROR - 2018-04-19 07:01:04 --> 404 Page Not Found: admin/Auth/profile
ERROR - 2018-04-19 07:04:32 --> 404 Page Not Found: admin/Auth/profile
ERROR - 2018-04-19 07:04:47 --> 404 Page Not Found: admin/Auth/profile
ERROR - 2018-04-19 07:37:46 --> 404 Page Not Found: user/Change_pwd/index
ERROR - 2018-04-19 07:40:17 --> 404 Page Not Found: user//index
ERROR - 2018-04-19 08:21:05 --> Severity: Notice --> Undefined variable: user C:\wamp64\www\ci_material_admin\application\views\user\profile.php 20
ERROR - 2018-04-19 08:21:05 --> Severity: Notice --> Undefined variable: user C:\wamp64\www\ci_material_admin\application\views\user\profile.php 32
ERROR - 2018-04-19 08:21:05 --> Severity: Notice --> Undefined variable: user C:\wamp64\www\ci_material_admin\application\views\user\profile.php 44
ERROR - 2018-04-19 08:21:05 --> Severity: Notice --> Undefined variable: user C:\wamp64\www\ci_material_admin\application\views\user\profile.php 56
ERROR - 2018-04-19 08:22:44 --> Severity: Notice --> Undefined property: Profile::$auth_model C:\wamp64\www\ci_material_admin\application\controllers\user\Profile.php 49
ERROR - 2018-04-19 08:22:44 --> Severity: error --> Exception: Call to a member function change_pwd() on null C:\wamp64\www\ci_material_admin\application\controllers\user\Profile.php 49
ERROR - 2018-04-19 08:24:25 --> 404 Page Not Found: user/Auth/profile
ERROR - 2018-04-19 08:45:20 --> 404 Page Not Found: admin/Auth/profile
ERROR - 2018-04-19 08:50:39 --> 404 Page Not Found: admin/Auth/profile
ERROR - 2018-04-19 08:55:15 --> Severity: error --> Exception: Call to undefined method User_model::get_user_detail() C:\wamp64\www\ci_material_admin\application\controllers\admin\Profile.php 26
ERROR - 2018-04-19 16:35:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/html/codeglamour_scripts/ci_material_admin/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-19 16:35:51 --> Unable to connect to the database
ERROR - 2018-04-19 16:35:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/html/codeglamour_scripts/ci_material_admin/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-19 16:35:51 --> Unable to connect to the database
ERROR - 2018-04-19 16:35:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) /var/www/html/codeglamour_scripts/ci_material_admin/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2018-04-19 16:35:51 --> Unable to connect to the database
ERROR - 2018-04-19 16:35:51 --> Query error: Access denied for user 'root'@'localhost' (using password: YES) - Invalid query: SELECT COUNT(*) AS `numrows` FROM `ci_users`
ERROR - 2018-04-19 16:35:51 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/codeglamour_scripts/ci_material_admin/system/database/DB_driver.php 1223
ERROR - 2018-04-19 16:40:51 --> 404 Page Not Found: Public/favicon.ico
ERROR - 2018-04-19 17:27:27 --> Query error: Unknown column 'is_verify' in 'field list' - Invalid query: INSERT INTO `ci_users` (`firstname`, `lastname`, `email`, `password`, `is_active`, `is_verify`, `token`, `last_ip`, `created_at`, `updated_at`) VALUES ('Code', 'Glamour', 'codeglamour1@gmail.com', '$2y$10$XcQZfHmr/UGlHbPLnR7i5.HFFzHYTDPPZg1JmOWbqezKEabEI5GC6', '0', '0', 'd4c2e4a3297fe25a71d030b67eb83bfc', '', '2018-04-19 : 05:04:27', '2018-04-19 : 05:04:27')
