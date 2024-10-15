<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if ($userType === 'etudiant') {
        $studentName = $_POST["studentName"];
        $studentLastname = $_POST["studentLastname"];
    } else if ($userType === 'ensignant') {
        // Process teacher specific fields
    }

    
    $sql = "Select * from signup where nom='$nom'";
    $result = mysqli_query($conn, $sql);        
    $count_nom = mysqli_num_rows($result); 

    $sql = "Select * from signup where prenom='$prenom'";
    $result = mysqli_query($conn, $sql);        
    $count_prenom = mysqli_num_rows($result); 

    $sql = "Select * from signup where email='$email'";
    $result = mysqli_query($conn, $sql);        
    $count_email = mysqli_num_rows($result);  
    
    if($count_nom == 0 && $count_email==0){  
        
        if($password == $cpassword) {

            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            $sql = "INSERT INTO signup(nom,prenom, email, password) VALUES('$nom','$prenom', '$email','$hash')";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                header("Location: home.php");
            }
        } 
        else { 
            echo  '<script>
                    alert("Passwords do not match")
                    window.location.href = "sign-up.php";
                </script>';
        }      
    }  
    else{  
        if($count_user>0){
            echo  '<script>
                    window.location.href = "sign-up.php";
                    alert("Username already exists!!")
                </script>';
        }
        if($count_email>0){
            echo  '<script>
                    window.location.href = "sign-up.php";
                    alert("Email already exists!!")
                </script>';
        }
    }     
}
?>
