<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$support1 = $_SESSION['fundmoney1'];
$support2 = $_SESSION['fundmoney2'];
$user = $_SESSION['username'];
$store_number = $_SESSION['store_number'];




$link = mysql_connect('mysql.lionfree.net','u671505230_tien','spys880824') or die ('connect fail.'); 
   mysql_select_db ('u671505230_tien') or die('select db fail.');
   
$sqlstr="SELECT * FROM member_table WHERE username = '".$user."';";
$data = mysql_query($sqlstr) or die('Query fail.');
$row = mysql_fetch_row($data);

$user1 = $row[6];

$sqll = "SELECT * FROM pro_store where item_number = '$store_number'";
$resultl = mysql_query($sqll);
$sto = @mysql_fetch_row($resultl);

$fundname1 = $sto[4];
$fundname2 = $sto[6];
$money = $sto[2];



        //新增資料進資料庫語法
        $sql = "INSERT INTO storelist (store_number,store_username, store_itemnumber, store_itemprice, payment, store1_fund, store1_fundmoney, store2_fund, store2_fundmoney)VALUES (NULL, '$user1', '$store_number', '$money', NULL, '$fundname1', '$support1', '$fundname2', '$support2')"

;
        if(mysql_query($sql))
        {
                
                echo '<meta http-equiv=REFRESH CONTENT=2;url=store_cart3.php>';
        }
        else
        {
                echo '失敗!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=home.php>';
        }

?>