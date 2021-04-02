<!--footer section start-->
 <footer>
    <p>&copy Augment . All Rights Reserved | Design by  <a href="https://SAMTPOINT.in/" target="_blank">SAMTPOINT.</a></p>
 </footer>
<!--footer section end-->
</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
<div class="sidebar-menu">
<header class="logo">
<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Augment</h1></span>
<!--<img id="logo" src="" alt="Logo"/>-->
</a>
</header>
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
<div class="down">
 <a href="index.php"><img src="images/admin.jpg"></a>
 <a href="index.php"><span class=" name-caret">Jasmin Leo</span></a>
<p>System Administrator in Company</p>
<ul>
<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
 <li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
 <li><a class="tooltips" href="index.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
 </ul>
</div>
<!--//down-->
<div class="menu">
<ul id="menu" >
 <li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
  <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tabs &amp; Panels</span> <span class="fa fa-angle-right" style="float: right"></span></a>
    <ul id="menu-academico-sub" >
   <li id="menu-academico-avaliacoes" ><a href="tabs.php"> Tabs &amp; Panels</a></li>
   <li id="menu-academico-boletim" ><a href="widget.php">Widgets</a></li>
   <li id="menu-academico-avaliacoes" ><a href="calender.php">Calendar</a></li>

   </ul>
 </li>
  <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
    <ul id="menu-academico-sub" >
     <li id="menu-academico-avaliacoes" ><a href="forms.php">Forms</a></li>
     <li id="menu-academico-boletim" ><a href="validation.php">Validation Forms</a></li>
     <li id="menu-academico-boletim" ><a href="table.php">Tables</a></li>
     <li id="menu-academico-boletim" ><a href="buttons.php">Buttons</a></li>
     </ul>
  </li>
<li><a href="typography.php"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
   <ul id="menu-academico-sub" >
     <li id="menu-academico-avaliacoes" ><a href="login.php">Login</a></li>
     <li id="menu-academico-boletim" ><a href="register.php">Register</a></li>
   <li id="menu-academico-boletim" ><a href="404.php">404</a></li>
   <li id="menu-academico-boletim" ><a href="sign.php">Sign up</a></li>
   <li id="menu-academico-boletim" ><a href="profile.php">Profile</a></li>
   </ul>
</li>
<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
  <ul>
 <li><a href="inbox.php"><i class="fa fa-inbox"></i> Inbox</a></li>
 <li><a href="compose.php"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
   <li><a href="editor.php"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

 </ul>
</li>
   <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
  <ul id="menu-academico-sub" >
   <li id="menu-academico-avaliacoes" ><a href="grids.php">Grids</a></li>
   <li id="menu-academico-boletim" ><a href="media.php">Media Objects</a></li>

   </ul>
</li>
<li><a href="chart.php"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
 <ul>
 <li><a href="map.php"><i class="lnr lnr-map"></i> Maps</a></li>
 <li><a href="graph.php"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
</ul>
</li>
<li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
   <ul id="menu-comunicacao-sub" >
 <li id="menu-mensagens" style="width:120px" ><a href="project.php">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
   <ul id="menu-mensagens-sub" >
   <li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.php">Ribbons</a></li>
   <li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.php">Blank</a></li>
   </ul>
 </li>
 <li id="menu-arquivos" ><a href="500.php">500</a></li>
 </ul>
</li>
</ul>
</div>
</div>
<div class="clearfix"></div>
</div>
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
if (toggle)
{
$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
$("#menu span").css({"position":"absolute"});
}
else
{
$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
setTimeout(function() {
$("#menu span").css({"position":"relative"});
}, 400);
}

   toggle = !toggle;
 });
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
