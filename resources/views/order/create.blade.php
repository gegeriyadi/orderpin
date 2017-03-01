@extends('layouts.app')
@section('content')

<!-- general form elements -->
<div class="col-md-6 col-md-offset-3">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Form Order</h3>
</div>
<!-- /.box-header -->

<!-- form start -->
<form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}

{!! view('order.fields') !!}

</form>
</div>
<!-- /.box -->
</div>

@endsection
