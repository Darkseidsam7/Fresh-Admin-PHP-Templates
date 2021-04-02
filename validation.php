<?php include "include/validation_header.php" ?>
<?php include "include/validation_nav.php" ?>

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
															<li class="active">Forms Validation</li>
														</ol>
											</div>
											<!--/sub-heard-part-->
												<!--/forms-->
													<div class="forms-main">
														<h2 class="inner-tittle">Forms Validation</h2>
															<div class="graph-form">
																	<div class="validation-form">
																				<!---->

																					<form>
																						<div class="vali-form">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Firstname</label>
																						  <input type="text" placeholder="Firstname" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Lastname</label>
																						  <input type="text" placeholder="Lastname" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>

																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Email</label>
																						  <input type="text" placeholder="Email" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Url</label>
																						  <input type="text" placeholder="Current Website Url" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						  <div class="col-md-12 form-group2 group-mail">
																						  <label class="control-label">Language</label>
																						<select>
																							<option value="">English</option>
																							<option value="">Japanese</option>
																							<option value="">Russian</option>
																							<option value="">Arabic</option>
																							<option value="">Spanish</option>
																						</select>
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 ">
																						  <label class="control-label">Your Comment</label>
																						  <textarea placeholder="Your Comment..." required="">Your Comment.....</textarea>
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="vali-form">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Phone Number</label>
																						  <input type="text" placeholder="Phone Number" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Mobile Number</label>
																						  <input type="text" placeholder="Mobile Number" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						 <div class="vali-form vali-form1">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Create a password</label>
																						  <input type="password" placeholder="Create a password" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Repeated password</label>
																						  <input type="password" placeholder="Repeated password" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						 <div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Number</label>
																						  <input type="text" placeholder="Number" required="">
																						   <p class=" hint-block check">Numeric values from 0-***</p>
																						</div>
																						 <div class="clearfix"> </div>

																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label ">Date</label>
																						  <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group">
																						  <div class="checkbox1">
																							<label class="check">
																							  <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
																							  Are you a winner?
																							</label>
																						  </div>
																						</div>
																						 <div class="clearfix"> </div>
																						  <div class="col-md-12 form-group2 group-mail">
																						  <label class="control-label">Select</label>
																						<select>
																							<option value="">Contrary</option>
																							<option value="">Contrary1</option>
																							<option value="">Contrary2</option>
																							<option value="">Contrary3</option>
																							<option value="">Contrary4</option>
																						</select>
																						</div>
																						 <div class="clearfix"> </div>

																						<div class="col-md-12 form-group button-2">
																						  <button type="submit" class="btn btn-primary">Submit</button>
																						  <button type="reset" class="btn btn-default">Reset</button>
																						</div>
																					  <div class="clearfix"> </div>
																					</form>

																				<!---->
																			 </div>

																		</div>
																</div>
														<!--//forms-->
												</div>
											<!--//outer-wp-->

                      <?php include "include/validation_footer.php" ?>
