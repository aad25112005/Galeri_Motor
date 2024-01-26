@extends('layouts.frontend.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tentang Kami</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card blok">
                    <img src="{{ asset('image/badut1.jpg') }}" class="card-img-top" alt="Athariq">
                    <div class="card-body">
                        <p>
                        <h6 class="card-text">Nama  : Athariq Ahmad Day</h6>
                        <h6 class="card-text">Tpt/Tgl Lahir  : Padang/25 November 2005</h6>
                        <h6 class="card-text">Email : athariqahmadday@gmail.com</h6>
                        <h6 class="card-text">No.Hp : +62895602588130</h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card blok">
                    <img src="{{ asset('image/badut2.jpg') }}" class="card-img-top" alt="Arjuna">
                    <div class="card-body">
                        <p>
                        <h6 class="card-text">Nama  : Arjuna Tri Kurniawan</h6>
                        <h6 class="card-text">Tpt/Tgl Lahir  : Padang/02 Desember 2005</h6>
                        <h6 class="card-text">Email : arjunakurniawan597@gmail.com</h6>
                        <h6 class="card-text">No.Hp   : +6285271243245</h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card blok">
                    <img src="{{ asset('image/badut3.jpg') }}" class="card-img-top" alt="Nela">
                    <div class="card-body">
                        <p>
                        <h6 class="card-text">Nama  : Nela Putri Ramadhani</h6>
                        <h6 class="card-text">Tpt/Tgl Lahir  : Padang/14 Oktober 2005</h6>
                        <h6 class="card-text">Email : nelaputriramadhani@gmail.com</h6>
                        <h6 class="card-text">No.Hp  : +6282283196638</h6>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan kartu-kartu berikutnya di sini -->
        </div>
    </div>
@endsection
