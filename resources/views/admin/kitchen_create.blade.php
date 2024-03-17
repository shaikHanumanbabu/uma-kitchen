@extends('layouts.admin_layout', ['page' => $page])



@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <a href="#" class="alert-link">{{$error}}</a><br>
            @endforeach
        </div>
    @endif
<form method="POST" action="{{ isset($kitchen->id) ? route('kitchen.update', ['kitchen' => $kitchen->id]) : route('kitchen.store') }}">

    @if (isset($kitchen->id))
        @method('PATCH')        
    @endif
    @csrf
    <div class="form-group">
        <label for="exampleFormControlSelect1">Select  Category</label>
        <select name="type" class="form-control" id="type">
            <option value="1" {{ isset($kitchen) && $kitchen->type == 1 ? 'selected' : ''}}>Break Fast</option>
            <option value="2" {{ isset($kitchen) && $kitchen->type == 2 ? 'selected' : ''}}>Lunch</option>
            <option value="3" {{ isset($kitchen) && $kitchen->type == 3 ? 'selected' : ''}}>Dinner</option>
        </select>
        </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input name="name" value="{{ isset($kitchen) && $kitchen->name ?? '' }}" type="text" class="form-control" id="name">
    </div>
    <div class="form-group form-check">
      <input name="status" type="checkbox" class="form-check-input" value="1" {{ isset($kitchen) && $kitchen->status ? 'checked' : '' }}  id="status">
      <label class="form-check-label" for="exampleCheck1">Active</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
    
