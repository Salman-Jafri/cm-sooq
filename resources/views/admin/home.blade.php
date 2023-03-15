@extends('admin.template.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card text-center border-info mb-3" >
            <div class="card-header">(projcet name)</div>
            <div class="card-body text-info">
                <h5 class="card-title text-info">welcome to (project name) Admin</h5>
                <h6 class=""> <i class="fa fa-arrow-up"></i> You can navigate the system by using the navigation bar <i class="fa fa-arrow-up text-red"></i></h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-success"><small><a href="#" class="text-danger">Log Out</a></small></h5>
            </div>
        </div>
    </div>
</div>

@endsection

