<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('program_studis')->insert([
            ['nama'=>'Sistem Informasi',
            'Deskripsi'=>'Jurusan Sistem Informasi adalah bidang ilmu yang mengintegrasikan bidang manajemen dengan bidang teknologi komputer.'],
            ['nama'=>'Teknik Informatika',
            'Deskripsi'=>'Teknik Informatika merupakan jurusan yang banyak mengulas beragam teknologi komputer, mulai dari prinsip-prinsip ilmu komputer, analisis matematis, evaluasi sistem operasi, hingga pengembangan dan perancangan software (peranti lunak).'],
            ['nama'=>'Manajemen',
            'Deskripsi'=>'Manajemen adalah program studi yang mempelajari mengenai bagaimana mengelola suatu perusahaan atau organisasi.'],
            ['nama'=>'Ilmu Hukum',
            'Deskripsi'=>'Jurusan Ilmu Hukum adalah studi yang mempelajari berbagai sistem hukum yang berkaitan dengan kehidupan kemasyarakatan.'],
            ['nama'=>'Filsafat',
            'Deskripsi'=>'Jurusan Filsafat sendiri mempelajari berbagai fenomena yang terjadi di sekitar, mulai dari sosial, budaya, agama, dan lain-lain. Ketika melihat fenomena-fenomena tersebut, kamu dituntut untuk berpikir kritis dan logis berdasarkan fakta dan data yang ditemukan.'],
        ]
        );

        \DB::table('pembayarans')->insert([
            ['studentID'=>'03081210013',
            'Amount'=>500000.00,
            'Payment_date'=>'2023-10-17'],
            ['studentID'=>'03081210016',
            'Amount'=>400000.00,
            'Payment_date'=>'2023-10-16'],
            ['studentID'=>'03081210004',
            'Amount'=>500000.00,
            'Payment_date'=>'2023-10-15'],
            ['studentID'=>'03081210007',
            'Amount'=>400000.00,
            'Payment_date'=>'2023-10-14'],
            ['studentID'=>'03081210010',
            'Amount'=>500000.00,
            'Payment_date'=>'2023-10-13']
        ]
        );

        \DB::table('jadwal_kuliahs')->insert([
            ['kode_matakuliah'=>'MK000001',
            'kode_term'=>'Term0001',
            'kode_dosen'=>'Dosen001',
            'day'=>'Senin',
            'jam_mulai'=>'14:30:00',
            'jam_selesai'=>'16:30:00',
            'ruangan'=>'AD101'],
            ['kode_matakuliah'=>'MK000002',
            'kode_term'=>'Term0002',
            'kode_dosen'=>'Dosen002',
            'day'=>'Selasa',
            'jam_mulai'=>'14:30:00',
            'jam_selesai'=>'16:30:00',
            'ruangan'=>'AD102'],
            ['kode_matakuliah'=>'MK000003',
            'kode_term'=>'Term0003',
            'kode_dosen'=>'Dosen003',
            'day'=>'Rabu',
            'jam_mulai'=>'14:30:00',
            'jam_selesai'=>'16:30:00',
            'ruangan'=>'AD103'],
            ['kode_matakuliah'=>'MK000004',
            'kode_term'=>'Term0004',
            'kode_dosen'=>'Dosen004',
            'day'=>'Kamis',
            'jam_mulai'=>'14:30:00',
            'jam_selesai'=>'16:30:00',
            'ruangan'=>'AD104'],
            ['kode_matakuliah'=>'MK000005',
            'kode_term'=>'Term0005',
            'kode_dosen'=>'Dosen005',
            'day'=>'Jumat',
            'jam_mulai'=>'14:30:00',
            'jam_selesai'=>'16:30:00',
            'ruangan'=>'AD105']
        ]
        );

        \DB::table('pembayarans')->insert([
            ['studentID'=>'03081210013',
            'Amount'=>500000.00,
            'Payment_date'=>'2023-10-17'],
            ['studentID'=>'03081210016',
            'Amount'=>400000.00,
            'Payment_date'=>'2023-10-16'],
            ['studentID'=>'03081210004',
            'Amount'=>500000.00,
            'Payment_date'=>'2023-10-15'],
            ['studentID'=>'03081210007',
            'Amount'=>400000.00,
            'Payment_date'=>'2023-10-14'],
            ['studentID'=>'03081210010',
            'Amount'=>500000.00,
            'Payment_date'=>'2023-10-13']
        ]
        );
    }
}
