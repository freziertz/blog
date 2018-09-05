@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

     

      <!-- Example row of columns -->
      <div class="row col-lg-12 col-md-12 col-sm-12" style="background:white; margin:2px;">
      
         <form class="form-horizontal" id="rootwizard" class="tabbable tabs-left" action="{{route('companies.update',[$company->id])}}" 
  onsubmit="return checkForm(this);" accept-charset="utf-8" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  
 <input type="hidden"  name="_method" value="put" >
    <div class="form-group">
      <label for="company-name" class="control-label col-sm-4 col-md-4 col-lg-4" >Name<span class="required">*</span></label>
      <div class="col-sm-5 col-md-5 col-lg-5">
        <input type="text" class="form-control" id="company-name"  required name="name" 
        placeholder="Enter name" spellcheck="false" value="{{$company->name}}" >
      </div>
    </div>
			

    <div class="form-group">
      <label for="company-content" class="control-label col-sm-4 col-md-4 col-lg-4" >Description<span class="required">*</span></label>
      <div class="col-sm-5 col-md-5 col-lg-5">
        <input type="text" class="form-control" id="company-content"  required name="description" 
        placeholder="Enter Description" spellcheck="false" value="{{$company->description}}" >
      </div>
    </div>
    
     <div class="form-group">
     <label for="company-content" class="control-label col-sm-4 col-md-4 col-lg-4" ><span class="required">*</span></label>
      <div class="col-sm-5 col-md-5 col-lg-5">
     
        <input type="submit" class="btn btn-primary"  value="submit" />
        
        </div>
       
     
    </div>
    
    

  
  </form>
      
      </div>

      <!-- Site footer -->
      </div>
      
      <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
        <!--  <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
         
          <div class="sidebar-module">
            <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}">Viewe company</a></li>
            
              <li><a href="/companies">All companies</a></li>
            </ol>
          </div>
          
          <!--  <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">Edit</a></li>
              <li><a href="#">Delete</a></li>
              <li><a href="#">Add new member</a></li>
            </ol>
          </div> -->
        </div>

    </div>
    @endsection