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
                     <img class="lighthouse-image" src="{{ asset('images/icons/big_lighthouse.svg') }}">
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