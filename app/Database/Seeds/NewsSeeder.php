<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            'Autor 1',
            'Autor 2',
            'Autor 3',
            'Autor 4',
            'Autor 5',
        ];

        $data = [];
        $authorCount = count($authors);
        $newsCount = 50;

        for ($i = 1; $i <= $newsCount; $i++) {
            $authorIndex = ($i - 1) % $authorCount;
            $data[] = [
                'title' => 'Notícia ' . $i,
                'content' => 'Conteúdo da notícia ' . $i,
                'author' => $authors[$authorIndex],
                'publication_date' => '2023-07-'.rand(0,2).rand(1,9),
            ];
        }

        $this->db->table('news')->insertBatch($data);
    }
}
