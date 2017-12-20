<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inbox | Query</title>
    
@include('part.navbar')

    <section id="blog" class="container">
        <div class="center">
            <h2>Messages</h2>
            <p class="lead">Connect with people</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">

                        @foreach($query as $q1)
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a><img src="images/blog/girl.png" class="img-circle" alt=""></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3>{{$q1->from}}</h3>
                                <h4>{{$q1->created_at}}</h4>
                                <p>{{$q1->message}}</p>
                            </div>
                        </div> 
                        @endforeach
        


                        <div id="contact-page clearfix">
                            <form class="contact-form" method="post" action="<?php echo "send/message?ids=$q1->for"; ?>" role="form">
                                {{ csrf_field() }}
                               <div class="row">     
                                    <div class="col-sm-7">   
                                        <div class="form-group">
                                            <label>Reply</label>
                                            <textarea name="message" id="message" required="required" placeholder="Your Message" class="form-control" rows="8"></textarea>
                                        </div>  
                                                           
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div>
                </div><!--/.col-md-8-->

                    

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->

    @include('part.bottom')