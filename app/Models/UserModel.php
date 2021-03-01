<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nama', 'nip', 'nis', 'jenis_kelamin', 'kelas', 'jurusan', 'rombel', 'tanggal_lahir', 'gambar', 'alamat', 'no_telp', 'username', 'password', 'role', 'slug'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}
