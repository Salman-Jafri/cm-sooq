@extends('admin.template.app') 
@section('customcss')
<!-- Custom css-->
<style type="text/css">
  .table td {
    word-break: break-all;
  }

  .text-muted {
    color: #74788d !important;
    padding-bottom: 6px;
  }

  .footer {
    display: none;
  }

  .avatar-xs {
    height: 3rem;
    width: 3rem;
  }

  .d-flex li {
    list-style-type: none;
    padding-top: 18px;
  }
</style> 
@endsection 
@section('content') 
<div class="row" style="margin-top:90px;">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div class="media">
          <div class="media-body">
            <p class="text-muted font-weight-medium ">ALL REGISTERED USERS</p>
            <h4 class="mb-0 " id="registerd_userss"></h4>
            <input type="hidden" name="" id="registerd_userss2">
          </div>
          <div class="media-body">
            <p class="text-muted font-weight-medium ">DAILY REGISTERED USERS</p>
            <h4 class="mb-0 " id="todayregisterd_users"></h4>
            <input type="hidden" name="" id="todayregisterd_users2">
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
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div class="media">
          <div class="media-body">
            <p class="text-muted font-weight-medium">ALL TOTAL ADS</p>
            <h4 class="mb-0" id="total_adds"></h4>
            <input type="hidden" name="" id="total_adds2">
          </div>
          <div class="media-body">
            <p class="text-muted font-weight-medium">DAILY TOTAL ADS</p>
            <h4 class="mb-0" id="total_today_ads"></h4>
            <input type="hidden" name="" id="total_today_ads2">
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
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div class="media">
          <div class="media-body">
            <p class="text-muted font-weight-medium">TODAY VISITS</p>
            <h4 class="mb-0" id="today_visitss"></h4>
            <input type="hidden" name="" id="today_visitss2">
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
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div class="media">
          <div class="media-body">
            <p class="text-muted font-weight-medium">All VISITS</p>
            <h4 class="mb-0" id="all_visitss"></h4>
            <input type="hidden" name="" id="all_visitss2">
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
</div>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div class="media">
          <div class="media-body">
            <p class="text-muted font-weight-medium">TODAY VIEWS</p>
            <h4 class="mb-0" id="today_viewss"></h4>
            <input type="hidden" name="" id="today_viewss2">
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
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="card mini-stats-wid">
      <div class="card-body">
        <div class="media">
          <div class="media-body">
            <p class="text-muted font-weight-medium">All VIEWS</p>
            <h4 class="mb-0" id="all_viewss"></h4>
            <input type="hidden" id="all_viewss2">
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
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4 text-center">USER CLICKED TODAY</h4>
        <div class="row mt-4">
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3">
              <p class="text-muted mb-0">All</p>
              <div class="avatar-xs mx-auto mb-3 " id="all_icon">
                <span class="avatar-title rounded-circle bg-primary font-size-16 ">
                  <i class="bx bx bx-street-view"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_all_actions"></h5>
              <input type="hidden" id="by_all_actions2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3">
              <p class="text-muted mb-0">Whatsapp</p>
              <div class="avatar-xs mx-auto mb-3" id="all_icon2">
                <span class="avatar-title rounded-circle bg-success font-size-16">
                  <i class="mdi mdi-whatsapp text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_whatsapp"></h5>
              <input type="hidden" id="by_whatsapp2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3">
              <p class="text-muted mb-0">Call</p>
              <div class="avatar-xs mx-auto mb-3" id="all_icon3">
                <span class="avatar-title rounded-circle bg-danger font-size-16">
                  <i class="dripicons-device-mobile text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_call"></h5>
              <input type="hidden" id="by_call2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon4">
              <p class="text-muted mb-0">Follow</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-pink font-size-16">
                  <i class="mdi mdi-account-box-multiple text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_follow"></h5>
              <input type="hidden" id="by_follow2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon5">
              <p class="text-muted mb-0">Watch</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
                  <i class="mdi mdi-monitor-screenshot text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_watch"></h5>
              <input type="hidden" id="by_watch2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon6">
              <p class="text-muted mb-0">Share Whatsapp</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-success font-size-16">
                  <i class="bx bxl-whatsapp-square text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="byy_wa"></h5>
              <input type="hidden" id="byy_wa2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon7">
              <p class="text-muted mb-0">Share Copy</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-danger font-size-16">
                  <i class="mdi mdi-share text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_copied_link"></h5>
              <input type="hidden" id="by_copied_link2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon8">
              <p class="text-muted mb-0">All Shares</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-pink font-size-16">
                  <i class="mdi mdi-share-variant text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_all_shares"></h5>
              <input type="hidden" id="by_all_shares2" name="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4 text-center">USER CLICKED All</h4>
        <div class="row mt-4">
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ">
            <div class="social-source text-center mt-3">
              <p class="text-muted mb-0 ">All</p>
              <div class="avatar-xs mx-auto mb-3" id="all_icon11">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
                  <i class="bx bx bx-street-view"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_all_actions_all"></h5>
              <input type="hidden" id="by_all_actions_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon12">
              <p class="text-muted mb-0">Whatsapp</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-success font-size-16">
                  <i class="mdi mdi-whatsapp text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_whatsapp_all"></h5>
              <input type="hidden" id="by_whatsapp_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon13">
              <p class="text-muted mb-0">Call</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-danger font-size-16">
                  <i class="dripicons-device-mobile text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_call_all"></h5>
              <input type="hidden" id="by_call_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon14">
              <p class="text-muted mb-0">Follow</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-pink font-size-16">
                  <i class="mdi mdi-account-box-multiple text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_follow_all"></h5>
              <input type="hidden" id="by_follow_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon15">
              <p class="text-muted mb-0">Watch</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-primary font-size-16">
                  <i class="mdi mdi-monitor-screenshot text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_watch_all"></h5>
              <input type="hidden" id="by_watch_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon16">
              <p class="text-muted mb-0">Share Whatsapp</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-success font-size-16">
                  <i class="bx bxl-whatsapp-square text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_wa_all"></h5>
              <input type="hidden" id="by_wa_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon17">
              <p class="text-muted mb-0">Share Copy</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-danger font-size-16">
                  <i class="mdi mdi-share text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_copied_link_all"></h5>
              <input type="hidden" id="by_copied_link_all2" name="">
            </div>
          </div>
          <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
            <div class="social-source text-center mt-3" id="all_icon18">
              <p class="text-muted mb-0">All Shares</p>
              <div class="avatar-xs mx-auto mb-3">
                <span class="avatar-title rounded-circle bg-pink font-size-16">
                  <i class="mdi mdi-share-variant text-white"></i>
                </span>
              </div>
              <h5 class="font-size-15" id="by_all_shares_all"></h5>
              <input type="hidden" id="by_all_shares_all2" name="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row --> 
@endsection 

@section('modal') 
@endsection 

@section('customjs')
<!-- Custom js-->
<script></script>
<!-- <script src="{{ url('assets/backend/custom_js')}}"></script> --> 
@endsection