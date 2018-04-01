<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$editFormAction = $_SERVER['PHP_SELF'];
$user_account=$_SESSION['username'];



$link = mysql_connect('mysql.lionfree.net','u671505230_tien','spys880824') or die ('connect fail.'); 
   mysql_select_db ('u671505230_tien') or die('select db fail.');
   
$sqlstr="SELECT * FROM member_table WHERE username = '".$user_account."';";
$data = mysql_query($sqlstr) or die('Query fail.');$row = mysql_fetch_row($data)


?>
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$FormAction = $_SERVER['PHP_SELF'];
$store_number = $_SESSION['store_number'];

//$project_number = $_POST['project_number'];

//搜尋資料庫資料
$sql = "SELECT * FROM pro_store where item_number = '$store_number'";
$result = mysql_query($sql);
$sto = @mysql_fetch_row($result);

$support1 = $_POST['support1'];
$_SESSION['fundmoney1'] = $support1;

$support2 = $_POST['support2'];
$_SESSION['fundmoney2'] = $support2;

?>


<!DOCTYPE html>
<!-- Granth | Modern Business Template v1.0 -->
<html dir="ltr" lang="en-US">
<head>

<!-- meta tags -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="Granthweb">
<meta name="author-url" content="http://www.granthweb.com">
<meta name="description" content="Modern Business Template">
<meta name="robots" content="index, follow">

<!-- favicon -->
<link rel="icon" href="assets/images/favicon.png" type="image/png">

<!-- page title -->
<title>MONEED | Modern Business Template</title>

<!-- css stylesheets -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather" type="text/css" media="all">

<!-- js -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript" src="assets/plugin/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/plugin/js/jquery.lavalamp-1.3.5.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	color: #333;
}
#top #wrapper #main .container.clearfix #sidebar #navigation li a .menu-desc {
	color: #F00;
}
</style>
</head>

<body id="top">

<!-- BEGIN #wrapper -->
<div id="wrapper">

    <!-- BEGIN #header -->
    <div id="header" class="wrapper">
        <div class="container clearfix">
        	
            <!-- BEGIN #logo -->
            <div id="logo"><a href="home.html"><img src="assets/images/moneed.png" width="315" height="90" alt="Granth"></a></div>
            <!-- END #logo -->
            
            <!-- BEGIN #page-number & #page-info -->
            <div id="page-number">02</div>
            <div id="page-info">
                <div id="page-title">
                    <h1>專案總覽</h1>
                    <span class="title-desc">Project Overview</span></div>
                <div id="preloader" class="preloader"></div>
            </div>
            <!-- END #page-number & #page-info -->            
            
           
            
        </div>
    </div>
    <!-- END #header --> 
    
    <!-- BEGIN #main -->
    <div id="main" class="wrapper">
        <div class="container clearfix"> 
            
            <!-- BEGIN #sidebar -->
            <div id="sidebar" class="aside"> 
                
                <!-- BEGIN #navigation -->
                <ul id="navigation">
                <li><a href="home.php"><span class="menu-number">00</span> 回到首頁 <span class="menu-desc">Homepage</span></a></li>
                    <li><a href="http://s940333.lionfree.net/granth_fund/source/html_source/test2.php"><span class="menu-number">01</span> 募款首頁 <span class="menu-desc">Auction Homepage</span></a></li>
                  <li class="current"><a href="home.php"><span class="menu-number">02</span> 專案總覽 <span class="menu-desc">Project Overview</span></a></li>
      
                    <li class="parent"><a href="test.php"><span class="menu-number">03</span> 會員登入 <span class="menu-desc">Member Login</span></a>
                      <ul>
                            <li><a href="test.php">登入</a></li>
                            <li><a href="newmember.php">註冊</a></li>
                      </ul>                    
                    </li>
                    <li><a href="blog.html"><span class="menu-number">04</span> 會員中心 <span class="menu-desc">Member Center</span></a></li>
                </ul>
                <!-- END #navigation --> 
                
                <!-- BEGIN #searchbox -->
              <div id="searchbox">
                    <form id="searchform" action="result_not_found.html" method="get">
                      <input id="search" name="search" type="text" value="開始搜尋...">
                        <button id="searchsubmit" type="submit">搜尋</button>


                    </form>
              </div>
                <!-- END #searchbox --> 
                
                <!-- BEGIN #widgets -->
              <div id="widgets">
                
				  <!-- BEGIN widget (portfolio slider) -->
                    <div id="widget-slider" class="widget-container"></div>
                  <!-- END widget (portfolio slider) -->
                    
                    
                   
              </div>
                <!-- END #widgets -->
                
            </div>
            <!-- END #sidebar --> 
            
            <!-- BEGIN #main-content -->
			<div id="main-content" class="content clearfix"> 
            
                <!-- BEGIN HOME page content -->
                <div id="portfolio">

                	<!-- BEGIN .post (project) -->
                    <div class="post project"></div>
                    
                    <div class="inner-content">
                        
                    
                        
                        
              </div>
                    
                    <!-- BEGIN #portfolio-content -->
                    <div id="portfolio-content">
                        <div class="portfolio-controls controls"><span class="tooltip" data-id="4"></span><a href="#" class="prev-arrow disabled">prev</a><a href="content/portfolio/portfolio-2.html" class="next-arrow" data-id="2">next</a></div>

                        <!-- BEGIN .portfolio-items -->
                        <div class="portfolio-items clearfix" data-page="1">
                        
                        <!--從這裡開始-->
                        <table>
<tr>
<td>
  <strong>募款車</strong></td>
</tr>
</table>


                        <table>
                         <tr>
                <td align="center" valign="middle" class="order_step01_style4">
                  step1. 登入&nbsp;&nbsp; &nbsp;</td>
                <td align="center" valign="middle" bgcolor="#FFFF00" class="order_step01_style5">
                  step2. 檢視 / 修改&nbsp;&nbsp; &nbsp;
                </td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step3. 預覽 / 付款&nbsp;&nbsp; &nbsp;
                </td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step4. 完成訂單&nbsp;&nbsp; &nbsp;
                </td>
              </tr>
                        </table>
                        <tr>
          <td align="left" valign="top">
		    <form action="<?php echo $editFormAction; ?>" method="POST" name="shopper_form" id="shopper_form">
			  <table width="700" class="order_step02_style6">
                <tr>
                  <td colspan="4" class="order_step02_style7"><strong>》請填入收件人的相關資料</strong></td>
                </tr>
				<tr>
                  <td width="164" align="center" valign="middle" bgcolor="#FFFF66" class="order_step02_style8">收件人</td>
                  <td width="431" " align="center" valign="middle" bgcolor="#FFFF66" class="order_step02_style9">收件地址</td>
                   <td align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style24">
					 
                     
                    </td>
               
                </tr>
				<tr>
                  <td align="center" valign="middle" class="order_step02_style12"><?php echo $row[6]; ?></td>
                  <td align="center" valign="middle" class="order_step02_style12"><?php echo $row[4]; ?></td>
                  
                </tr>
				<tr>
                  <td colspan="2" align="right" valign="middle" class="order_step02_style15">
                    我想修改
                    <a href="member_info.php" class="order_step02_style16">
                      會員基本資料》
                    </a>				  
                  </td>
                  <td width="89" colspan="2" align="right" valign="middle" class="order_step02_style29"> 
				    <input name="shopper_update" type="submit" id="shopper_update" 
                      value="修改資料" class="order_step02_style30" />
				  </td>
                </tr>
              </table>
		    <input name="id" type="hidden" id="id" value="<?php echo $row_shopper['id']; ?>" />
		    <input type="hidden" name="MM_update" value="shopper_form">
            
            	
            <?php echo $_GET['pronum']; ?> 
            
            </form>
		  </td>
        </tr>
                        
                        </form>
            <form action="<?php echo $FormAction; ?>" method="post" name="order_form" id="order_form">
             <!--TEST-->	
<table width="700" class="order_step01_style6">
                <tr>
                  <td colspan="5" class="order_step01_style18"><strong>》購物車</strong></td>
                </tr>
				<tr>
                  
                  <td  align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style20">編號</td>
                  <td  align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style21">名稱</td>
                  <td width="180"  align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style22">商品金額</td>
                 
                </tr>
				
                <tr>
                   
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $sto[0]; ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $sto[1]; ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $sto[2]; ?>
                    </td>
                    
                    
                </tr>
                <tr>
                   
                    <td align="center" valign="middle" class="order_step01_style24">
					  ..
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">..
					 
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					 ..
                    </td>
                    
                    
                </tr>
                
                <tr>
                  
                  <td width="270" align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style22">募款機構1</td>
                  <td width="234" align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style23">買家贊助金額</td>
                  <td align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style24">
					 
                     
                    </td>
                </tr>
				 <tr>
                   
                    <td align="center" valign="middle" class="order_step01_style24">
					  ..
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">..
					 
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					 ..
                    </td>
                 </tr>    
                <tr>
                  
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $sto[4]; ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24"><label for="support"></label>
    <input type="text" name="support1" id="support1"  /></td>
                    
                </tr>
                <tr>
                   
                    <td align="center" valign="middle" class="order_step01_style24">
					  ..
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">..
					 
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					 ..
                    </td>
                 </tr>   
               
                <tr>
                  
                  <td width="270" align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style22">募款機構2</td>
                  <td width="234" align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style23">買家贊助金額</td>
                   <td align="center" valign="middle" bgcolor="#FFFF66" class="order_step01_style24">
					 
                     
                    </td>
                </tr>
				 <tr>
                   
                    <td align="center" valign="middle" class="order_step01_style24">
					  ..
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">..
					 
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					 ..
                    </td>
                 </tr>    
                <tr>
                 
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $sto[6]; ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24"><label for="support"></label>
    <input type="text" name="support2" id="support2"  />
   
                  </td>
                  <td align="center" valign="middle" class="order_step01_style24">
					 <input type="submit" name="nsupport" id="nsupport" value = "確定金額"  />
                    </td>
                    
                </tr>
                
                
              </table>
            </form>  
             </td>
        </tr>
            
                <form action="storeaddlist.php" method="post" name="next_form" id="next_form">
                <td width="89" colspan="2" align="right" valign="right" class="order_step02_style29"> 
				    <input name="shopper_update" type="submit" id="shopper_update" 
                      value="下一步" class="order_step02_style30" />
				  </td>
                 
                  </form>      
                        
                        
                        
                        
                        <!--這裡結束>	
                                                            
                        </div>
                       <!-- END .portfolio-items -->
                       
                    </div>
                    <!-- END #portfolio-content -->
                    
          </div>
                <!-- END HOME page content -->
                
      </div>   
            <!-- END #main-content --> 

           
  </div>
</div>
    <!-- END #main --> 
    
    <!-- BEGIN #footer -->
    <div id="footer" class="wrapper">
        <div class="container clearfix">
            <div class="content"></div>
            <div id="scroll-top"><a href="#top"></a>Scroll to top</div>
        </div>
    </div>
    <!-- END #footer -->
    
</div>
<!-- END #wrapper -->

</body>
</html>