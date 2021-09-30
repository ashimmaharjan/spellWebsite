<header>
    <div class="w-full flex h-24 justify-between px-20 py-3 items-center text-white">
        <div class=" w-52 h-24 logo">

        </div>
        <div class=" hidden lg:flex space-x-10">
            <a href=""
                class="hover:bg-gray-200 hover:text-gray-800 px-3 py-1 rounded-md transition ease-in-out duration-300">
                Home </a>
            <a href=""
                class="hover:bg-gray-200 hover:text-gray-800 px-3 py-1 rounded-md transition ease-in-out duration-300">
                Our Services </a>
            <a href=""
                class="hover:bg-gray-200 hover:text-gray-800 px-3 py-1 rounded-md transition ease-in-out duration-300">
                Projects </a>
            <a href=""
                class="hover:bg-gray-200 hover:text-gray-800 px-3 py-1 rounded-md transition ease-in-out duration-300">
                About Us </a>
            <a href=""
                class="hover:bg-gray-200 hover:text-gray-800 px-3 py-1 rounded-md transition ease-in-out duration-300">
                Contact Us </a>
        </div>

        <div class="block lg:hidden">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</header>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

    header {
        width: 100%;
        display: flex;
        transition: 0.6s;
        z-index: 9999;
        background: #003A6B;
    }

    .navLinks,
    .logoText {
        font-family: 'Righteous', cursive;
    }

    header.sticky {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0 30px;
        background: #42C3F7;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(151, 110, 110, 0.05);
    }


    header .logo {
        background: url("/images/spell_logo.svg");
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: -20px;
    }

    header .sticky .logo {
        background: url("/images/sticky_logo.png");
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: -20px;
    }

    header ul {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header ul li {
        position: relative;
        list-style: none;
    }

    header .sticky .navLinks .stickyNavLinks {
        color: white;
    }

</style>
