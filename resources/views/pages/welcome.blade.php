@extends('layouts.main')

@section('title',' My Acedamics | Welcome')

@section('content')
<div class="container">
  <h3 class="center" >Create New Academy</h3>
  <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Placeholder" id="username" type="text" class="validate">
            <label for="username">User Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Academy Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s6">
            <input id="phone" type="tel" class="validate">
            <label for="phone">Phone</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="description" class="materialize-textarea" id="description"></textarea>
                <label for="description">Description</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="latitude" id="latitude">
                <label for="latitude">Latitude</label>
            </div>
            <div class="input-field col s6">
                <input type="text" name="longitude" id="longitude">
                <label for="longitude">Longitude</label>
            </div>
        </div>
        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>Upload Images</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload one or more files">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                    <!-- <div class="chip">Acedamy<i class="material-icons">close</i></div> -->
                <input type="text" name="tags" id="tags">
                <label for="tags">Tags</label>
            </div>
        </div>
        <!-- images, tags(Multiple) -->
      <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
      </button>
      </form>
  </div>
</div>
@endsection