<html>
   
   <head>
      
      <title>Variable</title>
   
   </head>
   
<body>
      

    <?php  


    



    $str="hello string";  
    $x=200;  
    $y=44.6;  


    echo "string is: $str <br/>";  
    echo "integer is: $x <br/>";  
    echo "float is: $y <br/>";  

    #casesensative 
    
	$color="red";  

	/*
	echo "My car is " . $color . "<br>";  
	echo "My house is " . $COLOR . "<br>";  
	echo "My boat is " . $coLOR . "<br>"; */

	echo"<br>";
	var_dump($x,$y,$str);

	echo"<br>";
	echo"<br>";

    #Boolean  Data type
    $true=true;
	  
	$false=false;
	  
	var_dump($true,$false);

	#Array Data type
	$arr=array(10,20,30,40,50);	
	var_dump($arr);	


	#Object Data type
	class Demo
		
		{
 
		public function show()
 
		{
 
		echo "This is show method<br/>";
 
		}	
 
		}
 
		$obj= new Demo();
 
		$obj->show();
 
		//$obj->show();	
 
		var_dump($obj);



    #Special Data types
	$blank=null;
         
	var_dump($blank);	
    ?>  

</body>

</html>