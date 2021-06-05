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
   <div class="container-fluid section-container" style="">
      <div class="row">
         
         
         <div class="col-sm-12 col-lg-12 col-md-12">
            <div class="iq-card">
               <div class="iq-card-body">

                  <div class="row">
                     <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                        <img src="{{ asset('uploads/profiles/'.$profile_detail['profile'] )}}" alt="story-img" class="rounded-circle avatar-130">
                        <h3>{{ $profile_detail['name'] }}</h3>
                     </div>


                  <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                     <div class="row">
                        <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                              <img src='{{ asset("images/profile/icons/location.svg")}}' alt="story-img" class="avatar-30 ">
                              {{  ucwords($profile_detail['city']) }},{{ ucwords($profile_detail['country']) }} 
                           
                        
                              <img src='{{ asset("images/profile/icons/mask_group.svg")}}' alt="story-img" class="avatar-30">
                              {{ $profile_detail['profession'] }} ,{{ $profile_detail['student_study_fields'] }}
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                     <h5>Hobbies</h5>
                           @php 
                              $hobbies =  explode(",",$profile_detail['hobby']);
                           @endphp
                           @foreach($hobbies as $list)
                           <span class="badge border border-primary text-primary">
                              {{ $list }}
                           </span>
                           @endforeach
                  </div>


                  <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                     <h5>Interests</h5>
                     @php 
                           $interests =  explode(",",$profile_detail['interests']);
                           @endphp
                           @foreach($interests as $list)
                           <span class="badge border border-primary text-primary">
                              {{ $list }}
                           </span>
                           @endforeach
                  </div>

                   <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                     <h5>Relevant websites that you like or that are about you</h5>
                   </div>

                   <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                            <div class="row">
                                    @php 
                                      $relevant_websites_list =  explode(",",$profile_detail['relevant_websites']);
                                    @endphp
                                    @foreach($relevant_websites_list as $list)
                               <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                                    <span class="badge border border-primary text-primary">
                                       {{ $list }}
                                    </span>
                               </div>
                           @endforeach
                            </div>
                   </div>

                   <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                     <h5>Notes</h5>
                   </div>

                   <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                     {{ $profile_detail['notes'] }}
                   </div>

                   <div class="col-sm-12 col-ms-12 col-lg-12 text-center">
                        <a class="btn btn-info text-center w-50 mb-2 p-2" href="#">
                           Bookmark profile
                        </a>
                        <a class="btn btn-success text-center w-50 mb-2 p-2" href="{{ route('card.request',['id' => $profile_detail['id']]) }}">
                           Create card for {{ $profile_detail['name'] }}
                        </a>
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