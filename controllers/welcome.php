<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('json');
	}

    public function from_xml(){
        print_r(getFingerprintList());
    }

    public function createXml(){
        $this->load->library('array2XML');
        $array = array(
            'device' => array(
                array(
                    'id' => 'DeviceID 1',
                    'name' => 'Device name 1'
                ),array(
                    'id' => 'DeviceID 2',
                    'name' => 'Device name 2'
                ),array(
                    'id' => 'DeviceID 3',
                    'name' => 'Device name 3'
                ),
            )
        );
        $xml = Array2XML::createXML('root', $array );
        echo $xml->saveXML();
    }

    public function mm(){
        echo conf::replace("\/&'\"+><=| ");
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */