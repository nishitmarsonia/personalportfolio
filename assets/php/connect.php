 <?
 $firstname = $_post['firstname'];
 $lastname = $_post['lastname'];
 $phoneNumber = $_post['phoneNumber'];
 $email= $_post['email'];
 $message = $_post['message'];
 
//  datbase connection

$conn = new mysqli ('localhost' , 'root' , '' , 'test1');
if($conn->connection_error){
    die('connection Failed : '.$conn->connection_error);
}else{
    $stmt = $conn->prepare("insert into inquryform(firstname , lastname ,phoneNumber ,email , message)
    value(?,?,?,?,?)")
}

$stmt->bind_param("ssssi" , $firstname ,$lastname ,$phoneNumber,$email,$message);
 $stmt->execute();
 eacho "Registration Successfully....";
 $stmt->close();
 $conn->close();
 ?>