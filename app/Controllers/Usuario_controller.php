<?php

namespace App\Controllers;

use App\Models\Usuarios_model; 
use CodeIgniter\Controller;

class Usuario_controller extends Controller {
    public function __construct(){
        helper(['form','url']);
    }
    
    public function create(){
        $dato['titulo']='Registro';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/registro');
        echo view('front/footer');
    }

    public function formValidation(){
        // Reglas de validación para cada campo del formulario
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'nombre' => 'required|min_length[3]|max_length[50]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'usuario' => 'required|min_length[3]|max_length[20]|is_unique[usuarios.usuario]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[100]'
        ],
        [ //Errores
            'nombre' => [
                'required' => 'Este campo es obligatorio',
                'min_length' => 'El nombre es muy corto',
                'max_length' => 'El nombre es demasiado largo',
            ],
            'apellido' => [
                'required' => 'Este campo es obligatorio',
                'min_length' => 'El apellido es muy corto',
                'max_length' => 'El apellido es demasiado largo',
            ],
            'usuario' => [
                'required' => 'Este campo es obligatorio',
                'min_length' => 'El nombre de usuario es muy corto',
                'max_length' => 'El nombre de usuario es demasiado largo',
                'is_unique' => 'Nombre de usuario no disponible'
            ],
            'email' => [
                'required' => 'Este campo es obligatorio',
                'min_length' => 'El email es muy corto',
                'max_length' => 'El email es demasiado largo',
                'is_unique' => 'Este email ya fue registrado'
            ],
            'pass' => [
                'required' => 'Este campo es obligatorio',
                'min_length' => 'La contraseña es muy corta',
                'max_length' => 'La contraseña es demasiado larga',
            ],
        ]
        );

        // Verificar la unicidad del nombre de usuario y el correo electrónico
        $formModel = new Usuarios_model();
        $usuario = $this->request->getVar('usuario');
        $email = $this->request->getVar('email');
        
        if (!$formModel->usuarioEsUnico($usuario)) {
            $validation->setError('usuario', 'El nombre de usuario ya está en uso.');
        }

        if (!$formModel->emailEsUnico($email)) {
            $validation->setError('email', 'El correo electrónico ya está registrado.');
        }

        // Instancia del modelo con el namespace correcto
        $formModel = new Usuarios_model();

        if(!$validation->withRequest($request)->run()) {
            $dato['titulo']='Registro';
            echo view('front/head',$dato);
            echo view('front/navbar');
            echo view('back/registro', [
                'validation' => $validation->getErrors(),
                'oldInput' => $request->getPost() // Obtener los datos del formulario enviados por el usuario
            ]);
            echo view('front/footer');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'),PASSWORD_DEFAULT), 
                'perfil_id' => 2 
            ]);
            
            session() -> setFlashdata('success','Usuario registrado con éxito');
            return redirect()->to('/');

        }
    }

    public function vista_users(){
        $usuarioModel = new Usuarios_model();
        $data['usuarios'] = $usuarioModel->orderBy('id_usuario','DESC')->findAll();
    
        $dato['titulo'] = 'CRUD Usuarios';
        echo view('front/head', $dato);
        echo view('front/navbar');
        echo view('back/crud_users', $data);
        echo view('front/footer');
    }

    public function baja_user($id_user){
        $user_aux = new Usuarios_model();
        $baja_update = [
            'baja' => 'SI'
        ];
        $user_aux->update($id_user,$baja_update);
        session()->setFlashdata('usuario_msj','Usuario dado de baja correctamente');
        return redirect()->back();
    }

    public function alta_user($id_user){
        $user_aux = new Usuarios_model();
        $alta_update = [
            'baja' => 'NO'
        ];
        $user_aux->update($id_user,$alta_update);
        session()->setFlashdata('usuario_msj','Usuario dado de alta correctamente');
        return redirect()->back();
    }

    public function getUser($id){
        $users = new Usuarios_model();
        $users = $users->findAll();

        foreach($users as $user){
            if($user['id_usuario'] == $id){
                $user_find = $user;
                break;
            }
        }

        if($user_find != null){
            return $user_find;
        } else{
            session()->setFlashdata('usuario_msj','Usuario no encontrado');
            return redirect()->back();
        }
    }
}
