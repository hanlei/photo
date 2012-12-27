<?php

class Action extends AdminAbstract
{
	function getList()
	{	
		$condition = ''; 
		if ($search = addslashes(_GET('search'))) {
            $condition .= "WHERE name LIKE '%$search%' or description LIKE '%$search%'";
        }
		$data = _model('album')->getList($condition . ' ORDER BY id DESC', new Pager(5));
		$this->smarty->assign('pager',$data['pager']);
		$this->smarty->assign('search',$search);
		$this->smarty->assign('data',$data['data']);
        $this->smarty->display('admin/album/list.html');
	}
	
	function edit()
    {
		$id = _GET('id');
		$info = array();
        if ( !$info = _model('album')->read(array('id'=>$id)) ) {
            $info = array('id'=>0,'created'=>time(),'updated'=>time());
        }
        $this->smarty->assign('info', $info);
        $this->smarty->display('admin/album/edit.html');
    }

    function do_save()
    {
		$id = _GET('id',0);
		$page_no = _GET('page_no',1);
		$data = _POST('info', array());

		if ($id) {
			unset($data['created']);
			$data['updated'] = time();
	        $return = _model('album')->update(array('id' => $id), $data);
		} else {
			if ( !$data['name'] ) {
				redirect();
			}
			if ( !$data['description'] ) {
				redirect();
			}
			$data['created'] = time();
			$data['updated'] = $data['created'];
			$return = _model('album')->create($data);
		}
		
		if ($return) {
			redirect('?url=admin/album/getList&page_no='.$page_no);
		} else {
			redirect();
		}
    }

	function delete($id = 0){
        if (empty($id)) {
            redirect();
        }
        if ($info = _model('album')->read(array('id' => $id))) {
            _model('album')->delete(array('id' => $id));
        }
		redirect();		
	}
	
	function upload(){
		$id = _GET('id');
        if ( !$info = _model('album')->read(array('id'=>$id)) ) {
            redirect();
        }
        $this->smarty->assign('info', $info);
		$this->smarty->display('admin/album/upload.html');
	}
}
