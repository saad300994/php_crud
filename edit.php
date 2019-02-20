<?php
	include('conn.php'); // creates connection
	$id=$_GET['q']; //q from index.php-> update button
	$query="SELECT id, name, email, phone FROM contacts WHERE id =$id";
	$run_query=mysqli_query($conn, $query); //runs the query
	 $contact=mysqli_fetch_object($run_query); //brings data from DB
	  

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Contact</title>
</head>
<body>
	<h1>Edit</h1>
	<hr>

	<!-- Edit Contact -->

	<fieldset >
		<legend>Edit Contact</legend>

		<form method="POST" action="update.php?q=<?= $contact->id; ?>">
			<table cellspacing="3" cellpadding="3" width="50%">
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value ="<?= $contact->name ?>" required></td>
				</tr>

				<tr>
					<td>Email:</td>
					<td><input type="email" value="<?= $contact->email; ?>" name="email" required></td>
				</tr>

				<tr>
					<td>Phone:</td>
					<td><input type="text" name="phone" value ="<?= $contact->phone ?>" required></td>
				</tr>
				<tr>
					<td colspan="2">
						<hr>
						<button type="submit" name="submit"> Update </button>
					</td>
				</tr>
			</table>
		</form>

	</fieldset>
</body>
</html>