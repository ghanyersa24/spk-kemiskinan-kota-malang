<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries\REST_Controller.php';

class WeightedProduct extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function wp_post()
    {
        $this->load->model("m_wp");
        $hasil_survey = $this->m_wp->getIndividu();

        for ($i = 0; $i < count($hasil_survey); $i++) {
            $hasil_bobot[$i]["StaHamil"] = $this->getBobotStatusKehamilan($hasil_survey[$i]['StaHamil']);
            $hasil_bobot[$i]['JenisCacat'] = $this->getJenisCacat($hasil_survey[$i]['JenisCacat']);
            $hasil_bobot[$i]['PenyakitKronis'] = $this->getPenyakit($hasil_survey[$i]['PenyakitKronis']);
            $hasil_bobot[$i]['PartisipasiSekolah'] = $this->getPartisipasiSekolah($hasil_survey[$i]['PartisipasiSekolah']);
            $hasil_bobot[$i]['PendidikanTertinggi'] = $this->getJenjangPendidikanTertinggi($hasil_survey[$i]['PendidikanTertinggi']);
            $hasil_bobot[$i]['KelasTertinggi'] = $this->getKelasTertinggi($hasil_survey[$i]['KelasTertinggi']);
            $hasil_bobot[$i]['IjazahTertinggi'] = $this->getIjazahTertinggi($hasil_survey[$i]['IjazahTertinggi']);
            $hasil_bobot[$i]['StaBekerja'] = $this->getStaBekerja($hasil_survey[$i]['StaBekerja']);
            $hasil_bobot[$i]['LapanganUsaha'] = $this->getLapanganUsaha($hasil_survey[$i]['LapanganUsaha']);
            $hasil_bobot[$i]['StatusPekerjaan'] = $this->getStatusPekerjaan($hasil_survey[$i]['StatusPekerjaan']);
        }

        $bobot_kriteria = $this->getBobot();

        $vektor_si = $this->hitungVektorSi($hasil_survey, $bobot_kriteria);
        header('Content-Type: application/json');
        // echo json_encode($vektor_si);
    }

    public function hitungVektorSi($vektor, $bobot)
    {
        
        for ($i=0; $i < count($vektor); $i++) { 
            $temp = 0;
            foreach ($vektor as $key => $value) {
                var_dump("BROO",$key);
                $hasil[$i][$key] = pow($value, $bobot[$temp]);
                $temp +=1;
            }
        }

        // var_dump($vektor);
        // var_dump($bobot);
        return $hasil;
        
    }

    public function getBobot()
    {
        return array(
            0.05,
            0.17,
            0.09,
            -0.02,
            -0.04,
            -0.04,
            -0.08,
            -0.27,
            -0.15,
            -0.08
        );
    }

    public function getBobotStatusKehamilan($input)
    {
        switch ($input) {
            case '1':
                return 3.43;
            case '2':
                return 0.86;
            default:
                return 1;
        }
    }

    public function getJenisCacat($input)
    {
        switch ($input) {
            case '0':
                return 1.35;
            case '1':
                return 0.45;
            case '2':
                return 0.45;
            case '3':
                return 0.45;
            case '4':
                return 0.45;
            case '5':
                return 0.98;
            case '6':
                return 0.45;
            case '7':
                return 2.19;
            case '8':
                return 2.19;
            case '9':
                return 2.19;
            case '10':
                return 0.98;
            case '11':
                return 0.98;
            case '12':
                return 0.98;
            default:
                return 1;
        }
    }

    public function getPenyakit($input)
    {
        switch ($input) {
            case '0':
                return 0.75;
            case '1':
                return 2.16;
            case '2':
                return 1.25;
            case '3':
                return 0.52;
            case '4':
                return 0.52;
            case '5':
                return 0.52;
            case '6':
                return 0.52;
            case '7':
                return 0.52;
            case '8':
                return 0.52;
            case '9':
                return 0.52;
            default:
                return 1;
        }
    }

    public function getPartisipasiSekolah($input)
    {
        switch ($input) {
            case '0':
                return 0.57;
            case '1':
                return 0.57;
            case '2':
                return 0.57;
            case '3':
                return 0.34;
            case '4':
                return 0.34;
            case '5':
                return 0.34;
            case '6':
                return 0.20;
            case '7':
                return 0.20;
            case '8':
                return 0.20;
            case '9':
                return 0.35;
            default:
                return 1;
        }
    }

    public function getKelasTertinggi($input)
    {
        switch ($input) {
            case '0':
                return 1.70;
            case '1':
                return 1.01;
            case '2':
                return 0.59;
            case '3':
                return 0.35;
            default:
                return 1;
        }
    }
    public function getJenjangPendidikanTertinggi($input)
    {
        switch ($input) {
            case '0':
                return 0.57;
            case '1':
                return 0.57;
            case '2':
                return 0.57;
            case '3':
                return 0.34;
            case '4':
                return 0.34;
            case '5':
                return 0.34;
            case '6':
                return 0.20;
            case '7':
                return 0.20;
            case '8':
                return 0.20;
            case '9':
                return 0.35;
            default:
                return 1;
        }
    }

    public function getIjazahTertinggi($input)
    {
        switch ($input) {
            case '0':
                return 3.17;
            case '1':
                return 0.94;
            case '2':
                return 0.94;
            case '3':
                return 1.10;
            case '4':
                return 0.22;
            case '5':
                return 0.22;
            case '6':
                return 0.22;
            default:
                return 1;
        }
    }

    public function getStaBekerja($input)
    {
        switch ($input) {
            case '1':
                return 4.49;
            case '2':
                return 17.95;
            default:
                return 1;
        }
    }

    public function getLapanganUsaha($input)
    {
        switch ($input) {
            case '0':
                return 0.50;
            case '1':
                return 0.09;
            case '2':
                return 0.50;
            case '3':
                return 0.50;
            case '4':
                return 0.50;
            case '5':
                return 0.09;
            case '6':
                return 0.09;
            case '7':
                return 0.09;
            case '8':
                return 0.09;
            case '9':
                return 0.09;
            case '10':
                return 1.71;
            case '11':
                return 1.71;
            case '12':
                return 0.09;
            case '13':
                return 0.09;
            case '14':
                return 0.09;
            case '15':
                return 0.09;
            case '16':
                return 0.09;
            case '17':
                return 0.09;
            case '18':
                return 0.09;
            case '19':
                return 2.88;
            case '20':
                return 2.88;
            default:
                return 1;
        }
    }

    public function getStatusPekerjaan($input)
    {
        switch ($input) {
            case '0':
                return 1.59;
            case '1':
                return 1.89;
            case '2':
                return 0.22;
            case '3':
                return 0.22;
            case '4':
                return 0.22;
            case '5':
                return 0.55;
            case '6':
                return 0.55;
            case '7':
                return 1.59;
            default:
                return 1;
        }
    }
}
