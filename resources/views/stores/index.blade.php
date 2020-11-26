
@extends('layouts.master')
@section('container')
<div class="container">
    <h1>COMPANY C STORES BRANCH</h1>

    
    <div class="row"
    {{-- <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Store location</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
            <tr>
                 <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->store_location }}</td>
            
               
            </tr> --}}
                
            @endforeach
        {{-- </tbody>
    </table> --}}
</div>
    
@endsection