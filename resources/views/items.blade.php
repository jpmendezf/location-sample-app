@php
$i =1;
@endphp
@foreach($items->menu->menu_items as $item)
<div class="col-md-4 card-margin">
	<div class="card">
	  <img class="card-img-top" src="http://lorempixel.com/400/200/food/{{ $i }}" alt="Card image cap">
	  @php
	  if($i<10)
	  	$i++;
	  else
	  	$i=1;
	  @endphp
	  <div class="card-body">
	    <h5 class="card-title">{{$item->menu_item_name}}</h5>
	    <span>{{$item->category_name}}</span>
	    <span class="pull-right"><strong>&#x20b9; {{$item->price}}</strong></span>
	    <div class="col-md-12 pull-right" style="padding: 0px;">
	    	<div class="row no-gutters cart-row">
	    		<div class="col-md-1 offset-md-6">
		    		<span><a href="javascript:void(0)" class="cart-minus" data-product-id="{{ $item->menu_item_id }}"><i class="fa fa-minus" aria-hidden="true"></i></a></span>
		    	</div>
		    	
		    	<div class="col-md-3">
		    		<input type="text" class="form-control card-text cart-total" name="cart-total" id="cart_{{ $item->menu_item_id }}" data-current-inventory={{ $item->current_inventory }}>
		    	</div>

		    	<div class="col-md-1">
		    		<span class="pull-right"><a href="javascript:void(0)" class="cart-plus" data-product-id="{{ $item->menu_item_id }}"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
		    	</div>
	    	</div>
	    	
	    </div>
	  </div> 
	</div>
</div>
@endforeach