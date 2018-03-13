<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}




h1 {
font-style: roman;
font-size: 500%;
color:  #0066FF;
}

p {
font-style: italic;
font-size: 150%;
 color: #0066FF;
}

p1{
font-size: 120%;
font-style: serif;
color: #0066FF;
}



.div2 {
    width: 400px;
    height: 150px;    
    padding: 50px;
    border: 1px solid #0066FF;
	color: #0066FF;
	
}







</style>
<body>

<center><h1>Serbim</h1></center>
<center><p><i>A Platform Where You Can Search Any Type Of Image And Get Best Results.</i></p></center>

<form action="serbim.php">
 
  <div class="container">
  
   <center> <label><p1>Yourmail</p1></label></center>
    <input type="email" placeholder="Enter Usermail" name="email" required>
  
  
    <center><label><p1>Yourname</p1></label></center>
    <input type="text" placeholder="Enter Username" name="name" required>

    <center><label><p1>Password</p1></label></center>
    <input type="password" placeholder="Enter Password" name="passowrd" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

