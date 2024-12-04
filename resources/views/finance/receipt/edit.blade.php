@extends('finance.finance_dashboard')
@section('finance')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Finance</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Receipt</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!--end breadcrumb-->
            <form action="{{ route('finance.receipt.update', ['id' => $receipt->id]) }}" method="post"  >
                @method('PUT')
                @csrf
            <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Receipt</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                    <div class="col-lg-8">
                    <div class="border border-3 p-4 rounded">

                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid  @enderror" value="{{old('receipt',$receipt->date)}}" id="inputProductTitle" placeholder="Enter Date">
                            <span class="text-danger">{{$errors->first('date')}}</span>
                        </div>

                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Quantity</label>
                            <input type="number" name="qty" class="form-control @error('qty') is-invalid  @enderror" value="{{old('receipt',$receipt->qty)}}"   id="inputProductTitle" placeholder="Enter quantity">
                            <span class="text-danger">{{$errors->first('qty')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Price</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid  @enderror" value="{{old('receipt',$receipt->price)}}" id="inputProductTitle" placeholder="Enter Price">
                            <span class="text-danger">{{$errors->first('price')}}</span>
                        </div>

                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Total</label>
                            <input type="number" name="total" class="form-control @error('total') is-invalid  @enderror" value="{{old('receipt',$receipt->total)}}" id="inputProductTitle" placeholder="Enter Total">
                            <span class="text-danger">{{$errors->first('total')}}</span>
                        </div>

                        <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Description</label>
                            <textarea class="form-control @error('descp') is-invalid  @enderror"  name="descp" id="inputProductDescription" rows="3">{{old('receipt',$receipt->descp)}}</textarea>
                            <span class="text-danger">{{$errors->first('descp')}}</span>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Images</label>
                            <input id="image-uploadify" class="form-control" type="file" name="fin_img" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf">
                        </div>                     --}}
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save receipt</button>
                            </div>
                        </div>
                    </div>

                    </div>
                </div><!--end row-->
            </form>
            </div>
            </div>
        </div>


        </div>
    </div>

@endsection
