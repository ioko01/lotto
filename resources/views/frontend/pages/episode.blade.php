@include('includes.head')
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border border-warning">
                    <div class="card-body">
                        <div style="gap: 10px;white-space: nowrap;" id="head_digits" class="d-flex">
                            <button class="btn btn-outline-warning active">2 ตัว</button>
                            <button class="btn btn-outline-warning">3 ตัว</button>
                        </div>
                        <div id="show_digits" class="py-3"></div>
                        <div id="body_digits" style="gap: 10px;white-space: nowrap;" class="d-flex">
                            <input onkeyup="filter_numbers(this)" id="input_digits" class="form-control" type="text"
                                placeholder="ใส่เลข">
                            <button type="button" class="btn btn-success">กลับเลข</button>
                            <input id="top_digits" class="form-control" type="number" placeholder="บน">
                            <input id="bottom_digits" class="form-control" type="number" placeholder="ล่าง">
                            <button onclick="add_orders(this)" type="button" class="btn btn-primary">เพิ่มบิล</button>
                        </div>
                        <div id="footer_digits">

                        </div>
                        <div id="submit_digits" class="py-3">
                            <button type="button" class="btn btn-success" onclick="confirm_orders()">ยืนยัน</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
