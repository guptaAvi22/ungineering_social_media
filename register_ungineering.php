<html>
    <head>
        <link rel="stylesheet" href="css/login_ungineering.css"/>
    </head>
    <body>
        <div class="col">
            <div class="row">
                
                <img class="image" src="img/ungineering_logo.svg">
                
                <div class="col">        
                    <span class="r">un</span><span>gineering</span>
                    <div class="e"></div>
                    <p>a <span class="r1">bit</span> of knowledge is good</p>
                    <p class="part2">a <span class="r1">byte</span> is better</p>
                </div>
                
            </div>
            
            <div class="row">
                <h1>New User</h1>
                <h1>Create</h1>
                <h1>Account</h1>
                <a href="login_ungineering.php">Existing User log-in</a>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <h1>Create Account</h1>
            </div>
            <div class ="row">
                <form method="POST" action="login_submit.php" onsubmit="return myfun()">
                    
                    name<input type="text" id="name"><br></br>
                    email <input type="text" id="email"><br></br>
                    password <input type="password" id="password" value=""><span id="message"></span><br></br>
                    password <input type="password" id="confirm-password" value=""><br></br>
                    <input type="submit" name="submit" value="log-in"><br></br>
                    <a href="login_ungineering.php">Existing User log-in</a>
                    
                </form>
                    
            </div>
              
        </div>
        <script >
            function myfun(){
    
                var a = document.getElementById("password").value;
                var b = document.getElementById("confirm-password").value;
                if (a==""){
                    document.getElementById("message").innerHTML="please enter the password" ;
                    return false;
                }
                if(a!=b){
                   document.getElementById("message").innerHTML="** password incorrect **" ;
                   return false; 
                }
            }

        </script>
        
    </body>
</html>
