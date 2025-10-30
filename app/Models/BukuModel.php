<?php
namespace App\Models;
use CodeIgniter\Model;

class BukuModel extends Model {
    protected $table ='buku';
    protected $primaryKey = 'id_buku';
    
    protected $allowedFields = ['Judul', 'pengarang', 'penerbit', 'thn_terbit', 'sampul'];
    
    public function getBuku($idbuku = false) {

        if ($idbuku == false){
            return $this->findAll();
        }
        return $this->where(['id_buku'=>$idbuku])->first();
    } 
    public function findBuku($cari){

        error_log('cari(model): ' . $cari); //untuk mencari masalah apakah dimodel atau controller

        if($cari == false){
            return $this->findAll();
        }
        return $this->table('buku')->like('Judul', $cari)->orLike('pengarang', $cari);
    }
}
?>