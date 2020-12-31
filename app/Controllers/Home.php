<?php

namespace App\Controllers;

use App\Models\User_model;

class Home extends BaseController
{
	public function __construct()
	{
		$this->user_model = new User_model();
	}

	public function index()
	{
		$user = session()->get("email");
		if (!isset($user)) {
			return view('login');
		} else {
			return view("admin");
		}
	}

	public function init_Data()
	{
		$user_email = session()->get("email");
		$user_permission = session()->get("permission");
		$data = $this->user_model->init_Data($user_email, $user_permission);
		echo json_encode($data);
	}

	public function init_post_data()
	{
		$user_id = session()->get("user_id");
		$permission = session()->get("permission");
		$data = $this->user_model->init_post_data($user_id, $permission);
		echo json_encode($data);
	}

	public function init_district()
	{
		$user_id = session()->get("user_id");
		$permission = session()->get("permission");
		$data = $this->user_model->init_district($user_id, $permission);
		echo json_encode($data);
	}

	public function init_estate()
	{
		$user_id = session()->get("user_id");
		$permission = session()->get("permission");
		$data = $this->user_model->init_estate($user_id, $permission);
		echo json_encode($data);
	}

	public function init_add_estate_modal()
	{
		$user_id = session()->get("user_id");
		$permission = session()->get("permission");
		$data = $this->user_model->init_add_estate_modal($user_id, $permission);
		echo json_encode($data);
	}

	public function login()
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		$data = $this->user_model->login($email, $password);
		echo $data;
	}

	public function add_user()
	{
		$userName = $_POST["userName"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$phone = $_POST["phone"];
		$permission = $_POST["permission"];
		$data = $this->user_model->add_user($userName, $email, $pass, $phone, $permission);
		echo $data;
	}

	public function delete_user()
	{
		$id = $_POST['id'];
		$data = $this->user_model->delete_user($id);
		echo $data;
	}

	public function save_data()
	{
		$id = $_POST['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$phone = $_POST['phone'];
		$permission = $_POST['permission'];
		$data = $this->user_model->save_data($id, $username, $email, $pass, $phone, $permission);
		echo $data;
	}
	//******************************************************** District *****************************************************/
	public function reg_district()
	{
		$new_district = $_POST['new_district'];
		$user_id = session()->get("user_id");
		$data = $this->user_model->reg_district($new_district, $user_id);
		echo $data;
	}

	public function delete_district()
	{
		$id = $_POST['id'];
		$data = $this->user_model->delete_district($id);
		echo $data;
	}

	public function change_district()
	{
		$id = $_POST['id'];
		$user_id = session()->get("user_id");
		$change_district_name = $_POST['change_district_name'];
		$data = $this->user_model->change_district($id, $change_district_name, $user_id);
		echo $data;
	}
	// ***************************************************** Estate Type *******************************************************/
	public function reg_estate_type()
	{
		$new_estate_type = $_POST['new_estate_type'];
		$user_id = session()->get("user_id");
		$data = $this->user_model->reg_estate_type($new_estate_type, $user_id);
		echo $data;
	}

	public function delete_estate()
	{
		$id = $_POST['id'];
		$data = $this->user_model->delete_estate($id);
		echo $data;
	}

	public function change_estate()
	{
		$id = $_POST['id'];
		$change_estate_name = $_POST['change_estate_name'];
		$user_id = session()->get("user_id");
		$data = $this->user_model->change_estate($id, $change_estate_name, $user_id);
		echo $data;
	}

	// ******************************************************** file upload ************************************************
	public function upload()
	{
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');
		$path = "../../Riyadh/upload/";
		if (!empty($_POST['address']) || !empty($_POST['district']) || $_FILES['file']) {
			$billboard_number = $_POST["billboard_number"];
			$address = $_POST["address"];
			$district = $_POST["district"];
			$estate_type = $_POST["estate_type"];
			$price = $_POST["price"];
			$estate_detail = $_POST["estate_detail"];
			$user_id = session()->get("user_id");
			$date = date("Y-m-d h:i:sa");
			$location = $_POST["location"];
			$img = basename($_FILES['file']['name']);
			$tmp = $_FILES['file']['tmp_name'];
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
			if (in_array($ext, $valid_extensions)) {
				$path = $path . strtolower($img);
				if (move_uploaded_file($tmp, $path)) {
					$img_data = $this->user_model->upload($img, $path, $user_id);
					$offer_data = $this->user_model->add_offer($user_id, $date, $img, $billboard_number, $address, $district, $estate_type, $price, $estate_detail, $location);
					if ($img_data == "success" && $offer_data == "success") {
						echo "success";
					}
				}
			} else {
				echo 'invalid';
			}
		}
	}	// ******************************************************** Edit file upload ************************************************
	public function edit_upload()
	{
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');
		$path = "../../Riyadh/upload/";
		if (!empty($_POST['address']) || !empty($_POST['district']) || $_FILES['file']) {
			$id = $_POST["id"];
			$billboard_number = $_POST["billboard_number"];
			$address = $_POST["address"];
			$district = $_POST["district"];
			$estate_type = $_POST["estate_type"];
			$price = $_POST["price"];
			$estate_detail = $_POST["estate_detail"];
			$user_id = session()->get("user_id");
			$date = date("Y-m-d h:i:sa");
			$location = $_POST["location"];
			$img = basename($_FILES['file']['name']);
			$tmp = $_FILES['file']['tmp_name'];
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
			if (in_array($ext, $valid_extensions)) {
				$path = $path . strtolower($img);
				if (move_uploaded_file($tmp, $path)) {
					// $img_data = $this->user_model->edit_upload($id, $img, $path, $user_id);
					$offer_data = $this->user_model->edit_add_offer($id, $user_id, $date, $img, $billboard_number, $address, $district, $estate_type, $price, $estate_detail, $location);
					echo json_encode($offer_data);
					// if ($img_data == "success" && $offer_data == "success") {
					// 	echo "success";
					// }
				}
			} else {
				echo 'invalid';
			}
		}
	}
	// ****************************************************** My Post *********************************************************
	//  Delete
	public function post_data_delete()
	{
		$id = $_POST['id'];
		$user_id = session()->get("user_id");
		$data = $this->user_model->post_data_delete($id, $user_id);
		echo $data;
	}

	// Edit
	public function post_data_edit()
	{
		$id = $_POST["id"];
		$user_id = session()->get("user_id");
		$data = $this->user_model->post_data_edit($id, $user_id);
		echo json_encode($data);
	}

	public function logout(){
		session()->destroy();
	}

	// *************************************************** Send Offer Data *************************************************
	public function send_offer()
	{
		
	}
}
