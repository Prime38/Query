<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Questions | StackOverflow</title>
    
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
                                    <div class="post-tags">
                                        <strong>Catagory:</strong> <a>{{$post->catagory}}</a>
                                    </div>

                                    <div class="post-tags">
                                        <strong>Rating:</strong> <a>{{$post->q_rating}}</a>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a href="#">
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p>
                                <p>Here Will Be The Code Or Image... </p> </a>
                            </div>
                        </div> 
                        
                        <h1 id="comments_title">Answers</h1>
                        @foreach($answers as $answer)
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3>{{$answer->uid}}</h3>
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
                    <div class="widget tags">
                        <h3>Tag</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">HTML</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">CSS</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">JS</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">C</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">C#</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">JAVA</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">PYTHON</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">PHP</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">PERL</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">RUBY</a></li>
                        </ul>
                    </div><!--/.tags-->
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
</body>
</html>