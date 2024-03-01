<?php
namespace Nguyenvandoan\Dethithu\Controllers;
use Nguyenvandoan\Dethithu\Commons\Controller;
use Nguyenvandoan\Dethithu\Models\GiangVien;

class GiangVienController extends Controller{
    private GiangVien $giangVien;
    public function __construct(){
        $this->giangVien =new GiangVien();
    }
    public function index(){
        $data['giangViens']=$this->giangVien->getList();

        return $this->renderView('giangvien.index',$data);
    }
    public function create(){
        if(!empty($_POST)){
            $this->giangVien->insert(
                $_POST['name'],
                $_POST['email'],
                $_POST['phone']
            );
            header('Location: /giang-vien/');
            exit();
        }
        return $this->renderView('giangvien.create',);
    }
    
    public function update($id){
        $giangVien=$this ->giangVien->getByID($id);
        if(empty($giangVien)){
            echo '404-Not found';
            die;
        }
        if(!empty($_POST)){
            $this->giangVien->update(
                $id,
                $_POST['name'],
                $_POST['email'],
                $_POST['phone']
            );
            header("Location: /giang-vien/$id/update");
            exit();
        }
        return $this->renderView('giangvien.update', ['giangVien' => $giangVien]);
    }
    public function delete($id){
        $giangVien=$this ->giangVien->getByID($id);
        if(empty($giangVien)){
            echo '404-Not found';
            die;
        }
        $this ->giangVien->delete($id);
        header('Location: /giang-vien/');
            exit();
    }
}