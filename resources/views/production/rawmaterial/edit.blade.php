@extends('production.production_dashboard')
@section('production')
    <!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Rawmaterial</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Rawmaterial</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
      <form method="POST" action="{{route('rawmaterial.store')}}" >
         @csrf
        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Edit Rawmaterial</h5>
              <hr/>
               <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-8">
                   <div class="border border-3 p-4 rounded">
                       <div class="mb-3">
                         <label for="date" class="form-label">Date</label>
                         <input type="date" value="{{old('Date', $rawmaterial->date)}}" class="form-control @error('Date') is-invalid @enderror" id="Date" name="Date">
                         <span class="text-danger">{{ $errors->first('Date') }}</span>
                       </div>

                       <div class="mb-3">
                         <label for="title" class="form-label">Title</label>
                         <input type="text" value="{{old('title', $rawmaterial->title)}}" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                         <span class="text-danger">{{ $errors->first('title') }}</span>
                       </div>

                       <div class="mb-3">
                        <label for="slug" class="form-label">Quantity</label>
                        <input type="number" value="{{old('qty', $rawmaterial->qty)}}" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty">
                        <span class="text-danger">{{ $errors->first('qty') }}</span>
                      </div>

                       <div class="mb-3">
                         <label for="dscp" class="form-label">Description</label>
                        <textarea name="descp" id="descp" value="{{old('descp')}}" class="form-control @error('descp') is-invalid @enderror" cols="5" rows="5">{{$rawmaterial->descp}}</textarea>
                         <span class="text-danger">{{ $errors->first('descp') }}</span>
                       </div>

                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>

                    </div>
                   </div>

                </div>
               </div>
            </div>
            </div>
          </div>
        </form>
      </div>


    </div>
<!--end page wrapper -->
@endsection
