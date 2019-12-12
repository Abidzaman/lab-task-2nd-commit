
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<script type="text/javascript">	
        		function validate()
        		{

		  var x = document.forms["myForm"]["fname"].value;
		  var y = document.forms["myForm"]["fid"].value;

		  if(x==""|| y=="")
		  {
		  	alert("asdasd");
		  }

}
    
        </script>
	<fieldset style="width:100px">
	<form onsubmit="return validate()" name="myForm" >
		
			<legend><h3>REGISTRATION</h3></legend>

					<b>Id </b><br>
					<input type="text" name="fid"  /><br>
				<b>Password</b><br>
					<input type="password" name="fpassword" /><br>
				<b>Confirm Password</b><br>
					<input type="password" name="cpassword" /><br>
	
					<b>Name</b> <br>
					<input type="text" name="fname"  /><br>
					<b>
						Email <br>
					</b>
					<input type="Email" name="femail">
		<b>User Type</b><hr>
					
						<select>
							<option>NONE</option>
  <option value="user">user</option>
  <option value="admin">admin</option>
</select>
					
				
				<hr>
				<br>
						<input type="submit"> <a href="signin.html">Login</a>
		
		
	</form>
	</fieldset>
</body>
</html>