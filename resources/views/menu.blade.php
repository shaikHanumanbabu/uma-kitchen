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
      <div role="tabpanel" class="tab-pane fade" id="Breakfast">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="figure effect-steve"> <img src="img/menu-3.jpg" class="img-responsive" />
            <div class="figcaption">
              <h2 style="color: #014422;">Breakfast</h2>
              <!-- <p><a href="#">VIEW ALL</a></p> -->
            </div>
          </div>
        </div>
        <!--menu list-->
        <div class="col-sm-6 col-md-6 col-lg-8">
          <div class="menu-list-2"> <h3>IDLY</h3></div>
          <div class="menu-list-2"> <h3>VADA</h3></div>
          <div class="menu-list-2"> <h3>POHA</h3></div>
          <div class="menu-list-2"> <h3>UPMA</h3></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div role="tabpanel" class="tab-pane fade  in active" id="Lunch">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="figure effect-steve"> <img src="img/menu-2.jpg" class="img-responsive" />
            <div class="figcaption">
              <h2 style="color: #014422;">Lunch</h2>
              <!-- <p><a href="#">VIEW ALL</a></p> -->
            </div>
          </div>
        </div>
        <!--menu list-->
        <div class="col-sm-6 col-md-6 col-lg-8 slider-res">
          <div class="menu-list-2"> <h3>Dal</h3></div>
          <div class="menu-list-2"> <h3>Rotis</h3></div>
          <div class="menu-list-2"> <h3>Salad</h3></div>
          <div class="menu-list-2"> <h3>Subzi Variety 1</h3></div>
          <div class="menu-list-2"> <h3>Subzi Variety 2</h3></div>
          <div class="menu-list-2"> <h3>Millets / Brown Rice</h3></div>
          <div class="menu-list-2"> <h3>Variety Rice</h3></div>
          <div class="menu-list-2"> <h3>Curd</h3></div>
          <div class="menu-list-2"> <h3>Rasam</h3></div>
          <div class="menu-list-2"> <h3>Sambar / Pulusu</h3></div>
          <div class="menu-list-2"> <h3>Pickle / Chutney</h3></div>
          <div class="menu-list-2"> <h3>Papad</h3></div>
          <div class="menu-list-2"> <h3>Dessert (Pudding, Fruit, etc...)</h3></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="Dinner">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="figure effect-steve"> <img src="img/menu-1.jpg" class="img-responsive" />
            <div class="figcaption">
              <h2 style="color: #014422;">Dinner</h2>
              <!-- <p><a href="#">VIEW ALL</a></p> -->
            </div>
          </div>
        </div>
        <!--menu list-->
        <div class="col-sm-6 col-md-6 col-lg-8">
          <div class="menu-list-2"> <h3>Dal</h3></div>
          <div class="menu-list-2"> <h3>Rotis</h3></div>
          <div class="menu-list-2"> <h3>Salad</h3></div>
          <div class="menu-list-2"> <h3>Subzi Variety 1</h3></div>
          <div class="menu-list-2"> <h3>Subzi Variety 2</h3></div>
          <div class="menu-list-2"> <h3>Millets / Brown Rice</h3></div>
          <div class="menu-list-2"> <h3>Variety Rice</h3></div>
          <div class="menu-list-2"> <h3>Curd</h3></div>
          <div class="menu-list-2"> <h3>Rasam</h3></div>
          <div class="menu-list-2"> <h3>Sambar / Pulusu</h3></div>
          <div class="menu-list-2"> <h3>Pickle / Chutney</h3></div>
          <div class="menu-list-2"> <h3>Papad</h3></div>
          <div class="menu-list-2"> <h3>Dessert (Pudding, Fruit, etc...)</h3></div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

</div>
    
@endsection