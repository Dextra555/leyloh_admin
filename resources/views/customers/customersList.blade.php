@if(session()->has('message'))
    @php
        echo '<script>setTimeout(function () {showNotificationMessage("top","right","'.session()->get('message').'","success");}, 1000);</script>';
    @endphp
@endif

@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'locations'
])

@section('content')

@error('state')
    @php
        echo '<script>setTimeout(function () {showNotificationMessage("top","right","'.$message.'","danger");}, 1000);</script>';
    @endphp
@enderror

@error('city')
    @php
        echo '<script>setTimeout(function () {showNotificationMessage("top","right","'.$message.'","danger");}, 1000);</script>';
    @endphp
@enderror

@error('area')
    @php
        echo '<script>setTimeout(function () {showNotificationMessage("top","right","'.$message.'","danger");}, 1000);</script>';
    @endphp
@enderror

    <div class="content">
         
        <div class="row">
            <div class="col-md-6">
                <form class="col-md-12" action="{{route('location.state.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                      
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">State</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="state" class="form-control" placeholder="State Name" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" style="margin:0px;">Add</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row pad10">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">SNO</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <form class="col-md-12" action="{{route('location.city.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                      
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">City</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <select name="state" class="form-control" placeholder="Select State">
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="City Name" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" style="margin:0px;">Add</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row pad10">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">SNO</th>
                                            <th scope="col">State</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-md-12">
                <form class="col-md-12" action="{{route('location.area.add')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                      
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Area</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-5">
                                    <div class="form-group">
                                      
                                    </div>
                                </div>
                                <div class="col-md-4">  
                                    <div class="form-group">
                                        <input type="text" name="area" class="form-control" placeholder="Area Name" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" style="margin:0px;">Add</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row pad10">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">SNO</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Area</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
    <script>
            function showNotificationMessage(from, align, message, status){
                color = status;

                    $.notify({
                    icon: "nc-icon nc-bell-55",
                    message: message

                    }, {
                    type: color,
                    timer: 8000,
                    placement: {
                        from: from,
                        align: align
                    }
                    });
            }
        
    </script>
@endpush