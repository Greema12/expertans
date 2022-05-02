@include('Layout.header')

        <!--================End Forum Breadcrumb Area =================-->

        <section class="doc_blog_grid_area sec_pad forum-single-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <!-- Forum post top area -->
                         
                    @if(isset($message))
<p>{{ $message}} </p>
@endif
                        <!-- Forum post content -->
                        
                        @foreach($que as $list)
                       <!--  <div class="q-title">
                
                        </div> -->


                        <div class="forum-post-content">
                            <div class="content"  style="" >
                                <br/><br/>
                             <b>   <p style="font-size: 1.7em;">Q:{{ $list->main_que }}</p></b>
                            
                                <p style="font-size: 1.1em;"> {{$list->main_ans}} </p>
                                
                            </div>
                        </div>

                        </div>
<br><br><br><br><br>
                        <!-- Best answer -->
                        <!--<div class="">-->
                         <div class="">
                            

                            
                           <p style="text-align: left;font-size: 1.4em;" class="action_btn">Similar-Questions:</p>
                            



                        </div>   
                            
                            <div class="best-answer">
                            <!--<div class="best-ans-content d-flex">-->
                                <!--<span class="question-icon" title="The Best Answer"></span>-->
                                
                                  

                            <!--</div>-->
                            <div class="forum-post-content">
                            <div class="content">
                            <b><p style="font-size: 1.7em;"> Q:{{$list->people_also_ask_q1  }}</p> </b>
                                    
                            <p style="font-size: 1.1em;">     {{$list->people_also_ask_a1}} </p>
                                
                            </div></div>    
                            </div>        
                              
                              
                            <div class="best-answer">   
                            <!--<div class="best-ans-content d-flex">-->
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                
                                  

                            <!--</div>-->
                            <div class="forum-post-content">
                            <div class="content">
                                 <p style="font-size: 1.7em;"><b> Q:{{$list->people_also_ask_q2  }} </b></p>
                                <p style="font-size: 1.1em;">     {{$list->people_also_ask_a2}} </p>
                                
                            </div></div>
                            </div> 
                            
                            
                            <div class="best-answer">   
                            <!--<div class="best-ans-content d-flex">-->
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                 

                            <!--</div>-->
                            <div class="forum-post-content">
                            <div class="content">

                                 <p style="font-size: 1.7em;"> <b>Q: {{$list->people_also_ask_q3  }} </b></p>
                                  
                                 <p style="font-size: 1.1em;">     {{$list->people_also_ask_a3}} </p>
                                
                            </div></div> 
                            </div>

                            <div class="best-answer">   
                            <!--<div class="best-ans-content d-flex">-->
                                <!--<span class="question-icon" title="The Best Answer">Q:</span>-->
                                
                                
                                  

                            <!--</div>-->
                            <div class="forum-post-content">
                            <div class="content">

                                 <p style="font-size: 1.7em;"> <b>Q: {{$list->people_also_ask_q4  }} </b></p>
                                <p style="font-size: 1.1em;">     {{$list->people_also_ask_a4}} </p>
                                
                            </div></div>
                            </div>



</div></div></div>

 
                            
                                
                                
                           


                            
                        </div>

                        <!-- All answer -->
                        <div class="all-answers">
                            

                           

                            


@endforeach
                       


                           

                        </div>
                    </div>
                    

                  
                            </div>

                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>
        </section>

       
            </div>
            <!-- /.container -->
        </div> 
        <!-- /.call-to-action -->
        <footer class="footer-3 ">
          
            <div class="container">
              
                <div class="footer-bottom pt-40 pb-40">
                    <div class="d-flex justify-content-between flex-wrap">

                        <p class="wow fadeInRight">Copyright 2021, All Rights Reserved</p>
                        <ul class="footer-menu list-unstyled wow fadeInLeft">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Latest Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>
@include('Layout.footer')