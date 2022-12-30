@props(['title'])

<div class="container py-5">
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            {{ $slot }}
        </div>
    </div>
</div>
