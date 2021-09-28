<header>
    <div class="w-full flex h-24 justify-between px-20 py-3 items-center text-white">
        <div class=" w-52 h-24">
            <img src="https://spellinnovation.com/images/log.png" class="object-cover w-full h-full" alt="">
        </div>
        <div class=" hidden lg:flex space-x-10">
            <a href=""> Home </a>
            <a href=""> About Us </a>
            <a href=""> Contact Us </a>
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
        header.classList.toggle("sticky", window.scrollY > 300);
    })
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

    header {
        width: 100%;
        display: flex;
        transition: 0.6s;
        z-index: 10;
        background: #22292F;
    }

    .navLinks,
    .logoText {
        font-family: 'Righteous', cursive;
    }

    header.sticky {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0 50px;
        background: #E5E7EB;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(151, 110, 110, 0.05);
    }

    header.sticky a {
        color: black;
    }

    header .logo {
        position: relative;
        font-weight: 700;
        color: black;
        text-decoration: none;
        font-size: 2em;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: 0.6s;
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
