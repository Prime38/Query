<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Users | Query</title>
    
    @include('part.navbar')
    <section id="blog" class="container">
        <div class="center">
            <h2>Users</h2>
            <p class="lead">Others who are using this web application</p>
        </div>

        <div class="blog">
            <div class="row">
                @foreach($users as $user)
                 <div class="col-md-8">
                        
                    <div class="blog-item">
                            <div class="col-sm-10 blog-content">
                                <h3><a href="<?php echo "account?ids=$user->id"; ?>">{{$user->name}}</a></h3>
                                
                            </div>
                    </div><!--/.blog-item-->
                        
                    
                </div><!--/.col-md-8-->
                @endforeach

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form" method="POST" action="{{ url('/user/search') }}">
                            {{ csrf_field() }}
                                <input type="text" class="form-control search_box" autocomplete="off" 
                                name="u_search" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                </aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

    @include('part.bottom')