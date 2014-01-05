
	
	<html>
		<head>
			<link rel="stylesheet" href="styles/main_style.css"/>
			<link rel="stylesheet" href="styles/other_pages_css.css"/>
			<script type="text/javascript" src="scripts/jquery.js"></script>
			<script type="text/javascript" src="scripts/domain_check_page.js"></script>
			<script type="text/javascript" src="scripts/domain_selection_script.js"></script>
		
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
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
			<div style="width:100%;"><!------full header div----------->
				<div class="header_class" style="background:#f7f7f7;">
						<div class="logo_div_class">
							<a href="index.php"><img src="images/logo.png" style="width:300px;"/></a>
						</div>
						<div class="fa_div_err_cls">
							<div class="error_msg_div_cls" id="error_msg_div_id">
								<!------------------------------erro div------------->
							</div>
						</div>
						<div class="header_other_stuff_class">
							<div class="phone_no_class">
								<div class="float_left">
									<img src="images/phone_icon.png" style="width:25px;"/>
								</div>
								<div class="float_left"><b>1-800-200-7625</b></div> <div class="float_left" style="font-size:10px;">(Sales: India Toll Free)</div>
							</div>
							<div class="login_div_class">
								<span class="login_span_class"><b>Login/Signup</b></span>
							</div>
							<div class="cart_icon_div_class">
								<img src="images/cart_icon.png" />
							</div>
							<div class="cart_msg_icon_div_class">
								<div class="cart_msg_icon_txt_div_class">2</div>
							</div>
							<div class="settings_icon_div_class">
								<img src="images/settings_icon.png" class="settings_img_tag"/>
							</div>
						</div>
						<div class="domain_search_div_class">
							<input type="text" class="domain_input_class"  style="border-bottom:0px;" placeholder="Type your domain name here"/>
							<div class="extension_div_class">
								<span class="dom_name_cls_Inp_cls" id="dom_name_cls_Inp_id">.com</span>
								<span class="dom_arrw_cls"><img src="images/down_arrow.png" style="width:20px;"/></span>
								<div class='dom_select'>
									<input class='all_select' type="checkbox" id="select_all_id"><span class='select_all'>Select All</span>
									<div class='domain_select_div'>
										<div class='domain_select_header'>Popular Extensions</div>
										<div class='domain_select_container'>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom' id="com" checked value=".com" >
												<span class='select_text'>com</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom' value=".net">
												<span class='select_text'>net</span>
											</div>
											<div class='domain_select_indi' >
												<input type='checkbox' class='sel_dom' value=".org">
												<span class='select_text'>org</span>
											</div>
											<div class='domain_select_indi' >
												<input type='checkbox' class='sel_dom' value=".biz">
												<span class='select_text'>biz</span>
											</div>
											<div class='domain_select_indi' >
												<input type='checkbox' class='sel_dom' value=".in">
												<span class='select_text'>in</span>
											</div>
											<div class='domain_select_indi' >
												<input type='checkbox' class='sel_dom' value=".pw">
												<span class='select_text'>pw</span>
											</div>
											<div class='domain_select_indi' >
												<input type='checkbox' class='sel_dom' value=".com.in">
												<span class='select_text'>com.in</span>
											</div><div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom' value=".me">
												<span class='select_text'>me</span>
											</div>
											<div class='domain_select_indi' >
												<input type='checkbox' class='sel_dom' value=".asia">
												<span class='select_text'>asia</span>
											</div>
										</div>
									</div>
									<div class='domain_select_div'>
										<div class='domain_select_header'>More Extensions</div>
										<div class='domain_select_container'>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".co">
												<span class='select_text'>co</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".info">
												<span class='select_text'>info</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".name">
												<span class='select_text'>name</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom' value=".mobi">
												<span class='select_text'>mobi</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".tv">
												<span class='select_text'>tv</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".ws">
												<span class='select_text'>ws</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".bz">
												<span class='select_text'>bz</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".cc">
												<span class='select_text'>cc</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom' value=".net.in">
												<span class='select_text'>net.in</span>
											</div>
											<div class='domain_select_indi'>
												<input type='checkbox' class='sel_dom'value=".org.in">
												<span class='select_text'>org.in</span>
											</div>
										</div>
										<div class='domain_select_header' style="margin:0px;text-align:right;width:270px;">
											<span style="font-weight:normal;"><a href="#">View all extesions>></a></span>
										</div>
									</div>
								</div>
							</div>							<a href="domain_availability_page.php">
								<div class="search_div_class"  style="border-bottom:0px;" id="search_div_id">
									<img src="images/search_icon.png" style="width:30px;padding-top:15px;" id="search_icon_img_id"/>
								</div>
							</a>
						</div>
						
				</div>
			</div>
			
				<div class="content_main_class">
					<div class="middle_div_othr_pgs_class">
						<div class="menu_main_div_out_container_cls">
							<div class="menu_main_othr_pages_cls">
								<ul class="main_menu_othr_pag_ul_cls">							
										
										<li class="menu_services_li_class">
											<a href="index.php" class="menu_main_a_cls">Home</a>
										</li>	
										<li class="menu_services_li_class" id="domains">
											<a href="get_domain.php" class="menu_main_a_cls">Domains</a>
											<div class="about_orange_div_serv_expl_div_cls" id="about_orange_div_serv_expl_div_id"><!--------------domains orange div----->
								
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="get_domain.php"><b>Domain Registration</b></a><br>
														<span class="serv_desc_span_tag_clss">Get your domain now</span>
													</div>
												</div>
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="bulk_domains.php"><b>Bulk Domains</b></a><br>
														<span class="serv_desc_span_tag_clss">Save when you register multiple domains</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="premium_domains.php"><b>Premium Domains</b></a><br>
														<span class="serv_desc_span_tag_clss">Get a headstart with a premium domain name</span>
													</div>
												</div>
															
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="domain_name_prices.php"><b>Domain Name Prices</b></a><br>
														<span class="serv_desc_span_tag_clss">Compare prices across TLDs</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="domain_transfer.php"><b>Domain Transfer</b></a><br>
														<span class="serv_desc_span_tag_clss">Get 15% off & 1 year free extension</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="bulk_domain_tranfer.php"><b>Bulk Domain Transfer</b></a><br>
														<span class="serv_desc_span_tag_clss">Transfer multiple domains in 1 easy step</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="who_is.php"><b>WhoIs Lookup</b></a><br>
														<span class="serv_desc_span_tag_clss">Take a look at domain registry record</span>
													</div>
												</div>
									
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="name_suggestion_tool.php"><b>Name Suggestion Tool</b></a><br>
														<span class="serv_desc_span_tag_clss">Get help picking a domain name</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="free_services.php"><b>Free Services</b></a><br>
														<span class="serv_desc_span_tag_clss">Check out free services we offer with every domain</span>
													</div>
												</div>
											</div>
										
										</li>
									<li class="menu_services_li_class" id="hosting">
										<a href="get_hosting.php" class="menu_main_a_cls">Get Hosting</a>
										<div class="about_orange_div_serv_expl_div_cls" id="hosting_orange_div_serv_expl_div_id"><!--------------hosting orange div----->
							
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="linux_hosting.php"><b>Linux Hosting</b></a><br>
										<span class="serv_desc_span_tag_clss">Fully featured Linux plans with Cpanel, Perl, PHP and more</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="windows_hosting.php"><b>Windows Hosting</b></a><br>
										<span class="serv_desc_span_tag_clss">Complete Windows Hosting with Plesk, IIS and more</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="word_press_hosting.php"><b>Word Press Hosting</b></a><br>
										<span class="serv_desc_span_tag_clss">Get your Wordpress blog online now</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="cms_hosting.php"><b>CMS Hosting</b></a><br>
										<span class="serv_desc_span_tag_clss">Power your website with Drupal, Joomla & more</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="ecom_hosting.php"><b>E-Commerce Hosting</b></a><br>
										<span class="serv_desc_span_tag_clss">Build Ecommerce sites with Zencart, osCommerce & more</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="linux_hosting_reseller.php"><b>Linux Hosting Reseller</b></a><br>
										<span class="serv_desc_span_tag_clss">Start your Hosting Business powered by WHM today</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="name_suggestion_tool.php"><b>Name Suggestion Tool</b></a><br>
										<span class="serv_desc_span_tag_clss">Get help picking a domain name</span>
									</div>
								</div>
								
								<div class="serv_each_div_in_menu_sub_cls">
									<div class="float_left">
										<a href="windows_reseller.php"><b>Windows Reseller Hosting</b></a><br>
										<span class="serv_desc_span_tag_clss">Start your Hosting Business with Plesk today</span>
									</div>
								</div>
								
								
						</div>
									
									</li>
									<li class="menu_services_li_class" id="vps">
									<a href="get_vps.php" class="menu_main_a_cls">Get a VPS</a>
										<!--------------VPS orange div----->
										<div class="about_orange_div_serv_expl_div_cls"  style="width:230px;height:80px;" id="vps_orange_div_serv_expl_div_id">
												<div class="serv_each_div_in_menu_sub_cls" style="border:0px;">
													<div class="float_left">
														<a href="get_vps.php"><b>VPS Hosting</b></a><br>
														<span class="serv_desc_span_tag_clss">Cutting edge VPS Hosting with Virtuozzo, NetApp & more</span>
													</div>
												</div>
										</div>
									</li>
									
									<li class="menu_services_li_class" id="websites">
									<a href="websites.php" class="menu_main_a_cls">Websites</a>
										<!-------------------------build a website orange div------->
											<div class="about_orange_div_serv_expl_div_cls"  style="width:215px;" id="websites_orange_div_serv_expl_div_id">
												
													<div class="serv_each_div_in_menu_sub_cls">
														<div class="float_left">
															<a href="do_it_yourself_website.php"><b>Do it yourself website Builder</b></a><br>
															<span class="serv_desc_span_tag_clss">Build your website in minutes using our DIY tools</span>
														</div>
													</div>
													
													<div class="serv_each_div_in_menu_sub_cls">
														<div class="float_left">
															<a href="find_web_designers.php"><b>Find web designers</b></a><br>
															<span class="serv_desc_span_tag_clss">Find top web designers in your city and your budget</span>
														</div>
													</div>
													
													<div class="serv_each_div_in_menu_sub_cls" style="border:0px;">
														<div class="float_left">
															<a href="digicerts.php"><b>Digicerts & SSL</b></a><br>
															<span class="serv_desc_span_tag_clss">Secure your Website</span>
														</div>
													</div>
											</div>
										<!-------------------------websites orange div------->
									</li>
									<li class="menu_services_li_class" id="emails">
									<a href="get_email.php" class="menu_main_a_cls">Get Email</a>
										<!-------------------------email a website orange div------->
										<div class="about_orange_div_serv_expl_div_cls"  style="width:215px;height:150px;" id="email_orange_div_serv_expl_div_id">
											
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="get_email.php"><b>Get a personal Email</b></a><br>
														<span class="serv_desc_span_tag_clss">Get email@yourdomain.com for home</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls" style="border:0px;">
													<div class="float_left">
														<a href="business_mail.php"><b>Business Email</b></a><br>
														<span class="serv_desc_span_tag_clss">Get email@yourdomain.com for your business</span>
													</div>
												</div>
										</div>
										<!-------------------------email orange div------->
									</li>
									
									<li class="menu_services_li_class" id="partner">
										<a href="affiliate.php" class="menu_main_a_cls">Partner With Us</a>
										<!-------------------------partner a website orange div------->
										<div class="about_orange_div_serv_expl_div_cls"  style="width:215px;height:295px;" id="partner_orange_div_serv_expl_div_id">
											
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="affiliate.php"><b>Affiliate Program</b></a><br>
														<span class="serv_desc_span_tag_clss">Earn BIG commissions with ZERO investment</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="design_exchange.php"><b>Design Xchange Program</b></a><br>
														<span class="serv_desc_span_tag_clss">Sign up now to get FREE web design leads</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls">
													<div class="float_left">
														<a href="refer_a_friend.php"><b>Refer a friend Program</b></a><br>
														<span class="serv_desc_span_tag_clss">Invite friends and get FREE renewals</span>
													</div>
												</div>
												
												<div class="serv_each_div_in_menu_sub_cls" style="border:0px;">
													<div class="float_left">
														<a href="private_labelled.php"><b>Private Labelled Reseller Program</b></a><br>
														<span class="serv_desc_span_tag_clss">Start a full-fledged Reseller business</span>
													</div>
												</div>
										</div>
										<!-------------------------partner orange div------->
									</li>
								</ul>
							</div>
						</div>
						<div class="includes_div_cls">
							<div class="desc_inc_cls">
								<div class="includes_txt_class">
									<h2 style="margin-bottom:0px;">Includes all the tools you need!</h2>
								</div>
								<div class="desc_txt_rel_sec_f_cls">
									Reliable.Secure.Fast
								</div>
								<div class="images_all_tls_cls">
									<div class="float_left">
										<div class="each_img_tag_div_all_t_u_n_cls">
											<img src="images/mysql_logo.png" style="width:100px;"/>
										</div>
										<div class="each_img_tag_div_all_t_u_n_cls">
											<img src="images/cpanel_logo.png" style="width:100px;"/>
										</div>
										<div class="each_img_tag_div_all_t_u_n_cls">
											<img src="images/perl_logo.png" style="width:100px;"/>
										</div>
									</div>
									<div class="float_left">
										<div class="each_img_tag_div_all_t_u_n_cls" style="padding-left:5px;padding-top:10px;">
											<img src="images/fantastico_logo.png" style="width:120px;"/>
										</div>
										<div class="each_img_tag_div_all_t_u_n_cls" style="padding-left:5px;padding-top:10px;">
											<img src="images/php_logo.png" style="width:100px;"/>
										</div>
										<div class="each_img_tag_div_all_t_u_n_cls" style="">
											<img src="images/ms_net_logo.png" style="width:100px;"/>
										</div>
									</div>
									<div class="float_left" style="width:400px;text-align:center;padding-top:10px;">
										<img src="images/plesk_logo.png" style="width:100px;"/>
									</div>
								</div>
								<div class="need_hlp_div_cls">
									<div class="nd_hlp_txt_cls">
										<h3 style="margin:0px;">Need Help?</h3>
									</div>
									<div class="nd_hp_txt_clsf">
										<div class="float_left">
											<div class="contct_icon_div_Cls">
												<img src="images/phone_icon_black.png" style="width:40px;"/>
											</div>
											<div class="call_cls_div">
												Call us at <span style="color:#f58220;">1800-200-7625</span> or <span style="color:#f58220;">91-22-67209001</span>
											</div>
										</div>
										<div class="float_left">
											<div class="contct_icon_div_Cls">
												<img src="images/chat_icon_black.png" style="width:40px;"/>
											</div>
											<div class="call_cls_div" >
												Chat with our <A href="https://support.bigrock.com/visitor/?/Default/LiveChat/Chat/Request/_sessionID=/_promptType=chat/_proactive=0/_filterDepartmentID=19%252C22%252C42%252C22%252C43%252C22%252C44%252C22%252C45%252C22%252C46%252C22/_randomNumber=m7vrmjkuui5mkkcoac2eyl4dptizzlwb/_fullName=/_email=/" style="text-decoration:underline;color:#f58220;">Hosting Specialists</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features_div_cls">
								<div class="ind_h">
									<h2 style="margin-bottom:0px;">India's #1 Hosting Company</h2>
								</div>
								<div class="float_left" style="width:400px;text-align:center;margin-top:15px;">
									<img src="images/get_host_att_img.png"/>
								</div>
								<div class="desc_txt_rel_sec_f_cls" style="text-align:left;font-family:arial;font-size:15px;margin-top:20px;color:#777;font-weight:bold;">
									Key Features:
								</div>
								<div class="news_each_div_class" style="margin-top:10px;width:350px;">
										<div class="bullet_img">
											<img src="images/bullet_point.png" style="width:25px;"/>
										</div>
										<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:315px;">
											Unlimited domains, email and disk space
										</div>
								</div>
								<div class="news_each_div_class" style="margin-top:10px;width:350px;">
										<div class="bullet_img">
											<img src="images/bullet_point.png" style="width:25px;"/>
										</div>
										<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:315px;">
											99.9% uptime with dedicated 24/7 technical support
										</div>
								</div>
								<div class="news_each_div_class" style="margin-top:10px;width:350px;">
										<div class="bullet_img">
											<img src="images/bullet_point.png" style="width:25px;"/>
										</div>
										<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:315px;">
											Fully equipped with cPanel (Demo) / Plesk (Demo) Control
										</div>
								</div>
								<div class="news_each_div_class" style="margin-top:10px;width:350px;">
										<div class="bullet_img">
											<img src="images/bullet_point.png" style="width:25px;"/>
										</div>
										<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:315px;">
											Rs. 2500* Google AdWords Credit
										</div>
								</div>
								<div class="news_each_div_class" style="margin-top:10px;width:350px;">
										<div class="bullet_img">
											<img src="images/bullet_point.png" style="width:25px;"/>
										</div>
										<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:315px;">
											30 Day Money Back Guarantee
										</div>
								</div>
							</div>
							<div class="plans_div_cls">
								<div class="choose_bet_h">
									<h2>CHOOSE BETWEEN</h2>
								</div>
								<div class="select_plan_div_cls">
									<div class="pln_txt_cls">
										<h2>Linux Advanced Plan</h2>
									</div>
									<div class="float_left" style="padding-bottom:10px;border-bottom:1px dashed #333;width:320px;">
										<div class="float_left" style="width:200px;">
											<div CLASS="starts_from_class">
												STARTS FROM
											</div>
											<div class="Rs_cls_div">
												Rs. 149/Month
											</div>
										</div>
										<div class="float_left" style="margin-left:15px;">
											<img src="images/linux_icon.png"/>
										</div>
									</div>
									<div class="float_left" style="width:320px;padding-bottom:20px;border-bottom:1px dashed #333;">
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Single Domain
											</div>
										</div>
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Unlimited Space
											</div>
										</div>
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Unlimited Bandwidth
											</div>
										</div>
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Unlimited Emails
											</div>
										</div>
									</div>
									<div class="choose_frm_tim_cost_cls">
										<div class="slt_dur_cls">Select Duration</div>
										<div class="select_cls_div_opt">
											<select style="width:200px;height:30px;">
												<option>10 years @149/month</option>
												<option>5 years @189/month</option>
												<option>2 years @219/month</option>
											</select>
										</div>
									</div>
									<a href="check_out_page.php">
										<div class="get_website_button_class" type="button" style="text-align:center;padding-right:20px;margin:20px 40px 0px 40px;">
											Buy this plan
										</div>
									</a>
								</div>
								<div class="or_out_div_cls">
									<div class="or_txt_cls">OR</div>
								</div>
								<div class="select_plan_div_cls" style="float:right;">
									<div class="pln_txt_cls">
										<h2>WIndows Premium Plan</h2>
									</div>
									<div class="float_left" style="padding-bottom:10px;border-bottom:1px dashed #333;width:320px;">
										<div class="float_left" style="width:200px;">
											<div CLASS="starts_from_class">
												STARTS FROM
											</div>
											<div class="Rs_cls_div">
												Rs. 219/Month
											</div>
										</div>
										<div class="float_left" style="margin-left:15px;padding-top:20px;">
											<img src="images/windows_plan_icon.png" style="width:100px;"/>
										</div>
									</div>
									<div class="float_left" style="width:320px;padding-bottom:20px;border-bottom:1px dashed #333;">
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Single Domain
											</div>
										</div>
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Unlimited Space
											</div>
										</div>
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Unlimited Bandwidth
											</div>
										</div>
										<div class="news_each_div_class" style="margin-top:10px;width:320px;">
											<div class="bullet_img">
												<img src="images/bullet_point.png" style="width:25px;"/>
											</div>
											<div class="blog_article_link_class" style="font-family:'open sans' sans-serif;font-size:14px;width:280px;margin-top:2px;">
												Unlimited Emails
											</div>
										</div>
									</div>
									<div class="choose_frm_tim_cost_cls">
										<div class="slt_dur_cls">Select Duration</div>
										<div class="select_cls_div_opt">
											<select style="width:200px;height:30px;">
												<option>10 years @149/month</option>
												<option>5 years @189/month</option>
												<option>2 years @219/month</option>
											</select>
										</div>
									</div>
									<a href="check_out_page.php">
									<div class="get_website_button_class" type="button" style="text-align:center;padding-right:20px;margin:20px 40px 0px 40px;">
										Buy this plan
									</div>
									</a>
								</div>
							</div>
							
							<div class="choose_bet_h">
									<h2>MAIN FEATURES</h2>
							</div>
							<div class="each_mn_ft_div_cls">
								<div class="img_dec_div_cls">
									<div class="img_tg_prg_cls">
										<img src="images/programming_icon.png"/>
									</div>
									<div class="desc_txt_cls_img_prg">
										<h4 style="margin-bottom:5px;">Programming Languages</h4>
									</div>
									<div class="desc_txt_cls_img_prg" style="font-family:'open sans' sans-serif;font-size:14px;">
										PHP<br>
										ASP.NET<br>
										Python and more..
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;">
											<img src="images/linux_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Linux
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>PHP v5</li>
											<li>Perl</li>
											<li>Python</li>
											<li>CGI</li>
										</ul>
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/windows_plan_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Windows
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>PHP v5</li>
											<li>ASP</li>
											<li>ASP.NET v3.5</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="each_mn_ft_div_cls">
								<div class="img_dec_div_cls">
									<div class="img_tg_prg_cls">
										<img src="images/programming_icon.png"/>
									</div>
									<div class="desc_txt_cls_img_prg">
										<h4 style="margin-bottom:5px;">Databases & Infrastructure</h4>
									</div>
									<div class="desc_txt_cls_img_prg" style="font-family:'open sans' sans-serif;font-size:14px;">
										Dual Quad Core Xeon Processors<br>
										MySQL/MSSQL/Access Databases<br>
										Highly redundant architecture
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;">
											<img src="images/linux_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Linux
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>MySQL Databases - Unlimited</li>
											<li>Database Space - Included as part of webspace</li>
										</ul>
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/windows_plan_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Windows
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>MySQL/MSSQL/Access Databases</li>
											<li>Unlimited</li>
											<li>ASP</li>
											<li>ASP.NET v3.5</li>
										</ul>
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/common_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Common
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>Dual Quad Core Xeon Processors</li>
											<li>24GB Ram</li>
											<li>Highly redundant architecture</li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="each_mn_ft_div_cls">
								<div class="img_dec_div_cls">
									<div class="img_tg_prg_cls">
										<img src="images/domains_email.png"/>
									</div>
									<div class="desc_txt_cls_img_prg">
										<h4 style="margin-bottom:5px;">Domains & Email</h4>
									</div>
									<div class="desc_txt_cls_img_prg" style="font-family:'open sans' sans-serif;font-size:12px;">
										Single Domain Hosting<br>
										Free DNS Management and Domain Forwarding<br>
										Email Compatible on multiple mobile platform
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/common_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Common
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>Single Domain Hosting</li>
											<li>Domain Forwarding & Free DNS Management</li>
											<li>Path Forwarding & URL Masking</li>
											<li>Space per Email Account - 2GB(unlimited for MDH plans)</li>
											<li>Email Compatible with Blackberry/iPhone/Mobile</li>
											<li>Webmail/SMTP/POP3/IMAP</li>
											<li>Advanced Spam/Virus Protection</li>
											<li>Unlimited Email Forwards/Aliases/Auto-responders</li>
											<li>50 Mailing Lists(unlimited for MDH plans)</li>
											<li>HTML Email</li>
											<li>Online Address Book</li>
											<li>Track sent mails</li>
										</ul>
									</div>
								</div>
							</div>

							
							<div class="each_mn_ft_div_cls">
								<div class="img_dec_div_cls">
									<div class="img_tg_prg_cls">
										<img src="images/apps_icon.png"/>
									</div>
									<div class="desc_txt_cls_img_prg">
										<h4 style="margin-bottom:5px;">Included Apps & others</h4>
									</div>
									<div class="desc_txt_cls_img_prg" style="font-family:'open sans' sans-serif;font-size:14px;">
										cPanel (demo) / Plesk Panel (demo)<br>
										Blogs - WordPress, b2evolution<br>
										Shopping Carts - osCommerce, CubeCart
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;">
											<img src="images/linux_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Linux
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>cPanel (demo) - 11x</li>
											<li>Apache 2.2x</li>
											<li>CentOS - Release 5.5</li>
											<li>Cron Jobs (Scheduled Tasks)</li>
											<li>cURL</li>
											<li>Zend Engine</li>
											<li>Zend Optimizer</li>
											<li>zlib</li>
											<li>mcrypt</li>
										</ul>
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/windows_plan_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Windows
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>Plesk Panel (Demo)</li>
											<li>IIS (Internet Information Services) 7.0</li>
											<li>MS SQL 2008 Standard Edition (64-bit)</li>
											<li>ASP.NET 4.0</li>
											<li>ASP</li>
											<li>MVC</li>
											<li>Reporting Services 2008 Version 12.0</li>
											<li>(Crystal Reporting Services, Data Report)</li>
										</ul>
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/common_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Common
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>Unlimited Sub Domains</li>
											<li>Web Access via Mobiles</li>
											<li>Custom MIME Types</li>
											<li>Dedicated IP - Add-on</li>
											<li>Directory Protection</li>
											<li>Domain Aliases</li>
											<li>File Manager</li>
											<li>ionCube Loader</li>
											<li>Latest Visitors</li>
											<li>MySQL 5x</li>
											<li>PDO_MySQL</li>
											<li>SSL Manager</li>
											<li>SSL/HTTPS Support - Add-on</li>
											<li>Unlimited FTP Users</li>
											<li>Access to raw logs</li>
											<li>AWSTATS</li>
										</ul>
									</div>
								</div>
							</div>
						
														<div class="each_mn_ft_div_cls">
								<div class="img_dec_div_cls">
									<div class="img_tg_prg_cls">
										<img src="images/programming_icon.png"/>
									</div>
									<div class="desc_txt_cls_img_prg">
										<h4 style="margin-bottom:5px;">Great Support</h4>
									</div>
									<div class="desc_txt_cls_img_prg" style="font-family:'open sans' sans-serif;font-size:14px;">
										Fully Qualified Technical Support<br>
										24/7 Live Chat/Phone/Email<br>
										24/7 Monitoring
									</div>
								</div>
								<div class="each_desc_l_w_c_cls">
									<div class="div_header_cls">
										<div class="float_left" style="padding-left:30px;padding-top:6px;">
											<img src="images/common_icon.png" style="width:30px;"/>
										</div>
										<div class="name_h_cls">
											Common
										</div>
									</div>
									<div class="ul_div_desc_cls">
										<ul>
											<li>Fully qualified technical support</li>
											<li>24/7 Live Chat / Phone / Email</li>
											<li>24/7 Monitoring</li>
											<li>High Availability</li>
										</ul>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				<!------------------FOOTER STUFF---------------------------->
				<div class="footer_main_div_class">
					<div style="float:left;width:430px;">
						<div class="join_txt_class">
							Join the league!
						</div>
						<div class="img_clients_div">
							<img src="images/clients_photo.png" style="width:350px;"/>
						</div>
						<div class="float_left" style="margin:20px 0px 0px 30px;">
							<div class="float_left">
								<img src="images/icann.png"/>
							</div>
							<div class="icann_txt">
								<span style="">BigRock is an ICANN accredited Registrar</span>
								<span style="color:#474646;font-size:12px;">Learn more About Us and our Management Team</span>
							</div>
						</div>
					</div>
					<div style="float:left;width:240px;">
						<div class="join_txt_class" style="margin-left:10px;width:200px;">
							 Awards
						</div>
						<div class="img_clients_div" style="margin:10px 0px 0px 10px;">
							<img src="images/awards.png" style="width:220px;"/>
						</div>
						<div class="payment_div">
							<div class="sec_txt">
								Secured by:
							</div>
							<div class="float_left" style="padding-top:8px;">
								<img src="images/verisign.png" style="width:100px;"/>
							</div>
							<div class="float_left" style="margin-left:-6px;">
								<img src="images/payment.png" style="width:118px;"/>
							</div>
							<div style="float:left;font-family:arial;font-size:10px;color:#474646;">
								We also accept Indian Debit Cards and Net Banking
								See all supported payment options
							</div>
						</div>
					</div>
					<div style="float:left;width:240px;">
						<div class="join_txt_class" style="margin-left:10px;width:200px;">
							Need help?
						</div>
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

