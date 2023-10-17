<?php
use App\Models\jadwalKuliah;
?>

@extends('layouts.app2')
@section('title', 'Jadwal Kuliah')
@section('content')
@section('br1', 'Jadwal Kuliah')
@section('br2', 'Jadwal Kuliah')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA PEMBAYARAN</p>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>ID</th>
                <th>Kode Matakuliah</th>
                <th>Kode Term</th>
                <th>Kode Dosen</th>
                <th>Day</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Ruangan</th>
            </tr>
            <tr>
                @foreach ($jadwalKuliahs as $jadwalKuliah) 
                    <tr>
                        <td>{{$jadwalKuliah->id}}</td>
                        <td>{{$jadwalKuliah->kode_matakuliah}}</td>
                        <td>{{$jadwalKuliah->kode_term}}</td>
                        <td>{{$jadwalKuliah->kode_dosen}}</td>
                        <td>{{$jadwalKuliah->day}}</td>
                        <td>{{$jadwalKuliah->jam_mulai}}</td>
                        <td>{{$jadwalKuliah->jam_selesai}}</td>
                        <td>{{$jadwalKuliah->ruangan}}</td>
                    </tr>
                @endforeach
            </tr>
        </table>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            border: 1px solid black;
            padding: 8px;
            font-weight: bold;
            text-align: center
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center
        }
        .bold-font {
            font-weight: bold;
        }
    </style>