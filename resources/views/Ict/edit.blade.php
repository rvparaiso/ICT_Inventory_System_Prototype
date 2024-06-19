@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Ict Devices
                </div>
                <div class="float-end">
                    <a href="{{ route('Ict.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('Ict.update', $Ict->id) }}" method="post">

                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="department_id" class="col-md-4 col-form-label text-md-end text-start">Department ID</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('department_id') is-invalid @enderror" id="inputDepartment_ID" name="department_id" value="{{ $Ict->department_id }}">
                            @error('department_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="ict_category_id" class="col-md-4 col-form-label text-md-end text-start">Ict Category ID</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('ict_category_ide') is-invalid @enderror" id="inputIct_Category_ID" name="ict_category_id" value="{{ $Ict->ict_category_id }}">
                            @error('ict_category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="mb-3 row">
                        <label for="status_id" class="col-md-4 col-form-label text-md-end text-start">Status ID</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('status_id') is-invalid @enderror" id="inputStatus_ID" name="status_id" value="{{ $Ict->status_id }}">
                            @error('status_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

       
                    <div class="mb-3 row">
                        <label for="ip_config_id" class="col-md-4 col-form-label text-md-end text-start">Ip Config ID</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('ip_config_id') is-invalid @enderror" id="inputIp_Config_ID" name="ip_config_id" value="{{ $Ict->ip_config_id }}">
                            @error('ip_config_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="end_user" class="col-md-4 col-form-label text-md-end text-start">End User</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('end_user') is-invalid @enderror" id="inputEnd_User" name="end_user" value="{{ $Ict->end_user }}">
                            @error('end_user')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="property_no" class="col-md-4 col-form-label text-md-end text-start">Property #</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('property_no') is-invalid @enderror" id="inputProperty_No" name="property_no" value="{{ $Ict->property_no }}">
                            @error('property_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ict_code" class="col-md-4 col-form-label text-md-end text-start">Ict Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('ict_code') is-invalid @enderror" id="inputIct_Code" name="ict_code" value="{{ $Ict->ict_code }}">
                            @error('ict_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="brand" class="col-md-4 col-form-label text-md-end text-start">Brand</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('brand') is-invalid @enderror" id="inputBrand" name="brand" value="{{ $Ict->brand }}">
                            @error('brand')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="model" class="col-md-4 col-form-label text-md-end text-start">Model</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('model') is-invalid @enderror" id="inputModel" name="model" value="{{ $Ict->model }}">
                            @error('model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="serial_no" class="col-md-4 col-form-label text-md-end text-start">Serial #</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('serial_no') is-invalid @enderror" id="inputSerial_No" name="serial_no" value="{{ $Ict->serial_no }}">
                            @error('serial_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start">Address</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress" name="address" value="{{ $Ict->address }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="floor" class="col-md-4 col-form-label text-md-end text-start">Floor</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('floor') is-invalid @enderror" id="inputFloor" name="floor" value="{{ $Ict->floor }}">
                            @error('floor')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="manufactured_date" class="col-md-4 col-form-label text-md-end text-start">Manufactured Date</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('manufactured_date') is-invalid @enderror" id="inputManufactured_ID" name="manufactured_date" value="{{ $Ict->manufactured_date }}">
                            @error('manufactured_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                   
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    