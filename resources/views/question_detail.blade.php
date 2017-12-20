<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Questions | Query</title>
    
    @include('part.navbar')


    <section id="blog" class="container">
        <div class="center">
            <h2>Questions</h2>
            <p class="lead">Ask to know better</p>
        </div>
        @foreach($posts as $post)
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                            <div class="row">  
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>{{$post->title}}</h2>
                                    <p>{{$post->question}}</p>
                                    @foreach($user as $user)
                                    <h5>Asked by: <a href="<?php echo "account?ids=$user->id"; ?>">{{$user->email}}</a></h5>
                                    @endforeach
                                    <input type="hidden" id="qid" value="{{$post->id}}">
                                    <div class="post-tags">
                                        <strong>Catagory:</strong> <a>{{$post->catagory}}</a>
                                    </div>

                                    @php($votes=$ques_vote)
                                    @if(Auth::user()->id==$post->uid)
                                    <div class="post-tags">
                                        <strong>Votes:</strong> <a>{{count($votes)}}</a>
                                    </div>
                                    @endif
                                    @php($q=0)
                                    @if(Auth::user()->id!=$post->uid)
                                        @foreach($ques_vote as $ques_voted)

                                            @if($ques_voted->uid==Auth::user()->id)
                                                @php($q=1)
                                                @break

                                            @endif
                                        @endforeach
                                    @else
                                    @php($q=2)
                                    @endif
                                    @if($q==1)
                                        <div><i class="fa fa-caret-up" style="font-size:40px;color: magenta;"></i></div>
                                        <div style="font-size: 20px">{{count($votes)}}</div>
                                        <div class="down"><i class="fa fa-caret-down" style="font-size:40px;"></i></div>
                                    @elseif($q==0)
                                        <div class="up"><i class="fa fa-caret-up" style="font-size:40px;"></i></div>
                                        <div style="font-size: 20px">{{count($votes)}}</div>
                                        <div><i class="fa fa-caret-down" style="font-size:40px;color: magenta;"></i></div>
                                    @endif

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        @if(Storage::disk('public')->has($post->title.'-'.Auth::user()->id))
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                
                                <img src="<?php echo $post->title.'-'.$post->uid.'jpg' ?>">
                            </div>
                        </div> 
                        @endif
                        <h1 id="comments_title">Answers</h1>
                        @foreach($answers as $answer)
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                
<!-- ================================================ check if voted or not ===================================================== -->
                                @php($c=0)
                                @if(Auth::user()->id==$post->uid)
                                    @foreach($ans_vote as $ans_voted)
                                        @if($answer->id==$ans_voted->aid)
                                            @php($c=1)
                                            @break
                                        @endif
                                    @endforeach
                                @else
                                    @foreach($ans_vote as $ans_voted)
                                        @if($answer->id==$ans_voted->aid)
                                            @php($c=1)
                                            @break
                                        @else
                                            @php($c=2)
                                        @endif
                                    @endforeach
                                @endif
                                
<!-- ================================================ /check if voted or not ===================================================== -->
                                {{$c}}
                                @if($c==1)
                                    <div><i class="fa fa-check" style="font-size:40px;color: green;"></i></div>
                                @elseif($c==0)
                                    <div class="right"><i class="fa fa-check" style="font-size:40px;"></i>
                                        <input type="hidden" id="aid" value="{{$answer->id}}">
                                    </div>
                                    
                                @endif
                            </div>
                            <div class="media-body">
                                <h3>{{$answer->user}}</h3>
                                <h4>{{$answer->updated_at}}</h4>
                                <p>{{$answer->answer}}</p>
                                <!-- <a href="#">Reply</a> -->
                            </div>
                        </div>
                        @endforeach

                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Leave a Reply</h4>
                            </div> 
      
                            <form class="contact-form" role="form" method="POST" action="<?php echo "ans/submit?ids=$post->id"; ?>">
                                {{ csrf_field() }}
                                <div class="row">     
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label>Your Answer</label>
                                            <textarea name="answer" id="answer" required="required" class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form" method="POST" action="{{ url('/ques/search') }}">
                            {{ csrf_field() }}
                                <input type="text" class="form-control search_box" autocomplete="off" 
                                name="q_search" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->
         @endforeach

    </section><!--/#blog-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/vote.js')}}"></script>
</body>
</html>