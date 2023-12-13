<?php
session_start();
// session_unset();
include("connection.php");
?>

<?php
if(isset($_POST['usubmit'])) {
    $Username = $_POST['uname'];
    $Useremail = $_POST['uemail'];
    $Userpassword = $_POST['upassword'];

    $query = $Pdo->prepare("INSERT INTO users (Username, Useremail, Userpassword) VALUES(:pn,:pe,:pp)");
    $query->bindParam("pn",  $Username);
    $query->bindParam("pe",  $Useremail);
    $query->bindParam("pp",  $Userpassword);
    $query->execute();

    echo "<script>
    alert('Signup Successfully...!');
    location.assign('signin.php');
    </script>";
}

if(isset($_POST['ulsubmit'])) {
    $ULseremail = $_POST['ulemail'];
    $ULserpassword = $_POST['ulpassword'];

    $query = $Pdo->prepare("SELECT * FROM users WHERE Useremail = :pe AND Userpassword = :pp");
    $query->bindParam(":pe", $ULseremail);
    $query->bindParam(":pp", $ULserpassword);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $_SESSION['username'] = $user['Username'];
        $_SESSION['useremail'] = $user['Useremail'];
        $_SESSION['userpassword'] = $user['Userpassword'];

        echo "<script>
        alert('Signin Successfully...!');
        location.assign('index.php'); 
        </script>";
    } 
    else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function () {
            var lSIele = document.querySelector('#lSIeleLogin');
            console.log(lSIele);
        
            var errorContainer = lSIele.nextElementSibling;
            if (!errorContainer) {
                errorContainer = document.createElement('div');
                errorContainer.classList.add('error-container');
                lSIele.parentNode.appendChild(errorContainer);
            }
        
            console.log(errorContainer);
        
            errorContainer.innerHTML = '<p class=\'error-message\'><i class=\'fa-solid fa-circle-exclamation\'></i><span>Invalid email or password. Please try again..</span></p>';
            
            if (errorContainer && errorContainer.classList.contains('error-container')) {
                errorContainer.remove();
            }
        });        
        </script>";        
    }
}
?>