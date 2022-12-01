<html>
    <body>
        <?php
        $con = new mysqli('localhost', 'root', '', 'Forms');
        if($con->connect_errno){
            echo $con->connect_errno;
            die();

        }
        
        
         
         
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $emailid = $_POST["emailid"];
            $bname = $_POST["bname"];
            $ctype = $_POST["ctype"];
            
            $sql= "INSERT INTO formdata (name, phone, emailid, bname, ctype   )   VALUES ('$name','$phone','$emailid','$bname','$ctype')";
          if($con->query(sql)){

            echo "Data stored";
          }
          else{
              echo"Insert data fail";
          }
         
         
     
         
 
         ?>
        
       
    </body>
</html>