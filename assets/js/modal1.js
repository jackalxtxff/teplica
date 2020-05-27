
 $(function() {
     if (window.PIE) {
         $('.button').each(function() {
             PIE.attach(this);
         });
     }
 });          
 $(function() {        
   $('.button').click(function(){

        $('.login').animate({'top':'80px'},{duration: 500});

        $('.overlay').css('visibility', 'visible');
   });
   $('.overlay, .close').click(function(){
       $('.overlay').css('visibility', 'hidden');
       $('.join').animate({'top':'-1000px'},{duration: 500});
       $('.login').animate({'top':'-1000px'},{duration: 500});
   });
   $("a").attr("hideFocus", "true");/*для того что бы не было рамок во круг ссылок*/
 });          
