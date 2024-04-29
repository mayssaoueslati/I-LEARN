<<<<<<< HEAD
<?php
include("connection.php");
?>
=======
>>>>>>> bab2c4d8622c0a823c269f89883632a662d70b3f
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        
            <div class="box">
<<<<<<< HEAD
                <form action="signup.php" methode="POST">
                    <img src="logo.png" alt="Your Logo" class="logo">
                    <h1>sign-up </h1>
                    <h5>Are u new here..?</h5>
                    <select id="userType"> <!-- Add ID to select element -->
                        <option value="">-- Select User Type --</option> <!-- Add an empty option as default -->
                        <option value="etudiant">Etudiant</option>
                        <option value="ensignant">Ensignant</option>
                    </select>
                    <!-- Add a container div for additional fields -->
                    <div id="additionalFields"></div>
                    
                        
                        <button type="submit">Sign-up</button>
=======
                <form>
                <img src="logo.png" alt="Your Logo" class="logo">
                <h1>sign-up </h1>
                <h5>Are u new here..?</h5>
                <select id="userType"> <!-- Add ID to select element -->
                    <option value="">-- Select User Type --</option> <!-- Add an empty option as default -->
                    <option value="etudiant">Etudiant</option>
                    <option value="ensignant">Ensignant</option>
                </select>
                 <!-- Add a container div for additional fields -->
                <div id="additionalFields"></div>
                
                    
                    <button type="submit">Sign-up</button>
>>>>>>> bab2c4d8622c0a823c269f89883632a662d70b3f
                
                

                </form>
                
               
            </div>
            
           
        
    
    
    <script>
        document.getElementById('userType').addEventListener('change', function() {
            var userType = this.value;
            var additionalFieldsDiv = document.getElementById('additionalFields'); // Define additionalFieldsDiv
            
            // Clear any previous content
            additionalFieldsDiv.innerHTML = '';

            if (userType === 'etudiant') {
                

<<<<<<< HEAD
                additionalFieldsDiv.innerHTML = '<br>'+'<input id="prenom"type="text" name="studentName" placeholder="Prenom">'
                                                +'<input id="nom" type="text" name="studentLastname" placeholder="Nom">' +'<br>'+
                                                '<input id="email" type="email" name="studentEmail" placeholder="Email">' +'<br>'+
                                                '<input id="password" type="password" name="studentPassword" placeholder="Password">'+'<br>'+
                                                '<input  id="cpassword" type="password" name="studentPassword" placeholder="confirm Password">';
            } else if (userType === 'ensignant') {
                // Show input field for teacher
                additionalFieldsDiv.innerHTML = '<br>'+'<input type="email" name="teacherEmail" placeholder="Email">' +' <br>'+
                '<input id="password" type="password" name="teacherPassword" placeholder="Password">'+'<br>'+
                '<input id="cpassword" type="password" name="teacherPassword" placeholder="confirm Password">';
=======
                additionalFieldsDiv.innerHTML = '<br>'+'<input type="text" name="studentName" placeholder="Prenom">'
                                                +'<input type="text" name="studentLastname" placeholder="Nom">' +'<br>'+
                                                '<input type="email" name="studentEmail" placeholder="Email">' +'<br>'+
                                                '<input type="password" name="studentPassword" placeholder="Password">'+'<br>'+
                                                '<input type="password" name="studentPassword" placeholder="confirm Password">';
            } else if (userType === 'ensignant') {
                // Show input field for teacher
                additionalFieldsDiv.innerHTML = '<br>'+'<input type="email" name="teacherEmail" placeholder="Email">' +' <br>'+
                '<input type="password" name="teacherPassword" placeholder="Password">'+'<br>'+
                '<input type="password" name="teacherPassword" placeholder="confirm Password">';
>>>>>>> bab2c4d8622c0a823c269f89883632a662d70b3f
            }
        });
    </script>
</body>
</html>