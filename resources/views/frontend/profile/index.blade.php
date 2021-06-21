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
         <h4 class="text-left">Profile!</h4>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-body chat-page pb-2">
                  <div class="chat-data-block">
                     <div class="row">
                        <div class="col-lg-12 scroller">
                          <form  action="{{ route('product.request.update',['id' => $profiles->id])  }}" enctype="multipart/form-data" method="post">
                           @csrf
                              <div class="form-group">

                                 <div class="text-left mb-2">

                                     @php
                                        $file_pointer = 'uploads/profiles/'.$profiles->profile;
                                     @endphp

                                     @if (file_exists($file_pointer))
                                      <img src="{{ asset('uploads/profiles/'.$profiles->profile) }}" alt="profile-img" class="rounded-circle avatar-130">
                                     @else
                                      <img src="{{ asset('images/profile/'.$profiles->profile) }}" alt="profile-img" class="rounded-circle avatar-130">
                                     @endif


                                 </div>
                                 <div class="custom-file">
                                    @if(!empty($profiles->profile))
                                    <input type="file" name="profile" class="custom-file-input" id="customFile" >
                                    @else
                                    <input type="file" name="profile" class="custom-file-input" id="customFile" required>
                                    @endif

                                    <label class="custom-file-label" for="customFile">Profile Image</label>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" name="name" class="form-control" id="name" value="{{ $profiles->name }}" placeholder="Name" required>
                              </div>

                              <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" name="email" class="form-control" id="email" value="{{ $profiles->email }}" placeholder="Email" required>
                              </div>

                              <div class="form-group">
                                 <label for="City">City</label>
                                 <input type="text" name="city" class="form-control" id="city" value="{{ $profiles->city }}" placeholder="City" required>
                              </div>

                              <div class="form-group">
                                 <label for="Country">Country</label>
                                 <input type="text" name="country" class="form-control" value="{{ $profiles->country }}" id="country" placeholder="Country" required>
                              </div>                        

                              <div class="form-group">
                               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                 @if($profiles->student)
                                 <input type="checkbox" class="custom-control-input student-checkbox" name="student" checked value="{{ $profiles->student }}" id="student">
                                 @else
                                 <input type="checkbox" class="custom-control-input" name="student" value="yes"  id="student">
                                 @endif
                                 <label for="student"  class="custom-control-label">Student If yes, what field(s) do you study?</label>
                               </div>
                              </div>

                              <div class="form-group student-section d-none">
                                 <input type="text" name="student_study_fields" class="form-control" value="{{ $profiles->student_study_fields }}" id="student_study_fields" placeholder="Study fields">
                                 <small>
                                    Type here and press return to add more studies, as well as specific keywords that relate to your studies. Be as specific as you like!
                                 </small>
                              </div>

                              <div class="form-group">
                                 <label for="profession">Profession</label>
                                 <input type="text" name="profession" class="form-control" value="{{ $profiles->profession }}"  id="profession" placeholder="Profession" required>
                                 <small>
                                    Type here and press return to add more professions, as well as specific keywords that relate to your work. The more specific / niche, the better!
                                 </small>
                              </div>

                              <div class="form-group">
                                 <label for="hobby">Hobby</label>
                                 <input type="text" name="hobby" class="form-control" value="{{ $profiles->hobby }}" id="hobby" placeholder="Hobby" required>
                              </div>

                              <div class="form-group">
                                 <label for="interests">Interests</label>
                                 <input type="text" name="interests" class="form-control" value="{{ $profiles->interests }}" id="interests" placeholder="Interests" required>
                              </div>


                              <div class="form-group">
                               <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                 @if($profiles->pro)
                                 <input type="checkbox" class="custom-control-input" name="pro" value="{{ $profiles->pro }}" checked id="Pro?">
                                 @else
                                 <input type="checkbox" class="custom-control-input" name="pro" value="yes"  id="Pro?">
                                 @endif
                                 <label for="Pro?"  class="custom-control-label">Pro?</label>
                               </div>
                                 <small>Click this if you feel like you’re capable of taking broadcast quality media or photos that could be published!</small>
                              </div>

                              <div class="form-group">
                                 <label for="relevant-websites">Relevant websites that you like or that are about you</label>
                                 <textarea class="form-control" name="relevant_websites" id="relevant-websites" rows="3" placeholder="e.g. ‘www.francisconnelly.com , www.facebook.com/francis.connelly.509’"> {{ $profiles->relevant_websites }}</textarea>
                              </div>

                              <div class="form-group">
                                 <label for="Notes">Notes</label>
                                 <textarea class="form-control" name="notes" id="Notes" rows="3" placeholder="Notes">{{ $profiles->notes }}</textarea>
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

@section('custom-script')
<script type="text/javascript">

   $('input[type=checkbox][name=student]').on('click',function(){

         if($('input[name="student"]').is(':checked'))
         {
           $('.student-section').removeClass('d-none');
           $("input").prop('required',true);
         }else
         {
           $('.student-section').addClass('d-none');
           $("input").prop('required',false);
         }
   });

</script>
@endsection