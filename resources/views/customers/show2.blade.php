@extends('layouts.admin')
@section('page-header','檢視顧客')

@section('page-content')

@if (isset($customer))
{{ $customer->id }}
{{ $customer->catno }}
{{ $customer->account }}
{{ $customer->name }}
{{ $customer->tel }}
{{ $customer->mobile }}
{{ $customer->email }}
{{ $customer->address }}
{{ $customer->note }}
@endif

@endsection
