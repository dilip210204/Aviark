@extends('layouts.app1')
@section('content')
<style type="text/css">

@media screen and (min-width: 768px) and (max-width:  1961px) {
   .section-container{
      padding-left : 248px;
   }
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

.tab-section img{
    width: 100px;
    height: 100px;
    padding: 20px;
    background-color: #F5F5F5;
    border: 1px solid #70707071;
    cursor: pointer;
    float: left;
}

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
                        <div class="col-sm-12 col-md-12 col-lg-12 m-auto mb-5 text-center">
                             
                                 <div class="tab-section">
                                    <img class="saved_for_later" src="{{ asset('images/icons/saved_for_later.png') }}">
                                 </div>
                                 <div class="tab-section">
                                    <img class="in_progress" src="{{ asset('images/icons/in_progress.png') }}">
                                 </div>
                                 <div class="tab-section">
                                       <img class="completed"  src="{{ asset('images/icons/completed.png') }}">
                                 </div>
                                 <div class="tab-section">
                                       <img  class="declined" src="{{ asset('images/icons/declined.png') }}">
                                 </div>
                                 <div class="tab-section">
                                    <img class="dustbin" src="{{ asset('images/icons/dustbin.png') }}">
                                 </div>

                        </div>
                     </div>
      

      
                     <!-- section start -->
                     <div class="data-section"></div>
                     <!-- section End -->

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

   $('.saved_for_later').on('click' ,  function() {
      
      $.ajax({
         type: "GET",
         url : "{{route('lighthouse.saved-for-later') }}",
         success:function(data){

            $(".data-section").html('');
            $(".data-section").html(data);

         }

      })

   });

   $('.in_progress').on('click' ,  function() {
      alert('asdf')
   });

   $('.completed').on('click' ,  function() {
      alert('asdf')
   });

   $('.declined').on('click' ,  function() {
      alert('asdf')
   });

   $('.dustbin').on('click' ,  function() {
      alert('asdf')
   });
  
</script>
@endsection