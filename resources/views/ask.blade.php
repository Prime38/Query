<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ask | Query</title>
    
@include('part.navbar')

    <section id="blog" class="container">
        <div class="center">
            <h2>Ask</h2>
            <p class="lead">TO LEARN</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Post A Question</h4>
                                <p>Make sure you enter the(*)required information where indicate.</p>
                            </div> 
      
                            <form class="contact-form" role="form" method="POST" action="{{ url('/ask/submit') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="title">Title *</label>
                                            <input type="text" class="form-control" name="title" required="required">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Catagory</label>
                                            <input type="text" class="form-control" name="catagory" required="required">
                                        </div>                   
                                    </div>
                                    <div class="col-sm-7">                        
                                        <div class="form-group">
                                            <label>Question *</label>
                                            <textarea name="question" id="message" required="required" name="question"  class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Post </button>
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

    </section><!--/#blog-->

    @include('part.bottom')