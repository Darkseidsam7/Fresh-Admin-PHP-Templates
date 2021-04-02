<?php include "include/project_header.php" ?>
<?php include "include/project_nav.php" ?>


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
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
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
								<div class="outter-wp">
								<!--sub-heard-part-->
								   <div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="index.php">Home</a></li>
										<li class="active">Projects</li>
									</ol>
								   </div>
								  <!--//sub-heard-part-->
								<div class="graph-visual">
											<h2 class="inner-tittle">Projects </h2>
													 <!--/gallery-->
													 <div class="gallery">
															<div class="gallery-bottom grid">
																<div class="col-md-3 g-left">
																		<a href="images/p3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p3.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p4.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p2.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p1.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																		<div class="col-md-3 g-left">
																		<a href="images/p4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p4.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p3.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p5.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p2.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p3.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p5.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																						<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p2.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																					<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="col-md-3 g-left">
																		<a href="images/p1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
																			<figure class="effect-oscar">
																				<img src="images/p1.jpg" alt=""/>
																				<figcaption>
																					<h4>Projects</h4>
																					<p><i class="lnr lnr-magnifier"></i></p>
																				</figcaption>
																			</figure>
																		</a>
																	</div>
																	<div class="clearfix"> </div>
																</div>
															</div>
														</div>

													 <!--//gallery-->

											</div>

									<!--//outer-wp-->
								</div>
								<?php include "include/project_footer.php" ?>
