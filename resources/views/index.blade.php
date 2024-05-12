<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Landing Page - Ge4Us Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#">Ge4Us</a>
            <a class="btn btn-primary" href="#">Sign In</a>
        </div>
    </nav>
    <!-- Masthead -->
    @include('components.masthead')
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                @include('components.icon', [
                    'style' => 'mb-5 mb-lg-0',
                    'icon' => 'icon-screen-desktop',
                    'hader' => 'Fully Responsive',
                    'body' => 'This theme will look great on any device, no matter the size!',
                ])
                @include('components.icon', [
                    'style' => 'mb-5 mb-lg-0',
                    'icon' => 'icon-layers',                
                    'hader' => 'Ge4Us 4 Ready',
                    'body' => 'Featuring the latest build of the new Ge4Us 4 framework!',
                ])
                @include('components.icon', [
                    'style' => 'mb-0',
                    'icon' => 'icon-check',
                    'hader' => 'Easy to Use',
                    'body' => 'Ready to use with your own content, or customize the source files!',
                ])
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            @include('components.image', [
                'img' => '1',
                'location' => 'order-lg-2',
                'hader' => 'Fully Responsive Design',
                'body' => "When you use a theme created by Ge4Us, you know that the theme will look great
                                                                    on any device, whether it's a phone, tablet, or desktop the page will behave responsively!",
            ])
            @include('components.image', [
                'img' => '2',
                'location' => '',
                'hader' => 'Updated For Ge4Us 4',
                'body' => "Newly improved, and full of great utility classes, Ge4Us 4 is leading the way
                                                            in mobile responsive web development! All of the themes on Ge4Us are now using Ge4Us 4!",
            ])
            @include('components.image', [
                'img' => '3',
                'location' => 'order-lg-2',
                'hader' => 'Easy to Use &amp; Customize',
                'body' => "Landing Page is just HTML and CSS with a splash of SCSS for users who demand
                                                            some deeper customization options. Out of the box, just add your content and images, and your
                                                            new landing page will be ready to go!",
            ])
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                @include('components.testimonials', [
                    'img' => '1',
                    'name' => 'Margaret E.',
                    'info' => 'This is fantastic! Thanks so much guys!',
                ])
                @include('components.testimonials', [
                    'img' => '2',
                    'name' => 'Fred S.',
                    'info' => "Ge4Us is amazing. I've been using it to create lots of supernice landing pages.",
                ])
                @include('components.testimonials', [
                    'img' => '3',
                    'name' => 'Sarah W.',
                    'info' => 'Thanks so much for making these free resources available to us!',
                ])




            </div>
        </div>
    </section>

    <!-- Call to Action -->
    @include('components.singup')
    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Ge4Us 2024. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
