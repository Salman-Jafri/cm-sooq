@extends('admin.template.app')
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
    <div class="page-title-box d-flex align-items-center justify-content-between">
      <h4 class="mb-0 font-size-18">Dashboard</h4>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Registered Users</p>
                        <h4 class="mb-0"></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-user font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Pending Users</p>
                        <h4 class="mb-0"></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-danger align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-user font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Total Ads</p>
                        <h4 class="mb-0"></h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <h3>Search Metrics</h3>
    </div>
    <div class="col-md-6">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Manual Search</p>
                        <h4 class="mb-0"></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-copy-alt font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Make Search</p>
                        <h4 class="mb-0"></h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-window font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <h3>Today Visits</h3>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Visits</p>
                        <h4 class="mb-0"></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-copy-alt font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Desktop</p>
                        <h4 class="mb-0"></h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-window font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Mobile</p>
                        <h4 class="mb-0">
                            <span style="display:inline-block;" class="float-right text-info"> 
                                <i class="fab fa-android"></i>  
                            </span>
                            <span style="display:inline-block;" class="float-right pl-1 pr-1 text-danger"> | </span>
                            <span style="display:inline-block;" class="float-right text-primary"> 
                                <i class="fab fa-apple"></i>
                            </span>
                        </h4>
                    </div>
                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-mobile font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h3>All Visits</h3>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Visits</p>
                        <h4 class="mb-0"><a href="#" data-toggle="modal" data-target="#graph-details-modal" class="text-danger"><i class="fas fa-chart-bar"></i></a></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-copy-alt font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Desktop</p>
                        <h4 class="mb-0"><a href="#" data-toggle="modal" data-target="#desktop-visit-modal" class="text-danger"><i class="fas fa-chart-bar"></i></a></h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-window font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Mobile</p>
                        <h4 class="mb-0">
                            <a href="#" data-toggle="modal" data-target="#mobile-visit-modal" class="text-danger"><i class="fas fa-chart-bar"></i></a>
                            <span style="display:inline-block;" class="float-right text-info"> 
                                <i class="fab fa-android"></i> 
                            </span>
                            <span style="display:inline-block;" class="float-right pl-1 pr-1 text-danger"> | </span>
                            <span style="display:inline-block;" class="float-right text-primary"> 
                                <i class="fab fa-apple"></i>
                            </span>
                        </h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-mobile font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <h3>Today Views</h3>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Views</p>
                        <h4 class="mb-0"></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-copy-alt font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Desktop</p>
                        <h4 class="mb-0"></h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-window font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Mobile</p>
                        <h4 class="mb-0">
                            <span style="display:inline-block;" class="float-right text-info"> 
                                <i class="fab fa-android"></i> 
                            </span>
                            <span style="display:inline-block;" class="float-right pl-1 pr-1 text-danger"> | </span>
                            <span style="display:inline-block;" class="float-right text-primary"> 
                                <i class="fab fa-apple"></i>
                            </span>
                        </h4>

                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-mobile font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h3>All Views</h3>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Views</p>
                        <h4 class="mb-0"><a href="#" data-toggle="modal" data-target="#allviews-visit-modal" class="text-danger"><i class="fas fa-chart-bar"></i></a></h4>
                    </div>
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                        <span class="avatar-title">
                            <i class="bx bx-copy-alt font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Desktop</p>
                        <h4 class="mb-0"><a href="#" data-toggle="modal" data-target="#allviews-desktop-visit-modal" class="text-danger"><i class="fas fa-chart-bar"></i></a></h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-window font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">Mobile</p>
                        <h4 class="mb-0">
                           <a href="#" data-toggle="modal" data-target="#allviews-mobile-visit-modal" class="text-danger"><i class="fas fa-chart-bar"></i></a>
                            <span style="display:inline-block;" class="float-right text-info"> 
                                <i class="fab fa-android"></i>  
                            </span>
                            <span style="display:inline-block;" class="float-right pl-1 pr-1 text-danger"> | </span>
                            <span style="display:inline-block;" class="float-right text-primary"> 
                                <i class="fab fa-apple"></i>
                            </span>
                        </h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                        <span class="avatar-title rounded-circle bg-primary">
                            <i class="bx bx-mobile font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-6">
        <div class="row">
            <div class="col-12">
                <h3>User Clicked Today</h3>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt">
                            <thead>
                                <tr>
                                    <th>All Actions</th>
                                    <th>WhatsApp</th>
                                    <th>Call</th>
                                    <th>Follow</th>
                                    <th>Watch</th>
                                    <th>All Shares</th>
                                    <th>Share Copy</th>
                                    <th>Share Whatsapp</th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-12">
                <h3>User Clicked All</h3>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt">
                            <thead>
                                <tr>
                                    <th>All Actions</th>
                                    <th>WhatsApp</th>
                                    <th>Call</th>
                                    <th>Follow</th>
                                    <th>Watch</th>
                                    <th>All Shares</th>
                                    <th>Share Copy</th>
                                    <th>Share Whatsapp</th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-6">
        <div class="row">
            <div class="col-12">
                <h3>Most Visited Links Today</h3>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table dt">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Link</th>
                                    <th>Direct</th>
                                    <th>Referred</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="col-12">
            <h3>Most Visited Links</h3>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table dt">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Link</th>
                                <th>Direct</th>
                                <th>Referred</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row d-none">
    <div class="col-12">
        <h3>Cars Visited Today</h3>
    </div>
    <div class="col-12">
        <div class="row">
            <?php //foreach($cars_visited_today as $cvt):?>
                <?php
                    // $make_id = get_column('cars','uid',$cvt->car_id,'make_id','');
                    // $model_id= get_column('cars','uid',$cvt->car_id,'model_id','');
                    // $make  = get_column('cars_make','uid',$make_id,'make','');
                    // $model = get_column('cars_model','uid',$model_id,'model','');
                    // $year  = get_column('cars','uid',$cvt->car_id,'year','');
                    // $title = $make.'&nbsp;'.$model.'&nbsp;'.$year;
                    // $link  = base_url('cars/details/'.$cvt->car_id);
                    // $image_file =null;
                    // $image = system_files().'no-car-image-placeholder.png';
                    // $this->db->where('car_id',$cvt->car_id);
                    // $this->db->order_by('is_main','DESC');
                    // $this->db->limit(1);
                    // $q =$this->db->get('car_files');
                    // if($q->num_rows()==1)
                    // {
                    //     $r = $q->row();
                    //     $image_file = $r->file_up_name;
                    // }
                    // if(is_file('./car_uploads/'.$image_file))
                    // {
                    //     $image = base_url('car_uploads/'.$image_file);
                    // }
                ?>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-img position-relative">
                                <img src="" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="mt-4 text-center">
                                <h5 class="mb-3 text-truncate">
                                    <a href="" target="_blank" class="text-dark"></a>
                                </h5>
                                <h5 class="my-0"><span class="text-muted mr-2"><i class="fas fa-eye"></i> <b></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php //endforeach;?>
        </div>
    </div>
</div>

<hr> 

<div class="row d-none">
    <div class="col-12">
        <h3>Cars Visited All</h3>
    </div>
    <div class="col-12">
        <div class="row">
            <?php //foreach($cars_visited_all as $cvt):?>
                <?php
                    // $make_id = get_column('cars','uid',$cvt->car_id,'make_id','');
                    // $model_id= get_column('cars','uid',$cvt->car_id,'model_id','');
                    // $make  = get_column('cars_make','uid',$make_id,'make','');
                    // $model = get_column('cars_model','uid',$model_id,'model','');
                    // $year  = get_column('cars','uid',$cvt->car_id,'year','');
                    // $title = $make.'&nbsp;'.$model.'&nbsp;'.$year;
                    // $link  = base_url('cars/details/'.$cvt->car_id);
                    // $image_file =null;
                    // $image = system_files().'no-car-image-placeholder.png';
                    // $this->db->where('car_id',$cvt->car_id);
                    // $this->db->order_by('is_main','DESC');
                    // $this->db->limit(1);
                    // $q =$this->db->get('car_files');
                    // if($q->num_rows()==1)
                    // {
                    //     $r = $q->row();
                    //     $image_file = $r->file_up_name;
                    // }
                    // if(is_file('./car_uploads/'.$image_file))
                    // {
                    //     $image = base_url('car_uploads/'.$image_file);
                    // }
                ?>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-img position-relative">
                                <img src="" alt="" class="img-fluid mx-auto d-block">
                            </div>
                            <div class="mt-4 text-center">
                                <h5 class="mb-3 text-truncate">
                                    <a href="" target="_blank" class="text-dark"></a>
                                </h5>
                                <h5 class="my-0"><span class="text-muted mr-2"><i class="fas fa-eye"></i> <b></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php //endforeach;?>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-12">
        <h3>Cars By Make(s) &amp; Model(s)</h3>
    </div>
        <div class="col-md-3 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0"></h4>
                </div>
                <ul class="list-group list-group-flush">
                    <?php
                        // $this->db->select('*, COUNT(model_id) as cbmd');
                        // $this->db->where('make_id',$c->make_id);
                        // $this->db->order_by('cbmd','DESC');
                        // $this->db->group_by('model_id');
                        // $query = $this->db->get('cars');
                        // if($query->num_rows()>0)
                        // {
                        //     foreach($query->result() as $rows)
                        //     {
                        //         $model = get_column('cars_model','uid',$rows->model_id,'model','');
                        //         echo '<li class="list-group-item">'.$model.' ('.$rows->cbmd.')</li>';
                        //     }
                        // }
                    ?>
                </ul>
            </div>
        </div><!-- end col -->
</div> <!-- end row -->  
 @endsection 
@section('modal')
<!-- all visits -->
<div class="modal fade modal-flex" id="graph-details-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="expense-title-modal">Visit Graph Display</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body" style="overflow-x: auto;"> 
 
                <div class="row">
                    <div class="col-3">
                         <label for="date_from">From</label>
                         <input type="text" name="date_from" id="date_from" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                         <label for="date_to">To</label>
                         <input type="text" name="date_to" id="date_to" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="btn-generate-report"> Sumbit </button>
                    </div>
                </div>
 
             <div class="row">
                 <div id="mysecondchart" style="height: 400px;"></div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>  
 <!-- all visits -->
 
 <!-- all desktop visit -->
 <div class="modal fade modal-flex" id="desktop-visit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="expense-title-modal">Desktop Visit Graph</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body" style="overflow-x: auto;"> 
 
                <div class="row">
                    <div class="col-3">
                         <label for="date_from">From</label>
                         <input type="text" name="ddate_from" id="ddate_from" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                         <label for="date_to">To</label>
                         <input type="text" name="ddate_to" id="ddate_to" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="dbtn-generate-report"> Sumbit </button>
                    </div>
                </div>
 
             <div class="row">
                 <div id="dmysecondchart" style="height: 400px;"></div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>  
 <!-- all desktop visit -->
 
 <!-- all mobile visit -->
 <div class="modal fade modal-flex" id="mobile-visit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="expense-title-modal">Mobile Visit Graph</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body" style="overflow-x: auto;"> 
 
                <div class="row">
                    <div class="col-3">
                         <label for="date_from">From</label>
                         <input type="text" name="mdate_from" id="mdate_from" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                         <label for="date_to">To</label>
                         <input type="text" name="mdate_to" id="mdate_to" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="mbtn-generate-report"> Sumbit </button>
                    </div>
                </div>
 
             <div class="row">
                 <div id="mmysecondchart" style="height: 400px;"></div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>  
 <!-- all desktop visit -->
 
 <!-- all views -->
 <div class="modal fade modal-flex" id="allviews-visit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="expense-title-modal">All Views Graph</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body" style="overflow-x: auto;"> 
 
                <div class="row">
                    <div class="col-3">
                         <label for="date_from">From</label>
                         <input type="text" name="avdate_from" id="avdate_from" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                         <label for="date_to">To</label>
                         <input type="text" name="avdate_to" id="avdate_to" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="avbtn-generate-report"> Sumbit </button>
                    </div>
                </div>
 
             <div class="row">
                 <div id="avmysecondchart" style="height: 400px;"></div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>  
 <!-- all views -->
 
 <!-- all views desktop -->
 <div class="modal fade modal-flex" id="allviews-desktop-visit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="expense-title-modal">All Views Desktop Graph</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body" style="overflow-x: auto;"> 
 
                <div class="row">
                    <div class="col-3">
                         <label for="date_from">From</label>
                         <input type="text" name="avddate_from" id="avddate_from" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                         <label for="date_to">To</label>
                         <input type="text" name="avddate_to" id="avddate_to" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="avdbtn-generate-report"> Sumbit </button>
                    </div>
                </div>
 
             <div class="row">
                 <div id="avdmysecondchart" style="height: 400px;"></div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>  
 <!-- all views desktop-->
 
 <!-- all views mobile -->
 <div class="modal fade modal-flex" id="allviews-mobile-visit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title" id="expense-title-modal">All Views Mobile Graph</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body" style="overflow-x: auto;"> 
 
                <div class="row">
                    <div class="col-3">
                         <label for="date_from">From</label>
                         <input type="text" name="avmdate_from" id="avmdate_from" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                         <label for="date_to">To</label>
                         <input type="text" name="avmdate_to" id="avmdate_to" class="form-control datepicker" value="">
                    </div>
                    <div class="col-3">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="avmbtn-generate-report"> Sumbit </button>
                    </div>
                </div>
 
             <div class="row">
                 <div id="avmmysecondchart" style="height: 400px;"></div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>  
 <!-- all views mobile-->
@endsection 
@section('customjs')
<!-- Custom js-->
<script>

</script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection