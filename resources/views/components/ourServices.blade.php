<div class="wrapper">
    @include('components.homepage.chidCompanies')
    <h1 class="myHeadings text-2xl md:text-3xl lg:text-3xl mt-16 text-gray-500" data-aos-duration="1000"
        data-aos="fade-left">
        Our
        Services
    </h1>
    @include('components.dividerDiv')

    <div class=" w-full lg:w-1/2 h-auto px-10 mt-10 pt-20">
        <div class=" w-full h-48 flex justify-center">
            <div class="w-48 h-48 ml-20 absolute z-10 transform rotate-12">
                <div class=" flex justify-around">
                    <div class=" w-12 h-12 p-1 rounded-full overflow-hidden" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <img src="/images/spellsms-logo.png" class="w-full h-full object-contain" alt="">
                    </div>
                    <div class=" w-16 h-16 rounded-full p-1 overflow-hidden" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="300">
                        <img src="/images/spell-digital-logo.png" class="w-full h-full object-contain" alt="">
                    </div>
                </div>
                <div class=" w-8 h-8 rounded-full mx-auto overflow-hidden p-1" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="500">
                    <img src="/images/spellsoft-logo.png" class="w-full h-full object-contain" alt="">
                </div>
                <div class=" flex justify-around">
                    <div class=" w-14 h-14 rounded-full overflow-hidden p-1" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="700">
                        <img src="/images/spell-trading-logo.png" class="w-full h-full object-scale-down" alt="">
                    </div>
                    <div class=" w-12 h-12 rounded-full bg-gray-200 p-1 overflow-hidden shadow-lg" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="900"></div>
                </div>
            </div>
        </div>
        <lottie-player class="w-full h-96 -ml-24 -mt-32"
            src="https://assets9.lottiefiles.com/packages/lf20_rqhsm4ye.json" background="transparent" speed="1" loop
            autoplay>
        </lottie-player>
    </div>


    <div class="grid col-span-1 md:grid-cols-3 gap-5 mt-8 px-14">
        <div class="col-span-1 h-60 cursor-pointe rounded-2xl bg-blue-100 cursor-pointer flex-row justify-center items-center hover:shadow-xl transition ease-in-out duration-1000"
            data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_88z2psap.json" class="w-60 h-60 mx-auto"
                background="transparent" speed="1" loop autoplay>
            </lottie-player>
            <h1 class="text-center text-gray-500 font-semibold text-lg myHeadings -mt-14">
                Spell SMS
            </h1>
        </div>

        <div class="col-span-1 h-60 cursor-pointe rounded-2xl bg-green-100 cursor-pointer flex-row justify-center items-center hover:shadow-xl transition ease-in-out duration-1000"
            data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_FphqrJ.json" class="w-48 h-48 mx-auto"
                background="transparent" speed="1" loop autoplay>
            </lottie-player>
            <h1 class="text-center text-gray-500 font-semibold text-lg myHeadings">
                Spell Hosting
            </h1>
        </div>

        <div class="col-span-1 h-60 cursor-pointe rounded-2xl bg-gray-100 cursor-pointer flex-row justify-center items-center hover:shadow-xl transition ease-in-out duration-1000"
            data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_lln7m43m.json" class="w-48 h-48 mx-auto"
                background="transparent" speed="1" loop autoplay>
            </lottie-player>
            <h1 class="text-center text-gray-500 font-semibold text-lg myHeadings">
                Spell Soft
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
    .wrapper {
        overflow: hidden;
    }

</style>
