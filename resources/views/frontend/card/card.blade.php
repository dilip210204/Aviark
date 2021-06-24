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
                  </div>
               </div>
            </div>
         </div>

         @foreach($cards as $card)
            <div class="col-sm-12 col-md-12 col-lg-6 ">
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
                           @if(!empty(file_exists('images/profile/'.$card->profile)))
                              <img src="{{ asset('images/profile/'.$card->profile)}}" alt="profile" class="rounded-circle avatar-130">
                           @else
                              <img src="{{ asset('uploads/profiles/'.$card->profile)}}" alt="profile" class="rounded-circle avatar-130">
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
                                    {{ $card->who }}
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                                   <img src="{{ asset('images/icons/price.svg')}}" alt="price" class="avatar-30">
                                   <span class="price-section">
                                    @if($card->proposed_price == 'something_else_field' )
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
         @endforeach

        
   </div>
</div>
</div>
@endsection