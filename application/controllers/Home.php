<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        require_once APPPATH."third_party/vendor/autoload.php";
    }



    public function index()
    {
        $this->load->view('home');
    }

    public function send_trigger(){
        $options = array(
            'cluster' => 'us2',
            'encrypted' => true
        );
        $pusher = new Pusher\Pusher(
            '408ae86aa0b3e01a9235',
            '6bcf1f276566c14ad6d5',
            '368606',
            $options
        );

        $data['message'] = 'hello world';
        $pusher->trigger('teste-1', 'my-event', $data);
        echo 'ok';
    }

    public function pusher_auth(){
        $options = array(
            'cluster' => 'us2',
            'encrypted' => true
        );
        $pusher = new Pusher\Pusher(
            '408ae86aa0b3e01a9235',
            '6bcf1f276566c14ad6d5',
            '368606',
            $options
        );

        echo $pusher->socket_auth($_POST['channel_name'], $_POST['socket_id']);
    }

    public function game(){ $this->load->view('teste'); }

}
