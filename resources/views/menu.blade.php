@extends('layouts.app')

@section('content')

<div class="story-head text-center">
  <div class="story-head-black">
    <div class="container">
      <h2>We love to see you smile</h2>
      <p>Make People Happy, Have Some Fun and Be Number 1!</p>
      <span><a href="{{ route('home') }}">HOME</a> > <b class="content-subhead">OUR MENU</b></span> 
    </div>
  </div>
</div>

<!--TOP-->
<div class="container padd-70">
  <div class="col-md-12 text-center index-tab"> 
      
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" style="margin:40px 0;">
      <li role="presentation"><a class="sld-btn-bor" href="#Breakfast" aria-controls="Breakfast" role="tab" data-toggle="tab" style="color:#014422;">Breakfast</a></li>
      <li role="presentation" class="active"><a class="sld-btn-bor" href="#Lunch" aria-controls="Lunch" role="tab" data-toggle="tab" style="color:#014422;">Lunch</a></li>
      <li role="presentation"><a class="sld-btn-bor" href="#Dinner" aria-controls="Dinner" role="tab" data-toggle="tab" style="color:#014422;">Dinner</a></li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      @include('partials._menu_items', [ 'title' => 'Break Fast', 'id' => 'Breakfast' ,'items' => $break_fast, 'is_active' => false ])
      @include('partials._menu_items', [ 'title' => 'Lunch', 'id' => 'Lunch' , 'items' => $lunch, 'is_active' => true ])
      @include('partials._menu_items', [ 'title' => 'Dinner','id' => 'Dinner' , 'items' => $dinner, 'is_active' => false ])
    </div>
  </div>
</div>

</div>
    
@endsection