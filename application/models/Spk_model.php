<?php
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
      'keterangan_alternatif' => $this->input->post('keterangan_alternatif')
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
              order by a.id";
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
                            b.kode_alternatif, b.keterangan_alternatif
                            from input_nilai a
                            join alternatif b on b.id=a.alternatif_id
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
    return $this->db->query("select sum(bobot_id) as total from bobot_kriteria")->result();
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
    return $this->db->query("SELECT bobot_id FROM `bobot_kriteria` WHERE id = $id")->result();
  }
  public function getTotal()
  {
    return $this->db->query("select sum(bobot_id) as total from bobot_kriteria")->result();
  }
}
