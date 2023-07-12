<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title',
        'content',
        'author',
        'publication_date'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getNews($id = false){
        if ($id === false) {
            return $this->findAll();
        }
        return $this->asArray()
            ->where(['id' => $id])
            ->first();
    }

    public function create_news($data) {
        $this->db->insert('news', $data);
        return $this->db->insert_id();
    }

    public function update_news($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function delete_news($id) {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }
}
