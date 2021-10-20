<style>

body {
    background: #f5f5f5
}

.rounded {
    border-radius: 1rem
}

.nav-pills .nav-link {
    color: #555
}

.nav-pills .nav-link.active {
    color: white
}

input[type="radio"] {
    margin-right: 5px
}

.bold {
    font-weight: bold
}


html,body,.wrapper{
    background: #f7f7f7;
}
.steps {
    margin-top: -41px;
    display: inline-block;
    float: right;
    font-size: 16px
}
.step {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
    position: relative
}
.step_line {
    margin: 0;
    width: 0;
    height: 0;
    border-left: 16px solid #fff;
    border-top: 16px solid transparent;
    border-bottom: 16px solid transparent;
    z-index: 1008;
    position: absolute;
    left: 99px;
    top: 1px
}
.step_line.backline {
    border-left: 20px solid #f7f7f7;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    z-index: 1006;
    position: absolute;
    left: 99px;
    top: -3px
}
.step_complete {
    background: #357ebd
}
.step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
    color: #eee;
}
.step_line.step_complete {
    background: 0;
    border-left: 16px solid #357ebd
}
.step_thankyou {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
}
.step.check_step {
    margin-left: 5px;
}
.ch_pp {
    text-decoration: underline;
}
.ch_pp.sip {
    margin-left: 10px;
}
.check-bc,
.check-bc:hover {
    color: #222;
}
.SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
}

.btn-xs{
    line-height: 28px;
}

/*login form*/
.login-container{
    margin-top:30px ;
}
.login-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login-container-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #357ebd;/*#4d90fe;*/
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-container-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-help{
  font-size: 12px;
}

.asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
}

/* images*/
ol, ul {
  list-style: none;
}
.hand {
  cursor: pointer;
  cursor: pointer;
}
.cards{
    padding-left:0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .mastercard {
  background-position: -51px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .amex {
  background-position: -102px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards li:last-child {
  margin-right: 0;
}
/* images end */



/*
 * BOOTSTRAP
 */
.container{
    border: none;
}
.panel-footer{
    background:#fff;
}
.btn{
    border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
    border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
    border-radius: 1px;
}

.panel-info {
    border-color: #999;
}

.panel-heading {
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
}
.panel {
    border-radius: 1px;
}
.panel-info > .panel-heading {
    color:#f1f5f8;
    border-color: #999;
}
.panel-info > .panel-heading {
    background-image: linear-gradient(to bottom, #555 0px, #888 100%);
}

hr {
    border-color: #999 -moz-use-text-color -moz-use-text-color;
}

.panel-footer {
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    border-top: 1px solid #999;
}

.btn-link {
    color: #888;
}

hr{
    margin-bottom: 10px;
    margin-top: 10px;
}

/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
    .span1{
        margin-bottom: 15px;
        clear:both;
    }
}

@media only screen and (max-width: 764px){
    .inverse-1{
        float:right;
    }
}

@media only screen and (max-width: 586px){
    .cart-titles{
        display:none;
    }
    .panel {
        margin-bottom: 1px;
    }
}

.form-control {
    border-radius: 1px;
}

@media only screen and (max-width: 486px){
    .col-xss-12{
        width:50%;
    }
    .cart-img-show{
        display: none;
    }
    .btn-submit-fix{
        width:100%;
    }
    
}
/*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/



  </style>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@php
        $stripe_key = 'pk_test_51J8iBHC5LDWr1mcMaSoqEdYEEgHSezEG8R8IUp9AFx8TY9OXg00Mi1vN3xc0B9avL6P8Hnzyi1tEh29w7NjHw1x900GXDqxWG5';
    @endphp
<div class="container wrapper">
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <span class="step step_complete"> <a href="#" class="check-bc">Choosing</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                        <span class="step step_complete"> <a href="#" class="check-bc">Payment</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                        <span class="step_thankyou check-bc step_complete">Thank you</span>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>    
            <div class="row cart-body">
             <form action="{{route('checkout.credit-card')}}"  method="post" id="payment-form">
                        @csrf   
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class=" text-center panel-heading"style="font-size: 16px; color:#dfdfdf" >
                            Review Rental <div class="pull-right"><small><a class="afix-1" href="#"></a></small></div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                            
                        @foreach($bike_details as $bike)
                                <div class="col-sm-3 col-xs-3">
                                
                                    <img class="img-responsive" src="../uploads/{{$bike->bikepic}}" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">{{$bike->bikename}} </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="col-xs-12">Rent Days: <input style="width:50px;border:none transparent" name = "num_nights" id="num_nights"></label></div>
                                </div>
                                <div class="col-sm-3 col-xs-5 text-right bikeprice">
                                <span>₱</span>
                                    <input style="width:60px;border:none transparent"id="bikeprice" name="bikeprice" value="{{$bike->bikeprice}}">
                                <br>
                                <br>
                                <br>
                                <span>₱</span>
                                    <input style="width:60px;border:none transparent"id="Totxdays" name="Totxdays">
                            </div>
                               
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <br>
                                    <strong>Subtotal  </strong><small>(60% Payment)</small>
                                    <div class="pull-right"><span>₱</span>
                                        <input style="width:60px;border:none transparent"id="sub" name="sub" >
                                </div>
                                </div>
                                <div class="col-xs-12">
                                <div class="form-group"><hr /></div>
                                    <strong>Transaction Fee</strong>
                                    
                                    <div class="pull-right"><span>₱</span>
                                    <input style="width:60px;border:none transparent"id="transfee" name="transfee"></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <div class="form-group"><hr /></div>
                                    <strong>Book Total</strong>
                                    <div class="pull-right"><span>₱</span>
                                    <input style="width:60px;border:none transparent"id="total_amount" name="total_amount">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-6 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                                                    <div class="panel panel-info">
                                                        <div class="text-center panel-heading"style="font-size: 16px; color:#dfdfdf;">Booking</div>
                                                        <div class="panel-body"> 
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-xs-12">
                                                                    <strong>First Name:</strong>
                                                                    <input type="text" name="first_name" class="form-control" value="{{ Auth::user()->fname }}" required/>
                                                                </div>
                                                                <div class="span1"></div>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <strong>Last Name:</strong>
                                                                    <input type="text" name="last_name" class="form-control" value="{{ Auth::user()->lname }}" required />
                                                                </div>
                                                            </div>                                                        
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Phone Number:</strong></div>
                                                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="{{ Auth::user()->number }}"  required/></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Email Address:</strong></div>
                                                                <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="{{ Auth::user()->email }}" required /></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Start Date:</strong></div>
                                                                <div class="col-md-12"><input  name="rent_start_date" id="rent_start_date" class="form-control" autocomplete="off"  required /></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>End Date:</strong></div>
                                                                <div class="col-md-12"><input  name="rent_end_date" id="rent_end_date" class="form-control"  required  autocomplete="off"/></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Pick Up Address:</strong></div>
                                                                <div class="col-md-12">
                                                                    <textarea type="text" name="address" class="form-control" value="" required></textarea>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                    <!--SHIPPING METHOD END-->
                   
                    <!--CREDIT CART PAYMENT-->
                    <div class="panel panel-info">
                        <div class="text-center panel-heading" style="font-size: 16px; color:#dfdfdf;"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
                        <div class="panel-body">
                           <br>
                           <div class="form-group">
                                            <div class="col-md-12">
                                                <span>Pay secure using your credit card.</span>
                                            </div>
                                    <div class="col-md-12">
                                                <ul class="cards">
                                                    <li class="visa hand">Visa</li>
                                                    <li class="mastercard hand">MasterCard</li>
                                                    <li class="amex hand">Amex</li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <br>
                                            <br> <br> <br>
                                        <div class="form-group">
                                                <div class="col-md-12"><label for="card-element">
                                                    Enter your credit card information</label>
                                                </div>
                                            </div>
                                                <div id="card-element">
                                                
                                                    
                                                </div>
                                                <!-- A Stripe Element will be inserted here. -->
                                                
                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                                <input type="hidden" name="plan" value="" />
                                                <input style="width:60px;border:none transparent"type = "hidden"id="bike_id" name="bike_id" value="{{$bike->id}}" required >
                                                <input style="width:60px;border:none transparent"type = "hidden"id="user_id" name="user_id" value="{{Auth::user()->id}}" required >
                                                <input style="width:60px;border:none transparent"type = "hidden"id="rent_status" name="rent_status" value="1" required >
                                                <input style="width:60px;border:none transparent"type = "hidden"id="remarks" name="remarks" value="Ongoing" required >
                                                <input style="width:60px;border:none transparent"type = "hidden"id="payment_type" name="payment_type" value="1" required >
                                                <input style="width:60px;border:none transparent"type = "hidden"id="paid_by" name="paid_by" value="card" required >
                                                <input style="width:60px;border:none transparent"type = "hidden"id="bikeprice" name="bikeprice" value="{{$bike->bikeprice}}">
                                                <input style="width:60px;border:none transparent"type = "hidden"id="personnumber" name="personnumber" value="{{$bike->personnumber}}">
                                                <input style="width:60px;border:none transparent"type = "hidden"id="message" name="message" value="
                                                                                                                                                   Someone Have Booked on Your posting please message 
                                                                                                                                                   Renter's name :{{ Auth::user()->fname }} {{ Auth::user()->lname }}
                                                                                                                                                   This number:{{ Auth::user()->number }}
                                                                                                                                                   For Validation">
                                                
                                                
                                            </div>
                                            <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <button type="submit" class="btn btn-primary btn-submit-fix" id="card-button"
                                    class="btn btn-dark"
                                    type="submit"
                                    data-secret="{{ $intent }}">Place Order</button>
                                                </div>
                                            </div>
                                            @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    <!--CREDIT CART PAYMENT END-->
            </div>
                
            </form>
        </div>
        </div>
    <div class="row cart-footer">
        
</div>
</div>
<script  src="{{asset('js/moment/moment-with-locales.min.js')}}"></script>
<script>
            
            function showDays() {
                var start = $('#rent_start_date').datepicker('getDate');
                var end = $('#rent_end_date').datepicker('getDate');
                var bikeprice = document.getElementById("bikeprice").value;
                
                if (!start || !end) return;
                var days = (end - start) / 1000 / 60 / 60 / 24;
                $('#num_nights').val(days);
                $('#Totxdays').val(days* bikeprice);
                var Totxdays = document.getElementById("Totxdays").value;
                $('#sub').val(Totxdays *0.6);
                var sub = document.getElementById("sub").value;
                $('#transfee').val(sub*0.10);
                var transfee = document.getElementById("transfee").value;
                var total = parseInt(sub) + parseInt(transfee);
                $('#total_amount').val(total); 
            }
            var dateToday = new Date();
            $("#rent_start_date").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: showDays,
                minDate: dateToday,
                onSelect: function() {
             dateSelect($('#rent_start_date').val())
        },
                onClose: function( selectedDate ) {
                    var dParts = selectedDate.split('-');
                    var in30Days = new Date(dParts[2] + '/' +
                                    dParts[1] + '/' +
                                    (+dParts[0] + 30)
                        );
                $( "#dep_darent_end_datete" ).datepicker( "option", "minDate", in30Days );
                }
            });
            $("#rent_end_date").prop('disabled',true)
           /* $("#rent_end_date").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: showDays,
            });*/

            function dateSelect(start_date)
            {
                var date = new Date(start_date);
                date.setDate( date.getDate()+ 1);
                 var newdate = moment(date).format('YYYY-MM-DD')
                $("#rent_end_date").prop('disabled',false).datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: showDays,
                minDate: newdate,
            })
            }
      </script>  




    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)

        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
    
        const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
       
        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
    
        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    
        // Handle form submission.
        var form = document.getElementById('payment-form');
    
        form.addEventListener('submit', function(event) {
            event.preventDefault();
    
        stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
            .then(function(result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    form.submit();
                }
            });
        });
    </script>