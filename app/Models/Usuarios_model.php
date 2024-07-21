<?php
namespace App\Models;
use CodeIgniter\Model;

class Usuarios_model extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre','apellido','usuario','email','pass','perfil_id','baja','created_at'];

    public function usuarioEsUnico($usuario) {
        return $this->where('usuario', $usuario)->countAllResults() === 0;
    }

    public function emailEsUnico($email) {
        return $this->where('email', $email)->countAllResults() === 0;
    }
}