<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use mysqli;

class User_model extends Model
{

    public function __construct()
    {
    }

    public function init_Data($user_email, $user_permission)
    {
        $db = db_connect();
        $builder = $db->table("user");
        if ($user_permission != 2) {
            $query = $builder->get();
        } else {
            $query = $builder->getWhere(['email' => $user_email]);
        }
        $user_info = array();
        $i = 0;
        foreach ($query->getResult() as $row) {
            $i++;
            $user_info[$i]['id'] = $row->id;
            $user_info[$i]['username'] = $row->username;
            $user_info[$i]['email'] = $row->email;
            $user_info[$i]['pass'] = $row->pass;
            $user_info[$i]['phone'] = $row->phone;
            $user_info[$i]['permission'] = $row->permission;
        }
        return $user_info;
    }

    public function init_post_data($user_id, $permission)
    {
        $db = db_connect();
        $offer_data = array();
        $i = 0;
        if ($permission == 2) {
            $query = $db->query("SELECT a.billboard_number AS billboard_number, a.id as id, a.date AS date, a.address AS address, a.price AS price, a.real_estate_detail AS real_estate_detail, a.location AS location, b.district AS district, c.estate_type AS estate_type, d.url AS url from offer AS a
            LEFT JOIN district AS b on b.user_id = '$user_id' and b.id = a.district_id
            LEFT JOIN estate_type AS c on c.user_id = '$user_id' and c.id = a.estate_type_id
            LEFT JOIN photo AS d on d.user_id= '$user_id' and d.id = a.img_url_id
            WHERE a.user_id = '$user_id'");
        } else {
            $query = $db->query("SELECT a.billboard_number AS billboard_number, a.id as id, a.date AS date, a.address AS address, a.price AS price, a.real_estate_detail AS real_estate_detail, a.location AS location, b.district AS district, c.estate_type AS estate_type, d.url AS url FROM offer AS a
            LEFT JOIN district AS b ON b.id = a.district_id
            LEFT JOIN estate_type AS c ON c.id = a.estate_type_id
            LEFT JOIN photo AS d ON d.id = a.img_url_id");
        }
        foreach ($query->getResult() as $row) {
            $i++;
            $offer_data[$i]["id"] = $row->id;
            $offer_data[$i]["billboard_number"] = $row->billboard_number;
            $offer_data[$i]["address"] = $row->address;
            $offer_data[$i]["district"] = $row->district;
            $offer_data[$i]["estate_type"] = $row->estate_type;
            $offer_data[$i]["price"] = $row->price;
            $offer_data[$i]["real_estate_detail"] = $row->real_estate_detail;
            $offer_data[$i]["location"] = $row->location;
            $offer_data[$i]["date"] = $row->date;
        }
        return $offer_data;
    }

    public function init_district($user_id, $permission)
    {
        $db = db_connect();
        $builder = $db->table("district");
        if ($permission == 2) {
            $query = $builder->getWhere(['user_id' => $user_id]);
        } else {
            $query = $builder->get();
        }
        $district_info = array();
        $i = 0;
        foreach ($query->getResult() as $row) {
            $i++;
            $district_info[$i]["id"] = $row->id;
            $district_info[$i]["district"] = $row->district;
        }
        return $district_info;
    }

    public function init_estate($user_id, $permission)
    {
        $db = db_connect();
        $builder = $db->table("estate_type");
        if ($permission == 2) {
            $query = $builder->getWhere(['user_id' => $user_id]);
        } else {
            $query = $builder->get();
        }
        $estate_info = array();
        $i = 0;
        foreach ($query->getResult() as $row) {
            $i++;
            $estate_info[$i]["id"] = $row->id;
            $estate_info[$i]["estate_type"] = $row->estate_type;
        }
        return $estate_info;
    }

    public function init_add_estate_modal($user_id, $permission)
    {
        $db = db_connect();
        $builder_estate = $db->table("estate_type");
        $builder_district = $db->table("district");
        $estate_arr = array();
        $district_arr = array();
        $result = array();
        $i = 0;
        $j = 0;
        if ($permission == 2) {
            $query_estate = $builder_estate->getWhere(['user_id' => $user_id]);
            $query_district = $builder_district->getWhere(['user_id' => $user_id]);
        } else {
            $query_estate = $builder_estate->get();
            $query_district = $builder_district->get();
        }
        foreach ($query_estate->getResult() as $row) {
            $i++;
            $estate_arr[$i]["id"] = $row->id;
            $estate_arr[$i]["estate_type"] = $row->estate_type;
        }
        foreach ($query_district->getResult() as $d_row) {
            $j++;
            $district_arr[$j]["id"] = $d_row->id;
            $district_arr[$j]["district"] = $d_row->district;
        }
        array_push($result, $district_arr);
        array_push($result, $estate_arr);
        return $result;
    }

    public function login($email, $password)
    {
        $db = db_connect();
        $builder = $db->table("user");
        $builder->where("email", $email);
        $builder->where("pass", $password);
        $user_info = array();
        if ($builder->countAllResults() > 0) {
            $query = $builder->getWhere(["email" => $email, "pass" => $password]);
            foreach ($query->getResult() as $row) {
                array_push($user_info, $row->username);
                array_push($user_info, $row->email);
                array_push($user_info, $row->permission);
                array_push($user_info, $row->id);
            }
            $data = [
                "username" => $user_info[0],
                "email" => $user_info[1],
                "permission" => $user_info[2],
                "user_id" => $user_info[3]
            ];
            session()->set($data);
            return "success";
        } else {
            return "nouser";
        }
    }

    public function add_user($userName, $email, $pass, $phone, $permission)
    {
        $db = db_connect();
        $builder = $db->table("user");
        $builder->where("email", $email);
        if ($builder->countAllResults() > 0) {
            return "already";
        } else {
            $data = [
                "username" => $userName,
                "email" => $email,
                "pass" => $pass,
                "phone" => $phone,
                "permission" => $permission
            ];
            $builder->insert($data);
            return "success";
        }
    }

    public function delete_user($id)
    {
        $db = db_connect();
        $builder = $db->table("user");
        $builder->delete(["id" => $id]);
    }

    public function save_Data($id, $username, $email, $pass, $phone, $permission)
    {
        $db = db_connect();
        $builder = $db->table("user");
        $builder->delete(["id" => $id]);
        $builder->where("email", $email);
        $data = [
            "username" => $username,
            "email" => $email,
            "pass" => $pass,
            "phone" => $phone,
            "permission" => $permission
        ];
        $builder->replace($data);
    }
    // ******************************************************* District ***************************************************
    public function reg_district($new_district, $user_id)
    {
        $db = db_connect();
        $builder = $db->table("district");
        $builder->where("district", $new_district);
        if ($builder->countAllResults() > 0) {
            return "already";
        } else {
            $data = [
                "user_id" => $user_id,
                "district" => $new_district
            ];
            $builder->insert($data);
            return "success";
        }
    }

    public function delete_district($id)
    {
        $db = db_connect();
        $builder = $db->table("district");
        $builder->delete(['id' => $id]);
        return "success";
    }

    public function change_district($id, $change_district_name, $user_id)
    {
        $db = db_connect();
        $builder = $db->table("district");
        $builder->delete(["id" => $id]);
        $builder->where("id", $id);
        $builder->replace(["district" => $change_district_name, "id" => $id, "user_id" => $user_id]);
        return "success";
    }

    // ****************************************************** Estate Type *************************************************
    public function reg_estate_type($new_estate_type, $user_id)
    {
        $db = db_connect();
        $builder = $db->table("estate_type");
        $builder->where("estate_type", $new_estate_type);
        if ($builder->countAllResults() > 0) {
            return "already";
        } else {
            $data = [
                "user_id" => $user_id,
                "estate_type" => $new_estate_type
            ];
            $builder->insert($data);
            return "success";
        }
    }

    public function delete_estate($id)
    {
        $db = db_connect();
        $builder = $db->table("estate_type");
        $builder->delete(['id' => $id]);
        return "success";
    }

    public function change_estate($id, $change_estate_name, $user_id)
    {
        $db = db_connect();
        $builder = $db->table("estate_type");
        $builder->where("id", $id);
        $builder->delete(["id" => $id]);
        $builder->replace(["estate_type" => $change_estate_name, "id" => $id, "user_id" => $user_id]);
        return "success";
    }

    // ************************************************ File Upload ******************************************************
    public function upload($img, $path, $user_id)
    {
        $db = db_connect();
        $builder = $db->table("photo");
        $data = [
            "user_id" => $user_id,
            "name" => $img,
            "url" => $path
        ];
        $builder->insert($data);
        return "success";
    }

    // ************************************************ New Offer Add ****************************************************
    public function add_offer($user_id, $date, $img, $billboard_number, $address, $district, $estate_type, $price, $estate_detail, $location)
    {
        $db = db_connect();
        $builder = $db->table("offer");
        $query = $db->query("SELECT a.id AS district_id, b.id AS estate_id, c.id AS image_url_id FROM district AS a 
        LEFT JOIN estate_type AS b ON b.estate_type = '$estate_type' AND b.user_id = '$user_id'
        LEFT JOIN photo AS c ON c.name = '$img' AND c.user_id = '$user_id'
        WHERE a.user_id = '$user_id' AND a.district = '$district'");
        $id_arr = array();
        foreach ($query->getResult() as $row) {
            array_push($id_arr, $row->district_id);
            array_push($id_arr, $row->estate_id);
            array_push($id_arr, $row->image_url_id);
        }
        $data = [
            "user_id" => $user_id,
            "billboard_number" => $billboard_number,
            "address" => $address,
            "district_id" => $id_arr[0],
            "estate_type_id" => $id_arr[1],
            "price" => $price,
            "img_url_id" => $id_arr[2],
            "real_estate_detail" => $estate_detail,
            "location" => $location,
            "date" => $date
        ];
        $builder->insert($data);
        return "success";
    }
    // ************************************************ Edit offer data ****************************************************
    public function edit_add_offer($id, $user_id, $date, $img, $billboard_number, $address, $district, $estate_type, $price, $estate_detail, $location)
    {
        $db = db_connect();
        $builder = $db->table("offer");
        $query = $db->query("SELECT a.id AS district_id, b.id AS estate_id, c.id AS image_url_id FROM district AS a 
        LEFT JOIN estate_type AS b ON b.estate_type = '$estate_type' AND b.user_id = '$user_id'
        LEFT JOIN photo AS c ON c.name = '$img' AND c.user_id = '$user_id'
        WHERE a.user_id = '$user_id' AND a.district = '$district'");
        $id_arr = array();
        foreach ($query->getResult() as $row) {
            array_push($id_arr, $row->district_id);
            array_push($id_arr, $row->estate_id);
            array_push($id_arr, $row->image_url_id);
        }
        $edit_data = [
            "id" => $id,
            "user_id" => $user_id,
            "billboard_number" => $billboard_number,
            "address" => $address,
            "district_id" => $id_arr[0],
            "estate_type_id" => $id_arr[1],
            "price" => $price,
            "img_url_id" => $id_arr[2],
            "real_estate_detail" => $estate_detail,
            "location" => $location,
            "date" => $date
        ];
        $builder->delete(["id" => $id]);
        $builder->replace($edit_data);
        return "success";
    }
    // ************************************************ Edit File Upload ******************************************************
    public function edit_upload($id, $img, $path, $user_id)
    {
        $db = db_connect();
        $builder = $db->table("photo");
        $query = $db->query("SELECT img_url_id FROM offer where id = '$id'");
        foreach($query->getResult() as $row)
        {
            $img_url_id = $row->img_url_id;
        }
        $data = [
            "id" => $img_url_id,
            "user_id" => $user_id,
            "name" => $img,
            "url" => $path
        ];
        $builder->delete(["id" => $img_url_id]);
        $builder->replace($data);
        return "success";
    }

    // ************************************************ My Post **********************************************************
    // Delete
    public function post_data_delete($id, $user_id)
    {
        $db = db_connect();
        $id_arr = array();
        $query = $db->query("SELECT district_id, estate_type_id, img_url_id FROM offer WHERE user_id = '$user_id' and id = '$id'");
        foreach ($query->getResult() as $row) {
            $id_arr["district_id"] = $row->district_id;
            $id_arr["estate_type_id"] = $row->estate_type_id;
            $id_arr["img_url_id"] = $row->img_url_id;
        }
        $district_id = $id_arr['district_id'];
        $estate_type_id = $id_arr['estate_type_id'];
        $img_url_id = $id_arr['img_url_id'];
        $db->query("DELETE FROM offer where id = '$id'");
        $db->query("DELETE FROM district where id='$district_id'");
        $db->query("DELETE FROM estate_type where id='$estate_type_id'");
        $db->query("DELETE FROM photo where id = '$img_url_id'");
        return "success";
    }
    //  Edit
    public function post_data_edit($id, $user_id)
    {
        $db = db_connect();
        $edit_data = array();
        $query = $db->query("SELECT a.billboard_number AS billboard_number, a.id as id, a.date AS date, a.address AS address, a.price AS price, a.real_estate_detail AS real_estate_detail, a.location AS location, b.district AS district, c.estate_type AS estate_type, d.name AS image_name, d.url as image_url from offer AS a
            LEFT JOIN district AS b on b.id = a.district_id
            LEFT JOIN estate_type AS c on c.id = a.estate_type_id
            LEFT JOIN photo AS d on d.id = a.img_url_id
            WHERE a.id = '$id'");
        foreach ($query->getResult() as $row) {
            $edit_data["id"] = $row->id;
            $edit_data["billboard_number"] = $row->billboard_number;
            $edit_data["address"] = $row->address;
            $edit_data["district"] = $row->district;
            $edit_data["estate_type"] = $row->estate_type;
            $edit_data["price"] = $row->price;
            $edit_data["real_estate_detail"] = $row->real_estate_detail;
            $edit_data["location"] = $row->location;
            $edit_data["date"] = $row->date;
            $edit_data["image_name"] = $row->image_name;
            $edit_data["image_url"] = $row->image_url;
        }
        return $edit_data;
    }
}
