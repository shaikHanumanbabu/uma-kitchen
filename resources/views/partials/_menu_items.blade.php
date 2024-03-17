<div role="tabpanel" class="tab-pane fade {{ $is_active ? 'in active' : '' }}" id="{{ $id }}">
    <div class="col-sm-6 col-md-6 col-lg-4">

      <div class="figure effect-steve"> 
        @if ($id == 'Breakfast')
            <img src="img/menu-3.jpg" class="img-responsive" />
        @elseif ($id == "Lunch")
            <img src="img/menu-2.jpg" class="img-responsive" />
        @else
            <img src="img/menu-1.jpg" class="img-responsive" />
        @endif
        <div class="figcaption">
          <h2 style="color: #014422;">{{ $title }}</h2>
          <!-- <p><a href="#">VIEW ALL</a></p> -->
        </div>
      </div>
    </div>
    <!--menu list-->
    <div class="col-sm-6 col-md-6 col-lg-8">
      @forelse ($items as $item)
        <div class="menu-list-2"> <h3>{{ $item->name }}</h3></div>
      @empty
        <div class="menu-list-2"> <h3>No items</h3></div>
          
      @endforelse
    </div>
    <div class="clearfix"></div>
  </div>