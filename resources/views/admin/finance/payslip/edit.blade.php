@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Payslips</div>
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
             <!--Message  Start-->
          @if (session('success'))
          <div class="alert alert-success" id="alertMessage">
              {{ session('success') }}
          </div>
          <script>
              setTimeout(function() {
                  document.getElementById('alertMessage').style.display = 'none';
              }, 3000);
          </script>
      @endif
      <!--Message  End-->
            <!--end breadcrumb-->
            <form action="{{ route('admin.finance.payslip.update', ['id' => $payslip->id]) }}" method="post"  >
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
                            <label for="inputProductTitle" class="form-label">Employee Name</label>
                            <input type="text" name="e_name" class="form-control @error('e_name') is-invalid  @enderror" value="{{old('e_name',$payslip->e_name)}}" id="inputProductTitle" placeholder="Enter Employee Name">
                            <span class="text-danger">{{$errors->first('e_name')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Employee ID</label>
                            <input type="text" name="e_id" class="form-control @error('e_id') is-invalid  @enderror" value="{{old('e_id',$payslip->e_id)}}" id="inputProductTitle" placeholder="Enter Employee ID">
                            <span class="text-danger">{{$errors->first('e_id')}}</span>
                        </div>

                        <div class="mb-3">
                            <label for="Department" class="form-label">Department</label>
                            <select class="form-select @error('Department') is-invalid @enderror" name="Department" id="Department" aria-label="Default select example">
                                <option value="none">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->name }}" {{ old('Department',$payslip->depart   ) == $department->name ? 'Selected' : NULL }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger text-uppercase">{{ $errors->first('Department') }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Designation</label>
                            <input type="text" name="desig" class="form-control @error('desig') is-invalid  @enderror" value="{{old('desig',$payslip->desig)}}" id="inputProductTitle" placeholder="Enter Designation">
                            <span class="text-danger">{{$errors->first('desig')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid  @enderror" value="{{old('date',$payslip->date)}}" id="inputProductTitle" placeholder="Enter Date">
                            <span class="text-danger">{{$errors->first('date')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Basic Salary</label>
                            <input type="number" name="b_salary" class="form-control @error('b_salary') is-invalid  @enderror" value="{{old('b_salary',$payslip->b_salary)}}" id="inputProductTitle" placeholder="Enter Basic Salary">
                            <span class="text-danger">{{$errors->first('b_salary')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Allowances</label>
                            <input type="number" name="allowances" class="form-control @error('allowances') is-invalid  @enderror" value="{{old('allowances',$payslip->allowances)}}" id="inputProductTitle" placeholder="Enter Allowances">
                            <span class="text-danger">{{$errors->first('allowances')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Gross Salary</label>
                            <input type="number" name="g_salary" class="form-control @error('g_salary') is-invalid  @enderror" value="{{old('g_salary',$payslip->g_salary)}}" id="inputProductTitle" placeholder="Enter Gross Salary">
                            <span class="text-danger">{{$errors->first('g_salary')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Deductions</label>
                            <input type="number" name="deduct" class="form-control @error('deduct') is-invalid  @enderror" value="{{old('deduct',$payslip->deduct)}}" id="inputProductTitle" placeholder="Enter Deductions">
                            <span class="text-danger">{{$errors->first('deduct')}}</span>
                        </div>
                        <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Net Salary</label>
                            <input type="number" name="n_salary" class="form-control @error('n_salary') is-invalid  @enderror" value="{{old('n_salary',$payslip->n_salary)}}" id="inputProductTitle" placeholder="Enter Net Salary">
                            <span class="text-danger">{{$errors->first('n_salary')}}</span>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Description</label>
                            <textarea class="form-control @error('descp') is-invalid  @enderror"  name="descp"  id="inputProductDescription" rows="3">{{ old('descp', $payslip->descp) }}</textarea>
                            <span class="text-danger">{{$errors->first('descp')}}</span>
                        </div>  --}}
                        {{-- <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Images</label>
                            <input id="image-uploadify" class="form-control" type="file" name="fin_img" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf">
                        </div>                     --}}
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save payslip</button>
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
