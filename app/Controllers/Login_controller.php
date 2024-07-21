<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;
  
class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form','url']);
      
        $dato['titulo']='Login'; 
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/login');
        echo view('front/footer');
    } 
  
    public function auth()
    {
        $session = session(); //el objeto de sesión se asigna a la variable $session
        $model = new Usuarios_model(); //instanciamos el modelo

        //traemos los datos del formulario
        $password = $this->request->getVar('pass');
        $user = $this->request->getVar('usuario');
        
        $data = $model->where('usuario', $user)->first(); //consulta sql 
        if($data){
            $pass = $data['pass'];
            $ba= $data['baja'];
            if ($ba == 'SI'){
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/login');
            } else{
                //Se verifican los datos ingresados para iniciar, si cumple la verificaciòn inicia la sesion
                $verify_pass = password_verify($password, $pass);
                //password_verify determina los requisitos de configuracion de la contraseña
                if($verify_pass){
                    $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido'=> $data['apellido'],
                    'email' =>  $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id'=> $data['perfil_id'],
                    'logged_in'  => TRUE
                    ];
                    //Si se cumple la verificacion inicia la sesiòn  
                    $session->set($ses_data);

                    session()->setFlashdata('success', 'Bienvenido');
                    return redirect()->to('/');
                    // pagina principal
                } else {  
                    //no paso la validaciòn de la password
                    $session->setFlashdata('passWrong', 'Contraseña incorrecta');
                    return redirect()->to('/login')->withInput();
                }
            }
        } else {
            //no paso la validaciòn del usuario
            $session->setFlashdata('userWrong', 'No Existe el usuario o es incorrecto');
            return redirect()->to('/login')->withInput();
        } 
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 
