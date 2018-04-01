<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("mysql_connect.inc.php");
$array_dept_name=array("線上刷卡","郵政劃撥","電匯付款","ATM轉帳","第三方支付"); 
$dept_name=$_POST['dept_name'];

$sql = "UPDATE fundlist SET payment = '$dept_name' where id = '$user' AND listpronum = '$project_number'  ";

?>
<?php
include("mysql_connect.inc.php");
$tryFormAction = $_SERVER['PHP_SELF'];

$project_number = $_SESSION['projectnum'];


$sql = "SELECT * FROM pro_studentactivity where project_number = '$project_number'";
$result = mysql_query($sql);
$pro = @mysql_fetch_row($result);


$user = $_SESSION['username'];
$sql1 = "SELECT * FROM fundlist where id = '$user' AND listpronum = '$project_number'";
$result1 = mysql_query($sql1);
$list = @mysql_fetch_row($result1);





?>
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
                <li><a href="test2.php"><span class="menu-number">00</span> 回到首頁 <span class="menu-desc">Homepage</span></a></li>
                    <li><a href="http://s940333.lionfree.net/granth_buy/source/html_source/home.php"><span class="menu-number">01</span> 拍賣首頁 <span class="menu-desc">Auction Homepage</span></a></li>
                  <li class="current"><a href="test2.php"><span class="menu-number">02</span> 專案總覽 <span class="menu-desc">Project Overview</span></a></li>
      
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
                <td align="center" valign="middle" class="order_step01_style4">step1. 登入&nbsp;&nbsp; &nbsp;</td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step2. 檢視 / 修改&nbsp;&nbsp; &nbsp;     
                </td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step3. 預覽 / 付款 &nbsp;&nbsp; &nbsp;    
                </td>                
                <td align="center" valign="middle" bgcolor="#FFFF00" class="order_step01_style5">
                  step4. 完成訂單 &nbsp;&nbsp; &nbsp;   
                </td>
              </tr>
                        </table>
                         <form action="<?php echo $editFormAction; ?>" method="POST" name="shopper_form" id="shopper_form">
                        		  <tr>
          <td align="left" valign="top">
		    <table width="589" class="order_step03_style6">
                <tr>
                  <td colspan="4"  class="order_step03_style7">
                    》收件人的相關資料
                  </td>
                </tr>
				<tr>
                  <td width="149" align="center" valign="middle" bgcolor="#FFFF66" class="order_step03_style8">
                    收件人
                  </td>
                  <td width="428" align="center" valign="middle" bgcolor="#FFFF66" class="order_step03_style9">
                    收件地址
                  </td>
                  
                </tr>
				<tr>
                  <td align="center" valign="middle" class="order_step03_style12">
				    <?php echo $row[6]; ?>
                  </td>
                  <td align="center" valign="middle" class="order_step03_style12">
				    <?php echo $row[4]; ?>
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
            </table>
		   </td>
         </tr>
         </form>
		 <tr>
          <td>
            <form action="<?php echo $tryFormAction; ?>" method="POST" name="orderform" id="orderform">
			  <table width="587" class="order_step03_style13">
				<tr>
                  
                  <td width="158" align="center" valign="middle" bgcolor="#FFFF66" class="order_step03_style15">
                    編號
                  </td>
                  <td width="124" align="center" valign="middle" bgcolor="#FFFF66" class="order_step03_style16">
                    專案名稱
                  </td>
                  <td width="132" align="center" valign="middle" bgcolor="#FFFF66" class="order_step03_style17">募款人</td>
                  <td width="153" align="center" valign="middle" bgcolor="#FFFF66" class="order_step03_style18">
                    金額
                  </td>
				 
                </tr>
				
				<tr>
                 
                  <td align="center" valign="left" class="order_step03_style20">
				    <?php echo $pro[0]; ?>
                  </td>
                  <td align="center" valign="left" class="order_step03_style20">
				    <?php echo $pro[1]; ?>
                  </td>
                  <td align="center" valign="middle" class="order_step03_style20">
				    <?php echo $list[0]; ?> </td>
                  <td align="center" valign="middle" class="order_step03_style20">
				   <?php echo $list[2]; ?>
                  </td>
				  
                </tr>
				
				
			
				<tr>
                  <td colspan="6" align="center" valign="middle" class="order_step03_style21">		
		          </td>
                </tr>
				
				<tr>
                  <td colspan="6" align="center" valign="middle" class="order_step03_style21">		
		          </td>
                </tr>
				
		       
              </table>
            </form>
		    <p>&nbsp;</p>
          <tr>
                  <td colspan="6" class="order_step04_style22">
				    <table width="583" class="order_step04_style33">
					  <tr>
                        <td colspan="2" class="order_step04_style29">
						</td>
				      </tr>
					  
                      <tr>
                      
                        <td width="168" align="center" valign="middle" bgcolor="#FFFF66" class="order_step04_style30">&nbsp;</td>
						<td width="403" valign="middle" bgcolor="#FFFF66" class="order_step04_style34">
						  
						</td>
				      </tr>
                      
                      <tr>
                      
                        <td width="168" align="center" valign="middle" class="order_step04_style30">
                          付款方式
					    </td>
						<td width="403" valign="middle" class="order_step04_style34">
						  <?php echo $array_dept_name[$dept_name] ;  ?>
						</td>
				      </tr>
				      <tr>
                        <td align="center" valign="middle" class="order_step04_style30">
                          訂單編號
					    </td>
						<td valign="middle" class="order_step04_style34">
						  FU-<?php echo $pro[0]; ?>-<?php echo $list[5]; ?>
						</td>
				      </tr>
					  <tr>
                        <td align="center" valign="middle" class="order_step04_style30">訂單金額 
						</td>
						<td valign="middle" class="order_step04_style34">
                          新台幣 
						  <?php echo $list[2]; ?>
                          元整
						</td>
				      </tr>
					</table>
			  </td>			  
                </tr>
		        <tr>
                  <td colspan="6" align="right" valign="middle" class="order_step04_style31">
				    <input name="order_cancel" type="button" class="order_step04_style32" onclick="MM_goToURL('parent','fund_cart3.php');return document.MM_returnValue" 
                      value="上一步" />	
		           
                   <form action="test2.php" method="POST" name="orderform" id="orderform">
                    <input name="order_confirm" type="submit" class="order_step04_style32" 
                      value="確認付款" onClick="alert('訂單成功!')" />		
                      </form>
		          </td>
                </tr>
              </table>
                 
    
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