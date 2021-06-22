@extends('layouts.app1')
@section('content')
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

<div id="content-page" class="content-page">
   <div class="container-fluid section-container" >
      <div class="card-header">
         <h4 class="text-left">Make a Request!</h4>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-body chat-page pb-2">
                  <div class="chat-data-block">
                     <div class="row">
                        <div class="col-lg-12 scroller">
                          <form  action="{{ route('card.request.submit',['id' => $card[0]->id]) }}" enctype="multipart/form-data" method="post">
                           @csrf
                           <div class="form-group"> 
                              <div class="row">
                                <div class="col-sm-2 col-md-2 col-lg-2">
                                    <div class="form-group">
                                       </h6>Are you looking for a pro?<h6>
                                       <label>
                                         <input type="radio" name="pro" value="pro" >
                                           <div class="form-group">
                                             <div class="outter-box">
                                                <div class="inner-box">
                                                   PRO
                                                </div>
                                             </div>
                                           </div>
                                      </label>
                                   </div>
                                </div>
                                <div class="col-sm-10 col-md-10 col-lg-10">
                                 <label>
                                    (click this if you’d like to find someone who believes he or she can deliver publishable or broadcastable media!)
                                 </label>
                                </div>
                           </div>


                           <div class="form-group"> 
                              <div class="row">
                                 <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h6>Purpose?</h6>
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                       <label class="w-100">
                                        <input type="radio" name="commercial" value="commercial"  required>
                                          <div class="section-outter-box w-100">
                                                Commercial
                                          </div>
                                     </label>
                                  </div>
                               </div>
                               <div class="col-sm-6 col-md-6 col-lg-6">
                                 <div class="form-group">
                                    <label class="w-100">
                                     <input type="radio" name="commercial" value="non-commercial" required>
                                     <div class="section-outter-box w-100">
                                       Non-commercial
                                     </div>
                                  </label>
                               </div>
                            </div>
                         </div>
                      </div>

                       <div class="form-group">
                        <label for="used_for">To be used for…</label>
                        <input type="text" name="used_for" class="form-control" id="used_for" placeholder="To be used for…" required>
                     </div>

                     <div class="form-group"> 
                        <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                              <h6>Proposed price?</h6>
                           </div>
                           <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="form-group">
                                 <label class="w-100">
                                   <input type="radio" name="proposed_price" value="free" required>
                                   <div class="section-outter-box free w-100">Free</div>
                                </label>
                                <small><a href="#">How pricing works..</a></small>
                             </div>
                          </div>
                          <div class="col-sm-4 col-md-4 col-lg-4">
                           <div class="form-group">
                              <label class="w-100">
                                <input type="radio" name="proposed_price" value="mwc" required>
                                <div class="section-outter-box mwc w-100">MWC</div>
                             </label>
                             <small><a href="#">What’s MWC ?!</a></small>

                          </div>
                       </div>
                       <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                           <label class="w-100">
                              <input type="radio" name="proposed_price" value="something_else" required>
                              <div class="section-outter-box  something-else w-100">Something else</div>
                          </label>
                       </div>
                    </div>
                 </div>
              </div>

              <div class="form-group section-something-else d-none">
               <label for="">How much would you like to propose to your fellow Arky?</label>
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="form-group">
                        <label for="currency">Currency</label>
                        <input type="text" name="currency" class="form-control currency_field" placeholder="e.g., ‘EUR’…. ’USD’…. ">
                     </div>
                     <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" name="amount" class="form-control amount_field" placeholder="e.g., ‘50’…. ’90’….">
                     </div>
                  </div>
               </div>
            </div>

              <div class="form-group">
               <label for="used_for">Start date/due date?<i>(optional)</i></label>
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <input type="date" name="start_date" class="date" placeholder="Select a date">
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <input type="date" name="end_date" lass="date" placeholder="Select a date">
                  </div>
               </div>
            </div>

            <div class="form-group">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                     <h6>HEADLINE</h6>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                     <span class="btn btn-primary w-50">
                        Edit
                     </span>
                  </div>
               </div>
            </div>

            <div class="form-group">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <p>This is what your request headline will look like. If people tap or click on it, they’ll then see all the details of your request. To edit your headline, please just change above.</p>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <textarea class="form-control" name="what" id="what" rows="2" placeholder="HEADLINE">{{ $card[0]->what }}</textarea>
                  </div>
               </div>
            </div>


            @if(!empty($card[0]->global == "yes"))
            <div class="form-group">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body">

                           <div class="row">
                              <div class="col-sm-11 col-ms-11 col-lg-11">
                                 <span >
                                    <h3>{{ $card[0]->what }}</h3>
                                 </span >
                                 @if($card[0]->pro)
                                 <span class="btn btn-success">Pro</span>
                                 @endif

                              </div>
                              <div class="col-sm-1 col-ms-1 col-lg-1 text-right">
                                 @if($card[0]->photo)
                                 <img src="{{ asset('images/icons/photo.svg')}}" alt="story-img" class="avatar-30">
                                 @endif

                                 @if($card[0]->video)
                                 <img src="{{ asset('images/icons/video.svg')}}" alt="story-img" class="avatar-30">
                                 @endif
                                 @if($card[0]->audio)
                                 <img src="{{ asset('images/icons/audio.svg')}}" alt="story-img" class="avatar-30">
                                 @endif
                                 @if($card[0]->knowledge)
                                 <img src="{{ asset('images/icons/knowledge.svg')}}" alt="story-img" class="avatar-30">
                                 @endif
                              </div>

                           </div>
                           <div class="row">
                              <div class="col-sm-2 col-ms-2 col-lg-2">
                                 <div class="user-img img-fluid">
                                    <img src="{{ asset('uploads/profiles/'.$card[0]->profile)}}" alt="story-img" class="rounded-circle avatar-130">
                                 </div>
                              </div>
                              <div class="col-sm-10 col-ms-10 col-lg-10">
                                 <div class="row d-flex align-items-center">
                                   <div class="col-sm-1 col-md-1 col-lg-1">
                                   </div>
                                   <div class="col-sm-11 col-md-11 col-lg-11">
                                    <img src="{{ asset('images/icons/profile.svg')}}" alt="story-img" class="avatar-30">
                                    {{ $card[0]->name }}, {{ $card[0]->country }}
                                 </div>
                              </div>
                              <div class="row d-flex align-items-center">
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11">
                                 <img src="{{ asset('images/icons/location.svg')}}" alt="story-img" class=" avatar-30">
                                 {{ $card[0]->where }}
                              </div>
                           </div>
                           <div class="row d-flex align-items-center">
                             <div class="col-sm-1 col-md-1 col-lg-1">
                             </div>
                             <div class="col-sm-11 col-md-11 col-lg-11">
                              <div class="row">
                                 <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                    <img src="{{ asset('images/icons/search_profession.svg')}}" alt="story-img" class=" avatar-30">
                                    {{ $card[0]->who }}
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                                  <img src="{{ asset('images/icons/price.svg')}}" alt="price" class="avatar-30">
                                  <span class="price-section">
                                     
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
 </div>
 @else
 <div class="form-group">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body">

                           <div class="row">
                              <div class="col-sm-11 col-ms-11 col-lg-11">
                                 <span >
                                    <h3>{{ $card[0]->what }}</h3>
                                 </span >
                                 @if($card[0]->pro)
                                 <span class="btn btn-success">Pro</span>
                                 @endif

                              </div>
                              <div class="col-sm-1 col-ms-1 col-lg-1 text-right">
                                 @if($card[0]->photo)
                                 <img src="{{ asset('images/icons/photo.svg')}}" alt="story-img" class="avatar-30">
                                 @endif

                                 @if($card[0]->video)
                                 <img src="{{ asset('images/icons/video.svg')}}" alt="story-img" class="avatar-30">
                                 @endif
                                 @if($card[0]->audio)
                                 <img src="{{ asset('images/icons/audio.svg')}}" alt="story-img" class="avatar-30">
                                 @endif
                                 @if($card[0]->knowledge)
                                 <img src="{{ asset('images/icons/knowledge.svg')}}" alt="story-img" class="avatar-30">
                                 @endif
                              </div>

                           </div>
                           <div class="row">
                              <div class="col-sm-2 col-ms-2 col-lg-2">
                                 <div class="user-img img-fluid">
                                    <img src="{{ asset('uploads/profiles/'.$card[0]->profile)}}" alt="story-img" class="rounded-circle avatar-130">
                                 </div>
                              </div>
                              <div class="col-sm-10 col-ms-10 col-lg-10">
                                 <div class="row d-flex align-items-center">
                                   <div class="col-sm-1 col-md-1 col-lg-1">
                                   </div>
                                   <div class="col-sm-11 col-md-11 col-lg-11">
                                    <img src="{{ asset('images/icons/profile.svg')}}" alt="story-img" class="avatar-30">
                                    {{ $card[0]->name }}, {{ $card[0]->country }}
                                 </div>
                              </div>
                              <div class="row d-flex align-items-center">
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                </div>
                                <div class="col-sm-11 col-md-11 col-lg-11">
                                 <img src="{{ asset('images/icons/location.svg')}}" alt="story-img" class=" avatar-30">
                                    {{ $card[0]->where }}
                              </div>
                           </div>
                           <div class="row d-flex align-items-center">
                             <div class="col-sm-1 col-md-1 col-lg-1">
                             </div>
                             <div class="col-sm-11 col-md-11 col-lg-11">
                              <div class="row">
                                 <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                                    <img src="{{ asset('images/icons/search_profession.svg')}}" alt="story-img" class=" avatar-30">
                                    {{ $card[0]->profession }}
                                 </div>
                                 <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                                  <img src="{{ asset('images/icons/price.svg')}}" alt="price" class="avatar-30">
                                  <span class="price-section">
                                     
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
 </div>
 @endif




 <div class="form-group">
   @if($card[0]->global == "yes")
   <button type="submit" class="btn btn-success w-100 p-3">Send out A global request !</button>
   @else
   <button type="submit" class="btn btn-success w-100 p-3">Send out A request !</button>
   @endif
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
   
   $('.something-else').on('click',function(){
      $('.section-something-else').removeClass('d-none');
      $(".amount_field").prop('required',true);
      $(".currency_field").prop('required',true);
   });

   $('.free').on('click',function(){
      $('.section-something-else').addClass('d-none');
      $(".currency_field").prop('required',false);
      $(".amount_field").prop('required',false);

   });

   $('.mwc').on('click',function(){
      $('.section-something-else').addClass('d-none');
      $(".currency_field").prop('required',false);
      $(".amount_field").prop('required',false);
   });

    $('input[type=radio][name=proposed_price]').on('change',function(){

         var proposed_price = this.value;
         var price;

         if(proposed_price == "free"){
            price = "Free";
         }else if(proposed_price == "mwc"){
            price = "MWC";
         }else if(proposed_price == "something_else"){
            price = "Something Else";
         }
            $(".price-section").html('');
            $(".price-section").html(price);
        });  

    $("input[type=text][name=currency]").on('keyup', function () {
         var currency = this.value.toUpperCase();

         var amount =   $("input[type=number][name=amount]").val();
         var proposed_price = currency.toUpperCase() +' '+ amount;

         $(".price-section").html('');
         $(".price-section").html(proposed_price);
    });

    $("input[type=number][name=amount]").on('keyup', function () {
         var amount = this.value.toUpperCase();

         var currency =   $("input[type=text][name=currency]").val();
         var proposed_price = currency.toUpperCase() +' '+ amount;

         $(".price-section").html('');
         $(".price-section").html(proposed_price);
    })

</script>
@endsection
