@extends('layouts.app1')
@section('content')
<style type="text/css">

@media screen and (min-width: 768px) and (max-width:  1961px) {
   .section-container{
      padding-left : 248px;
   }
}

.tab-section {
    padding: 20px;
    background-color: #F5F5F5;
    border: 1px solid #70707071;
    display: inline-block;
    cursor: pointer;
}

.lighthouse-image{
   width: 50%;

}

<style type="text/css">

@media screen and (min-width: 768px) and (max-width:  1961px) {
   .section-container{
      padding-left : 248px;
   }
}

[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}
/* IMAGE STYLES */
[type=radio] + div {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + div {
  outline: 2px solid #4AABFF;
  background-color: red;
}

[type=radio]:checked + div.section-outter-box {
  outline: 2px solid #00000029;
  box-shadow: 0px 0px 10px #8D92A3;
  background-color: #FFFFFF;
  color: #1E3354;
  font-weight: 600;
}

.outter-box {
    background: #F8F8F8;
    display: inline-block;
    padding: 10px;
    border-radius: 6px;
    width: 88px;
    text-align: center;
    border: 1px solid #959595;
}

.inner-box {
 color: #6C00BA;
 background: #F8F8F8;
 display: inline-block;
 border: 1px solid #6C00BA;
 padding: 3px 11px;
 border-radius: 6px;
 text-align: center;
}

.section-outter-box {
    background: #F8F8F8;
    display: inline-block;
    padding: 10px;
    border-radius: 6px;
    width: 88px;
    text-align: center;
    color: #8D92A3;
}

</style>
</style>

<div id="content-page" class="content-page">
   <div class="container-fluid section-container">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-body chat-page pb-2">
                  <div class="chat-data-block">
                     <div class="row">
                        <div class="col-lg-12 chat-data-left scroller">
                           <div class="chat-search pt-3 pl-3">
                              <div class="d-flex align-items-center">
                                 <button type="submit" class="close-btn-res p-3"><i class="ri-close-fill"></i></button>
                              </div>

                              <div class="chat-searchbar mt-4">
                                 <div class="form-group chat-search-data m-0">
                                    <input type="text" class="form-control round" id="chat-search" placeholder="Search">
                                    <i class="ri-search-line"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- section  -->
                     <div class="row m-5">
                        <div class="col-sm-2 col-md-2 col-lg-2 m-auto mb-5">
                              <a href="{{route('lighthouse.saved-for-later') }}">
                                 <div class="tab-section">
                                    <img src="{{ asset('images/icons/saved_for_later.png') }}">
                                 </div>
                              </a>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 m-auto mb-5">
                              <a href="{{route('lighthouse.in-progress') }}">
                                 <div class="tab-section">
                                    <img src="{{ asset('images/icons/in_progress.png') }}">
                                 </div>
                              </a>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 m-auto mb-5">
                              <a href="{{route('lighthouse.completed') }}">
                                 <div class="tab-section">
                                       <img src="{{ asset('images/icons/completed.png') }}">
                                 </div>
                              </a>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 m-auto mb-5">
                              <a href="{{route('lighthouse.declined') }}">
                                 <div class="tab-section">
                                       <img src="{{ asset('images/icons/declined.png') }}">
                                 </div>
                              </a>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 m-auto mb-5">
                              <a href="{{route('lighthouse.dustbin') }}">
                                 <div class="tab-section">
                                    <img src="{{ asset('images/icons/dustbin.png') }}">
                                 </div>
                              </a>
                        </div>
                  </div>
     

   <div class="row">
       @forelse ($cards as $card)


            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="form-group"> 
                              <div class="row">
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                       <label class="w-100">
                                        <input type="radio" name="commercial" value="commercial"  checked required>
                                          <div class="section-outter-box w-100">
                                                REQUESTING
                                          </div>
                                     </label>
                                  </div>
                               </div>
                               <div class="col-sm-6 col-md-6 col-lg-6">
                                 <div class="form-group">
                                    <label class="w-100">
                                     <input type="radio" name="commercial" value="non-commercial" required>
                                     <div class="section-outter-box w-100">
                                       CAPTURING
                                     </div>
                                  </label>
                               </div>
                            </div>
                         </div>
                      </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 ">
              <div class="data-section">
                  <div class="iq-card">
                     <div class="iq-card-body">
                        <div class="row">
                           <div class="col-sm-11 col-ms-11 col-lg-11">
                              <h3>{{ $card->what }}</h3>
                           </div>
                           <div class="col-sm-1 col-ms-1 col-lg-1 text-right">
                              @if($card->photo)
                              <img src="{{ asset('images/icons/photo.svg')}}" alt="story-img" class="avatar-30">
                              @endif

                              @if($card->video)
                              <img src="{{ asset('images/icons/video.svg')}}" alt="story-img" class="avatar-30">
                              @endif
                              @if($card->audio)
                              <img src="{{ asset('images/icons/audio.svg')}}" alt="story-img" class="avatar-30">
                              @endif
                              @if($card->knowledge)
                              <img src="{{ asset('images/icons/knowledge.svg')}}" alt="story-img" class="avatar-30">
                              @endif
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-2 col-ms-2 col-lg-2">
                              <div class="user-img img-fluid">
                                 @php
                                   $capturing =   DB::table('users')->where('name','=', $card->capturing)->get();
                                 @endphp

                                 @if($card->global == 'yes')
                                 <img src="{{ asset('uploads/profiles/'.$card->profile)}}" alt="profile" class="rounded-circle avatar-130">
                                 @else
                                 <img src="{{ asset('uploads/profiles/'.$capturing[0]->profile)}}" alt="profile" class="rounded-circle avatar-130">
                                 @endif
                              </div>
                           </div>
                           <div class="col-sm-10 col-ms-10 col-lg-10">
                              <div class="row d-flex align-items-center">
                                   <div class="col-sm-1 col-md-1 col-lg-1">
                                   </div>
                                   <div class="col-sm-11 col-md-11 col-lg-11">
                                    <img src="{{ asset('images/icons/profile.svg')}}" alt="story-img" class="avatar-30">
                                    {{ $card->city }}, {{ $card->country }}
                                 </div>
                              </div>
                              <div class="row d-flex align-items-center">
                                   <div class="col-sm-1 col-md-1 col-lg-1">
                                   </div>
                                   <div class="col-sm-11 col-md-11 col-lg-11">
                                    <img src="{{ asset('images/icons/location.svg')}}" alt="story-img" class=" avatar-30">
                                    {{ $card->where }}
                                 </div>
                              </div>
                              <div class="row d-flex align-items-center">
                                 <div class="col-sm-1 col-md-1 col-lg-1">
                                 </div>
                                 <div class="col-sm-11 col-md-11 col-lg-11">
                                    <div class="row">
                                       <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                          <img src="{{ asset('images/icons/search_profession.svg')}}" alt="story-img" class=" avatar-30">
                                          

                                          @if($card->global == 'yes')
                                                {{ $card->who }}
                                          @else
                                                {{ $capturing[0]->profession }}
                                          @endif

                                       </div>
                                       <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                                           <img src="{{ asset('images/icons/price.svg')}}" alt="price" class="avatar-30">
                                           <span class="price-section">
                                             @if($card->proposed_price == 'something_else' )
                                             {{ $card->currency }} {{ $card->amount }}
                                             @else
                                             {{ strtoupper($card->proposed_price) }}
                                             @endif
                                          </span>
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

       @empty
         <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                <div class="row ">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <h2 class="text-center">Your Lighthouse !</h2>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                     <img class="lighthouse-image" src="{{ asset('images/icons/lighthouse_image.svg') }}">
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <h2>The lighthouse gives you an overview of all your activity.</h2>
                     <h4>Click on the tabs above to find:</h4>
                     <p>
                          - Requests or profiles you saved for later; as well as drafts of cards you haven’t finished yet - Cards you’ve agreed upon, but are still in progress, - Cards that have been completed (request has been delivered). - Card that have been declined, from either side - And a Dustbin (of course). The Lighthouse is also the way you keep track of your messaging. All messages are tied to the projects you met with !
                     </p>
                  </div>
               </div>
         </div>
       @endforelse
   </div>
                     <!-- section end -->

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