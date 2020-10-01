<x-modal_view :modal-id="'sallers_view_'.$saller->id" edit-route="sallers.edit" :model_id="$saller">

@slot('title')
Representante #{{ $saller->id }}
@endslot

<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Nome: </strong></div>
	<div class="col-md-4">{{ $saller->name }}</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Login: </strong></div>
	<div class="col-md-4">{{ $saller->login }}</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Email: </strong></div>
	<div class="col-md-4">{{ $saller->email }}</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Meta: </strong></div>
	<div class="col-md-4">@currency($saller->goal)</div>
</div>

</x-modal_view>