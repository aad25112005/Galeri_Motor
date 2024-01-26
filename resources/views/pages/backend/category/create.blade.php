@extends('layouts.backend.main')

@section('content')
          <div class="container-fluid rounded bg-white p-3">
               <div class="mb-2 ">
                     <a class="btn btn-dark" href="{{ route('category.index') }}"><i class="bi bi-arrow-left"></i></a>
               </div>
               <form class="w-75 mt-3" method="POST" action="{{ route('category.store') }}" autocomplete="off"
               enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3 w-50">
                         <label for="nama" class="form-label">Nama</label>
                         <input type="text" class="form-control" id="nama" name="nama" autofocus required>
                    </div>     
                    <button type="submit" class="btn btn-primary" >Submit</button>              

          <script>
               function previewImage(){

                    const image = document.querySelector('#image');
                    const imgpreview = document.querySelector('.img-preview');

                    imgpreview.style.display = 'block';

                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);

                    oFReader.onload = function(oFREvent){
                         imgpreview.src = oFREvent.target.result;
                    }
               }
          </script>
@endsection