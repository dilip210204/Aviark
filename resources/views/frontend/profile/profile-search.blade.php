<div class="row">
   @foreach($profiles as $profile)
         <div class="col-sm-12 col-lg-6 col-md-12">
            <div class="iq-card">
               <div class="iq-card-body">

                  <div class="row">
                     <div class="col-sm-12 col-ms-12 col-lg-12">
                        <h3>{{ $profile->name }}</h3>
                     </div>


                  </div>
                  <div class="row">
                     <div class="col-sm-2 col-ms-2 col-lg-2">
                        <div class="user-img img-fluid">
                           <a href="{{ route('profile.browse.detail', ['id' => $profile->id]) }}">
                              <img src="{{ asset('uploads/profiles/'.$profile->profile )}}" alt="story-img" class="rounded-circle avatar-130">
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-10 col-ms-10 col-lg-10">
                        <div class="row d-flex align-items-center">
                           <div class="col-sm-1 col-md-1 col-lg-1">
                           </div>
                           <div class="col-sm-11 col-md-11 col-lg-11">
                              <img src='{{ asset("images/profile/icons/mask_group.svg")}}' alt="story-img" class="avatar-30">
                              {{ $profile->profession }}

                              <img src='{{ asset("images/profile/icons/location.svg")}}' alt="story-img" class="avatar-30">
                              {{  ucwords($profile->city) }},{{ ucwords($profile->country) }} 
                           </div>
                        </div>
                        <div class="row d-flex align-items-center">
                          <div class="col-sm-1 col-md-1 col-lg-1">
                          </div>
                          <div class="col-sm-11 col-md-11 col-lg-11">
                           <img src="{{ asset('images/profile/icons/hobbies.svg')}}" alt="story-img" class=" avatar-30">

                           @php 
                           $hobbies =  explode(",",$profile->hobby);
                           @endphp
                           @foreach($hobbies as $hobby)
                           <span class="badge border border-primary text-primary">
                              {{ $hobby }}
                           </span>
                           @endforeach
                        </div>
                     </div>
                     <div class="row d-flex align-items-center">
                       <div class="col-sm-1 col-md-1 col-lg-1">
                       </div>
                       <div class="col-sm-11 col-md-11 col-lg-11">
                        <img src="{{ asset('images/profile/icons/interests.svg')}}" alt="story-img" class=" avatar-30">

                        @php 
                        $interests =  explode(",",$profile->interests);
                        @endphp
                        @foreach($interests as $interest)
                        <span class="badge border border-primary text-primary">
                           {{ $interest }}
                        </span>
                        @endforeach
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
@endforeach
</div>