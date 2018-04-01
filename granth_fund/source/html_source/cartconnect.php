<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

$project_number = $_POST['project_number'];

//搜尋資料庫資料
$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//SELECT AUTO_INCREMENT 
//FROM information_schema.TABLES 
//WHERE TABLE_SCHEMA = '' AND member_table = ''

//SELECT Auto_increment
//FROM information_schema.tables
//WHERE table_schema = DATABASE() AND table_name = your_table_name

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        
        echo '<meta http-equiv=REFRESH CONTENT=1;url=fund_cart12.php>';

}
else
{
        echo '<meta http-equiv=REFRESH CONTENT=1;url=fund_cart1.php>';
}
?>