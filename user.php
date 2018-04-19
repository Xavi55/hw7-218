<?php
class User
{
	private $id;
	private $email;
	private $fname;
	private $lname;
	private $phone;
	private $birthday;
	private $gender;
	private $password;

	public function __construct($id,$email,$fname,$lname,$phone,$birthday,$gender,$password)
	{
		$this->id=$id;
		$this->email=$email;
		$this->fname=$fname;
		$this->lname=$lname;
		$this->phone=$phone;
		$this->birthday=$birthday;
		$this->gender=$gender;
		$this->password=$password;
	}

	public function getID()
	{
		return $this->id;
	}

	public function setID($val)
	{
		$this->id=$val;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($val)
	{
		$this->email=$val;
	}

	public function getFname()
	{
		return $this->fname;
	}

	public function setFname($val)
	{
		$this->fname=$val;
	}

	public function getLname()
	{
		return $this->lname;
	}

	public function setLname($val)
	{
		$this->lname=$val;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPhone($val)
	{
		$this->phone=$val;
	}

	public function getBirthday()
	{
		return $this->birthday;
	}

	public function setBirthday($val)
	{
		$this->birthday=$val;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setGender($val)
	{
		$this->password=$val;
	}
	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($val)
	{
		$this->gender=$val;
	}

	public function printUser()
	{
		echo 
'<tr><td>'.$this->getID().'</td><td>'.$this->getEmail().'</td><td>'.$this->getFname().'</td><td>'.$this->getLname().'</td><td>'.$this->getPhone().'</td><td>'.$this->getBirthday().'</td><td>'.$this->getGender().'</td><td>'.$this->getPassword().'</td></tr>';
	}
}

//$test = new User(19,'email','first','last',908,05171995,'gender','pass');
//echo $test->printUser();
?>
