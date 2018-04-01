<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$support = $_SESSION['fundmoney'];
$user = $_SESSION['username'];
$pronumber = $_SESSION['projectnum'];




$link = mysql_connect('mysql.lionfree.net','u671505230_tien','spys880824') or die ('connect fail.'); 
   mysql_select_db ('u671505230_tien') or die('select db fail.');
   
$sqlstr="SELECT * FROM member_table WHERE username = '".$user."';";
$data = mysql_query($sqlstr) or die('Query fail.');
$row = mysql_fetch_row($data);

$user1 = $row[6];

        //新增資料進資料庫語法
        $sql = "INSERT INTO fundlist (username, listpronum, price, payment, fund_date, id) VALUES ('$user1', '$pronumber', '$support', NULL, 0000-00-00, '$user')";
        if(mysql_query($sql))
        {
                
                echo '<meta http-equiv=REFRESH CONTENT=2;url=fund_cart3.php>';
        }
        else
        {
                echo '失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=test2.php>';
        }

?>