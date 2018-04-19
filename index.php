<!DOCTYPE html>
<head>
<style>
body
{
	margin-left:10%;
	margin-right:10%;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<body>
<?php
	require('database.php');
	require('users_db.php');
	require('user.php');

	$users = UsersDB::getUsers();
	//var_dump($users);

echo "<br><h2 style=text-align:center>Accounts Table</h2><br>";

echo "<table class=user-table align=center>";
echo "				<tr>
				<th>ID</th>
				<th>email</th>
				<th>fname</th>
				<th>lname</th>
				<th>phone</th>
				<th>birthdate</th>
				<th>gender</th>
				<th>password</th>
				</tr>";	

				foreach($users as $user)
					$user->printUser();

echo "</table>";?>
</body></html>
