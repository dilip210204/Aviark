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
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #4AABFF;
  background-color: #89C8FF;
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
                          <form  action="{{ route('card.request.submit') }}" enctype="multipart/form-data" method="post">
                           @csrf
                              <div class="form-group">
                                 <label for="what">What? </label>
                                 <input type="text" name="what" class="form-control" id="what" placeholder="Pictures of Rabits">
                              </div>
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                       <label for="who?">who? </label>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                       <select name="who" class="form-control w-50 float-right"  id="who?">

                                      
                                        @foreach($profiles as $profile)
                                          <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label for="exampleInputText1">Type? (You can choose multiple) </label>
                                 <div class="row">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                       <div class="form-group">

                                          <label>
                                            <input type="radio" name="photo" value="photo" >
                                            <img src="{{ asset('images/profile/icons/photo.svg')}}" alt="story-img" class="avatar-70">
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                       <div class="form-group">
                                          <label>
                                            <input type="radio" name="video" value="video" >
                                            <img src="{{ asset('images/profile/icons/video.svg')}}" alt="story-img" class="avatar-70">
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                       <div class="form-group">
                                          <label>
                                          <input type="radio" name="audio" value="audio" >
                                            <img src="{{ asset('images/profile/icons/audio.svg')}}" alt="story-img" class="avatar-70">
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <div class="form-group">
                                          <label>
                                          <input type="radio" name="knowledge" value="knowledge" >
                                            <img src="{{ asset('images/profile/icons/knowledge.svg')}}" alt="story-img" class="avatar-70">
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>


                              <div class="form-group">
                                 <label for="special-need">Special needs? (optional) </label>
                                 <input type="text" name="special_need" class="form-control" id="special-need" placeholder="e.g., ‘wide angle lens’; ‘drone’">
                              </div>

                              <div class="form-group">
                                 <label for="notes"> Notes</label>
                                 <textarea class="form-control" name="notes" id="notes" rows="5" placeholder="e.g. ‘the best of the best moves you can find! Smartphone perfect! max length, 1 minute!’"></textarea>
                              </div>

                              <div class="form-group">
                                 <label for="currency">Currency</label>
                                 <input type="text" name="currency" class="form-control" id="currency" placeholder="Currency">
                              </div>

                              <div class="form-group">
                                 <label for="amount">Amount</label>
                                 <input type="text" name="amount" class="form-control" id="amount" placeholder="Amount">
                              </div>

                             
                              <div class="form-group">
                                 <button type="submit" class="btn btn-success w-100 p-3">Next</button>
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