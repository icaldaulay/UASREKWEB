<?php

namespace app\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_produk', 'username','biaya', 'status', 'catatan', 'qty'];

    protected $useTimestamps = true;

    public function getItem($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_transaksi' => $id])->first();
    }

    public function getSalledStock() {
        return $this->db->query("SELECT id_produk, nama_produk, SUM(qty) AS qtys FROM TRANSAKSI GROUP BY id_produk")->getResultArray();
        
        }
    
}