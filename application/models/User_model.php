<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
public function updateUser(){
		$post = $this->input->post();
		$id = $post['id'];
		$nama = $post['nama'];
		$email = $post['email'];
		$role = $post['role'];
		$status = $post['status'];
		$pwlama = $post['pwlama'];
		$inputpwbaru = $post['password1'];

		$pwbaru = password_hash($inputpwbaru, PASSWORD_DEFAULT);

		$this->db->set('nama', $nama);
		$this->db->set('email', $email);
		if ($inputpwbaru == "") {
			$this->db->set('password', $pwlama);
		}else{
			$this->db->set('password', $pwbaru);

		}
		$this->db->set('role_id', $role);
		$this->db->set('is_active', $status);
		$this->db->where('id', $id);
		$this->db->update('user');
	}
}