@include('templates.header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <h1 class="mt-5 mb-5" align="center">REGISTRO DE USUARIO</h1>
            <div class="form-group mt-5 align-content-center">
                        <legend class="text-center header">Contact us</legend>
                        <div class="col-md-12 col-12 mb-2">
                            <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                        </div>

                        
                        <div class="col-md-12 mb-2">
                            <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                        </div>

                        <div class="col-md-12 mb-2">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                        </div>
                        
                        <div class="col-md-12 mb-2">
                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                        </div>

                        
                        <div class="col-md-12 mb-2">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                        </div>

                        <div class="col-md-12 text-center mb-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </div>

            </div>
        </div>
    </div>
</div>

@include('templates.footer')