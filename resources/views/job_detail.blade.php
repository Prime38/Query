<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | StackOverflow</title>
    
    @include('part.navbar')


    <section id="blog" class="container">
        <div class="center">
            @foreach($job as $jobs)
            <h2>Job</h2>
            <p class="lead">Begin Your Carrier</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                            <div class="row">  
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>{{$jobs->post}}</h2>
                                    <div class="post-tags">
                                        <strong>Requirement:</strong> <a>{{$jobs->requirements}}</a>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <a>
                                <p>{{$jobs->details}}</p> </a>
                            </div>
                        </div> 
                        
                        @endforeach


                        <!-- <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Your Query</h4>
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">     
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label>Your Query</label>
                                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div> --><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                    

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->

    @include('part.bottom')