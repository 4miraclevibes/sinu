<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                "title" => "LDNU (Lembaga Dakwah Nahdlatul Ulama)",
                "user_id" => 1,
                "category" => "Program",
                "content" => "",
                "image" => "https://mtsmu2bakid.sch.id/wp-content/uploads/2021/01/ROUF-scaled.jpg",
                "created_at" => "2024-09-24T09:19:50.000000Z",
                "updated_at" => "2024-09-24T09:25:47.000000Z"
            ],
            [
                "title" => "PCNU (Pengurus Cabang Nahdlatul Ulama)",
                "user_id" => 1,
                "category" => "Program",
                "content" => "",
                "image" => "https://i.ytimg.com/vi/-1HtzpZc8tg/maxresdefault_live.jpg",
                "created_at" => "2024-09-24T09:39:04.000000Z",
                "updated_at" => "2024-09-24T09:39:04.000000Z"
            ],
            [
                "title" => "Lazisnu (Lembaga Amil Zakat Infaq dan Sedekah Nahdlatul Ulama)",
                "user_id" => 1,
                "category" => "Program",
                "content" => "",
                "image" => "https://i.ytimg.com/vi/8aUV7mV6-t0/maxresdefault_live.jpg",
                "created_at" => "2024-09-24T09:44:30.000000Z",
                "updated_at" => "2024-09-24T09:44:30.000000Z"
            ],
            [
                "title" => "DBKader (Dewan Kader)",
                "user_id" => 1,
                "category" => "Program",
                "content" => "",
                "image" => "https://i.ytimg.com/vi/-1HtzpZc8tg/maxresdefault_live.jpg",
                "created_at" => "2024-09-24T09:54:46.000000Z",
                "updated_at" => "2024-09-24T09:54:46.000000Z"
            ],
            [
                "title" => "Coba Berita",
                "user_id" => 1,
                "category" => "Berita",
                "content" => "",
                "image" => "https://mtsmu2bakid.sch.id/wp-content/uploads/2021/01/ROUF-scaled.jpg",
                "created_at" => "2024-09-24T10:03:08.000000Z",
                "updated_at" => "2024-09-24T10:03:08.000000Z"
            ],
            [
                "title" => "Coba Aktifitas",
                "user_id" => 1,
                "category" => "Aktifitas",
                "content" => "",
                "image" => "https://mtsmu2bakid.sch.id/wp-content/uploads/2021/01/ROUF-scaled.jpg",
                "created_at" => "2024-09-24T10:13:40.000000Z",
                "updated_at" => "2024-09-24T10:18:58.000000Z"
            ],
            [
                "title" => "Coba Pengumuman",
                "user_id" => 1,
                "category" => "Pengumuman",
                "content" => "",
                "image" => "https://mtsmu2bakid.sch.id/wp-content/uploads/2021/01/ROUF-scaled.jpg",
                "created_at" => "2024-09-24T10:18:10.000000Z",
                "updated_at" => "2024-09-24T10:18:10.000000Z"
            ]
        ];

        foreach ($announcements as $announcement) {
            Announcement::create($announcement);
        }
    }
}
