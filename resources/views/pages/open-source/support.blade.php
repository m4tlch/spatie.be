@extends('layout.default', [
        'background' => '/backgrounds/open-source.jpg',
        'title' => 'Support us',
        'description' => 'Learn how to support us via our paid products or via Patreon.',
])

@section('content')

    @include('pages.open-source.partials.banner-support')

    <div class="section-group pt-0">
        <section id="resources" class="section">
            <div class="wrap">
                <div class="markup links-underline links-blue">
                    <h3 class="title">Visit our shop</h3>
                    <p class="text-lg">
                        The easiest way to support us financially is by buying or subscribing to one of our paid products.
                        We tried to put as much love into these as in our open source work—and we hope it shows.
                    </p>
                    <div class="my-16 inset-green">
                        <div class="wrap-inset md:items-center" style="--cols: 1fr">
                            <h2 class="title-xl">
                                Our products
                            </h2>
                            <ul class="text-2xl links-white links-underline bullets bullets-white leading-tight">
                                <li>
                                    <span class="icon">{{ svg('icons/far-angle-right') }}</span> 
                                    <a href="https://mailcoach.app/register">
                                        Mailcoach.app</a>
                                    <br><span class="text-base">Self-host your email newsletter campaigns. 
                                        <br>
                                        Includes <a href="https://mailcoach.app/videos">a video course</a> on how to improve your Laravel skills.<br>
                                        For only <strong>$149</strong>.</span>
                                </li>
                                <li class="pt-4">
                                    <span class="icon">{{ svg('icons/far-angle-right') }}</span> 
                                    <a href="https://flareapp.io/register">Flareapp.io</a>
                                    <br>
                                    <span class="text-base">Error tracker for Laravel, made together with <a href="https://beyondco.de" target="_blank" rel="nofollow noreferrer noopener">Beyondco.de</a>
                                    <br>
                                    From <strong>$29/Mo</strong>.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
               
                <div class="markup links-underline links-blue">
                    <h3 class="title">Your helping hand</h3>
                    <p class="text-lg">
                        You can help with our open source efforts in many ways: by resolving <a href='https://github.com/issues?q=is%3Aopen+is%3Aissue+user%3Aspatie+is%3Apublic+label%3A%22good+first+issue%22'
                        class="link-black">open issues</a> or just by sending us a <a href="{{ route('open-source.postcards') }}">postcard</a>. An easy way to send us a postcard is via <a href="https://spatie.cards">spatie.cards</a>.
                    </p>
                </div>

            </div>
        </section>

        <section class="section">
            @include('pages.open-source.partials.patreon')
        </section>
    </div>

@endsection
