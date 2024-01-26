@extends('layouts.backend.main')

@section('content')
          <div class="container-fluid rounded bg-white p-3">
               <div class="mb-2 ">
                     <a class="btn btn-dark" href="{{ route('item.index') }}"><i class="bi bi-arrow-left"></i></a>
               </div>
               <form class="w-75 mt-3" method="POST" action="{{ route('item.store') }}" autocomplete="off"
               enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3 w-50">
                         <label for="nama" class="form-label">Nama</label>
                         <input type="text" class="form-control" id="nama" name="nama" autofocus required>
                    </div>
                   <div class="mb-3 w-50">
                         <label for="category_id" class="form-label">Category</label>
                         <select class="form-select" id="inputGroupSelect01" name="category_id">
                              @foreach ($category as $categories)    
                              <option value="{{ $categories->id }}">{{ $categories->nama }}</option>
                              @endforeach
                         </select>
                    </div>
                    <div class="mb-3 w-50">
                         <label for="image" class="form-label">Image</label>
                         <img class="img-preview img-fluid mb-3 col-sm-2">
                         <input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
                    </div>
                    <div class="mb-3 w-50">
                         <label for="description" class="form-label">Description</label>
                         <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3 w-50">
                         <label for="brand" class="form-label">Brand</label>
                         <img class="img-preview img-fluid mb-3 col-sm-2">
                         <input type="text" class="form-control" id="brand" name="brand" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" >Submit</button>
                   
               </form>
          </div>

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
               // ClassicEditor
               // .create(document.querySelector('#description'))
               // .catch(error => {
               //      console.error(error);
               // });
          </script>
@endsection