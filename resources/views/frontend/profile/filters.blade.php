@extends('layouts.app1')
@section('content')
<style type="text/css">
   @media screen and (min-width: 768px) and (max-width:  1961px) {
      .section-container{
         padding-left : 248px;
      }
   }
</style>

<div id="content-page" class="content-page">
   <div class="container-fluid section-container" >
      <div class="card-header">
         <h4 class="text-center">Filter your results</h4>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
            <div class="iq-card-header">
               Add filters to your results
            </div>
               <div class="iq-card-body chat-page pb-2">
                  <div class="chat-data-block">
                     <div class="row">
                        <div class="col-lg-12 scroller">
                          <form  action="{{ route('profile.filters.submit') }}" enctype="multipart/form-data" method="post">
                           @csrf
                            

                              <div class="form-group">
                                 <label for="City">City</label>
                                 <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                              </div>

                              <div class="form-group">
                                 <label for="Country">Country</label>
                                 <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country">
                              </div>


                              <div class="form-group">
                                 <label for="profession">Profession</label>
                                 <input type="text" name="profession" class="form-control" id="profession" placeholder="Enter Profession">
                              </div>

                              <div class="form-group">
                                 <label for="hobby">Hobby</label>
                                 <input type="text" name="hobby" class="form-control" id="hobby" placeholder="Enter a hobby">
                              </div>

                              <div class="form-group">
                                 <label for="interests">Interests</label>
                                 <input type="text" name="interests" class="form-control" id="interests" placeholder="Enter Interests">
                              </div>

                              <div class="form-group">
                               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" name="pro" id="Pro?">
                                 <label for="Pro?"  class="custom-control-label">Pro?</label>
                               </div>
                              </div>

                              <div class="form-group text-center">
                                 <button type="submit" class="btn btn-success w-50 p-3">Next</button>
                              </div>
                           </form>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
      </div>
   </div>
</div>
</div>
@endsection