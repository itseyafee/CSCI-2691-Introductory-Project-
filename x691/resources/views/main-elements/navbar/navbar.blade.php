<nav id="nav-bar">
    <div id="nav-bar-container" class="my-2">
    <div id="logo" class="mr-8">
        <a href ="/">
            <img class="h-8" src="{{url('/images/logo.png')}}" alt="logo"/>
        </a>
        </div>
        <div class="hidden w-full order-2 flex-col md:flex md:flex-row md:w-auto md:order-1" id="collapsable-navbar-container">
            <ul id="navbar-ul" class="flex-col md:flex-row md:space-x-8">
                <li>
                    <a href="{{ route('register') }}" class="text-white hover:text-white hover:no-underline bg-emerald-500 hover:bg-emerald-400 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-base px-3 py-2 mr-2 mb-2 focus:outline-none">
                        Client Registration
                    </a>
                </li>
                <li class="my-2">
                    <a class=" text-base text-gray-900 hover:underline">
                        X691 Student Observation Tool
                    </a>
                </li>
            </ul>
        </div>
        <div class="order-1 md:order-2 flex grow justify-end">
            <a href="/login" class="text-white hover:text-white hover:no-underline bg-emerald-500 hover:bg-emerald-400 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-base px-3 py-2 mr-2 mb-2 focus:outline-none">
                Login
            </a>
            <div class="md:hidden flex items-center ml-2">
                <button data-collapse-toggle="navbar-items navbar-toggler" type="button" id="nav-burger-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<script>
    const burgerBtnSelector = "#nav-burger-btn";
    const navbarContainerSelector = "#collapsable-navbar-container";

    let burgerBtn = document.querySelector(burgerBtnSelector);
    let navbarItems = document.querySelector(navbarContainerSelector)
    burgerBtn.addEventListener("click", () => {
        if (navbarItems.classList.contains("hidden")) {
            navbarItems.classList.remove("hidden");
        } else {
            navbarItems.classList.add("hidden");
        }
    })
</script>
