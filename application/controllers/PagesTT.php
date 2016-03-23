<?php
// class name需要和文件名一致（不区分大小写），否则找不到路径
class PagesTT extends CI_Controller {

public function viewsssssssss($page = 'home')
{
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        show_404();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
}
}