<?php include "include/grids_header.php" ?>
<?php include "include/grids_nav.php" ?>


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
											<li class="active">Grid System</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual">
											<h2 class="inner-tittle">Grid System</h2>
												<div class="graph">
													<div class="form-group">
														<div class="row">
															<div class="col-md-12">
																<input type="text" class="form-control1" placeholder=".col-md-12">
															</div>
															<div class="clearfix"> </div>
														</div>
													</div>
													<div class="form-group">
													<div class="row">
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-10">
															<input type="text" class="form-control1" placeholder=".col-md-10">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control1" placeholder=".col-md-9">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-4 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="col-md-8">
															<input type="text" class="form-control1" placeholder=".col-md-8">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-5 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-5">
														</div>
														<div class="col-md-7">
															<input type="text" class="form-control1" placeholder=".col-md-7">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-6">
														</div>
														<div class="col-md-6">
															<input type="text" class="form-control1" placeholder=".col-md-6">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-4 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="col-md-4 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-8 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-8">
														</div>
														<div class="col-md-2">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-3">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group mb-n">
													<div class="row">
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
                  <?php include "include/grids_footer.php" ?>
