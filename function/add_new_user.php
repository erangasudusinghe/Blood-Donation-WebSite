<?php
    include('../db/dbconn.php');
?>
<?php
    $erro_array=array();

    $Fname=$_POST["First_Name"];
    $Lname=$_POST["Last_Name"];
    $Email=$_POST["Email"];
    $Address=$_POST["Address"];
    $Mobile=$_POST["Mobile"];
    $Othermobile=$_POST["Other_Number"];
    $Bloodgroup=$_POST["Blood_group"];
    $Password=$_POST["Password"];
    $CPassword=$_POST["C_password"];
    if(0==count($erro_array))
    {
        if((""==trim($Fname))){
            $erro_array[0]="fname_erro=invalid";
        }
        if((""==trim($Lname)))
        {
            $erro_array[1]="lname_erro=invalid";
        }
        if((""==trim($Email)))
        {
            $erro_array[2]="email_erro=invalid";
        }
        if((""==trim($Address)))
        {
            $erro_array[3]="address_erro=invalid";
        }
        if((""==trim($Mobile)))
        {
            $erro_array[4]="mobile_erro=invalid";
        }
        if((""==trim($Bloodgroup)))
        {
            $erro_array[5]="bloodgroup_erro=invalid";
        }
        if((""==trim($Password)))
        {
            $erro_array[6]="password_erro=invalid";
        }
        if((""==trim($CPassword)))
        {
            $erro_array[7]="CPassword_erro=invalid";
           
        }
        if(0!=count($erro_array)){
        header("Location:../registation.php?{$erro_array[0]}&{$erro_array[1]}&{$erro_array[2]}&{$erro_array[3]}&{$erro_array[4]}&{$erro_array[5]}&{$erro_array[6]}&{$erro_array[7]}");
        }
        else
        {
            if(checkmail($Email))
            {
                if(checkmobileNo($Mobile))
                {
                        if(checkpassword($Password,$CPassword))
                        {
                            $query = "INSERT INTO donators (Fname,Lname,Email,Addres,Mobile,Othermobile,Bloodgroup,Passwords,CPassword,Usertype,image_dir) VALUES ('{$Fname}','{$Lname}','{$Email}','{$Address}','{$Mobile}','{$Othermobile}','{$Bloodgroup}','{$Password}','{$CPassword}','User','user.png')";
                            $result= mysqli_query($conn,$query);
                            if($result)
                            {
                                header("location:../index.php");
                            }
                        }
                        else
                        {
                            $erro_array[6]="CPassword_erro=invalid";
                            header("Location:../registation.php?{$erro_array[6]}");   
                        }
                }
                else
                {
                    $erro_array[4]="mobile_erro=invalid";
                    header("Location:../registation.php?{$erro_array[4]}");
                }
                
            }
            else
            {
                $erro_array[2]="email_erro=invalid";
                header("Location:../registation.php?{$erro_array[2]}");
            } 
            
        }
    }
   


    function checkpassword($Pw,$CPw)
    {
        if(!is_numeric($Pw)&&!is_numeric($CPw))
        {
            if(strlen($Pw)>=8)
            {
                $character_password= array();
                $character_password=str_split($Pw);
                $capitalletter=array();
                $simpleletter=array();
                $capitalletter=str_split(strtoupper($Pw));
                $simpleletter=str_split(strtolower($Pw));
                for($x=0;$x<strlen($Pw);$x++)
                {
                    if($character_password[$x]==$capitalletter[$x])
                    {
                        for($y=0;$y<strlen($Pw);$y++)
                        {
                            if($character_password[$y]==$simpleletter[$y])
                            {
                                
                                if($Pw==$CPw)
                                {
                                    return true;
                                }
                            }
                           
                        }
                        return false;
                    }
                
                }
                return false;
               
    
              
                
            }
            return false;
                
        }
        return false;   
    }

    function checkmobileNo($mobile)
    {
        if(is_numeric($mobile)&& strlen($mobile)==10)
        {
          return true;
        }
        else
        {
            return false;
        }
        
    }

    function checkmail($mail)
    {
        $character= array();
        $character=str_split($mail);
        for($x=0;$x<strlen($mail);$x++)
        {
            if( $character[0]=='@')
            {
                return false;
                break;
            }
            else if($character[$x]=='@')
            {
                if($x<strlen($mail)&& !is_numeric($character[$x+1]))
                {
                    return true;
                }
                else
                {
                    return false;
                }

            }
           
        }
       

    }
  

?>