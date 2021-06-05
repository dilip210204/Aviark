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
         <h4 class="text-left">Make a Profile!</h4>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-body chat-page pb-2">
                  <div class="chat-data-block">
                     <div class="row">
                        <div class="col-lg-12 scroller">
                          <form  action="{{ route('product.request.submit') }}" enctype="multipart/form-data" method="post">
                           @csrf
                              <div class="form-group">
                                 <div class="custom-file">
                                    <input type="file" name="profile" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Profile Image</label>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                              </div>

                              <div class="form-group">
                                 <label for="City">City</label>
                                 <input type="text" name="city" class="form-control" id="city" placeholder="City">
                              </div>

                              <div class="form-group">
                                 <label for="Country">Country</label>
                                 <input type="text" name="country" class="form-control" id="country" placeholder="Country">
                              </div>

                              <div class="form-group">
                               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" name="student" id="student">
                                 <label for="student"  class="custom-control-label">Student If yes, what field(s) do you study?</label>
                               </div>
                              </div>

                              <div class="form-group">
                                 <input type="text" name="student_study_fields" class="form-control" id="student_study_fields" placeholder="Study fields">
                                 <small>
                                    Type here and press return to add more studies, as well as specific keywords that relate to your studies. Be as specific as you like!
                                 </small>
                              </div>

                              <div class="form-group">
                                 <label for="profession">Profession</label>
                                 <input type="text" name="profession" class="form-control" id="profession" placeholder="Profession">
                                 <small>
                                    Type here and press return to add more professions, as well as specific keywords that relate to your work. The more specific / niche, the better!
                                 </small>
                              </div>

                              <div class="form-group">
                                 <label for="hobby">Hobby</label>
                                 <input type="text" name="hobby" class="form-control" id="hobby" placeholder="Hobby">
                              </div>

                              <div class="form-group">
                                 <label for="interests">Interests</label>
                                 <input type="text" name="interests" class="form-control" id="interests" placeholder="Interests">
                              </div>

                              <div class="form-group">
                               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                 <input type="checkbox" class="custom-control-input" name="pro" id="Pro?">
                                 <label for="Pro?"  class="custom-control-label">Pro?</label>
                               </div>
                                 <small>Click this if you feel like you’re capable of taking broadcast quality media or photos that could be published!</small>
                              </div>

                              <div class="form-group">
                                 <label for="relevant-websites">Relevant websites that you like or that are about you</label>
                                 <textarea class="form-control" name="relevant_websites" id="relevant-websites" rows="3" placeholder="e.g. ‘www.francisconnelly.com , www.facebook.com/francis.connelly.509’"></textarea>
                              </div>

                              <div class="form-group">
                                 <label for="Notes">Notes</label>
                                 <textarea class="form-control" name="notes" id="Notes" rows="3" placeholder="Notes"></textarea>
                              </div>

                              <!-- <div class="form-group">
                                 <h6>Your headline</h6>
                                 <label for="headline">This is what people will see before clicking on your profile</label>
                              </div> -->

                             
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