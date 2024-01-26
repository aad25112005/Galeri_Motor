@extends('layouts.frontend.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Galeri Motor</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($item as $index => $items)
                <div class="col-md-4 mb-4">
                    <div class="card blok">
                        <img src="{{ asset('storage/' . $items->image) }}" class="card-img-top" alt="Motor" data-bs-toggle="modal" data-bs-target="#imageModal{{ $items->id }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $items->nama }}</h5>
                            <h6 class="card-title">{{ $items->brand }}</h6>
                            <b>Deskripsi:</b>
                            <p class="card-text">{!! html_entity_decode($items->description) !!}</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal{{ $items->id }}">View</a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="imageModal{{ $items->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $items->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="{{ asset('storage/' . $items->image) }}" class="img-fluid" alt="Motor">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if (($index + 1) % 3 == 0)
                    <div class="w-100"></div> <!-- Membuat baris baru setiap tiga kolom -->
                @endif
            @endforeach
        </div>
    </div>
@endsection
