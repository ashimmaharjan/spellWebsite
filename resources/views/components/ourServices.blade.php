<div class="mt-14 justify-center">
    <h1 class="myHeadings text-2xl md:text-3xl lg:text-4xl font-semibold" data-aos-duration="1000" data-aos="fade-up">
        Our
        Services
    </h1>
    <div class="w-32  md:w-40 h-0.5 md:h-1 bg-gray-900 rounded-full mt-2 mx-auto" data-aos="fade-right"
        data-aos-duration="1000" data-aos-delay="200">
    </div>

    <div class="grid col-span-1 md:grid-cols-3 gap-5 mt-5 px-14" data-aos="fade-up" data-aos-duration="1000"
        data-aos-delay="200">
        <div class="col-span-1 h-96 blob-1 cursor-pointer">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_88z2psap.json" class="w-52 h-52 -mt-5"
                background="transparent" speed="1" loop autoplay>
            </lottie-player>
            <h1 class="text-center font-semibold text-lg myHeadings -mt-12">
                Spell SMS
            </h1>
        </div>
        <div class="col-span-1 h-96 blob-2 cursor-pointer">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_FphqrJ.json" class="w-44 h-44"
                background="transparent" speed="1" loop autoplay>
            </lottie-player>
            <h1 class="text-center font-semibold text-lg myHeadings">
                Spell Hosting
            </h1>
        </div>

        <div class="col-span-1 h-96 blob-3 cursor-pointer">
            <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_b4aihw1r.json" class="w-40 h-40"
                background="transparent" speed="1" loop autoplay>
            </lottie-player>
            <h1 class="text-center font-semibold text-base myHeadings -ml-5 mt-2">
                Spell Digital Media
            </h1>
        </div>

    </div>

    <div class=" grid col-span-1 md:grid-cols-2 gap-5 px-5 lg:px-14 py-3 mt-5">
        <!-- Spell Hosting  -->
        @include('components.services.spellHosting')
        @include('components.emptyDiv')

        <!-- Spell SMS -->
        @include('components.emptyDiv')
        @include('components.services.spellSMS')


        <!-- Spell Soft -->
        @include('components.services.spellSoft')
        @include('components.emptyDiv')

        <!-- Spell Digital Media -->
        @include('components.emptyDiv')
        @include('components.services.spellDigitalMedia')


        <!-- Spell Trading -->
        @include('components.services.spellTrading')
        @include('components.emptyDiv')

        <!-- EduSpell -->
        @include('components.emptyDiv')
        @include('components.services.eduSpell')

    </div>
</div>

<style>
    .blob-1 {
        background: url('/images/blob-1.svg');
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .blob-2 {
        background: url('/images/blob-2.svg');
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .blob-3 {
        background: url('/images/blob-3.svg');
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

</style>
