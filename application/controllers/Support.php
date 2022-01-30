<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Support extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Mdate');
    }

    public function index()
    {
        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');
        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_data');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_data');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_data');
        
        //show total agent
       $this->db->distinct();
        $this->db->select('name');
        $this->db->where('date', $date);
        $data['order'] = $this->db->count_all_results('form_data');
        

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data where date = '$date' ")->result();
        //query
        $data['getData'] = $this->db->query("select * from form_data where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/index', $data);
        $this->load->view('templates/footer');
    }

    public function export()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Date')
            ->setCellValue('C1', 'Time')
            ->setCellValue('D1', 'Name')
            ->setCellValue('E1', 'TrackID')
            ->setCellValue('F1', 'Channel')
            ->setCellValue('G1', 'Regional')
            ->setCellValue('H1', 'Witel')
            ->setCellValue('I1', 'Validasi')
            ->setCellValue('J1', 'Detail Invalid')
            ->setCellValue('K1', 'Validation Identity')
            ->setCellValue('L1', 'Detail Identity')
    		->setCellValue('M1', 'Dial To')
            ->setCellValue('N1', 'Status Call')
            ->setCellValue('O1', 'Reason Call')
    		->setCellValue('P1', 'Type Data');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_data'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->name)
                ->setCellValue('E' . $column, $rekap->trackid)
                ->setCellValue('F' . $column, $rekap->chanel)
                ->setCellValue('G' . $column, $rekap->regional)
                ->setCellValue('H' . $column, $rekap->witel)
                ->setCellValue('I' . $column, $rekap->validation)
                ->setCellValue('J' . $column, $rekap->detail_invalid)
                ->setCellValue('K' . $column, $rekap->ktp_validation)
                ->setCellValue('L' . $column, $rekap->detail_ktp)
        		->setCellValue('M' . $column, $rekap->dial_to)
                ->setCellValue('N' . $column, $rekap->status_call)
                ->setCellValue('O' . $column, $rekap->reason_call)
                ->setCellValue('P' . $column, $rekap->data_type);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataQC1.xlsx");

        $writer->save('php://output');
    }

    // public function getFilter()
    // {
    //     $start = addslashes($this->input->post('date1'));
    //     $end = addslashes($this->input->post('date2'));
    //     //memunculkan nama user pada form sesuai user login
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $date = date('Y-m-d');
    //     $date_monthly = date('m');
    //     $date_yearly = date('Y');
    //     //show daily consume
    //     $this->db->where('date', $date);
    //     $data['hmenu'] = $this->db->count_all_results('form_data');

    //     //show monthly consume
    //     $this->db->where('month(date)', $date_monthly);
    //     $data['bmenu'] = $this->db->count_all_results('form_data');

    //     //show yearly consume
    //     $this->db->where('year(date)', $date_yearly);
    //     $data['tmenu'] = $this->db->count_all_results('form_data');

    //     //show range 2 date

    //     //query
    //     $ga['getData'] = $this->db->query("select * from form_data where date between '$start' and '$end' ")->result();

    //     //$ga['getData'] = "asas";

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('support/index', $ga);
    //     $this->load->view('templates/footer');
    // }
 public function verifikasi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        //memunculkan nama user pada form sesuai user login
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_data_teknisi');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_data_teknisi');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_data_teknisi');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_data_teknisi where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/verifikasi', $data);
        $this->load->view('templates/footer');
    }

    public function export1()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Date')
            ->setCellValue('C1', 'Time')
            ->setCellValue('D1', 'Name')
            ->setCellValue('E1', 'Labor_Code')
            ->setCellValue('F1', 'Nama_Teknisi')
            ->setCellValue('G1', 'Regional')
            ->setCellValue('H1', 'Witel')
            ->setCellValue('I1', 'Status_Verifikasi')
            ->setCellValue('J1', 'Detail')
            ->setCellValue('K1', 'Keterangan')
            ->setCellValue('L1', 'DialTo')
            ->setCellValue('M1', 'Status_Call')
            ->setCellValue('N1', 'Reason_Call');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_data_teknisi'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->name)
                ->setCellValue('E' . $column, $rekap->labor_code)
                ->setCellValue('F' . $column, $rekap->nama_teknisi)
                ->setCellValue('G' . $column, $rekap->regional)
                ->setCellValue('H' . $column, $rekap->witel)
                ->setCellValue('I' . $column, $rekap->status_verifikasi)
                ->setCellValue('J' . $column, $rekap->detail_invalid)
                ->setCellValue('K' . $column, $rekap->keterangan)
                ->setCellValue('L' . $column, $rekap->dialto)
                ->setCellValue('M' . $column, $rekap->status_call)
                ->setCellValue('N' . $column, $rekap->reason_call);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiTeknisi.xlsx");

        $writer->save('php://output');
    }
 public function pda()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('tanggal', $date);
        $data['hmenu'] = $this->db->count_all_results('form_data_pda');

        //show monthly consume
        $this->db->where('month(tanggal)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_data_pda');

        //show yearly consume
        $this->db->where('year(tanggal)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_data_pda');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_data_pda where tanggal between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/pda', $data);
        $this->load->view('templates/footer');
    }
    public function export2()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'SC_ID')
            ->setCellValue('F1', 'Regional')
            ->setCellValue('G1', 'Witel')
            ->setCellValue('H1', 'Source_data')
            ->setCellValue('I1', 'Jenis_transaksi')
            ->setCellValue('J1', 'CP_DIaplikasi')
            ->setCellValue('K1', 'CP_Terhubung')
            ->setCellValue('L1', 'Validasi')
            ->setCellValue('M1', 'Detail_Validasi')
            ->setCellValue('N1', 'PIC')
            ->setCellValue('O1', 'PIC_Terhubung')
            ->setCellValue('P1', 'Status_Call')
            ->setCellValue('Q1', 'Detail_Call')
            ->setCellValue('R1', 'Keterangan_Valid')
            ->setCellValue('S1', 'Keterangan_Invalid');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'tanggal',
            'form_data_pda'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->tanggal)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->waktu)))
                ->setCellValue('D' . $column, $rekap->nama_agent)
                ->setCellValue('E' . $column, $rekap->scid)
                ->setCellValue('F' . $column, $rekap->regional)
                ->setCellValue('G' . $column, $rekap->witel)
                ->setCellValue('H' . $column, $rekap->source_data)
                ->setCellValue('I' . $column, $rekap->jenis_transaksi)
                ->setCellValue('J' . $column, $rekap->cp_diaplikasi)
                ->setCellValue('K' . $column, $rekap->cp_terhubung)
                ->setCellValue('L' . $column, $rekap->validasi)
                ->setCellValue('M' . $column, $rekap->detail_validasi)
                ->setCellValue('N' . $column, $rekap->pic)
                ->setCellValue('O' . $column, $rekap->pic_terhubung)
                ->setCellValue('P' . $column, $rekap->status_call)
                ->setCellValue('Q' . $column, $rekap->detail_call)
                ->setCellValue('R' . $column, $rekap->keterangan_valid)
                ->setCellValue('S' . $column, $rekap->keterangan_invalid);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiPda.xlsx");

        $writer->save('php://output');
    }
public function newsf()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_new_sf');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_new_sf');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_new_sf');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_new_sf where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/newsf', $data);
        $this->load->view('templates/footer');
    }
    public function export3()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'ID_SF')
            ->setCellValue('F1', 'Nama_SF')
            ->setCellValue('G1', 'Regional')
            ->setCellValue('H1', 'Witel')
            ->setCellValue('I1', 'No_HP_SF')
            ->setCellValue('J1', 'No_KTP_SF')
            ->setCellValue('K1', 'Tempat_Lahir')
            ->setCellValue('L1', 'Tanggal_Lahir')
            ->setCellValue('M1', 'Status_Call')
            ->setCellValue('N1', 'Reason_Call');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_new_sf'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->id_sf)
                ->setCellValue('F' . $column, $rekap->nama_sf)
                ->setCellValue('G' . $column, $rekap->regional)
                ->setCellValue('H' . $column, $rekap->witel)
                ->setCellValue('I' . $column, $rekap->hp_sf)
                ->setCellValue('J' . $column, $rekap->no_ktp_sf)
                ->setCellValue('K' . $column, $rekap->tempat_lahir)
                ->setCellValue('L' . $column, $rekap->tanggal_lahir)
                ->setCellValue('M' . $column, $rekap->status_call)
                ->setCellValue('N' . $column, $rekap->reason_call);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiNewSF.xlsx");

        $writer->save('php://output');
    }
 public function wpi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_wpi');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_wpi');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_wpi');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_wpi where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/wpi', $data);
        $this->load->view('templates/footer');
    }
    public function export4()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'ID_SF')
            ->setCellValue('F1', 'Nama_SF')
            ->setCellValue('G1', 'Regional')
            ->setCellValue('H1', 'Witel')
            ->setCellValue('I1', 'No_HP_SF')
            ->setCellValue('J1', 'No_KTP_SF')
            ->setCellValue('K1', 'Tempat_Lahir')
            ->setCellValue('L1', 'Tanggal_Lahir')
            ->setCellValue('M1', 'Status_Call')
            ->setCellValue('N1', 'Reason_Call');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_wpi'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->id_sf)
                ->setCellValue('F' . $column, $rekap->nama_sf)
                ->setCellValue('G' . $column, $rekap->regional)
                ->setCellValue('H' . $column, $rekap->witel)
                ->setCellValue('I' . $column, $rekap->hp_sf)
                ->setCellValue('J' . $column, $rekap->no_ktp_sf)
                ->setCellValue('K' . $column, $rekap->tempat_lahir)
                ->setCellValue('L' . $column, $rekap->tanggal_lahir)
                ->setCellValue('M' . $column, $rekap->status_call)
                ->setCellValue('N' . $column, $rekap->reason_call);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiWpiNewSF.xlsx");

        $writer->save('php://output');
    }
  public function sobat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_sobat_indihome');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_sobat_indihome where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/sobat', $data);
        $this->load->view('templates/footer');
    }
    public function export5()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'ID_Sobat')
            ->setCellValue('F1', 'Nama_Sales')
            ->setCellValue('G1', 'Gender')
            ->setCellValue('H1', 'No_HP')
            ->setCellValue('I1', 'Email')
            ->setCellValue('J1', 'Kota')
            ->setCellValue('K1', 'Verified')
            ->setCellValue('L1', 'Reason');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_sobat_indihome'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->id_sobat)
                ->setCellValue('F' . $column, $rekap->nama_sobat)
                ->setCellValue('G' . $column, $rekap->gender)
                ->setCellValue('H' . $column, $rekap->no_hp)
                ->setCellValue('I' . $column, $rekap->email)
                ->setCellValue('J' . $column, $rekap->kota)
                ->setCellValue('K' . $column, $rekap->verified)
                ->setCellValue('L' . $column, $rekap->reason);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiSobatIndiHome.xlsx");

        $writer->save('php://output');
    }
    public function warrior()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_warrior_indihome');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_warrior_indihome where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/warrior', $data);
        $this->load->view('templates/footer');
    }
    public function export6()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'Nama_Warrior')
            ->setCellValue('F1', 'Gender')
            ->setCellValue('G1', 'No_HP')
            ->setCellValue('H1', 'Email')
            ->setCellValue('I1', 'Kota')
            ->setCellValue('J1', 'Verified')
            ->setCellValue('K1', 'Reason');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_warrior_indihome'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->nama_warrior)
                ->setCellValue('F' . $column, $rekap->gender)
                ->setCellValue('G' . $column, $rekap->no_hp)
                ->setCellValue('H' . $column, $rekap->email)
                ->setCellValue('I' . $column, $rekap->kota)
                ->setCellValue('J' . $column, $rekap->verified)
                ->setCellValue('K' . $column, $rekap->reason);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiWarriorIndiHome.xlsx");

        $writer->save('php://output');
    }
public function existing()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_existing_sf');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_existing_sf');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_existing_sf');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_existing_sf where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/existing', $data);
        $this->load->view('templates/footer');
    }
    public function export7()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'ID_SF')
            ->setCellValue('F1', 'Nama_SF')
            ->setCellValue('G1', 'Agency')
            ->setCellValue('H1', 'No_HP')
            ->setCellValue('I1', 'Email')
            ->setCellValue('J1', 'No_KTP')
            ->setCellValue('K1', 'Tempat_Lahir')
            ->setCellValue('L1', 'Tanggal_Lahir')
            ->setCellValue('M1', 'Verified')
            ->setCellValue('N1', 'Reason');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_existing_sf'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->id_sf)
                ->setCellValue('F' . $column, $rekap->nama_sf)
                ->setCellValue('G' . $column, $rekap->agency)
                ->setCellValue('H' . $column, $rekap->no_hp)
                ->setCellValue('I' . $column, $rekap->email)
                ->setCellValue('J' . $column, $rekap->no_ktp)
                ->setCellValue('K' . $column, $rekap->tempat_lahir)
                ->setCellValue('L' . $column, $rekap->tanggal_lahir)
                ->setCellValue('M' . $column, $rekap->verified)
                ->setCellValue('N' . $column, $rekap->reason);
            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataVerifikasiExistingSF.xlsx");

        $writer->save('php://output');
    }
 public function point()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_poin_reward');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_poin_reward');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_poin_reward');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_poin_reward where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/point', $data);
        $this->load->view('templates/footer');
    }
    public function export8()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'Nama_Pengorder')
            ->setCellValue('F1', 'Source_Data')
            ->setCellValue('G1', 'Klasifikasi_Judul')
            ->setCellValue('H1', 'Status')
            ->setCellValue('I1', 'No_Tiket')
            ->setCellValue('J1', 'Status_Chat')
            ->setCellValue('K1', 'Waktu_Chat')
            ->setCellValue('L1', 'Keterangan');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_poin_reward'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->nama_pengorder)
                ->setCellValue('F' . $column, $rekap->source_data)
                ->setCellValue('G' . $column, $rekap->klasifikasi_judul)
                ->setCellValue('H' . $column, $rekap->status)
                ->setCellValue('I' . $column, $rekap->no_tiket)
                ->setCellValue('J' . $column, $rekap->status_chat)
                ->setCellValue('K' . $column, $rekap->waktu_chat)
                ->setCellValue('L' . $column, $rekap->keterangan);

            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataPointReward.xlsx");

        $writer->save('php://output');
    }
public function botpoint()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_bot_point');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_bot_point');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_bot_point');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_bot_point where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/botpoint', $data);
        $this->load->view('templates/footer');
    }
    public function export9()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'Kode_Tiket')
            ->setCellValue('F1', 'Track_Order')
            ->setCellValue('G1', 'Nama_Pengorder')
            ->setCellValue('H1', 'Laporan_Tiket')
            ->setCellValue('I1', 'Source_Data')
            ->setCellValue('J1', 'Detail_Tiket')
            ->setCellValue('K1', 'Regional')
            ->setCellValue('L1', 'Witel')
            ->setCellValue('M1', 'Status_Tiket')
            ->setCellValue('N1', 'Waktu_Chat')
            ->setCellValue('O1', 'Keterangan');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_bot_point'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->kode_tiket)
                ->setCellValue('F' . $column, $rekap->track_order)
                ->setCellValue('G' . $column, $rekap->nama_pengorder)
                ->setCellValue('H' . $column, $rekap->laporan_tiket)
                ->setCellValue('I' . $column, $rekap->source_data)
                ->setCellValue('J' . $column, $rekap->detail_tiket)
                ->setCellValue('K' . $column, $rekap->regional)
                ->setCellValue('L' . $column, $rekap->witel)
                ->setCellValue('M' . $column, $rekap->status_tiket)
                ->setCellValue('N' . $column, $rekap->waktu_chat)
                ->setCellValue('O' . $column, $rekap->keterangan);

            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataBotPoint.xlsx");

        $writer->save('php://output');
    }
  public function websobat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $start = addslashes($this->input->post('date1'));
        $end = addslashes($this->input->post('date2'));

        $date = date('Y-m-d');
        $date_monthly = date('m');
        $date_yearly = date('Y');

        //show daily consume
        $this->db->where('date', $date);
        $data['hmenu'] = $this->db->count_all_results('form_web_sobat');

        //show monthly consume
        $this->db->where('month(date)', $date_monthly);
        $data['bmenu'] = $this->db->count_all_results('form_web_sobat');

        //show yearly consume
        $this->db->where('year(date)', $date_yearly);
        $data['tmenu'] = $this->db->count_all_results('form_web_sobat');

        //show range 2 date

        // $data['getData'] = $this->db->query("select * from form_data_teknisi where date = '$date' ")->result();
        //query
        $data['menu'] = $this->db->query("select * from form_web_sobat where date between '$start' and '$end' ")->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('support/websobat', $data);
        $this->load->view('templates/footer');
    }
    public function export10()
    {

        $spreadsheet = new Spreadsheet;
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Tanggal')
            ->setCellValue('C1', 'Waktu')
            ->setCellValue('D1', 'Nama_Agent')
            ->setCellValue('E1', 'ID_Tiket')
            ->setCellValue('F1', 'Judul_Tiket')
            ->setCellValue('G1', 'No_Alternatif')
            ->setCellValue('H1', 'ID_Sobat')
            ->setCellValue('I1', 'Create_Tiket')
            ->setCellValue('J1', 'Update_Tiket')
            ->setCellValue('K1', 'Klasifikasi')
            ->setCellValue('L1', 'Status')
            ->setCellValue('M1', 'Keterangan');

        $column = 2;
        $no = 1;

        $dataRekap = $this->Mdate->export_excell(
            addslashes($this->input->post('date1')),
            addslashes($this->input->post('date2')),
            'date',
            'form_web_sobat'
        )->result();

        foreach ($dataRekap as $rekap) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $no)
                ->setCellValue('B' . $column, date('Y-m-d', strtotime($rekap->date)))
                ->setCellValue('C' . $column, date('G:i:s', strtotime($rekap->time)))
                ->setCellValue('D' . $column, $rekap->user)
                ->setCellValue('E' . $column, $rekap->id_tiket)
                ->setCellValue('F' . $column, $rekap->judul_tiket)
                ->setCellValue('G' . $column, $rekap->no_alternatif)
                ->setCellValue('H' . $column, $rekap->id_sobat)
                ->setCellValue('I' . $column, $rekap->create_tiket)
                ->setCellValue('J' . $column, $rekap->update_tiket)
                ->setCellValue('K' . $column, $rekap->klasifikasi)
                ->setCellValue('L' . $column, $rekap->status)
                ->setCellValue('M' . $column, $rekap->keterangan);

            $column++;
            $no++;
        }

        $writer = new Xlsx($spreadsheet);

        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");;
        header("Content-Disposition: attachment;filename=DataWebSobatIndiHome.xlsx");

        $writer->save('php://output');
    }
}
