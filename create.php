<?
require("server.php");
require("index.php");

if (isset($_POST['create'])) {
    $firstName = $_POST['First_Name'];
    $middleName = $_POST['Middle_Name'];
    $lastName = $_POST['Last_Name'];
    $age = $_POST['age'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gender = $_POST['Gender'];
    $accessRole = $_POST['accessRole'];

    $query = "INSERT INTO students (First_Name, Middle_Name, Last_Name, Age, Gender, Access_Role) VALUES ($firstName, $middleName, $lastName, $age,  $gender, $accessRole)";
    $sqlCreate = mysqli_query($connection, $query) OR trigger_error("Query failed SQL " . $query);

    echo  "<script>alert('Successfully created!') </script>";
    

}
else {
    echo "<script> window.location.href='index.php'</script>";

}
