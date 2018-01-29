    <?php  
    echo "<h3>Example for __LINE__</h3>";  
    echo "You are at line number " . __LINE__ . "<br><br>";// print Your current line number i.e;3  
    echo "<h3>Example for __FILE__</h3>";  
    echo __FILE__ . "<br><br>";//print full path of file with .php extension  
    echo "<h3>Example for __DIR__</h3>";  
    echo __DIR__ . "<br><br>";//print full path of directory where script will be placed  
    echo dirname(__FILE__) . "<br><br>"; //its output is equivalent to above one.  
    echo "<h3>Example for __FUNCTION__</h3>";  
    //Using magic constant inside function.  
    function cash(){  
    echo 'the function name is '. __FUNCTION__ . "<br><br>";//the function name is cash.  
    }  
    cash();  
    //Using magic constant outside function gives the blank output.  
    function test_function(){  
    echo 'HYIIII';  
    }  
    test_function();  
    echo  __FUNCTION__ . "<br><br>";//gives the blank output.  
      
    echo "<h3>Example for __CLASS__</h3>";  
    class abc  
    {  
    public function __construct() {  
    ;  
    }  
    function abc_method(){  
    echo __CLASS__ . "<br><br>";//print name of the class abc.  
    }  
    }  
    $t = new abc;  
    $t->abc_method();  
    class first{  
    function test_first(){  
    echo __CLASS__;//will always print parent class which is first here.  
    }  
    }  
    class second extends first  
    {  
    public function __construct() {  
    ;  
    }  
    }  
    $t = new second;  
    $t->test_first();  
    echo "<h3>Example for __TRAIT__</h3>";  
    trait created_trait{  
    function abc(){  
    echo __TRAIT__;//will print name of the trait created_trait  
    }  
    }  
    class anew{  
    use created_trait;  
    }  
    $a = new anew;  
    $a->abc();  
    echo "<h3>Example for __METHOD__</h3>";  
    class meth{  
    public function __construct() {  
    echo __METHOD__ . "<br><br>";//print meth::__construct  
    }  
    public function meth_fun(){  
    echo __METHOD__;//print meth::meth_fun  
    }  
    }  
    $a = new meth;  
    $a->meth_fun();  
      
    echo "<h3>Example for __NAMESPACE__</h3>";  
    class name{  
    public function __construct() {  
    echo 'This line will be printed on calling namespace';  
    }  
    }  
    $clas_name= __NAMESPACE__ .'\name';  
    $a = new $clas_name;  
    ?>  