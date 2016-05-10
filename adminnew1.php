 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Record</title>
 </head>
 <body>
 <?php 
 $error = '';
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <div>
 <strong>username: *</strong> <input type="text" name="username" id="username"value="" /><br/>
<strong>Name: *</strong> <input type="password" name="password" id="password"value="" /><br/>
 <strong>email: *</strong> <input type="text" name="email" id="email"value="" /><br/>
 <strong>contact: *</strong> <input type="text" name="contact" id="contact"value="" /><br/>
 <strong>address: *</strong> <input type="text" name="address" id="address"value="" /><br/>

 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
