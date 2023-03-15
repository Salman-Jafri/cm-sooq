@extends('frontend.template.main')
@section('maincontent')
<section>
   <div class="bannerimg cover-image bg-background3 mb-0 pb-0" data-image-src="{{ url('frontend/images/banners/banner2.jpg') }}" style="padding-top: 5rem; height: 20px !important; background: url(&{{ url('frontend/images/banners/banner2.jpg') }} )  center center;">
      <div class="header-text mb-0 mt-0 pt-0">
         <div class="container mt-0 pt-0">
            <div class="text-center text-white mt-0 pt-0" style="margin-top:-60px !important;">
               <h1 class="text-uppercase mt-0 pt-0">My Office</h1>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="sptb pt-2 watchlist">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-footer">
                  <div class="wideget-user-tab">
                     <div class="tab-menu-heading">
                        <div class="tabs-menu1">
                           <ul class="nav">
                              <li><a href="#" class="ofnav ofc-cars">My Cars</a></li>
                              <li><a href="#" class="ofnav ofc-expenses">Expenses </a></li>
                              <li><a href="#" class="ofnav ofc-expense-category">Expense Category </a></li>
                              <li><a href="#" class="ofnav ofc-clients">My Clients</a></li>
                              <li><a href="#" class="ofnav ofc-profit-report">Profit Report </a></li>
                              <li><a href="#" class="ofnav ofc-invoice-settings active">Invoice Settings </a></li>
                              <li><a href="#">Users </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <form id="addForm">
               <div class="card mb-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 mb-0 pb-0">
                           <h4 class="card-title mb-0 pb-0 text-center"> Header Image </h4>
                           <hr>
                        </div>
                        <div class="col-12">
                           <input type="file" id="invoice_header" name="invoice_header" class="d-none">
                           <img src="https://dev.cars-importers.com/system_files/invoice_header_footer.png" class="img-fluid" id="invoice_header_preview" style="cursor:pointer;">     
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card mb-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 mb-0 pb-0">
                           <h4 class="card-title mb-0 pb-0 text-center"> Invoice Text </h4>
                           <hr>
                        </div>
                        <div class="col-12">
                           <div class="ql-toolbar ql-snow">
                              <span class="ql-formats">
                                 <button type="button" class="ql-bold">
                                    <svg viewBox="0 0 18 18">
                                       <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                       <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-italic">
                                    <svg viewBox="0 0 18 18">
                                       <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                       <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                       <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-underline">
                                    <svg viewBox="0 0 18 18">
                                       <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                       <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-strike">
                                    <svg viewBox="0 0 18 18">
                                       <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line>
                                       <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path>
                                       <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-blockquote">
                                    <svg viewBox="0 0 18 18">
                                       <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect>
                                       <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect>
                                       <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path>
                                       <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-list" value="ordered">
                                    <svg viewBox="0 0 18 18">
                                       <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                       <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                       <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                       <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                       <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
                                       <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                       <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-list" value="bullet">
                                    <svg viewBox="0 0 18 18">
                                       <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                       <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                       <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                       <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                       <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                       <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-direction" value="rtl">
                                    <svg viewBox="0 0 18 18">
                                       <polygon class="ql-stroke ql-fill" points="3 11 5 9 3 7 3 11"></polygon>
                                       <line class="ql-stroke ql-fill" x1="15" x2="11" y1="4" y2="4"></line>
                                       <path class="ql-fill" d="M11,3a3,3,0,0,0,0,6h1V3H11Z"></path>
                                       <rect class="ql-fill" height="11" width="1" x="11" y="4"></rect>
                                       <rect class="ql-fill" height="11" width="1" x="13" y="4"></rect>
                                    </svg>
                                    <svg viewBox="0 0 18 18">
                                       <polygon class="ql-stroke ql-fill" points="15 12 13 10 15 8 15 12"></polygon>
                                       <line class="ql-stroke ql-fill" x1="9" x2="5" y1="4" y2="4"></line>
                                       <path class="ql-fill" d="M5,3A3,3,0,0,0,5,9H6V3H5Z"></path>
                                       <rect class="ql-fill" height="11" width="1" x="5" y="4"></rect>
                                       <rect class="ql-fill" height="11" width="1" x="7" y="4"></rect>
                                    </svg>
                                 </button>
                                 <span class="ql-header ql-picker">
                                    <span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0">
                                       <svg viewBox="0 0 18 18">
                                          <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                          <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                       </svg>
                                    </span>
                                    <span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="4"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="5"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="6"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span>
                                 </span>
                                 <select class="ql-header" style="display: none;">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                    <option value="6"></option>
                                    <option selected="selected"></option>
                                 </select>
                                 <span class="ql-color ql-picker ql-color-picker">
                                    <span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1">
                                       <svg viewBox="0 0 18 18">
                                          <line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"></line>
                                          <polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline>
                                          <line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line>
                                       </svg>
                                    </span>
                                    <span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item ql-selected ql-primary"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffff" style="background-color: rgb(255, 255, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span>
                                 </span>
                                 <select class="ql-color" style="display: none;">
                                    <option selected="selected"></option>
                                    <option value="#e60000"></option>
                                    <option value="#ff9900"></option>
                                    <option value="#ffff00"></option>
                                    <option value="#008a00"></option>
                                    <option value="#0066cc"></option>
                                    <option value="#9933ff"></option>
                                    <option value="#ffffff"></option>
                                    <option value="#facccc"></option>
                                    <option value="#ffebcc"></option>
                                    <option value="#ffffcc"></option>
                                    <option value="#cce8cc"></option>
                                    <option value="#cce0f5"></option>
                                    <option value="#ebd6ff"></option>
                                    <option value="#bbbbbb"></option>
                                    <option value="#f06666"></option>
                                    <option value="#ffc266"></option>
                                    <option value="#ffff66"></option>
                                    <option value="#66b966"></option>
                                    <option value="#66a3e0"></option>
                                    <option value="#c285ff"></option>
                                    <option value="#888888"></option>
                                    <option value="#a10000"></option>
                                    <option value="#b26b00"></option>
                                    <option value="#b2b200"></option>
                                    <option value="#006100"></option>
                                    <option value="#0047b2"></option>
                                    <option value="#6b24b2"></option>
                                    <option value="#444444"></option>
                                    <option value="#5c0000"></option>
                                    <option value="#663d00"></option>
                                    <option value="#666600"></option>
                                    <option value="#003700"></option>
                                    <option value="#002966"></option>
                                    <option value="#3d1466"></option>
                                 </select>
                                 <span class="ql-align ql-picker ql-icon-picker">
                                    <span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-2">
                                       <svg viewBox="0 0 18 18">
                                          <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line>
                                          <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line>
                                          <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line>
                                       </svg>
                                    </span>
                                    <span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-2">
                                       <span tabindex="0" role="button" class="ql-picker-item ql-selected">
                                          <svg viewBox="0 0 18 18">
                                             <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line>
                                             <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line>
                                             <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line>
                                          </svg>
                                       </span>
                                       <span tabindex="0" role="button" class="ql-picker-item" data-value="center">
                                          <svg viewBox="0 0 18 18">
                                             <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>
                                             <line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line>
                                             <line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line>
                                          </svg>
                                       </span>
                                       <span tabindex="0" role="button" class="ql-picker-item" data-value="right">
                                          <svg viewBox="0 0 18 18">
                                             <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>
                                             <line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line>
                                             <line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line>
                                          </svg>
                                       </span>
                                       <span tabindex="0" role="button" class="ql-picker-item" data-value="justify">
                                          <svg viewBox="0 0 18 18">
                                             <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line>
                                             <line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line>
                                             <line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line>
                                          </svg>
                                       </span>
                                    </span>
                                 </span>
                                 <select class="ql-align" style="display: none;">
                                    <option selected="selected"></option>
                                    <option value="center"></option>
                                    <option value="right"></option>
                                    <option value="justify"></option>
                                 </select>
                                 <button type="button" class="ql-link">
                                    <svg viewBox="0 0 18 18">
                                       <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                       <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                       <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                                    </svg>
                                 </button>
                                 <button type="button" class="ql-clean">
                                    <svg class="" viewBox="0 0 18 18">
                                       <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                       <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                       <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                       <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                       <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
                                    </svg>
                                 </button>
                              </span>
                           </div>
                           <div id="invoice_text" style="height:300px;" class="ql-container ql-snow">
                              <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true">
                                 <p><br></p>
                              </div>
                              <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                              <div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card mb-0">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 mb-0 pb-0">
                           <h4 class="card-title mb-0 pb-0 text-center"> Footer Image </h4>
                           <hr>
                        </div>
                        <div class="col-12">
                           <input type="file" id="invoice_footer" name="invoice_footer" class="d-none">
                           <img src="https://dev.cars-importers.com/system_files/invoice_header_footer.png" class="img-fluid" id="invoice_footer_preview" style="cursor:pointer;">     
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-danger" id="btn-save-invoice-settings"><i class="fas fa-save"></i> Save Changes </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<input type="hidden" id="hidden-val">
@endsection