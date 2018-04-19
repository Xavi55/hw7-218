<?php
class UsersDB
{
	
	public static function getUsers()
	{
		$db=Database::getDB();

		$query="SELECT * FROM accounts ORDER BY id";
		$stmt=$db->prepare($query);
		$stmt->execute();

		$persons=[];
						//while( $row=$stmt->fetch(PDO::FETCH_BOTH) )
		while( $row=$stmt->fetch() )
		{
			//echo $row['id'] . ' ' . $row['password'];
			$persons[]= new User($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
		}

		return $persons;
	}
}
//$test = new UsersDB;
//echo $test::getUsers();
?>

