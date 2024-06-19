
@extends('layouts.app2')
    
@section('content')

<style>
* {
  box-sizing: border-box;
}

body {
  background: #fff;
  min-width:320px;
}

h2 {
  text-align: center;
  margin: 50px 0;
  color: #386c3d;
  font-size: 47px;
  font-family: 'Quicksand', sans-serif;
  @media(max-width:540px){
      font-size: 28px;
    margin: 30px 0;
  }
}

form {
  padding: 0 10%;
  section {
    width: calc(50% - 40px);
    padding: 20px;
    background: #8ed294;
    margin: 20px;
    border-radius: 5px;
    &.left {
      float: left;
    }
    &.right {
      float: right;
    }
    .input-container {
      label {
        display: block;
        margin-bottom: 4px;
        color: white;
        font-size: 16px;
        text-shadow: 0px 2px 1px #65ad6b;
        font-family: 'Quicksand', sans-serif;
      }
      input,
      textarea {
        width: 100%;
        padding: 5px 10px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background: #d7ffdb;
        box-shadow: 0 2px 0px #77bd7d;
        font-family: 'Quicksand', sans-serif;
        font-size: 16px;
        color: #757575;
        &:focus {
          outline: none;
          background: white;
        }
      }
      textarea {
        height: 122px;
        padding: 15px 10px;
        resize: none;
      }
      padding:10px;
    }
  }
  .send-container {
    float: right;
    width: 100%;
    text-align: right;
    margin-right: 20px;
    input {
      background: #77bd7d;
      border: none;
      color: white;
      padding: 15px 30px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      &:hover {
        background: #8ed294;
      }
    }
  }
  &:after {
    content: "";
    display: block;
    clear: both;
  }
  @media(max-width:992px) {
    padding: 0 5%;
  }
  @media(max-width:768px) {
    margin-bottom:50px;
    section {
      width: 100%;
      margin: 0;
      &.left {
        margin-bottom: -30px;
      }
    }
    .send-container {
      margin-right: 0;
      margin-top:15px;
      input{
        width:100%;
      }
    }
  }
}
</style>
  <div class="container">
<div class="form-container">
                <div class="wrapper">
  <h4 class="card-header">Add New Ict Devices</h4>

  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('Ict.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
        <form action="{{ route('Ict.store') }}" method="POST">
        @csrf
  

        <!-- Department ID -->
        <section class="left">
        <div class="input-container">
        <input 
                type="text" 
                name="department_id" 
                class="form-control @error('department_id') is-invalid @enderror" 
                id="inputDepartment_ID" 
                placeholder="Department ID">
            @error('department_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Ict Category -->
        <div class="input-container">
        <input 
                type="text" 
                name="ict_category_id" 
                class="form-control @error('ict_category_id ') is-invalid @enderror" 
                id="inputIct_category_id" 
                placeholder="Ict Category ID">
            @error('ict_categtory_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Status ID -->
        <div class="input-container">
            <input
                type="text"
                name="status_id" 
                class="form-control @error('status_id ') is-invalid @enderror"  
                id="inputStatus_id" 
                placeholder="Status ID">
            @error('status_id')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Ip Config ID -->
        <div class="input-container">
            <input
                type="text"
                name="ip_config_id" 
                class="form-control @error('ip_config_id') is-invalid @enderror"  
                id="inputIp_config_id" 
                placeholder="Ip Config ID">
            @error('ip_config_id ')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- End User -->
        <div class="input-container">
            <input
                type="text"
                name="end_user" 
                class="form-control @error('end_user') is-invalid @enderror"  
                id="inputEnd_user" 
                placeholder="End User">
            @error('end_user')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>



        <!-- Property No. -->
        <div class="input-container">
            <input
                type="text"
                name="property_no" 
                class="form-control @error('property_no') is-invalid @enderror"  
                id="inputProperty_no" 
                placeholder="Property No.">
            @error('property_no')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Ict Code -->
        <div class="input-container">
            <input
                type="text"
                name="ict_code" 
                class="form-control @error('ict_code') is-invalid @enderror"  
                id="inputIct_code" 
                placeholder="Ict Code">
            @error('ict_code')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        </section>

        <!-- Brand -->
        <section class="right">
        <div class="input-container">
            <input
                type="text"
                name="brand" 
                class="form-control @error('brand') is-invalid @enderror"  
                id="inputBrand" 
                placeholder="Brand">
            @error('brand')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Model -->
        <div class="input-container">
            <input
                type="text"
                name="model" 
                class="form-control @error('model') is-invalid @enderror"  
                id="inputModel" 
                placeholder="Model">
            @error('model')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Serial No. -->
        <div class="input-container">
            <input
                type="text"
                name="serial_no" 
                class="form-control @error('serial_no') is-invalid @enderror"  
                id="inputSerial_no" 
                placeholder="Serial No">
            @error('serial_no')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


         <!--address-->
         <div class="input-container">
            <input
                type="text"
                name="address" 
                class="form-control @error('address') is-invalid @enderror"  
                id="inputAddress" 
                placeholder="Address">
            @error('address')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


         <!-- floor-->
         <div class="input-container">
            <input
                type="text"
                name="floor" 
                class="form-control @error('floor') is-invalid @enderror"  
                id="inputFloor" 
                placeholder="Floor">
            @error('floor')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <!-- Manufactured Date -->
        <div class="input-container">
            <input
                type="text"
                name="manufactured_date" 
                class="form-control @error('manufactured_date') is-invalid @enderror"  
                id="inputManufactured_date" 
                placeholder="Manufactured Date">
            @error('manufactured_date')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        
        
        <br>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>
        </section>
  
  </div>
</div>
</section>
@endsection