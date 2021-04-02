<?php include "include/tabs_header.php" ?>
<?php include "include/tabs_nav.php" ?>


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
															<li><a href="#">Home</a></li>
															<li class="active"> Tabs &amp; Panels</li>
														</ol>
											</div>
											<!--/sub-heard-part-->
										<!--/tabs-->
										 <div class="tab-main">
											 <!--/tabs-inner-->
												<div class="tab-inner">
												      <div id="tabs" class="tabs">
													            <h2 class="inner-tittle">Responsive Horizontal Tabs </h2>
															<div class="graph">
																					<nav>
																						<ul>
																							<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Shop</span></a></li>
																							<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>Drinks</span></a></li>
																							<li><a href="#section-3" class="icon-food"><i class="fa fa-cutlery"></i> <span>Food</span></a></li>
																							<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i> <span>Lab</span></a></li>
																							<li><a href="#section-5" class="icon-truck"><i class="fa fa-truck"></i> <span>Order</span></a></li>
																						</ul>
																					</nav>
																					<div class="content tab">
																						<section id="section-1">
																							<div class="mediabox">
																								<i class="fa fa-coffee"></i>
																								<h3>Sushi Gumbo Beetroot</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-trophy"></i>
																								<h3>Pea Sprouts Fava Soup</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-leaf"></i>
																								<h3>Turnip Broccoli Sashimi</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																						</section>
																						<section id="section-2">
																							<div class="mediabox">
																								<i class="fa fa-trophy"></i>
																								<h3>Asparagus Cucumber Cake</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-coffee"></i>
																								<h3>Magis Kohlrabi Gourd</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-leaf"></i>
																								<h3>Ricebean Rutabaga</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																						</section>
																						<section id="section-3">
																							<div class="mediabox">
																							<i class="fa fa-leaf"></i>
																								<h3>Noodle Curry</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																							 <i class="fa fa-trophy"></i>
																								<h3>Leek Wasabi</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-coffee"></i>
																								<h3>Green Tofu Wrap</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																						</section>
																						<section id="section-4">
																							<div class="mediabox">
																								<i class="fa fa-trophy"></i>
																								<h3>Tomato Cucumber Curd</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-coffee"></i>
																								<h3>Mushroom Green</h3>
																								<p>Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.</p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-leaf"></i>
																								<h3>Swiss Celery Chard</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																						</section>
																						<section id="section-5">
																							<div class="mediabox">
																								<i class="fa fa-leaf"></i>
																								<h3>Radish Tomato</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																								<i class="fa fa-trophy"></i>
																								<h3>Fennel Wasabi</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																							<div class="mediabox">
																							<i class="fa fa-coffee"></i>
																								<h3>Red Tofu Wrap</h3>
																								<p>Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd. </p>
																							</div>
																						</section>
																					</div><!-- /content -->
																				</div>
																				<!-- /tabs -->

																			</div>
																			<script src="js/cbpFWTabs.js"></script>
																			<script>
																				new CBPFWTabs( document.getElementById( 'tabs' ) );
																			</script>
																			<h3 class="inner-tittle two">Vertical Tabs </h3>
																			<div class="graph">

																						        <div class="tabs">
																							  <nav class="second"> <a>Tab #1</a> <a>Tab #2</a> <a>Tab #3</a> </nav>
																							  <div class="context">
																								<p>Content #1</p>
																								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id ultricies lorem. Donec mattis ornare eros, eget hendrerit est porttitor nec. Aenean tristique massa vel nunc lobortis venenatis. Integer sit amet faucibus dolor, vitae iaculis ex. Sed blandit libero ut ante facilisis, ac imperdiet nibh mollis. Suspendisse eget leo suscipit, malesuada metus at, semper libero. Aliquam neque libero, fermentum id bibendum eu, feugiat consequat leo. Vestibulum ut purus et libero pulvinar mollis. Morbi dapibus varius ipsum eu tristique. Donec tortor justo, tincidunt malesuada nunc sed, ornare viverra eros. Nullam et massa ultrices, vulputate neque at, blandit velit. Nunc ultricies at quam vitae tempor. Quisque maximus fringilla arcu, vel sollicitudin dui luctus ac.</p>
																								<p>Sed vitae consectetur urna. Aenean facilisis vitae massa quis auctor. Ut at ullamcorper magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et venenatis justo. Vivamus feugiat purus sit amet mi tincidunt, id egestas erat sodales. Vivamus dapibus rhoncus feugiat. Quisque pulvinar eu est vitae facilisis. Maecenas ac vestibulum lectus, in auctor turpis. In ultrices massa eget finibus volutpat. Nam eu nibh quis purus euismod eleifend. Fusce quis mattis erat. Praesent aliquet urna non imperdiet condimentum. Praesent a venenatis tortor. Donec porttitor enim nec facilisis volutpat.</p>
																							  </div>
																							  <div class="context">
																								<p>Content #2</p>
																								<p>Ut molestie, neque ac malesuada aliquet, orci ligula ornare lorem, et sagittis diam dolor id odio. Maecenas blandit dolor nec tincidunt vulputate. Proin ultrices dui vulputate ullamcorper molestie. Sed non orci id tortor commodo molestie. Curabitur lectus lacus, iaculis eu quam nec, congue rutrum felis. Morbi rhoncus metus a diam mattis, vel lacinia lectus ultricies. Quisque aliquet magna justo, quis pretium purus vulputate sit amet. Vivamus vehicula nisl eu sollicitudin efficitur. Curabitur egestas, felis vel tempus efficitur, felis nibh fermentum nulla, at gravida risus mauris sed sapien. Donec lobortis mi convallis tortor iaculis, sit amet vulputate libero mollis. Cras sagittis ligula eget est sodales tempor.</p>
																							  </div>
																							  <div class="context">
																								<p>Content #3</p>
																								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse tempor accumsan purus a rutrum. Nam congue tempor dui, vel auctor dolor tincidunt id. Proin fringilla consectetur urna. Fusce nec sodales turpis, eu rhoncus enim. Pellentesque pretium, dui et feugiat venenatis, sapien augue molestie quam, ac vulputate arcu quam et mauris. Duis lectus mi, congue ac tortor vel, maximus venenatis sem. Nam eget cursus sapien, sit amet rhoncus lacus. Vestibulum est justo, scelerisque ac erat eu, fermentum suscipit tellus. Aliquam velit nisi, feugiat ut arcu et, finibus efficitur lectus.</p>
																								<p>Nulla aliquam dapibus nunc, sed convallis sem semper sit amet. Mauris et ullamcorper lorem. Donec volutpat egestas massa, vitae porttitor mi venenatis sit amet. Nulla condimentum fermentum risus non mattis. Mauris ut posuere erat. Duis vel ante sit amet augue blandit facilisis. Nulla congue turpis at imperdiet porta. Nullam quis aliquet augue. Duis et arcu in augue fringilla sodales. Aliquam pulvinar elit non iaculis egestas. Nam risus enim, malesuada id augue a, sagittis pharetra quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend, ligula eget ultrices venenatis, metus neque finibus tortor, sit amet venenatis turpis nibh et odio.</p>
																							  </div>
																							</div>
																							<script>
																							$(function() {
																							  $('.tabs nav a').on('click', function() {
																								show_content($(this).index());
																							  });

																							  show_content(0);

																							  function show_content(index) {
																								// Make the content visible
																								$('.tabs .context.visible').removeClass('visible');
																								$('.tabs .context:nth-of-type(' + (index + 1) + ')').addClass('visible');

																								// Set the tab to selected
																								$('.tabs nav.second a.selected').removeClass('selected');
																								$('.tabs navnav.second a:nth-of-type(' + (index + 1) + ')').addClass('selected');
																							  }
																							});
																							</script>

																			</div>
																	 <div class="col-md-6 graph-2">
																					<h3 class="inner-tittle">Panel Background </h3>
																					<div class="panel panel-primary">
																							  <div class="panel-heading">Panel with panel-primary class</div>
																							  <div class="panel-body"><p>Panel Content Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd.radish garlic brussels Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. earthnut pea radish garlic brussels sprout groundnut summer purslane earthnut pea tomato spring onion azuki bean gourd.tomato spring onion azuki bean gourd.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
																				    </div>
																	</div>
																 <div class="col-md-6 graph-2 second">
																	<h3 class="inner-tittle">Panel with footer </h3>
																					<div class="panel panel-primary two">
																							  <div class="panel-heading">Panel with panel-primary class</div>
																							  <div class="panel-body two"><p>Panel Content Chickweed Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. tomato spring onion azuki bean gourd.</p></div>
																							  <div class="panel-footer">
																										Panel footer
																									</div>
																				    </div>
																   </div>
																 <div class="clearfix"> </div>
														</div>
												</div>
											  <!--//tabs-inner-->
										 </div>
										<!--//tabs-->
									</div>
								<!--//outer-wp-->
                <?php include "include/tabs_footer.php" ?>
