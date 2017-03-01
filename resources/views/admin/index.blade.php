@extends('layouts.app')
@section('content')

<div class="col-md-6 mb20">
<a href="/order">
<button type="button" class="btn btn-block btn-success btn-lg">
<span class="glyphicon glyphicon-shopping-cart"></span>Buat Order Baru</button>
</a>
</div>
<div class="col-md-6 mb20">
<button type="button" class="btn btn-block btn-primary btn-lg">
<span class="glyphicon glyphicon-check"></span> Konfirmasi Pembayaran</button>
</div>

<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Data Order Anda</h3>
<div class="box-tools">
<div class="input-group input-group-sm" style="width: 150px;">
<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
<div class="input-group-btn">
<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
</div>
</div>
</div>
</div>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
<table class="table table-hover">
<tbody><tr>
<th>Order ID</th>
<th>Pemesan</th>
<th>Tanggal Order</th>
<th>Jenis Pin</th>
<th>Size</th>
<th>Jumlah</th>
<th>Status</th>
</tr>
@foreach($orders as $order)
<tr>
<td>{{ $order->id }}</td>
<td>{{ $order->user->name }}</td>
<td>{{ $order->created_at }}</td>
<td>{{ $order->jenis_pin }}</td>
<td>{{ $order->size_pin }}</td>
<td>{{ $order->jumlah_pin }}</td>
<td><span class="label label-success">Barang sudah diterima</span></td>
</tr>
@endforeach
</tbody>
</table>
@if (is_null($orders))
<h1>Holaa</h1>
@endif
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- Default box -->
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
<h3 class="box-title">Profile</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<p><span class="glyphicon glyphicon-user"></span>Teguh Riyadi</p>
<p><span class="glyphicon glyphicon-envelope"></span>gegeriyadi81@gmail.com</p>
<p><span class="glyphicon glyphicon-earphone"></span>082311237474</p>
<p><span class="glyphicon glyphicon-home"></span>Vila Tangerang Elok E10/48, Kelurahan Kutajaya, Kecamatan Pasarkemis.
<br>Tangerang - Banten.</p>
<br>
<a href="#">---> edit profile</a>
</div>
<!-- /.box-body -->
</div>
</div>
<!-- /.box -->
<!-- /.box -->
@endsection