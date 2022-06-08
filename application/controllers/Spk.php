<?php

use phpDocumentor\Reflection\Types\This;

defined('BASEPATH') or exit('No direct script access allowed');
class Spk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Spk_model', 'spk');
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['bobot'] = $this->db->get('bobot')->result_array();
    $data['kriteria'] = $this->db->get('kriteria')->result_array();
    $data['bobotkriteria'] = $this->spk->getBobotKriteria();
    $data['counttotal'] = $this->spk->countTotalBobotKriteria();
    $data['penilaian'] = $this->db->get('penilaian_sub_kriteria')->result_array();
    $data['alternatif'] = $this->db->get('alternatif')->result_array();
    $data['inputnilai'] = $this->db->get('input_nilai')->result_array();
    $data['alternatifuser'] = $this->spk->alternatifUser();
    $data['inputjoinalt'] = $this->spk->getInputNilaiAlt();
    $data['countkriteria'] = $this->spk->countKriteria();
    $data['countbobot'] = $this->spk->countBobot();
    $data['countalt'] = $this->spk->countAlt();

    // ambil urutan bobot kriteria
    $data['bi1'] = $this->spk->getId(1);
    $data['bi2'] = $this->spk->getId(2);
    $data['bi3'] = $this->spk->getId(3);
    $data['bi4'] = $this->spk->getId(4);

    $data['countaltinput'] = $this->spk->countAltInput();
    $data['isalt'] = $this->spk->isAlternatif();
    $data['total'] = $this->spk->getTotal();
    $data['countupload'] = $this->spk->countUpload();
    $data['uploadbelumalt'] = $this->spk->uploadBelumAlt();
    $this->load->view('templates/header', $data);
    // $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function vektorV()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Report Hasil Penghitungan Vektor V <br> Sistem Pendukung Keputusan metode <i>weighted product</i> PT. Matahari Nusantara Logistik';
    $data['bobot'] = $this->db->get('bobot')->result_array();
    $data['kriteria'] = $this->db->get('kriteria')->result_array();
    $data['bobotkriteria'] = $this->spk->getBobotKriteria();
    $data['counttotal'] = $this->spk->countTotalBobotKriteria();
    $data['penilaian'] = $this->db->get('penilaian_sub_kriteria')->result_array();
    $data['alternatif'] = $this->db->get('alternatif')->result_array();
    $data['inputnilai'] = $this->db->get('input_nilai')->result_array();
    $data['alternatifuser'] = $this->spk->alternatifUser();
    $data['inputjoinalt'] = $this->spk->getInputNilaiAlt();
    $data['countkriteria'] = $this->spk->countKriteria();
    $data['countbobot'] = $this->spk->countBobot();
    $data['countalt'] = $this->spk->countAlt();
    $data['bi1'] = $this->spk->getId(1);
    $data['bi2'] = $this->spk->getId(2);
    $data['bi3'] = $this->spk->getId(3);
    $data['bi4'] = $this->spk->getId(4);
    $data['countaltinput'] = $this->spk->countAltInput();
    $data['isalt'] = $this->spk->isAlternatif();
    $data['total'] = $this->spk->getTotal();
    $data['countupload'] = $this->spk->countUpload();
    $data['uploadbelumalt'] = $this->spk->uploadBelumAlt();
    $this->load->view('templates/header', $data);
    // $this->load->view('templates/sidebar', $data);
    // $this->load->view('templates/topbar', $data);
    $this->load->view('spk/vektorv', $data);
    $this->load->view('templates/footer', $data);
  }

  public function alternatif()
  {
    $data['title'] = 'Alternatif';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['alternatif'] = $this->db->get('alternatif')->result_array();
    $data['alternatifuser'] = $this->spk->alternatifUser();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/alternatif', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahALternatif($id)
  {
    $data['title'] = 'Tambah Alternatif';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['userall'] = $this->spk->userAll();
    $data['getusersupplier'] = $this->spk->getUserSupplier($id);
    $this->form_validation->set_rules('kode_alternatif', 'Kode Alternatif', 'required');
    $this->form_validation->set_rules('keterangan_alternatif', 'Keterangan Alternatif', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/tambahAlternatif', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->db->insert('alternatif', [
        'kode_alternatif' => $this->input->post('kode_alternatif'),
        'keterangan_alternatif' => $this->input->post('keterangan_alternatif'),
        'user_id' => $this->input->post('user_id')
      ]);

      $this->db->set('is_alternatif', 1);
      $this->db->where('id', $id);
      $this->db->update('user');

      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('spk/alternatif');
    }
  }
  public function editAlternatif($id)
  {
    $data['title'] = 'Edit Alternatif';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['userall'] = $this->spk->userAll();
    $data['alternatifid'] = $this->spk->getAlternatifById($id);
    $this->form_validation->set_rules('kode_alternatif', 'Kode Alternatif', 'required');
    $this->form_validation->set_rules('keterangan_alternatif', 'Keterangan Alternatif', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editAlternatif', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->spk->editAlternatif();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('spk/alternatif');
    }
  }
  public function hapusAlternatif($id)
  {
    $this->db->delete('alternatif', ['user_id' => $id]);

    $this->db->set('is_alternatif', 0);
    $this->db->where('id', $id);
    $this->db->update('user');

    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('spk/alternatif');
  }

  public function bobot()
  {
    $data['title'] = 'Bobot';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['bobot'] = $this->db->get('bobot')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/bobot', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahBobot()
  {
    $data['title'] = 'Tambah Bobot';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('kode_bobot', 'Kode Bobot', 'required');
    $this->form_validation->set_rules('keterangan_bobot', 'Keterangan Bobot', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/tambahBobot', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('bobot', [
        'kode_bobot' => $this->input->post('kode_bobot'),
        'keterangan_bobot' => $this->input->post('keterangan_bobot')
      ]);
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('spk/bobot');
    }
  }
  public function editBobot($id)
  {
    $data['title'] = 'Edit Bobot';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['bobotid'] = $this->spk->getBobotId($id);
    $this->form_validation->set_rules('kode_bobot', 'Kode Bobot', 'required');
    $this->form_validation->set_rules('keterangan_bobot', 'Keterangan Bobot', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editBobot', $data);
      $this->load->view('templates/footer');
    } else {
      $this->spk->editBobot();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('spk/bobot');
    }
  }
  public function hapusBobot($id)
  {
    $this->db->delete('bobot', ['id' => $id]);

    $this->db->delete('bobot_kriteria', ['bobot_id' => $id]);

    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('spk/bobot');
  }

  public function kriteria()
  {
    $data['title'] = 'Kriteria';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kriteria'] = $this->db->get('kriteria')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/kriteria', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahKriteria()
  {
    $data['title'] = 'Tambah Kriteria';
    $data['user'] = $this->db->get_where('user', ['email', $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('kode_kriteria', 'Kode Kriteria', 'required');
    $this->form_validation->set_rules('keterangan_kriteria', 'Keterangan Kriteria', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/tambahKriteria', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->db->insert('kriteria', [
        'kode_kriteria' => $this->input->post('kode_kriteria'),
        'keterangan_kriteria' => $this->input->post('keterangan_kriteria')
      ]);
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('spk/kriteria');
    }
  }
  public function editKriteria($id)
  {
    $data['title'] = 'Edit Kriteria';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['kriteriaid'] = $this->spk->getKriteriaById($id);
    $this->form_validation->set_rules('kode_kriteria', 'Kode Kriteria', 'required');
    $this->form_validation->set_rules('keterangan_kriteria', 'Keterangan Kriteria', 'required');
    if ($this->form_validation->run() ==  false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editKriteria', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->spk->editKriteria();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('spk/kriteria');
    }
  }
  public function hapusKriteria($id)
  {
    $this->db->delete('kriteria', ['id' => $id]);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('spk/kriteria');
  }

  public function bobotKriteria()
  {
    $data['title'] = 'Bobot Kriteria';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['bobotkriteria'] = $this->spk->getBobotKriteria();
    $data['counttotal'] = $this->spk->countTotalBobotKriteria();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/bobotKriteria', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahBobotKriteria()
  {
    $data['title'] = 'Tambah Bobot Kriteria';
    $data['user'] = $this->db->get_where('user', ['email', $this->session->userdata('email')])->row_array();
    $data['kriteria'] = $this->db->get('kriteria')->result_array();
    $data['bobot'] = $this->db->get('bobot')->result_array();
    // $data['count'] = $this->spk->countBobotKriteria();
    $count = $this->spk->countBobotKriteria();
    foreach ($count as $row) {
      $data['c'] = $row->urutan;
    }
    $this->form_validation->set_rules('kriteria_id', 'Kriteria', 'required');
    $this->form_validation->set_rules('bobot_id', 'Bobot', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/tambahBobotKriteria', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->db->insert('bobot_kriteria', [
        'urutan_id' => $this->input->post('urutan_id'),
        'kriteria_id' => $this->input->post('kriteria_id'),
        'bobot_id' => $this->input->post('bobot_id')
      ]);
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('spk/bobotKriteria');
    }
  }
  public function editBobotKriteria($id)
  {
    $data['title'] = 'Edit Bobot Kriteria';
    $data['user'] = $this->db->get_where('user', ['email', $this->session->userdata('email')])->row_array();
    $data['kriteria'] = $this->db->get('kriteria')->result_array();
    $data['bobot'] = $this->db->get('bobot')->result_array();
    $data['bobotkriteriaid'] = $this->spk->getBobotKriteriaId($id);
    $this->form_validation->set_rules('kriteria_id', 'Kriteria', 'required');
    $this->form_validation->set_rules('bobot_id', 'Bobot', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editBobotKriteria', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->spk->editBobotKriteria();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('spk/bobotKriteria');
    }
  }
  public function hapusBobotKriteria($id)
  {
    $this->db->delete('bobot_kriteria', ['id' => $id]);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('spk/bobotKriteria');
  }

  public function penilaianSubKriteria()
  {
    $data['title'] = 'Penilaian Sub Kriteria';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['penilaian'] = $this->db->get('penilaian_sub_kriteria')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/penilaianSubKriteria', $data);
    $this->load->view('templates/footer', $data);
  }
  public function tambahPenilaianSubKriteria()
  {
    $data['title'] = 'Tambah Penilaian Sub Kriteria';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/tambahPenilaianSubKriteria', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->db->insert('penilaian_sub_kriteria', [
        'penilaian' => $this->input->post('penilaian'),
        'keterangan' => $this->input->post('keterangan')
      ]);
      $this->session->set_flashdata('flash', 'DItambah');
      redirect('spk/penilaianSubKriteria');
    }
  }
  public function editPenilaianSubKriteria($id)
  {
    $data['title'] = 'Edit Alternatif';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['penilaianid'] = $this->spk->getPenilaianId($id);
    $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editPenilaianSubKriteria', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->spk->editPenilaian();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('spk/penilaianSubKriteria');
    }
  }
  public function hapusPenilaianSubKriteria($id)
  {
    $this->db->delete('penilaian_sub_kriteria', ['id' => $id]);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('spk/penilaianSUbKriteria');
  }

  public function inputNilai()
  {
    $data['title'] = 'Nilai Alternatif Kriteria';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['inputnilai'] = $this->db->get('input_nilai')->result_array();
    $data['inputjoinalt'] = $this->spk->getInputNilaiAlt();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/inputNilai', $data);
    $this->load->view('templates/footer');
  }
  public function tambahInputNilai()
  {
    $data['title'] = 'Tambah Input Nilai';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['alternatif'] = $this->db->get('alternatif')->result_array();
    $this->form_validation->set_rules('alternatif_id', 'Alternatif', 'required');
    $this->form_validation->set_rules('c1', 'Kriteria 1', 'required');
    $this->form_validation->set_rules('c2', 'Kriteria 2', 'required');
    $this->form_validation->set_rules('c3', 'Kriteria 3', 'required');
    $this->form_validation->set_rules('c4', 'Kriteria 4', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/tambahInputNilai', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('input_nilai', [
        'alternatif_id' => $this->input->post('alternatif_id'),
        'c1' => $this->input->post('c1'),
        'c2' => $this->input->post('c2'),
        'c3' => $this->input->post('c3'),
        'c4' => $this->input->post('c4')
      ]);
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('spk/inputNilai');
    }
  }
  public function editInputNilai($id)
  {
    $data['title'] = 'Edit Input Nilai';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['alternatif'] = $this->db->get('alternatif')->result_array();
    $data['inputid'] = $this->spk->getInputNilai($id);
    $this->form_validation->set_rules('alternatif_id', 'Alternatif', 'required');
    $this->form_validation->set_rules('c1', 'Kriteria 1', 'required');
    $this->form_validation->set_rules('c2', 'Kriteria 2', 'required');
    $this->form_validation->set_rules('c3', 'Kriteria 3', 'required');
    $this->form_validation->set_rules('c4', 'Kriteria 4', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editInputNilai', $data);
      $this->load->view('templates/footer');
    } else {
      $this->spk->editInputNilai();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('spk/inputNilai');
    }
  }
  public function hapusInputNilai($id)
  {
    $this->db->delete('input_nilai', ['id' => $id]);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('spk/inputNilai');
  }

  public function supplierBaru()
  {
    $data['title'] = 'Daftar Supplier Baru';
    $data['usersupplier'] = $this->spk->userAll();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('spk/supplierBaru', $data);
    $this->load->view('templates/footer');
  }
  public function tambahSupplierBaru()
  {
    # code...
  }
  public function editSupplierBaru($id)
  {
    $data['title'] = 'Edit Supplier Baru';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['getuser'] = $this->spk->getUser($id);
    $this->form_validation->set_rules('name', 'Nama', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('spk/editSupplierBaru', $data);
      $this->load->view('templates/footer');
    } else {
      $this->spk->editSupplier();
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('spk/supplierBaru');
    }
  }
  public function hapusSupplierBaru($id)
  {
    $this->db->delete('user', ['id' => $id]);

    $this->db->delete('alternatif', ['user_id' => $id]);

    $this->session->set_flashdata('flash', 'Dihapuss');
    redirect('spk/supplierBaru');
  }
}
