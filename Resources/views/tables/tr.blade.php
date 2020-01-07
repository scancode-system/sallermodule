<tr>
	<td class="align-middle">{{ $saller->name }}</td>
	<td class="align-middle">{{ $saller->email }}</td>
	<td class="align-middle">@currency($saller->goal)</td>
	<td class="text-right align-middle">
		<div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#sallers_view_{{ $saller->id }}"><i class="fa fa-eye"></i></button>
			<a href="{{ route('sallers.edit', $saller) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#sallers_destroy_{{ $saller->id }}"><i class="fa fa-trash-o"></i></button>
		</div>
	</td>
	@include('saller::modals.modal_view_sallers')
	@modal_destroy(['route_destroy' => 'sallers.destroy', 'model' => $saller->id, 'modal_id' => 'sallers_destroy_'.$saller->id])
</tr>