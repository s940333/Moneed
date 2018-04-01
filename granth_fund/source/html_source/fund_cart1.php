<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$FormAction = $_SERVER['PHP_SELF'];
$project_number = $_GET['projectnum'];	
$i= 1;
$_SESSION['projectnum'] = $project_number;

//$project_number = $_POST['project_number'];

//搜尋資料庫資料
$sql = "SELECT * FROM pro_studentactivity where project_number = '$project_number'";
$result = mysql_query($sql);
$pro = @mysql_fetch_row($result);
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
                <td align="center" valign="middle" bgcolor="#FFFF00" class="order_step01_style4">step1. 登入&nbsp;&nbsp; &nbsp;</td>
                <td align="center" valign="middle" class="order_step01_style5">
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
		    <form action="cartconnect.php" method="POST" 
              name="login_form" id="login_form">
			  <table width="699" class="order_step01_style6">
                <tr>
                  <td width="310" class="order_step01_style7">
                    <p>&nbsp;</p>
                    <p>》<strong>為了避免您的募款資料遺失， <span class="order_step01_style8">
                      請立即登入
                    </span></strong><span class="order_step01_style8"></span></p></td>
                </tr>
				<tr>
                  <td class="order_step01_style9">
                    會員登入
                  </td>
                </tr>
				<tr>
                  <td class="order_step01_style10">
                    帳　號&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="id" type="text" id="username" 
                      size="20" maxlength="12" class="order_step01_style33" />
				  </td>
                  <td width="270" class="order_step01_style10">
                    密　碼&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="pw" type="password" id="password" 
                      size="20" maxlength="12" class="order_step01_style33" />
				  </td>
                </tr>
				<tr>
                  <td class="order_step01_style11">
				    <table class="order_step01_style12">
					  <tr>
                        <td align="right" valign="middle" class="order_step01_style15">
                          <a href="newmember.php" class="order_step01_style16">
                            免費加入會員
                          </a>
                           ｜
                          <a href="exec_help.php" class="order_step01_style16">
                            忘記密碼
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
				  <td align="right" valign="middle" class="order_step01_style35">
					<input name="login_submit" type="submit" id="login_submit" 
                      value="我要登入" class="order_step01_style30" 
                      onclick="return CheckFields();" />
				  </td>
                </tr>
              </table>
			</form>
            <form action="<?php echo $FormAction; ?>" method="post" name="order_form" id="order_form">
             <!--TEST-->	
<table width="701" class="order_step01_style6">
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
                  <td colspan="5" bgcolor="#FFFF66" class="order_step01_style18"><strong>》臨時募款車</strong></td>
                </tr>
				<tr>
                  <td width="91" align="center" valign="middle" class="order_step01_style19">X</td>
                  <td width="125" align="center" valign="middle" class="order_step01_style20">編號</td>
                  <td width="311" align="center" valign="middle" class="order_step01_style21">名稱</td>
                  <td width="154" align="center" valign="middle" class="order_step01_style22">募款金額</td>
                  
                </tr>
				
                <tr>
                    <td align="center" valign="middle" class="order_step01_style24"><input name="order_check[]" type="checkbox" 
                        value="<?php echo $i; ?>" />
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $pro[0]; ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $pro[1]; ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $pro[2]; ?>
                    </td>
 
                </tr>
              </table>
            </form>  
            <form action="deletesession.php" method="post" name="order_form" id="order_form">
        
        <tr>
        <td align="right" valign="right" class="order_step01_style24">
                                 <p>
                                   <input name="order_delete" type="submit" id="order_delete" 
                            value="刪除" class="order_step01_style30" />
                      </td>
         </tr>
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