    <?php
    
    //Connection   
    
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'Config.php';

    $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
       
       
       
       
    //Variables
    
    $Username = $_POST['Username'];

    $Password = mysqli_fetch_array(mysqli_query($con,"SELECT Password FROM Users WHERE Username='$Username'"));
    
 
    
    $response = array();
    $response["Password"] = $Password;

    
    echo json_encode($response);
}
?>   
