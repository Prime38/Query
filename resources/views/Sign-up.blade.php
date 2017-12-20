<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up | Query</title>
    
    @include('part.navbar')


    <section id="blog" class="container">
        <div class="center">
            <h2>Registration Form</h2>
            <p class="lead">Register to get full access</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">

                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Sign Up</h4>
                                <p>Make sure you enter the(*)required information where indicate.</p>
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="signup.php" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>First Name *</label>
                                            <input type="text" placeholder="ex: Johan" name="firstname" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name *</label>
                                            <input type="text" placeholder="ex: Liebert" name="lastname" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Username *</label>
                                            <input type="text" placeholder="ex: john.94" name="username" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="email" placeholder="ex: xxxx@xxxx.com" name="email" class="form-control" required="required">
                                        </div>
                                         <div class="form-group">
                                            <label>Password *</label>
                                            <input type="text" placeholder="ex: 1Abcd234" name="password" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Sign Up</button>
                                        </div>                    
                                    </div>
                                   
                                        
                                    
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8--> 

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->

    @include('part.bottom')