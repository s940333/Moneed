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
                <li><a href="home.html"><span class="menu-number">00</span> 回到首頁 <span class="menu-desc">Homepage</span></a></li>
                    <li><a href="http://s940333.lionfree.net/granth_buy/source/html_source/home.html"><span class="menu-number">01</span> 拍賣首頁 <span class="menu-desc">Auction Homepage</span></a></li>
                  <li class="current"><a href="home.html"><span class="menu-number">02</span> 專案總覽 <span class="menu-desc">Project Overview</span></a></li>
      
                    <li class="parent"><a href="#"><span class="menu-number">03</span> 會員登入 <span class="menu-desc">Member Login</span></a>
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
                    <div class>購物車</div>
                    
                    <div class="inner-content"><!-- BEGIN #portfolio-filter -->
                  
                        <!-- END #portfolio-filter -->
                        
              </div>
                    
                    <!-- BEGIN #portfolio-content -->
                    <div id="portfolio-content">
                        <div class="portfolio-controls controls"><span class="tooltip" data-id="4"></span><a href="#" class="prev-arrow disabled">prev</a><a href="content/portfolio/portfolio-2.html" class="next-arrow" data-id="2">next</a></div>

                        <!-- BEGIN .portfolio-items -->
                        <div class="portfolio-items clearfix" data-page="1">TEST
                        
                        
                        <table class="order_step01_style1">
        <tr>
          <td align="left" valign="top" class="order_step01_style2">
		    <table class="order_step01_style3">
              <tr>
                <td align="center" valign="middle" class="order_step01_style4">
                  step1. 登入
                </td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step2. 檢視 / 修改
                </td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step3. 預覽 / 付款
                </td>
                <td align="center" valign="middle" class="order_step01_style5">
                  step4. 完成訂單
                </td>
              </tr>
            </table>
		  </td>
        </tr>
		 <tr>
          <td align="left" valign="top">
		    <form action="<?php echo $loginFormAction; ?>" method="POST" 
              name="login_form" id="login_form">
			  <table class="order_step01_style6">
                <tr>
                  <td class="order_step01_style7">
                    》為了避免您的購物資料遺失，
                    <span class="order_step01_style8">
                      請立即登入
                    </span>
                  </td>
                </tr>
				<tr>
                  <td class="order_step01_style9">
                    會員登入
                  </td>
                </tr>
				<tr>
                  <td class="order_step01_style10">
                    帳　號&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="username" type="text" id="username" 
                      size="20" maxlength="12" class="order_step01_style33" />
				  </td>
                  <td class="order_step01_style10">
                    密　碼&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="password" type="password" id="password" 
                      size="20" maxlength="12" class="order_step01_style33" />
				  </td>
                </tr>
				<tr>
                  <td class="order_step01_style11">
				    <table class="order_step01_style12">
					  <tr>
                        <td align="right" valign="middle" class="order_step01_style15">
                          <a href="member_new.php" class="order_step01_style16">
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
		  </td>
        </tr>
		 <tr>
          <td>
		    <form action="order_step01.php" method="post" name="order_form" id="order_form">
			  <table class="order_step01_style17">
                <tr>
                  <td colspan="5" class="order_step01_style18">》購物車</td>
                </tr>
				<tr>
                  <td width="18" align="center" valign="middle" class="order_step01_style19">X</td>
                  <td width="104" align="center" valign="middle" class="order_step01_style20">編號</td>
                  <td width="104" align="center" valign="middle" class="order_step01_style21">名稱</td>
                  <td width="76" align="center" valign="middle" class="order_step01_style22">單價</td>
                  <td width="57" align="center" valign="middle" class="order_step01_style23">數量</td>
                </tr>
				<?php 
				  if (isset($_SESSION['item_index'])) 
				  {
				    foreach ($_SESSION['item_index'] as $i => $val) 
					{
				?>
                <tr>
                    <td align="center" valign="middle" class="order_step01_style24">
                      <input name="order_check[]" type="checkbox" 
                        value="<?php echo $i ?>" />
                    </td>
                    <td valign="middle" class="order_step01_style24">
					  <?php echo $_SESSION['item_index'][$i] ?>
                    </td>
                    <td valign="middle" class="order_step01_style24">
					  <?php echo $_SESSION['item_name'][$i] ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
					  <?php echo $_SESSION['price'][$i] ?>
                    </td>
                    <td align="center" valign="middle" class="order_step01_style24">
                      <input name="order_quantity[]" type="text" size="3" maxlength="3" 
                        class="order_step01_style25" 
                        value="<?php echo $_SESSION['quantity'][$i] ?>" />
                    </td>
                </tr>
                <?php } } ?>
				<?php if (!$_SESSION['has_item']) { ?>
				<tr>
				  <td colspan="5">
				    &nbsp;&nbsp;沒有商品
				  </td>
				</tr>
				<?php } ?>
				<?php if ($_SESSION['has_item']) { ?>
				<tr>
                  <td colspan="5" align="right" valign="middle" class="order_step01_style29"> 
				    <table class="order_step01_style2">
					  <tr>
						<td align="left" valign="middle">  
				          <input name="order_delete" type="submit" id="order_delete" 
                            value="刪除" class="order_step01_style30" />
						</td>
					    <td align="right" valign="middle">
					      <input name="order_change_quantity" type="submit" 
                            id="order_change_quantity" value="修改數量" 
                            class="order_step01_style30" />
						</td>
 					  </tr>
					</table>	
				  </td>
                </tr>
				<?php } ?>
	            <tr>
                  <td colspan="5" class="order_step01_style31">
				    <table class="order_step01_style2">
					  <tr>
					      <?php if ($_SESSION['has_item']) { ?>
						  <td align="left" valign="middle">
					        <input name="order_clear" type="button" 
                              class="order_step01_style30" id="order_clear" onclick="MM_goToURL('parent','clear_cart.php');return document.MM_returnValue" 
                              value="清空購物車" 
                              />
						  </td>
 					      <?php } ?>
						  <td align="right" valign="middle">
		                    <input name="item_list_continue" type="button" 
                              class="order_step01_style30" onclick="MM_goToURL('parent','<?php echo $_SESSION['shopping_page']; ?>');return document.MM_returnValue" 
                              value="繼續購物" />		
					      </td>
					  </tr>
				    </table>	
	              </td>
                </tr>
              </table>
			</form>
		  </td>
        </tr>
 	    <tr>
	      <td class="order_step01_style26">
		    <table class="order_step01_style38">
              <tr>
                <td>
		          <span class="order_step01_style27">
                    貼心小叮嚀
                  </span>
                  <br /> 
			      <ul>
			        <li>
                      <span class="order_step01_style28">
                        德瑞購物網目前服務地區只限台灣本島
                      </span>
                      ，付款幣別為新台幣。
			        </li>
                    <li>
                      下載版軟體購買說明<br />
                      <table class="order_step01_style36">
                        <tr>
                          <td class="order_step01_style37">
                            1. 
                            <span class="order_step01_style28">
                              出貨方式
                            </span>
                            <br />
                            此商品為線上下載版軟體，德瑞購物網將於確認收到您的貨款無誤後，一個工作天即為您辦理出貨程序，軟體的序號及下載軟體的位置，將會以email通知收貨人。
                            <br />
                            2. 
                            <span class="order_step01_style28">
                              退換貨相關
                            </span>
                            <br />
                            下載版軟體在線上交易成功之後，系統將以電子郵件方式發送軟體登入序號，不需要拆封即可立即安裝使用，因此序號一經發出後，恕不受理退換貨。
                          </td>
                        </tr> 
                      </table>
                    </li>
			        <li>
			          <span class="order_step01_style28">
                        單次訂購滿1000元即可免費宅配
                      </span>
                      ，未滿1000元酌收運費100元。
                      <br />
                      建議您可以購買我們所推廌的商品，以節省您的運費
                    </li>
			        <li>
                      請注意避免刷卡不成功:
                      <br />
                      1.
                      <span class="order_step01_style28">
                        卡號填錯
                      </span>
                      2.
                      <span class="order_step01_style28">
                        過期
                      </span>
                      3.
                      <span class="order_step01_style28">
                        檢查碼cvc2沒填或輸入錯誤
                      </span>
                      4.
                      <span class="order_step01_style28">
                        已刷爆
                      </span>
                      5.
                      <span class="order_step01_style28">
                        該卡非VISA / MASTER / JCB
                      </span>
                    </li>
			        <li>
                      使用ATM轉帳/郵政劃撥/電匯付款的讀者，完成付款之後請 
                      <span class="order_step01_style28">
                        傳真您的收據
                      </span>
                      到 
                      <span class="order_step01_style28">
                        (02)1234-5678
                      </span>
                      。
                    </li>
			      </ul> 
			    </td>
 		      </tr>
			</table>
		  </td>
		</tr>
	  </table>
                        
                        
                        	
                                                            
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