@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->


      <!-- Jumbotron -->
      <div class="well well-lg">
        <h1>{{$project->name}}</h1>
        <p class="lead">{{$project->description}}</p>
        <!--  <p><a class="btn btn-md btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row" style="background:white; margin:2px;">
     <a href="/projects/create" class="pull-right btn btn-default">Add project</a>
<div class="row">
     <h2>Comments</h2>

        <form class="form-horizontal" id="rootwizard" class="tabbable tabs-left" action="{{route('comments.store')}}"
     onsubmit="return checkForm(this);" accept-charset="utf-8" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
     <input type="hidden" name="commentable_type" value="Brainy\Project" />
      <input type="hidden" name="commentable_id" value="{{$project->id}}"/>


      <div class="form-group">
        <label for="comment-content" class="control-label col-sm-4 col-md-4 col-lg-4" >comments<span class="required">*</span></label>
        <div class="col-sm-5 col-md-5 col-lg-5">
          <input type="text" class="form-control" id="comment-content"  required name="body"
          placeholder="Enter body" spellcheck="false"  >
        </div>
      </div>

      <div class="form-group">
        <label for="url-content" class="control-label col-sm-4 col-md-4 col-lg-4" >Proof url/photo <span class="required">*</span></label>
        <div class="col-sm-5 col-md-5 col-lg-5">
          <input type="text" class="form-control" id="url-content"  required name="url"
          placeholder="Enter url" spellcheck="false"  >
        </div>
      </div>

      <div class="form-group">
      <label for="company-content" class="control-label col-sm-4 col-md-4 col-lg-4" ><span class="required">*</span></label>
       <div class="col-sm-5 col-md-5 col-lg-5">

         <input type="submit" class="btn btn-primary"  value="submit" />

         </div>
</div>
</div>

   @foreach($project->comments as $comment)
        <div class="col-md-4">
          <p class="text-danger">{{$comment->user->email}}</p>
          <h2>{{$comment->body}}!</h2>
          <p class="text-danger">{{$comment->url}}</p>
          <p><a class="btn btn-primary" href="#" role="button"><a href="/projects/{{$project->id}}">View project</a></p>
        </div>
        @endforeach
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
              <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
              <li><a href="/projects/create">Add project</a></li>
              <li><a href="/projects">List of projects</a></li>
              <li><a href="/projects/create">Create new project</a></li>
              <br />
              @if($project->user_id == Auth::user()->id)
              <li><a href="#"
              			onclick="
              			var result = confirm('Are you sure yo want to delete this project?');
              			if (result){
              					event.preventDefault();
              					document.getElementById('delete-form').submit();
              					}"
				>
				Delete
				</a>
				<form id="delete-form" action="{{route('projects.destroy', [$project->id])}}"
				method="post" style="display: none;">
				<input type="hidden" name="_method" value="delete"/>
				{{csrf_field()}}
				</form>
				</li>
        @endif

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
