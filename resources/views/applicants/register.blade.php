<head>

{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{ asset('js/app.js') }}"></script> --}}

    <title>Register Applicant</title>
</head>
<body>
  @extends('layouts\app')
  @section('content')
    <div class="container card">
        <div class="card-header my-4">
            Register new Applicant
        </div>
        <div class="card-body">
            <form action="/home/applicants/store" method="post">
              @csrf
                {{-- Name --}}
                <div class="mb-3">
                    <label for="applicant_name" class="form-label">Applicant Name</label>
                    <input type="text" class="form-control" id="applicant_name" placeholder="Name" name="applicant_name">
                  </div>
                  {{-- Father Name --}}
                  <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" class="form-control" id="father_name" placeholder="Father name" name="father_name">
                  </div>

                  {{-- Date of Birth --}}
                  <div class="mb-3">
                  <label for="birthday">Date of Birth</label>
                    <input type="date" class="form-control" id="date-of-birth" name="date-of-birth" >
                  </div>

                  {{-- CNIC --}}
                  <div class="mb-3">
                    <label for="cnic">CNIC</label>
                    <input type="text" class="form-control" id="cnic"  data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required>
                    </div>

                    {{-- Domicile --}}
                  <div class="mb-3">
                    <label for="cnic">Domicile</label>
                    <input type="text" class="form-control" id="domicile"  placeholder="domicile"  name="domicile" required>
                    </div>

                    {{-- Cell No --}}
                    <div class="mb-3">
                        <label for="cnic">Cell No</label>
                        <input type="text" class="form-control" id="cnic"  data-inputmask="'mask': '9999-9999999'"  placeholder="03XX-XXXXXXX"  name="cnic" required>
                        </div>

                    {{-- Gender --}}
                    <label >Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        <label class="form-check-label" for="male">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">
                          Female
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                        <label class="form-check-label" for="other">
                          Other
                        </label>
                      </div>
                      <br>

                      {{-- Residential Address --}}
                      <div class="mb-3">
                        <label for="residential_address" class="form-label">Residential Address</label>
                        <input type="text" class="form-control" id="residential_address" placeholder="Residential Address" name="residential_address">
                      </div>

                      {{-- Permanent Address --}}
                      <div class="mb-3">
                        <label for="permanent_address" class="form-label">Permanent Address</label>
                        <input type="text" class="form-control" id="permanent_address" placeholder="Permanent Address" name="residential_address">
                      </div>

                      {{-- Academic Qualification --}}
                      <label for="permanent_address" class="form-label">Academic Qualification</label>
                      <div class="row">
                        
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Degree" aria-label="Degree" name="degree">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Passing Year" aria-label="Passing Year" name="passing_year">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Marks" aria-label="Marks" name="marks">
                          </div>
                      </div>

                      <br>
                      {{-- Employment Record --}}
                      <label for="permanent_address" class="form-label">Employment Record</label>
                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Industry" aria-label="Industry" name="industry">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Job Title" aria-label="Job Title" name="job_title">
                        </div>
                      </div>

                      <br>
                      {{-- Submit Button --}}
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
            </form>
        </div>
    </div>
    @endsection
</body>