@extends('dashboard::layouts.master')

@section('content')

<div class="card">
	@header_search_add(['search' => $search, 'route_search' => 'sallers.index', 'route_add' => 'sallers.create'])
	<div class="card-body">
		@alert_success()
		<table class="table table-responsive-sm bg-white table-hover border">
			@include('saller::tables.thead')
			<tbody>
				@each('saller::tables.tr', $sallers, 'saller')
			</tbody>
		</table>
		{{ $sallers->links() }}
	</div>
</div>

@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	Representantes
</li>
@endsection
