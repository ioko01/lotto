@include('includes.head')
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border border-warning">
                    <div class="card-header">
                        <button class="btn btn-outline-warning active">2 ตัว</button>
                        <button class="btn btn-outline-warning">3 ตัว</button>
                        <div id="show_digits"></div>
                    </div>
                    <div style="gap: 10px;white-space: nowrap;" class="card-body d-flex">
                        <input onkeyup="filter_numbers(this)" id="input_digits" class="form-control" type="text"
                            placeholder="ใส่เลข">
                        <button type="button" class="btn btn-success">กลับเลข</button>
                        <input id="top_digits" class="form-control" type="number" placeholder="บน">
                        <input id="bottom_digits" class="form-control" type="number" placeholder="ล่าง">
                        <button onclick="add_orders(this)" type="button" class="btn btn-primary">เพิ่มบิล</button>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
