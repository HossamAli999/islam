@extends('layouts.app')

@section('content')
<section id="contact-info">
    <div class="center">
      <div style="margin-bottom: 25px;"></div>
        <h2>How to Reach Us?</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe
                        
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.76973612008!2d31.328504771433025!3d30.059469890556073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2z2KfZhNmC2KfZh9ix2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1660922295520!5m2!1sar!2seg"
                            width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>hossam</h5>
                                <p>Cairo<br>
                                    Egypt</p>
                                <p>Phone:+201128852195 <br>
                                    Email Address:hossam.anber6@gmail.com</p>
                            </address>
                        </li>
                        <li class="col-sm-6">
                            <address>
                                <h5>site</h5>
                                <p>hossamali.codes <br>
                                    {{-- Tumon, MP 96911</p> --}}
                                {{-- <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p> --}}
                            </address>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-page">
    <div class="container">
        <div class="center">
          <div style="margin-bottom: 25px;"></div>

            <h2>Drop Your Message</h2>
            <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display:none"></div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
            <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
              {{-- @csrf --}}
              {{ csrf_field() }}
            {{-- <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php"> --}}
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" required="required">
                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                        <label>Phone *</label>
                        <input type="number" name="phone" class="form-control">
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success btn-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
