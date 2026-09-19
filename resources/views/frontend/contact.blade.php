@extends('layouts.frontendLayout')
@section('title')
Contact
@endsection
@section('content')

    <section class="d-lg-none d-flex">
        <div class="container">
            <div class="contactCardMb">
                <div class="row align-item-center">
                    <div class="col-4">
                        <a href="#">
                        <iconify-icon class="text-center" icon="tdesign:location"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            2715 Ash Dr. San Jose, <br> South Dakota 83475
                        </a>
                    </div>
                </div>
            </div>
            <div class="contactCardMb">
                <div class="row align-item-center">
                    <div class="col-4">
                        <a href="#">
                        <iconify-icon class="text-center" icon="streamline-cyber:email-2"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            Proxy@gmail.com <br> Help.proxy@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="contactCardMb">
                <div class="row align-item-center">
                    <div class="col-4">
                        <a href="#">
                        <iconify-icon class="text-center" icon="mingcute:phone-call-line"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            (219) 555-0114 <br>(164) 333-0487
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row align-item-center">
                <div class="contactCardFull col-lg-4 d-none d-lg-block">
                    <div class="contactCard">
                        <a href="#">
                        <iconify-icon class="text-center" icon="tdesign:location"></iconify-icon>
                        <p>2715 Ash Dr. San Jose, <br> South Dakota 83475</p>
                        </a>
                    </div>
                    <div class="contactCard">
                        <a href="#">
                        <iconify-icon class="text-center" icon="streamline-cyber:email-2"></iconify-icon>
                        <p>Proxy@gmail.com <br> Help.proxy@gmail.com</p>
                        </a>
                    </div>
                    <div class="contactCard">
                        <a href="#">
                        <iconify-icon class="text-center" icon="mingcute:phone-call-line"></iconify-icon>
                        <p>(219) 555-0114 <br>(164) 333-0487</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cardHello">
                    <div class="container">                  
                            <h2>Just Say Hello!</h2>
                            <p>Do you fancy saying hi to me or you want to get started with your <br> project and you need my help? Feel free to contact me.</p>
                            </div>
                            <div class="row align-item-center">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
                                @endif

                                <form action="{{ route('frontend.contact.send') }}" method="POST">
                                    @csrf
                                    <input class="one col" type="text" name="name" placeholder="Template Cookie" value="{{ old('name') }}" required>
                                    <input class="one col" type="email" name="email" placeholder="zakirsoft@gmail.com" value="{{ old('email') }}" required>
                                    <input id="two" type="text" name="subject" placeholder="Hello" value="{{ old('subject') }}" required>
                                    <textarea name="message" placeholder="Write your message" required>{{ old('message') }}</textarea>
                                    <button class="massage" type="submit">Send Message</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        
        <div class="embed-map-responsive"><div class="embed-map-container"><iframe class="embed-map-frame" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=626&height=400&hl=en&q=bangladesh&t=p&z=14&ie=UTF8&iwloc=B&output=embed"></iframe><a href="https://funclicker.org" style="font-size:2px!important;color:gray!important;position:absolute;bottom:0;left:0;z-index:1;max-height:1px;overflow:hidden">Fun Clicker</a></div><style>.embed-map-responsive{position:relative;text-align:right;width:100%;height:0;padding-bottom:63.897763578274756%;}.embed-map-container{overflow:hidden;background:none!important;width:100%;height:100%;position:absolute;top:0;left:0;}.embed-map-frame{width:100%!important;height:100%!important;position:absolute;top:0;left:0;}</style></div>
        
    </section>

@endsection