<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Job | Query</title>
    
@include('part.navbar')
    <section id="blog" class="container">
        <div class="center">
            <h2>Jobs</h2>
            <p class="lead">Demonstrate with your skills </p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                        @foreach($job as $jobs)
                    <div class="blog-item">
                            <div class="col-sm-10 blog-content">
                                <h3><a href="{{url('/').'/job_detail?ids='.$jobs->id}}">{{$jobs->post}}</a></h3>
                                
                            </div> 
                    </div><!--/.blog-item-->
                    @endforeach
                        
                    <!--  <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul> --><!--/.pagination -->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <div class="widget search">
                        <form role="form" method="POST" action="{{ url('/job/search') }}">
                            {{ csrf_field() }}
                                <input type="text" class="form-control search_box" autocomplete="off" 
                                name="j_search" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                    </div><!--/.search-->
                    <!-- <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computers</a></li>
                                    <li><a href="#">Smartphone</span></a></li>
                                    <li><a href="#">Gedgets</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div> --><!--/.categories-->
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

    @include('part.bottom')