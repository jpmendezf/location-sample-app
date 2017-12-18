
@foreach($items->menu->menu_items as $item)
<div class="col-md-4 card-margin">
	<div class="card">
	  <img class="card-img-top" src="https://d39in59pr3ya79.cloudfront.net/images/app/drawable-xxxhdpi/chatkor.jpg" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">{{$item->menu_item_name}}</h5>
	    <span>{{$item->category_name}}</span>
	    <span class="pull-right"><strong>&#x20b9; {{$item->price}}</strong></span>
	  </div> 
	</div>
</div>
@endforeach