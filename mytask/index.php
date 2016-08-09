<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Time log</title>
        
        <link  rel="stylesheet" type="text/css" href='style/style.css'/>                
              
              
    </head>
    <body>
        <header>
            <p id="header_logo">Time log</p>
        </header>
        <div class="content">
            
            <!--Form to add log data -->
            
            
           <form  id="formcontent" action="insert_ajax.php" method="post">
                        <label>Description</label><textarea name="desc" class="inpadd" id="desc" type="textarea" required></textarea>
                        <label>Time spent</label><textarea name= 'tspe' id="tspe" class="inpadd" type="textarea" required></textarea>
                        <input  value="+Add" class="button"  id='sub' type="submit"/> 
                   <div id='result'></div>   

           </form>
                
                 
            <!-- form ends-->
           

        <div class="posts">
            
        </div>    
        
        <p class="loading">
         Loading....   
        </p>
        <div class="page-links">
             <ul></ul> 
            
        </div>
        </div>
        <script type="text/template" id="post-template">
            <% _.each(posts, function(post,key,list){ %>
      <table>
    <h1 class='theadingr'><%= post.d_t %></h1> 
  
    <tr>
        <th>
           Description	 
        </th>
        
        <th>
           Time Spent	 
        </th>
        
        <th>
           Date	 
        </th>
    </tr>
    
    
        
        <%for(var item in post.time_log){%>
        <tr>
        <td>
                    <%= post.time_log[item].t_des %>  

        </td>
        <td>
                    <%= post.time_log[item].t_spe %> 

        </td>
        <td>
                    <%= post.time_log[item].t_datime %>  

        </td>
        </tr>
        <%}%>
    
    </table>
    <% }); %>
             
        </script>
        <script src="js/jquery-2.2.1.min.js">
        </script>
        <script src="js/custom.js">
        </script>
        <script src="js/underscore.js">
        </script>
    </body>
</html>
