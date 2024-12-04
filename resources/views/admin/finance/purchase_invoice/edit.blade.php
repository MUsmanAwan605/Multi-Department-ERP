@extends('admin.admin_dashboard')
@section('admin')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Purchase Invoice</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Status</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <form action="{{ route('admin.finance.purchase_invoice.update', ['id' => $purchase_invoice->id]) }}" method="post"  >
                @method('put')
                @csrf
            <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                    <div class="col-lg-8">
                    <div class="border border-3 p-4 rounded">
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Purchase Invoice</label>
                            <input type="text" name="purchase_invoice" class="form-control @error('purchase_invoice') is-invalid  @enderror" value="{{old('purchase_invoice',$purchase_invoice->purchase_invoice)}}" id="inputProductTitle" placeholder="Enter purchase_invoice">
                            <span class="text-danger">{{$errors->first('purchase_invoice')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid  @enderror" value="{{old('date',$purchase_invoice->date)}}" id="inputProductTitle" placeholder="Enter Date">
                            <span class="text-danger">{{$errors->first('date')}}</span>
                        </div>

                        <div class="mb-3">
                            <label for="Department" class="form-label">Department</label>
                            <select class="form-select @error('Department') is-invalid @enderror" name="Department" id="Department" aria-label="Default select example">
                                <option value="none">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->name }}" {{ old('Department',$purchase_invoice->depart   ) == $department->name ? 'Selected' : NULL }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger text-uppercase">{{ $errors->first('Department') }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Description</label>
                            <textarea class="form-control @error('descp') is-invalid  @enderror"  name="descp"  id="inputProductDescription" rows="3">{{ old('descp', $purchase_invoice->descp) }}</textarea>
                            <span class="text-danger">{{$errors->first('descp')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Quantity</label>
                            <input type="number" name="qty" class="form-control @error('qty') is-invalid  @enderror" value="{{old('qty',$purchase_invoice->qty)}}" id="inputProductTitle" placeholder="Enter Quantity">
                            <span class="text-danger">{{$errors->first('qty')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Unit Price</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid  @enderror" value="{{old('price',$purchase_invoice->price)}}" id="inputProductTitle" placeholder="Enter Unit Price">
                            <span class="text-danger">{{$errors->first('price')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Total</label>
                            <input type="number" name="total" class="form-control @error('total') is-invalid  @enderror" value="{{old('total',$purchase_invoice->total)}}" id="inputProductTitle" placeholder="Enter Total">
                            <span class="text-danger">{{$errors->first('total')}}</span>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Images</label>
                            <input id="image-uploadify" class="form-control" type="file" name="fin_img" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf">
                        </div>                     --}}
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save Purchase Invoice</button>
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
