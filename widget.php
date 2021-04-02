<?php include "include/widget_header.php" ?>
<?php include "include/widget_nav.php" ?>
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
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.php">Home</a></li>
															<li class="active">Widgets</li>
														</ol>
											</div>
											<!--/sub-heard-part-->
										<!--/Widgets-->
										        <div class="widget-one">
														<div class="col-md-6 weather-grids widget-shadow">
															<div class="header-top weather">
																<figure class="icons">
																	<canvas id="clear-day" width="64" height="64"></canvas>
																</figure>
																<h4 class="weather">Weather</h4>
																<ul class="cen">
																	<li><p>°C</p></li>
																	<li><p class="cen">°F</p></li>
																</ul>
																<div class="clearfix"> </div>
															</div>
															<div class="header-bottom">
																<div class="header-bottom1">
																	<div class="header-head">
																		<h4>Sunny</h4>
																		<figure class="icons">
																			<canvas id="partly-cloudy-day" width="64" height="64"></canvas>
																		</figure>
																		<h6>20°</h6>
																		<div class="bottom-head">
																			<p>Monday</p>
																		</div>
																	</div>
																</div>
																<div class="header-bottom1 header-bottom2">
																	<div class="header-head">
																		<h4>Cloudy</h4>
																		<figure class="icons">
																			<canvas id="cloudy" width="64" height="64"></canvas>
																		</figure>
																		<h6>37°</h6>
																		<div class="bottom-head">
																			<p>Tuesday</p>
																		</div>
																	</div>
																</div>
																<div class="header-bottom1">
																	<div class="header-head">
																		<h4>Rainy</h4>
																		<figure class="icons">
																			<canvas id="rain" width="64" height="64"></canvas>
																		</figure>
																		<h6>18°</h6>
																		<div class="bottom-head">
																			<p>Wednesday</p>
																		</div>
																	</div>
																</div>
																<div class="header-bottom1 header-bottom2">
																	<div class="header-head">
																		<h4>Snowy</h4>
																		<figure class="icons">
																			<canvas id="snow" width="64" height="64"></canvas>
																		</figure>
																		<h6>-2°</h6>
																		<div class="bottom-head">
																			<p>Thursday</p>
																		</div>
																	</div>
																</div>
																<div class="clearfix"> </div>
															</div>
															<script>
																 var icons = new Skycons({"color": "#fff"}),
																	  list  = [
																		"clear-day"
																	  ],
																	  i;

																  for(i = list.length; i--; )
																	icons.set(list[i], list[i]);

																  icons.play();
															</script>
															<script>
																 var icons = new Skycons({"color": "#00C6D7"}),
																	  list  = [
																		"clear-night", "partly-cloudy-day",
																		"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																		"fog"
																	  ],
																	  i;

																  for(i = list.length; i--; )
																	icons.set(list[i], list[i]);

																  icons.play();
															</script>
														</div>
														<div class="col-md-6 weather-grids weather-right widget-shadow">
															<div class="header-top weather2">
																<h3>Member Stats </h3>
															</div>
															<div class="circle-charts">
																<ul>
																	<li><div class="demo-1" data-percent="65"><div style="width: 115px; height: 115px;"><div class="ab" style="position: relative; text-align: center; width: 115px; height: 115px; border-radius: 100%;background-image: linear-gradient(324deg, transparent 50%, #002561 50%), linear-gradient(90deg, #002561 50%, transparent 50%); background-color: rgb(239, 239, 239);"><div class="cir" style="position: relative; top: 4px; left: 4px; text-align: center; width: 107px; height: 107px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 115px; height: 115px; line-height: 115px; vertical-align: middle; font-size: 15px; font-weight: normal; color:rgba(0, 198, 215, 0.92);">65%</span></div></div></div></div><p>Active</p></li>
																	<li><div class="demo-2" data-percent="55"><div style="width: 115px; height: 115px;"><div class="ab" style="position: relative; text-align: center; width: 115px; height: 115px; border-radius: 100%;background-image: linear-gradient(288deg, transparent 50%, #ea4c89 50%), linear-gradient(90deg, #ea4c89 50%, transparent 50%); background-color: rgb(239, 239, 239);"><div class="cir" style="position: relative; top: 4px; left: 4px; text-align: center; width: 107px; height: 107px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 115px; height: 115px; line-height: 115px; vertical-align: middle; font-size: 15px; font-weight: normal; color:rgba(0, 198, 215, 0.92);">55%</span></div></div></div></div><p>Inactive</p> </li>
																	<li><div class="demo-3" data-percent="85"><div style="width: 115px; height: 115px;"><div class="ab" style="position: relative; text-align: center; width: 115px; height: 115px; border-radius: 100%;background-image: linear-gradient(396deg, transparent 50%, #00c6d7 50%), linear-gradient(90deg, rgb(0, 198, 215) 50%, transparent 50%); background-color: rgb(239, 239, 239);"><div class="cir" style="position: relative; top: 4px; left: 4px; text-align: center; width: 107px; height: 107px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 115px; height: 115px; line-height: 115px; vertical-align: middle; font-size: 15px; font-weight: normal; color:rgba(0, 198, 215, 0.92);">85%</span></div></div></div></div><p>Sleeping</p> </li>
																</ul>
															</div>
															<script>
																$('.demo-1').percentcircle();
																	$('.demo-2').percentcircle({
																	animate : true,
																	diameter : 100,
																	guage: 3,
																	coverBg: '#fff',
																	bgColor: '#efefef',
																	fillColor: '#052963',
																	percentSize: '15px',
																	percentWeight: 'normal'
																	});

																	$('.demo-3').percentcircle({
																	animate : true,
																	diameter : 100,
																	guage: 3,
																	coverBg: '#fff',
																	bgColor: '#efefef',
																	fillColor: '#052963',
																	percentSize: '15px',
																	percentWeight: 'normal'
																});
															</script>
														</div>
														<div class="clearfix"> </div>
													</div>
													<!--/chat-->
													<div class="chat-inner">
														<!--/chat-inner-->
															<div class="chat-mdl-grid widget-shadow ">
																		<h4 class="title3">Chat</h4>
																		<div class="scrollbar" id="style-2">
																			<div class="activity-row activity-row1 activity-right">
																				<div class="col-xs-3 activity-img"><img src="images/in.jpg" class="img-responsive" alt=""></div>
																				<div class="col-xs-9 activity-img1">
																					<div class="activity-desc-sub">
																						<p>Hello ! Lorem ipsum dolor sit</p>
																						<span>10:00 PM</span>
																					</div>
																				</div>
																				<div class="clearfix"> </div>
																			</div>
																			<div class="activity-row activity-row1 activity-left">
																				<div class="col-xs-9 activity-img2">
																					<div class="activity-desc-sub1">
																						<p>What about our next meeting?</p>
																						<span class="right">9:55 PM</span>
																					</div>
																				</div>
																				<div class="col-xs-3 activity-img"><img src="images/in1.jpg" class="img-responsive" alt=""></div>
																				<div class="clearfix"> </div>
																			</div>
																			<div class="activity-row activity-row1 activity-right">
																				<div class="col-xs-3 activity-img"><img src="images/in2.jpg" class="img-responsive" alt=""></div>
																				<div class="col-xs-9 activity-img1">
																					<div class="activity-desc-sub">
																						<p>Consectetur adipisicing elit. Atque ea mollitia pariatur porro quae se</p>
																						<span>9:52 PM</span>
																					</div>
																				</div>
																				<div class="clearfix"> </div>
																			</div>
																			<div class="activity-row activity-row1 activity-left">
																				<div class="col-xs-9 activity-img2">
																					<div class="activity-desc-sub1">
																						<p>Quae sed sequi sint tenetur Atque ea mollitia pariatu </p>
																						<span class="right">8:00 PM</span>
																					</div>
																				</div>
																				<div class="col-xs-3 activity-img"><img src="images/in8.jpg" class="img-responsive" alt=""></div>
																				<div class="clearfix"> </div>
																			</div>
																			<div class="activity-row activity-row1 activity-left">
																				<div class="col-xs-9 activity-img2">
																					<div class="activity-desc-sub1">
																						<p>Quae sed sequi sint tenetur Atque ea mollitia pariatu </p>
																						<span class="right">7:00 PM</span>
																					</div>
																				</div>
																				<div class="col-xs-3 activity-img"><img src="images/in4.jpg" class="img-responsive" alt=""></div>
																				<div class="clearfix"> </div>
																			</div>
																			<div class="activity-row activity-row1 activity-right">
																				<div class="col-xs-3 activity-img"><img src="images/in5.jpg" class="img-responsive" alt=""></div>
																				<div class="col-xs-9 activity-img1">
																					<div class="activity-desc-sub">
																						<p>Consectetur adipisicing elit. Atque ea mollitia pariatur porro quae se</p>
																						<span>6:52 PM</span>
																					</div>
																				</div>
																							<div class="clearfix"> </div>
																						</div>
																					</div>
																					<div class="chat-bottom">
																						<form>
																							<input type="text" placeholder="Reply" required="">
																						</form>
																					</div>
																		 </div>
																		<div class="chat-mdl-grid two widget-shadow">
																			<div class="activity_box activity_box2">
																				<h4 class="title3">Todo</h4>
																				<div class="scrollbar" id="style-2">
																					<div class="single-bottom">
																						<ul>
																							<li>
																								<input type="checkbox" id="brand" value="">
																								<label for="brand"><span></span> Sunt in culpa qui officia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand1" value="">
																								<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand2" value="">
																								<label for="brand2"><span></span> Dolorem eum.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand3" value="">
																								<label for="brand3"><span></span> Pain that produces no resultant.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand4" value="">
																								<label for="brand4"><span></span> Cupidatat non proident.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand5" value="">
																								<label for="brand5"><span></span> Praising pain was born.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand6" value="">
																								<label for="brand6"><span></span> Computer &amp; Electronics</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand7" value="">
																								<label for="brand7"><span></span> Dolorem ipsum quia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand8" value="">
																								<label for="brand8"><span></span> Consequatur aut perferendis.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand9" value="">
																								<label for="brand9"><span></span> Dolorem ipsum quia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand10" value="">
																								<label for="brand10"><span></span> Sunt in culpa qui officia.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand11" value="">
																								<label for="brand11"><span></span> Fugiat quo voluptas nulla.</label>
																							</li>
																							<li>
																								<input type="checkbox" id="brand12" value="">
																								<label for="brand12"><span></span> Dolorem eum.</label>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="chat-bottom">
																					<form>
																						<input type="text" placeholder="What next ?" required="">
																					</form>
																				</div>
																			</div>
																		</div>
																	<div class="clearfix"> </div>
																	<div class="stats-grid">
																	<div class="stats-head">
																			<h4 class="title3">Browser Stats</h4>
																		</div>
																	<div class="stats-info graph">
																		<div class="stats">
																			<ul class="list-unstyled">
																				<li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
																				<li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
																				<li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
																				<li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
																				<li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
																				<li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
																				<li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li>
																			</ul>
																		</div>
																	</div>
																</div>
														<!--/chat-inner-->
													</div>
													<!--//chat-->
										<!--//Widgets-->
									</div>
								<!--//outer-wp-->

                <?php include "include/widget_footer.php" ?>
