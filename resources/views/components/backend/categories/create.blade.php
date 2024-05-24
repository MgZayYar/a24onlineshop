@extends('components.layout.app')
@section('content')
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Create</h4>                  
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">  
                    <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-12">
              <div class="card">
                <div class="card-body p-4">
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Company</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputtext" placeholder="ACME Inc.">
                    </div>
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <div class="input-group border rounded-1">
                        <input type="text" class="form-control border-0" placeholder="John Deo">
                        <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1">@example.com</span>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Phone No</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputtext" placeholder="412 2150 451">
                    </div>
                  </div>
                  <div class="mb-4 row align-items-center">
                    <label for="exampleInputPassword1" class="form-label fw-semibold col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-9">
                      <textarea class="form-control p-7" name="" id="" cols="20" rows="1" placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                      <BUtton class="btn btn-success">Save</BUtton>
                      <BUtton class="btn btn-secondary">Cancle</BUtton>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
        

@endsection