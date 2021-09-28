@extends('layout.layout')
@section('title', 'Homepage')
@section('content')

    <div class=" w-full myHero" style="background: #22292F;">
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-3">
            <div class=" col-span-1 text-white pt-32">
                <h2 class="text-center text-6xl myheadings" data-aos="fade-right" data-aos-duration="2000"> Spell Innovation
                </h2>
                <br>
                <p class="text-yellow-400 text-lg italic text-center" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="100"> Innovation for Better Life </p>
            </div>

            <div class=" col-span-1 flex justify-center items-center">
                <div data-aos="zoom-out" data-aos-duration="2000">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_mnek7m6l.json" class="w-full h-full"
                        background="transparent" speed="1" loop autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 justify-center">
        <h1 class="myHeadings text-5xl"> Our Services </h1>
        <div class="w-52 h-1 bg-gray-500 rounded-full mt-2 mx-auto"></div>

        <div class=" grid col-span-1 md:grid-cols-2 lg:grid-cols-3 gap-5 px-5 lg:px-14 py-3 mt-5">
            <div class="col-span-1 h-64 rounded shadow cursor-pointer hover:shadow-lg py-5">
                <div class="w-40 h-40 rounded-full mx-auto p-2 bg-white">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_T6LUqw.json" class="w-full-h-full"
                        background="transparent" speed="1" loop autoplay>
                    </lottie-player>

                    <h1 class="text-center font-semibold text-xl mt-3"> Spell Hosting </h1>
                </div>
            </div>
            <div class="col-span-1 h-52 bg-green-400 rounded shadow"></div>
            <div class="col-span-1 h-52 bg-green-400 rounded shadow"></div>
        </div>
    </div>
    <div class=" w-full h-96 mt-10 bg-blue-500 text-6xl text-center py-10">
        section 2
    </div>


@endsection
<style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap');

    .myHero {
        height: 90vh;
        border-radius: 0 0 30px 30px;
    }

    @media (max-width: 768px) {
        .myHero {
            height: 110vh;
        }
    }

    .myHeadings {
        font-family: 'Zen Tokyo Zoo', cursive;
        text-align: center;
    }

</style>
