(function($){

   $(document).ready(function(){
       
       
      var template = _.template($("#post-template").html());


       var itemsPerPage=1;


       function loadPosts(url){
       

           if(typeof url === 'undefined'){

               
               url='./read_ajax.php?page=1&items_perpage=' + itemsPerPage;

           }
           $.getJSON(url, function(data){

               $('.loading').hide();
               var resultingstring = template({posts: data.posts});
               var pageLinks=$('.page-links ul');
                   pageLinks.html(data);
              $(".posts").html(resultingstring);
              
              for(var i=1, length=Math.ceil(data.total_posts / itemsPerPage); i<=length; i++){
                  $('<li>',{dataUrl:'./read_ajax.php?page='+i+'&items_perpage='+itemsPerPage}).
                          on('click', function(){
                              
                           var dataUrl=$(this).attr('dataUrl');   
                              $('.loading').show();
                              loadPosts(dataUrl);
                          }).text(i).appendTo(pageLinks);
              }
           });
           }
           loadPosts();
                
       
       //form submitting actions with ajax call to insert from insert_ajax.php
                $("#sub").click(function () {   
                if($('#desc').val()=== "" || $('#tspe').val()=== "" ){
                $("#result").html('Empty Fields!');
                $("#result").show(3000);
                $("#result").hide(5000);
                return false;
     
            }
       
                       
               var data= $("#formcontent :input").serializeArray();
               data.push({name: 'adentry'});
               $.post($("#formcontent").attr("action"), data, function(info){
               $("#result").html(info);
               $("#result").show(3000); 
               $("#result").hide(5000);
               $(".inpadd").val('');
     
      
               });
               loadPosts();
               });
     
     $('#formcontent').submit(function(){
    
     return false;
     });  
       //form submit ends here
       
   }); 
    
})(jQuery);

