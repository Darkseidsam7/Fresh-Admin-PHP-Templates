<div class="page-container">
<!--/content-inner-->
<div class="left-content">
  <div class="inner-content">
 <!-- header-starts -->
   <div class="header-section">
         <!--menu-right-->
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
