@include('layouts.header', ['title' => __('main.bannerCaption')])
<!-- Banner -->
<section id="banner" class="overflow-hidden position-relative">
    <div class="overlay bg-dark bg-opacity-50 w-100 h-100 position-relative z-3">
        <div class="container">
            <div class="content-wrapper" style="padding: 15em 0">
                <h2>{!!__('main.bannerCaption')!!}</h2>
                <p>{!!__('main.bannerText')!!}</p>
                <p><a class="btn btn-success btn-lg" href="#contact-us" role="button">{!!__('main.contactUs')!!}</a></p>
            </div>
        </div>
    </div>
    <video id="video-content" playsinline="playsinline" loop="loop" muted="" autoplay="autoplay" class="position-absolute start-0 top-0 z-2 invisible">
        <source class="video-backgroud-wrap-mp" src="" type="video/mp4">
        {{--<source class="video-backgroud-wrap-wbm" src="/images/vbackgraund.webm" type="video/webm">--}}
    </video>
</section><!-- One -->
<section class="wrapper align-center advantages">
    <div class="container">
        <header>
            <h2>{!!__('main.ourAdvantages')!!}</h2>
            <p>{!!__('main.advantagesText')!!}</p>
        </header>
        <div class="row d-flex advantages-list">
            <section class="col col-12 col-md-4 advantages-item">
                <p class="title mb-1">{!!__('main.advantagesOurExperiences')!!}</p>
                <i class="icon big fa-book lh-base"></i>
                <p>{!!__('main.advantagesOurExperiencesText')!!}</p>
            </section>
            <section class="col col-12 col-md-4 advantages-item">
                <p class="title mb-1">{!!__('main.advantagesFlexibleApproach')!!}</p>
                <i class="icon big fa-comments lh-base"></i>
                <p>{!! __('main.advantagesFlexibleApproachText') !!}</p>
            </section>
            <section class="col col-12 col-md-4 advantages-item">
                <p class="title mb-1">{!!__('main.advantagesPersonalization')!!}</p>
                <i class="icon big fa-cog lh-base"></i>
                <p>{!!__('main.advantagesPersonalizationText')!!}</p>
            </section>
        </div>
    </div>
</section>
<section id="team" class="wrapper style1 team">
    <div class="container">
        <h2 class="align-center">{!!__('main.ourTeam')!!}</h2>
        <div class="team-wrapper">
            <h3 class="text-light">{!!__('main.ourTeamCaption')!!}</h3>
            <p>{!!__('main.ourTeamText')!!}</p>
        </div>
    </div>
</section>
<section id="empower" class="wrapper style2 pb-2">
    <div class="container">
        <div class="header">
            <h2 class="align-center">{!!__('main.empowerCaption')!!}</h2>
        </div>
        <div class="empower-content-wrapper pb-5 pt-5">
            <div class="row empower-content-item">
                <div class="col-12 col-lg-4 pe-md-4 empower-content-item-iwrapper">
                    <img src="/images/image0001.png" alt="Data Strategy Consulting" style="width: 100%"/>
                </div>
                <div class="col-12 col-lg-8 pe-md-4 empower-content-item-cwrapper">
                    <h3 class="empower-content-item-label fw-bold align-center">{!!__('main.empowerBlock1Caption')!!}</h3>
                    <p>{!!__('main.empowerBlock1Text')!!}</p>
                </div>
            </div>
        </div>
        <div class="separator m-auto w-75 border-bottom"></div>
        <div class="empower-content-wrapper pb-5 pt-5">
            <div class="row flex-row-reverse empower-content-item">
                <div class="col-12 col-lg-4 pe-md-4 empower-content-item-iwrapper">
                    <img src="/images/image0002.png" alt="Data Analytics Consulting" style="width: 100%"/>
                </div>
                <div class="col-12 col-lg-8 pe-md-4 empower-content-item-cwrapper">
                    <h3 class="empower-content-item-label fw-bold align-center">{!!__('main.empowerBlock2Caption')!!}</h3>
                    <p>{!!__('main.empowerBlock2Text')!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="technologies" class="wrapper style2 pt-2 pb-2">
    <div class="container">
        <div class="header">
            <h2 class="align-center">{!!__('main.technologies')!!}</h2>
            <p>{!!__('main.technologiesText')!!}</p>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-md-4 mb-2">
                <div class="wrapper style1 rounded d-flex flex-column h-100 align-self-stretch">
                    <p class="align-center fw-bold pt-2">{!!__('main.technologiesBlock1Caption')!!}</p>
                    <p class="p-4 m-1 font-monospace">{!!__('main.technologiesBlock1Text')!!}</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <div class="wrapper style1 rounded d-flex flex-column h-100 align-self-stretch">
                    <p class="align-center fw-bold pt-2">{!!__('main.technologiesBlock2Caption')!!}</p>
                    <p class="p-4 m-1 font-monospace">{!!__('main.technologiesBlock2Text')!!}</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <div class="wrapper style1 rounded d-flex flex-column h-100 align-self-stretch">
                    <p class="align-center fw-bold pt-2">{!!__('main.technologiesBlock3Caption')!!}</p>
                    <p class="p-4 m-1 font-monospace">{!!__('main.technologiesBlock3Text')!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-us" class="wrapper style2">
    <div class="container">
        <div class="header">
            <h2 class="align-center">{!!__('main.contactCaption')!!}</h2>
            <p class="align-center">{!!__('main.contactText')!!}</p>
        </div>

        @if(session('success'))
            <div class="col-lg-4 alert alert-success">{{ __('main.messageSuccess') }}</div>
        @endif

        <form method="post" action="{{secure_url(route('sendMessage'))}}">
            <div class="row uniform">
                @csrf
                <div class="col-12 col-md-6 input-wrapper">
                    <label for="name">{!!__('main.contactFormName')!!}<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your name"
                           required="required"/>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 input-wrapper">
                    <label for="email">{!!__('main.contactFormEmail')!!}<span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                           placeholder="Enter your email" required="required"/>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 input-wrapper">
                    <label for="message">{!!__('main.contactFormMessage')!!}</label>
                    <textarea name="message" id="message" placeholder="Enter your message"
                              rows="6">{{ old('message') }}</textarea>
                </div>
                <div class="col-12 input-wrapper">
                    <input type="checkbox" id="copy" name="copy" required="required"/>
                    <label for="copy">{!!__('main.contactFormAccept')!!}<span class="text-danger">*</span></label>
                </div>
                <div class="col-12 input-wrapper">
                    <input type="submit" value="{!!__('main.contactFormSubmit')!!}" class="special">
                </div>
            </div>
        </form>
    </div>
</section>
@include('layouts.footer')
