<?php
class About extends Controller
{
    public function index($nama = 'Jaenudin', $pekerjaan = 'freelencer', $umur = 'umur')
    {
        // echo "Hello nama saya $nama, saya seorang $pekerjaan";
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/header');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/header');
    }
}
