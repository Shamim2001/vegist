@props(['title' => 'Title Goes Here'])

<section class="about-breadcrumb">
    <div class="about-back section-tb-padding"
        style="background-image: url({{ asset('frontend/image/about-image.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="index1.html">Home</a></li>
                            <li class="about-p"><span>{{ $title }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
