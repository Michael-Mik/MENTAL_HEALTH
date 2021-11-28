<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "mentalhealth";

$conn=mysqli_connect($servername,$username,$password,$database_name);

If(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $Name= $_POST['Name'];
    $Email= $_POST['Email'];
    $PhoneNumber= $_POST['PhoneNumber'];
    $Enter_Password= $_POST['Enter_Password'];

    $sql_query = "INSERT INTO reg_form (Name,Email,PhoneNumber,Enter_Password) VALUES ('$Name','$Email','$PhoneNumber','$Enter_Password') ";

    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Inserted";
    }
    else
    {
        echo "Error:" . "" . mysqli_error($conn);
    }
    mysqli_close($conn);


}

?>

