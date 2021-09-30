@extends('layout.layout')
@section('title', 'Homepage')
@section('content')

    <div class="wholeWrapper">

        <!-- Hero -->
        @include('components.hero')

        <!-- Our Services -->
        @include('components.ourServices')

        <!-- News & Events -->
        @include('components.newsAndEvents')

    </div>

@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    .wholeWrapper {
        font-family: 'Open Sans', sans-serif
    }

    .myHero {
        height: 85vh;
        background: #003A6B;
    }

    @media (max-width: 768px) {
        .myHero {
            height: auto;
        }
    }

    .myHeadings {
        font-family: 'Raleway', sans-serif;
        text-align: center;
        font-weight: 600;
    }

    .glowingDivs {
        background: linear-gradient(-45deg, #58c39f, #4350d1);
    }

</style>
