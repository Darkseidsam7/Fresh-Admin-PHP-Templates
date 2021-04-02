<?php include "include/buttons_header.php" ?>
<?php include "include/buttons_nav.php" ?>



						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											  <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Italy</span>
																			<ul class="dropdown">
																				<li><a class="deutsch">France</a></li>
																				<li><a class="english"> Italy</a></li>
																				<li><a class="espana">Brazil</a></li>
																				<li><a class="russian">Usa</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">

																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>


										</li>

										<li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>


													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3>
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div>
														</li>
													</ul>
										</li>

							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div>
										</li>
									</ul>
							</li>
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>
											</div>

											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div>
										</li>
									</ul>
							</li>
							<div class="clearfix"></div>
								</ul>
							</div>
							<div class="clearfix"></div>
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.php">Home</a></li>
											<li class="active">Buttons</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual">
												<h2 class="inner-tittle">Flat Buttons</h2>
												<div class="graph">
												        <div class="buttons-ui">
																<a class="btn blue">Blue Button</a>
																<a class="btn green">Green Button</a>
																<a class="btn red">Red Button</a>
																<a class="btn purple">Purple Button</a>
																<a class="btn orange">Orange Button</a>
																<a class="btn yellow">Yellow Button</a>
													  </div>

										        </div>
												<!--/buttons-inner-->
													<div class="button-inner-grids">
														<div class="col-md-6 inner-grid-button">
															<h3 class="inner-tittle two"> Social icons buttons </h3>
														     <div class="grid-1">
																		<button class="facebook"> <i class="fa fa-twitter"></i> </button>
																		<button class="twitter"><i class="fa fa-dribbble"></i></button>
																		<button class="in"><i class="fa fa-linkedin"></i></button>
																		<button class="vimeo"><i class="fa fa-skype"></i></button>
																		  <p class="four">
																			<a class="a_demo_four" href="#">
																				Click me icon for example !
																			</a>
																		 </p>
															 </div>
														</div>
														<div class="col-md-6 graph-2 second">
															<h3 class="inner-tittle two">Click to Active buttons </h3>
															<div class="grid-1">

															  <section>
																	<div id="buttons">
																		<p>
																			<a class="a_demo_three" href="#">
																				Click me!
																			</a>
																		</p>
																		<p>
																			<a href="#" class="a_demo_three second_button">
																				Come on, don't be afraid
																			</a>
																		</p>
																		<p>
																			<a href="#" class="a_demo_three third_button">
																				You can make this as wide as you want ;)
																			</a>
																		</p>
																	</div>
																</section>

															</div>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="button-inner-grids">
														<div class="col-md-6 inner-grid-button">
															<h3 class="inner-tittle two">Toggle Buttons </h3>
														     <div class="grid-1">
																	<div class="inner-toggle">
																		<span class="toggle">
																					<input type="checkbox">
																					<label data-off="&#10006;" data-on="&#10004;"></label>
																				</span>

																				<span class="toggle">
																					<input type="checkbox">
																					<label data-off="&#9724;" data-on="&#9654;"></label>
																				</span>
																				<span class="toggle">
																					<input type="checkbox">
																					<label data-off="Stop" data-on="Play"></label>
																				</span>
																		 </div>
															 </div>
														</div>
														<div class="col-md-6 graph-2 second">
															<h3 class="inner-tittle two">Button Switch </h3>
															<div class="grid-1">
															 <div class="switch-main">
															    <div class="onoffswitch">
																	<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
																	<label class="onoffswitch-label" for="myonoffswitch">
																		<span class="onoffswitch-inner"></span>
																		<span class="onoffswitch-switch"></span>
																	</label>
																</div>
																</div>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
														<div class="button-inner-grids">
														<div class="col-md-6 inner-grid-button">
															<h3 class="inner-tittle two">Social Media Sharing Buttons</h3>
														     <div class="grid-1">
																	<div class="inner-share">
																		<div class="share share_size_large share_type_twitter">
																					<span class="share__count">868</span>
																					<a class="share__btn" href="#">Tweet</a>
																				</div>
																				<div class="share share_size_large share_type_facebook">
																					<span class="share__count">1.3K</span>
																					<a class="share__btn" href="#">Like</a>
																				</div>
																				<div class="share share_size_large share_type_gplus">
																					<span class="share__count">28</span>
																					<a class="share__btn" href="#">+1</a>
																				</div>
																	</div>
															 </div>
														</div>
														<div class="col-md-6 graph-2 second">
															<h3 class="inner-tittle two">Button styles </h3>
															<div class="grid-1">
															  <div class="cont-btn">
																	<a class="btn blue one">Blue Button</a>
																		<a class="btn green two">Green Button</a>
																		<a class="btn red three">Red Button</a>
																		<a class="btn purple purp">Purple Button</a>
															  </div>
															  <div class="cont-btn">
																	<a class="btn blue four">Blue Button</a>
																		<a class="btn green fifth">Green Button</a>
																		<a class="btn red six">Red Button</a>
																		<a class="btn green two2">Purple Button</a>
															  </div>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												<!--//buttons-inner-->

										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
                  <?php include "include/buttons_footer.php" ?>
