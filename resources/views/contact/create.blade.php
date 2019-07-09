<html>
   <body>
      
      <?php
         echo Form::open(['route' => 'contact.store']);
            echo Form::text('name','Your name');
            echo '<br/>';
            
            echo Form::text('email', 'example@gmail.com');
            echo '<br/>';
     
            echo Form::textarea('msg', 'Some message');
            echo '<br/>';
                       
            
            
            echo Form::submit('Submit!');
         echo Form::close();
      ?>
   
   </body>
</html>