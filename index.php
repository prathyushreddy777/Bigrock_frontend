<html>
<head>
<link rel="stylesheet" href="styles/main_style.css"/>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/domain_selection_script.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!------------------------------->
<div id="fb-root"></div>
<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script> 
<!------------------------------->
<div class="out_most_div_home_pg_cls">
<div class="header_class">
	<div class="logo_div_class"> <a href="index.php"> <img src="images/logo.png"/> </a> </div>
	<div class="fa_div_err_cls">
		<div class="error_msg_div_cls" id="error_msg_div_id"> 
			<!------------------------------erro div-------------> 
		</div>
	</div>
	<div class="header_other_stuff_class">
		<div class="phone_no_class">
			<div class="float_left"> 
				<img src="images/phone_icon_25.png"/> 
			</div>
			<div class="float_left"> 
				<b style="line-height:18px;">1-800-200-7625</b> 
			</div>
			<div class="sales_txt_d_cls">(Sales: India Toll Free)</div>
		</div>
		<div class="login_div_class"> 
			<a href="login_page.php">
				<span class="login_span_class">
					<b>Login/Signup</b>
				</span>
			</a> 
		</div>
		<div class="cart_icon_div_class"> 
			<a href="check_out_page.php">
				<div class='cart_icon_img'></div>
			</a>
			<div class="cart_msg_icon_div_class">
				<div class="cart_msg_icon_txt_div_class">0</div>
			</div>
		</div>
		<div class="settings_icon_div_class" title='My Account'>
			<div class="settings_img_tag"></div>
		</div>
	</div>
	<div class="domain_search_div_class">
		<input type="text" class="domain_input_class" placeholder="Type your domain name here"/>
		<div class="extension_div_class"> 
			<span class="dom_name_cls_Inp_cls" id="dom_name_cls_Inp_id">.com</span> 
			<span class="dom_arrw_cls"><img src="images/down_arrow.png"/></span>
			<div class='dom_select'>
				<input class='all_select' type="checkbox" id="select_all_id">
				<span class='select_all'>Select All</span>
				<div class='domain_select_div'>
					<div class='domain_select_header'>Popular Extensions</div>
					<div class='domain_select_container'>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom' id="com" checked value=".com" >
							<span class='select_text'>com</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom' value=".net">
							<span class='select_text'>net</span> </div>
						<div class='domain_select_indi' >
							<input type='checkbox' class='sel_dom' value=".org">
							<span class='select_text'>org</span> </div>
						<div class='domain_select_indi' >
							<input type='checkbox' class='sel_dom' value=".biz">
							<span class='select_text'>biz</span> </div>
						<div class='domain_select_indi' >
							<input type='checkbox' class='sel_dom' value=".in">
							<span class='select_text'>in</span> </div>
						<div class='domain_select_indi' >
							<input type='checkbox' class='sel_dom' value=".pw">
							<span class='select_text'>pw</span> </div>
						<div class='domain_select_indi' >
							<input type='checkbox' class='sel_dom' value=".com.in">
							<span class='select_text'>com.in</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom' value=".me">
							<span class='select_text'>me</span> </div>
						<div class='domain_select_indi' >
							<input type='checkbox' class='sel_dom' value=".asia">
							<span class='select_text'>asia</span> </div>
					</div>
				</div>
				<div class='domain_select_div'>
					<div class='domain_select_header'>More Extensions</div>
					<div class='domain_select_container'>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".co">
							<span class='select_text'>co</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".info">
							<span class='select_text'>info</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".name">
							<span class='select_text'>name</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom' value=".mobi">
							<span class='select_text'>mobi</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".tv">
							<span class='select_text'>tv</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".ws">
							<span class='select_text'>ws</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".bz">
							<span class='select_text'>bz</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".cc">
							<span class='select_text'>cc</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom' value=".net.in">
							<span class='select_text'>net.in</span> </div>
						<div class='domain_select_indi'>
							<input type='checkbox' class='sel_dom'value=".org.in">
							<span class='select_text'>org.in</span> </div>
					</div>
					<div class='domain_select_header' style="margin:0px;text-align:right;width:270px;"> 
						<span style="font-weight:normal;"><a href="#">View all extesions>></a></span>
					</div>
				</div>
			</div>
		</div>
		<a href="domain_availability_page.php">
			<div class="search_div_class" id="search_div_id"> 
				<img src="images/search_icon.png" style="padding-top:15px;" id="search_icon_img_id"/> 
			</div>
		</a> 
		</div>
</div>
</div>
<div class="services_div_class">
	<div class="services_opacity_div_class">
		<div class="services_main_div_class"> 
			<!--------LIGHT BOX HOME PAGE STARTS--------------->
			<div class="home_page_light_box_class">
				<div class="close_button_class"> 
					<img src="images/close_button_white.png" class="light_box_close_btn_img_tag_cls"/> 
				</div>
				<div class="light_box_content_div_class"> 
					<!------------------------CONTENT GETS APPENDED HERE-------------->
					<div class="about_bg_div_cls">
						<div class="abt_bg_h1">
							<h1>About BigRock</h1>
						</div>
						<div class="abt_txt_class" style="margin-bottom:20px;">
							 At BigRock, our mission is to offer world class Domain Registration & Web Hosting products to our customers. Leveraging years of 			expertise and cutting-edge technology, we offer a comprehensive suite of Domain Name and Web Hosting services such as domain name registration, Email hosting, VPS hosting and more. In addition, to helping you make the most of the web, we also offer various value-added services such as WHOIS lookup , DNS management & Premium Domain sales.
							  </div>
						<div class="abt_bg_h1" style="border-top:1px dashed #fff;border-bottom:1px dashed #fff;text-align:center;">
							<h1>Our Services</h1>
						</div>
						<div class="abt_bg_h1">
							<h2>Domain Registration</h2>
						</div>
						<div class="abt_txt_class"> BigRock, India’s #1 Domain registration provider offers tailored domain services to help you meet your business objectives at a very affordable price. Our prices are up to 80% lesser than other registrars and we promise you unmatched value for your money. BigRock gives you the option to transfer and register domain names in all Top Level & Country level Domains, including .com, .net, .org, .biz, .info, .mobi, .in, .co.in, .co.uk, .asia and many others. Offering 24x7 customer support we leave no stone unturned to ensure a world-class experience for our esteemed clients. </div>
						<div class="abt_bg_h1">
							<h2>Web Hosting</h2>
						</div>
						<div class="abt_txt_class"> With over 10 years of experience and powering over 200,000 websites, our Web hosting platform is unarguably among the most trusted in the world. We offered specialized services for all web hosting needs. Our hosting services include Linux hosting, Windows hosting, WordPress hosting, Joomla hosting, Drupal hosting, e-commerce hosting, Reseller Hosting & VPS Hosting. <br>
							<br>
							Our Domain hosting services ensure optimal performance of your website irrespective of what platform it is built on. We support various programming languages such as PHP v5, Perl, Python and CGI, and we offer affordable web hosting services for personal websites, small business websites, as well as large enterprise portals. </div>
						<div class="abt_bg_h1">
							<h2>Email Hosting</h2>
						</div>
						<div class="abt_txt_class"> Trusted by over a million subscribers, our Email hosting services enables you to use personalized official email addresses to exhibit the proficiency of your business. Moreover, personalized email accounts promote your brand every time you send out an email.<br>
							<br>
							For small business owners, BigRock offers Business Email Hosting package while for corporates and large enterprises, we have an Enterprise Email Hosting package. Our Email Hosting plan comes with unlimited email accounts (2 GB space each) that come with anti-virus and anti-spam protection. </div>
						<div class="abt_bg_h1">
							<h2>DIY Website Builder</h2>
						</div>
						<div class="abt_txt_class"> At BigRock, we acknowledge that nobody can understand the requisites of your website like you. Hence, to give you complete freedom to create extremely appealing and efficient websites, we offer a feature laden Do It Yourself website builder. All you need to do is explore the various templates and tools bundled with the solution and make the most of your creativity. If you have the time, we have the tools! If you are looking specifically for a web design consultant to create a great website for you than we have a solution for that as well; our online web design marketplace, DesignXchange allows you to look for website designers within your city and budget in just a click. </div>
						<div class="abt_bg_h1">
							<h2>Need help?</h2>
						</div>
						<div class="abt_txt_class"> For detailed information on our domain name & Web hosting services, please call us at 1-800-200-7625/022 30797900 or click on the ‘Live Chat’ icon on this page. </div>
					</div>
				</div>
			</div>
			<!--------LIGHT BOX HOME PAGE ENDS--------------->
			
			<div class="header_services_div_class">
				<div class="why_bg"> <span class="why_bg_span" style="margin-left:8px;" id="about_bg" >About BigRock</span> </div>
				<div class="india_txt_class"> India's #1 Destination for Websites </div>
				<div class='contact_cont'>
					<div class="contact_icons_class"> <a href="https://support.bigrock.com/visitor/?/Default/LiveChat/Chat/Request/_sessionID=/_promptType=chat/_proactive=0/_filterDepartmentID=19%2C22%2C42%2C22%2C43%2C22%2C44%2C22%2C45%2C22%2C46%2C22/_randomNumber=m7vrmjkuui5mkkcoac2eyl4dptizzlwb/_fullName=/_email=/"> <img src="images/chat_icon.png" class="contact_icon_img_tag" title="Live Chat"/> </a> </div>
					<div class="contact_icons_class"> <a href="https://support.bigrock.com/?/Knowledgebase/List"> <img src="images/phone_icon.png" class="contact_icon_img_tag" title="Support"/> </a> </div>
					<div class="contact_icons_class"> <a href="contact_us.php"> <img src="images/mail_icon.png" class="contact_icon_img_tag" title="Contact Us"/> </a> </div>
				</div>
			</div>
			<div class="all_serv_div_class"> 
				<!--------------------------get domain services div starts----------------------->
				<div class="get_serv_div_class" style="margin-left:0px;margin-top:0px;">
					<div class="get_black_div_class">
						<div class="get_txt_class"> <b>Get Domain</b><br>
							<span style="font-family: 'Open Sans', sans-serif;font-size:13px;">Get your domain name now!</span> </div>
						<div class="orange_bar_class">
							<div class="sub_serv_desc_main_div_class"> <a href="#" class="sub_serv_desc_link_div_class">
								<div class="sb_serv_img_div_class"> <img src="images/domain_reg.png"/> </div>
								<div class="desc_txt_cls"> Domain Registrations, Domain Transfers, WhoIs and more... </div>
								</a> </div>
						</div>
					</div>
				</div>
				<!--------------------------get domain services div ends-----------------------> 
				
				<!--------------------------get hosting services div starts----------------------->
				<div class="get_serv_div_class" style="background:url(images/get_hosting.png) center no-repeat no-repeat;margin-top:0px;"> 
					<a href="get_hosting.php" class="home_page_services_link_cls">
					<div class="get_black_div_class">
						<div class="get_txt_class"> <b>Get Hosting</b><br>
							<span style="font-family: 'Open Sans', sans-serif;font-size:13px;">Multiple Hosting Options</span> </div>
						<div class="orange_bar_class">
							<div class="sub_serv_desc_main_div_class"> 
								<a href="get_hosting.php" class="sub_serv_desc_link_div_class">
									<div class="sb_serv_img_div_class"> <img src="images/hosting_desc.png" /> </div>
									<div class="desc_txt_cls" style="padding-top:15px;"> Shared Hosting, Specialized Hosting, Reseller Hosting </div>
								</a> </div>
						</div>
					</div>
					</a> </div>
				<!--------------------------get hosting services div ends-----------------------> 
				
				<!--------------------------get VPS services div starts----------------------->
				<div class="get_serv_div_class" style="background:url(images/get_vps.png) center no-repeat no-repeat;margin-top:0px;"> 
					<a href="get_vps.php" class="home_page_services_link_cls">
						<div class="get_black_div_class">
						<div class="get_txt_class"> <b>Get a VPS</b><br>
							<span style="font-family: 'Open Sans', sans-serif;font-size:13px;">Get your Private Server!</span> </div>
						<div class="orange_bar_class">
							<div class="sub_serv_desc_main_div_class"> <a href="get_vps.php" class="sub_serv_desc_link_div_class">
								<div class="sb_serv_img_div_class"> 
									<img src="images/vps.png"/> 
								</div>
								<div class="desc_txt_cls" style="padding-top:15px;"> Cutting Edge VPS Hosting with Virtuozzo, NetApp & more.. </div>
								</a> </div>
						</div>
					</div>
					</a> </div>
				<!--------------------------get VPS services div ends-----------------------> 
				
				<!--------------------------build website services div starts----------------------->
				<div class="get_serv_div_class" style="background:url(images/build_website.png) center no-repeat no-repeat;margin-left:0px;">
					<div class="get_black_div_class">
						<div class="get_txt_class"> <b>Get a Website</b><br>
							<span style="font-family: 'Open Sans', sans-serif;font-size:13px;">Build your website in minutes!</span> </div>
						<div class="orange_bar_class">
							<div class="sub_serv_desc_main_div_class"> <a href="#" class="sub_serv_desc_link_div_class">
								<div class="sb_serv_img_div_class"> <img src="images/build_web_icon.png" /> </div>
								<div class="desc_txt_cls" style="padding-top:15px;"> Build Websites, Find Web Designers, SSL Certs & more.. </div>
								</a> </div>
						</div>
					</div>
				</div>
				<!--------------------------build website services div ends-----------------------> 
				
				<!--------------------------get Email services div starts----------------------->
				<div class="get_serv_div_class" style="background:url(images/get_email.png) center no-repeat no-repeat;">
					<div class="get_black_div_class">
						<div class="get_txt_class"> <b>Get Email</b><br>
							<span style="font-family: 'Open Sans', sans-serif;font-size:13px;">Get Personal/business Email!</span> </div>
						<div class="orange_bar_class">
							<div class="sub_serv_desc_main_div_class"> <a href="#" class="sub_serv_desc_link_div_class">
								<div class="sb_serv_img_div_class"> <img src="images/get_email_icon.png"/> </div>
								<div class="desc_txt_cls" style="padding-top:15px;"> Personal Email, Professional Mail & more.. </div>
								</a> </div>
						</div>
					</div>
				</div>
				<!--------------------------get Email services div ends-----------------------> 
				
				<!--------------------------Partner with us services div starts----------------------->
				<div class="get_serv_div_class" style="background:url(images/partner.png) center no-repeat no-repeat;">
					<div class="get_black_div_class">
						<div class="get_txt_class"> <b>Partner with us</b><br>
							<span style="font-family: 'Open Sans', sans-serif;font-size:13px;">Earn big commissions!</span> </div>
						<div class="orange_bar_class">
							<div class="sub_serv_desc_main_div_class"> <a href="#" class="sub_serv_desc_link_div_class">
								<div class="sb_serv_img_div_class"> <img src="images/partner_icon.png"/> </div>
								<div class="desc_txt_cls" style="padding-top:8px;"> Affiliate, Design Xchange, Refer a friend & more.. </div>
								</a> </div>
						</div>
					</div>
				</div>
				<!--------------------------Partner with us services div ends-----------------------> 
				
			</div>
		</div>
	</div>
</div>
<div class="content_main_class">
	<div class="second_main_div_class">
		<div class="Get_a_website_div">
			<div class="get_website_button_class get_but"> Get Started for Free ! </div>
			<div class="whats_hot_txt_class" style="margin-top:6px;">
				<h3 style="margin:0px;">Get connected with Top Web Designers across India</h3>
			</div>
		</div>
		<div class="whats_hot_txt_class hot_heading">
			<h2>What's hot in BigRock?</h2>
		</div>
		<div class="float_left hot_content">
			<div class="whats_hot_each_div_class" style="margin-top:10px;">
				<div class="float_left"> <img src="images/hot_1.png" class="img_whats_hot"/> </div>
				<div class="each_div_txt_div">
					<div class="wht_ht_heading"> Get a '.net' domain for Rs 299/- </div>
					<div  class="ul_each_div">
						<ul class="each_div_ul_class">
							<li>1 GB Free Hosting</li>
							<li>60 Email Ids</li>
							<li>5 Page Site Builders</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="whats_hot_each_div_class" style="margin-top:10px;">
				<div class="float_left"> <img src="images/hot_2.jpg" class="img_whats_hot"/> </div>
				<div class="each_div_txt_div">
					<div class="wht_ht_heading"> Get 95% off on shared Hosting </div>
					<div  class="ul_each_div">
						<ul class="each_div_ul_class">
							<li>1 GB Free Hosting</li>
							<li>60 Email Ids</li>
							<li>5 Page Site Builders</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="whats_hot_each_div_class">
				<div class="float_left"> <img src="images/hot_3.jpg" class="img_whats_hot"/> </div>
				<div class="each_div_txt_div">
					<div class="wht_ht_heading"> The rockstar of Design </div>
					<div  class="ul_each_div">
						<ul class="each_div_ul_class">
							<li>1 GB Free Hosting</li>
							<li>60 Email Ids</li>
							<li>5 Page Site Builders</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="whats_hot_each_div_class">
				<div class="float_left"> <img src="images/hot_4.jpg" class="img_whats_hot"/> </div>
				<div class="each_div_txt_div">
					<div class="wht_ht_heading"> Get a .me domain for Rs 499/- </div>
					<div  class="ul_each_div">
						<ul class="each_div_ul_class">
							<li>1 GB Free Hosting</li>
							<li>60 Email Ids</li>
							<li>5 Page Site Builders</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="view_more_ht_stf_cls">
				 <a href="#">View more>></a>
			</div>
		</div>
		<div class="next_div_class">
			<div class="domain_pricelist_div_class">
				<div class="bst_txt">
					<h2 style="margin-top:0px;">Hottest Domain Deals!</h2>
				</div>
				<div class="each_price_tile_class" style="margin-top:0px;">
					<div class="dom_name_class"> .com </div>
					<div class="now_own_txt_class"> Own a .com Domain for just <b>Rs. 639/-</b> </div>
					<a href="check_out_page.php">
					<div class="get_website_button_class gt_dom_hme_pge_ext_cls" > Buy </div>
					</a> </div>
				<div class="each_price_tile_class" >
					<div class="dom_name_class"> .net </div>
					<div class="now_own_txt_class"> Own a .net Domain for just <b>Rs. 299/-</b> </div>
					<a href="check_out_page.php">
					<div class="get_website_button_class gt_dom_hme_pge_ext_cls" > Buy </div>
					</a> </div>
				<div class="each_price_tile_class" >
					<div class="dom_name_class"> .org </div>
					<div class="now_own_txt_class"> Own a .org Domain for just <b>Rs. 339/-</b> </div>
					<a href="check_out_page.php">
					<div class="get_website_button_class gt_dom_hme_pge_ext_cls"> Buy </div>
					</a> </div>
				<div class="each_price_tile_class" >
					<div class="dom_name_class"> .biz </div>
					<div class="now_own_txt_class"> Own a .biz Domain for just <b>Rs. 199/-</b> </div>
					<a href="check_out_page.php">
					<div class="get_website_button_class gt_dom_hme_pge_ext_cls"> Buy </div>
					</a> </div>
				<div class="view_more_div_domains"> 
					<a href="#" class="vw_dom_price_hm_pg">View domain price list>></a> 
				</div>
			</div>
			<div class="big_rock_hosting_div">
				<div class="host_bgrck_txt">
					<h2 style="margin:0px;">Host your website on BigRock!</h2>
				</div>
				<div  class="host_bgrck_lower_div_class">
					<div class="gt_hosting_ad_hm_pg_cls">
						<ul  class="hosting_ul">
							<li>Unlimited Domains, Email & Space</li>
							<li>99.9% Uptime and 24x7 Support</li>
							<li>30 Day Money Back Guarantee</li>
							<li>Easy to use Control Panels</li>
						</ul>
						<div class="cost_out_desc_div_cls"> 
							<span class="cst_desc_txt_cls">Plans from</span>&nbsp 
							<span class="pm_cost_spn_cls">Rs. 59</span> 
							<span style="font-size:14px;" class="cst_desc_txt_cls">/Month</span> 
							</div>
						<div class="get_website_button_class vw_plns_ad_btn"> 
							View Plans 
						</div>
					</div>
					<div class="server_icon_out_div_cls">
						<div class="float_left"><img src="images/server_icon.png"/></div>
					</div>
				</div>
			</div>
		</div>
		<div class="social_div_main_class">
			<div class="connect_int_txt_cls">
				<h2 style="margin-top:0px;"> Connect.Interact.Learn! </h2>
			</div>
			<div class="facebook_div">
				<div class="fb-like-box" data-href="https://www.facebook.com/BigRockIsSocial" data-width="250px" data-height="330px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true">
				</div>
			</div>
			<div class="twitter_stuff"> 
				<!-- BEGIN: Twitter website widget (http://twitterforweb.com) -->
				<div style="width:250px;font-size:8px;text-align:right;"><script type="text/javascript">
										document.write(unescape("%3Cscript src='http://twitterforweb.com/twitterbox.js?username=BigRock&settings=1,1,1,250,330,fff,0,bababa,101010,1,1,336699' type='text/javascript'%3E%3C/script%3E"));</script></div>
				<!-- END: Twitter website widget (http://twitterforweb.com) --> 
			</div>
			<div class="blog_div_class">
				<div class="bigrck_header_class">
					<div class="blog_icon_class"><img src="images/blog_icon.png"/></div>
					<div class="bigrock_blog_class">The BigRock Blog</div>
				</div>
				<div class="blog_news_class">
					<div class="news_each_div_class" style="margin-top:4px;">
						<div class="bullet_img"> <img src="images/bullet_point.png"/> </div>
						<div class="blog_article_link_class"> <a href="http://bigrock.com/blog/"> Common Mistakes on Social Media and How to avoid them </a> </div>
					</div>
					<div class="news_each_div_class">
						<div class="bullet_img"> <img src="images/bullet_point.png"/> </div>
						<div class="blog_article_link_class"> <a href="http://bigrock.com/blog/"> Rockstar of Design – The Greatest Web Design contest ever </a> </div>
					</div>
					<div class="news_each_div_class">
						<div class="bullet_img"> <img src="images/bullet_point.png" style="width:25px;"/> </div>
						<div class="blog_article_link_class"> <a href="http://bigrock.com/blog/"> Search Engine Penalty – What is it and How can you avoid it. </a> </div>
					</div>
					<div class="news_each_div_class">
						<div class="bullet_img"> <img src="images/bullet_point.png"/> </div>
						<div class="blog_article_link_class"> <a href="http://bigrock.com/blog/"> What is Pinterest and how can you use it for your Business? </a> </div>
					</div>
					<div class="news_each_div_class">
						<div class="bullet_img"> <img src="images/bullet_point.png" /> </div>
						<div class="blog_article_link_class"> <a href="http://bigrock.com/blog/"> WordPress or Blogger – Which is a better deal? </a> </div>
					</div>
					<div class="news_each_div_class">
						<div class="bullet_img"> <img src="images/bullet_point.png" /> </div>
						<div class="blog_article_link_class"> <a href="http://bigrock.com/blog/"> WordPress or Blogger – Which is a better deal? </a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------------------FOOTER STUFF---------------------------->
	<div class="footer_main_div_class">
		<div class='ftr_innr_mainn_cls footer_inner'>
			<div class="join_txt_class"> Join the league! </div>
			<div class="img_clients_div">
				 <img src="images/clients_photo.png"/>
			</div>
			<div class="icann_out_div_cls">
				<div class="float_left"> <img src="images/icann.png"/> </div>
				<div class="icann_txt"> <span>BigRock is an ICANN accredited Registrar</span> 
				<span class="lrn_more_txt_spn">Learn more About Us and our Management Team</span> 
			</div>
			</div>
		</div>
		<div class="footer_second_div_cls">
			<div class="join_txt_class" style="margin-left:10px;width:200px;"> Awards </div>
			<div class="img_clients_div" style="margin:10px 0px 0px 10px;"> 
				<img src="images/awards.png"/> 
			</div>
			<div class="payment_div">
				<div class="sec_txt"> Secured by: </div>
				<div class="verisign_img_div_cls"> 
					<img src="images/verisign.png"/>
				</div>
				<div class="payment_img_out_div_cls">
					 <img src="images/payment.png"/> 
				</div>
				<div class="we_accept_txt_div_cls"> 
					We also accept Indian Debit Cards and Net Banking
					See all supported payment options 
				</div>
			</div>
		</div>
		<div class="footer_third_div_cls">
			<div class="join_txt_class" style="margin-left:10px;width:200px;"> Need help? </div>
			<div class="img_clients_div" style="margin:10px 0px 0px 10px;">
				<ul>
					<li>Contact us</li>
					<li>Technical Support</li>
					<li>My Account</li>
					<li>Legal</li>
					<li>Privacy</li>
					<li>Documentation</li>
					<li>Report Abuse</li>
					<li>Careers</li>
					<li>Sitemap</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>
