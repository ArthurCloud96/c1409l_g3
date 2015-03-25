<?php
require 'header.php';
?>
<h1>form</h1>
<form action="#">
	<table>
		<tr>
			<th>Username</th>
			<td><input type="text" name="username" id="username" /></td>
		</tr>

		<tr>
			<th>Password</th>
			<td><input type="password" name="Password" id="Password" /></td>
		</tr>

		<tr>
			<th>Fullname</th>
			<td><input type="text" name="Fullname" id="Fullname" /></td>
		</tr>

		<tr>
			<th>email</th>
			<td><input type="text" name="email" id="email" /></td>
		</tr>
	</table>
</form>
<?php
require 'footer.php';
?>