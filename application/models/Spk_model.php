<?php

use phpDocumentor\Reflection\Types\This;

defined('BASEPATH') or exit('No direct script access allowed');

class Spk_model extends CI_Model
{
  public function getAlternatifById($id)
  {
    return $this->db->get_where('alternatif', ['id' => $id])->row_array();
  }
  public function editAlternatif()
  {
    $data = [
      'kode_alternatif' => $this->input->post('kode_alternatif'),
      'keterangan_alternatif' => $this->input->post('keterangan_alternatif'),
      'user_id' => $this->input->post('user_id')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('alternatif', $data);
  }

  public function getBobotId($id)
  {
    return $this->db->get_where('bobot', ['id' => $id])->row_array();
  }
  public function editBobot()
  {
    $data = [
      'kode_bobot' => $this->input->post('kode_bobot'),
      'keterangan_bobot' => $this->input->post('keterangan_bobot')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('bobot', $data);
  }

  public function getKriteriaById($id)
  {
    return $this->db->get_where('kriteria', ['id' => $id])->row_array();
  }
  public function editKriteria()
  {
    $data = [
      'kode_kriteria' => $this->input->post('kode_kriteria'),
      'keterangan_kriteria' => $this->input->post('keterangan_kriteria')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('kriteria', $data);
  }

  public function getBobotKriteria()
  {
    $query = "select
              a.id as id,
              b.kode_kriteria,
              b.keterangan_kriteria,
              c.kode_bobot,
              c.keterangan_bobot
              from bobot_kriteria a
              join kriteria b on b.id=a.kriteria_id
              join bobot c on c.id=a.bobot_id
              order by b.kode_kriteria";
    return $this->db->query($query)->result_array();
  }

  public function getBobotKriteriaId($id)
  {
    return $this->db->get_where('bobot_kriteria', ['id' => $id])->row_array();
  }
  public function editBobotKriteria()
  {
    $data = [
      'kriteria_id' => $this->input->post('kriteria_id'),
      'bobot_id' => $this->input->post('bobot_id')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('bobot_kriteria', $data);
    // var_dump($data);
    // die;
  }

  public function getPenilaianId($id)
  {
    return $this->db->get_where('penilaian_sub_kriteria', ['id' => $id])->row_array();
  }
  public function editPenilaian()
  {
    $data = [
      'keterangan' => $this->input->post('keterangan'),
      'penilaian' => $this->input->post('penilaian')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('penilaian_sub_kriteria', $data);
  }

  public function getInputNilaiAlt()
  {
    return $this->db->query("select 
                            a.id, a.c1, a.c2, a.c3, a.c4,
                            b.kode_alternatif, b.keterangan_alternatif, c.name
                            from input_nilai a
                            join alternatif b on b.id=a.alternatif_id
                            join user c on c.id=b.user_id order by b.kode_alternatif
                            ")->result_array();
  }
  public function getInputNilai($id)
  {
    return $this->db->get_where('input_nilai', ['id' => $id])->row_array();
  }
  public function editInputNilai()
  {
    $data = [
      'alternatif_id' => $this->input->post('alternatif_id'),
      'c1' => $this->input->post('c1'),
      'c2' => $this->input->post('c2'),
      'c3' => $this->input->post('c3'),
      'c4' => $this->input->post('c4')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('input_nilai', $data);
  }

  public function countTotalBobotKriteria()
  {
    return $this->db->query("select
    sum(kode_bobot) as total
     from bobot_kriteria a
     join kriteria b on b.id=a.kriteria_id
     join bobot c on c.id=a.bobot_id
     order by a.id")->result();
  }

  public function countBobotKriteria()
  {
    return $this->db->query("SELECT count(urutan_id) as urutan, count(*) as count FROM `bobot_kriteria`")->result();
  }

  public function countKriteria()
  {
    return $this->db->query("select count(id) as kriteria from kriteria")->result();
  }
  public function countBobot()
  {
    return $this->db->query("select count(id) as bobot from bobot")->result();
  }
  public function countAlt()
  {
    return $this->db->query("select count(id) as alternatif from alternatif")->result();
  }
  public function getId($id)
  {
    // return $this->db->query("SELECT bobot_id FROM `bobot_kriteria` WHERE urutan_id = $id")->result();
    return $this->db->query("select b.kode_bobot as kode_bobot from bobot_kriteria a join bobot b on a.bobot_id=b.id where urutan_id = $id")->result();
  }
  public function getTotal()
  {
    // return $this->db->query("select sum(bobot_id) as total from bobot_kriteria")->result();
    return $this->db->query("select sum(kode_bobot) as total from bobot_kriteria a join bobot b on a.bobot_id=b.id")->result();
  }
  public function countAltInput()
  {
    return $this->db->query("select count(is_input) as countalt from user where role_id = 2")->result();
  }
  public function alternatifUser()
  {
    return $this->db->query("select alternatif.kode_alternatif, alternatif.keterangan_alternatif, user.name, alternatif.id, alternatif.user_id from alternatif join user on user.id=alternatif.user_id order by alternatif.kode_alternatif")->result_array();
  }
  public function userAll()
  {
    return $this->db->query("select * from user where role_id = 2")->result_array();
  }
  public function getUserSupplier($id)
  {
    return $this->db->query("select * from user where id = $id")->row_array();
  }
  public function isAlternatif()
  {
    return $this->db->query("select count(id) as alt from user where is_alternatif = 0 and role_id = 2")->result();
  }
  public function countUpload()
  {
    return $this->db->query("select count(id) as upload from user where is_upload = 0 and role_id = 2")->result();
  }
  public function uploadBelumAlt()
  {
    return $this->db->query("select count(id) as uploadbelumalt from user where is_upload = 1 and is_alternatif = 0 and role_id = 2")->result();
  }
  public function getUser($id)
  {
    return $this->db->query("select * from user where id = $id")->row_array();
  }
  public function editSupplier()
  {
    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'image' => $this->input->post('image'),
      'password' => $this->input->post('password'),
      'role_id' => $this->input->post('role_id'),
      'is_active' => $this->input->post('is_active'),
      'date_created' => $this->input->post('date_created'),
      'is_upload' => $this->input->post('is_upload'),
      'is_input' => $this->input->post('is_input'),
      'is_alternatif' => $this->input->post('is_alternatif')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }
}
