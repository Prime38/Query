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
                                        <strong>Requirement:</strong>{{$jobs->requirements}}
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <p>{{$jobs->details}}</p>
                            </div>
                        </div>
                        
                        @endforeach
                    </div><!--/.col-md-8-->

                    

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->

    @include('part.bottom')