@extends('layouts.app')

@section('title', 'Discover new packages for Laravel Nova')
@section('meta')
    @og('title', 'Discover new packages for Laravel Nova')
    @og('type', 'website')
    @og('url', url('/'))
    @og('image', url('images/nova-packages-opengraph.png'))
    @og('description', 'Discover new packages for Laravel Nova. Search, browse, or submit your own packages.')
    @og('site_name', 'Nova Packages')

    <meta name="description" content="Discover new packages for Laravel Nova. Search, browse, or submit your own packages" />
@endsection

@section('content')
    <div class="container mx-auto mb-4">
        <img src="/images/hero.svg" alt="Laravel Nova hero" class="w-full md:w-2/3 lg:w-1/2 mx-auto block">
    </div>
    <x-status/>
    <package-index
        :auth="{{ auth()->check() ? 'true' : 'false' }}"
        :type-tags="{{ json_encode($typeTags) }}"
        :popular-tags="{{ json_encode($popularTags) }}"
        :initial-popular-packages="{{ json_encode($popularPackages) }}"
        :initial-recent-packages="{{ json_encode($recentPackages) }}"
        :initial-packages="{{ json_encode($packages) }}">
    </package-index>

    <div v-if="false" class="text-4xl text-center text-grey tracking-wide py-8 my-8">LOADING...</div>
@endsection
