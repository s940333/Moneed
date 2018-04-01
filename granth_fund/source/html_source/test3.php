<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
        
        //將資料庫裡的所有會員資料顯示在畫面上
        $sql = "SELECT * FROM member_table";
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {
                 echo "$row[0] - 名字(帳號)";
        }
}
else
{
        echo '訪客，您好!';
        
}
?>