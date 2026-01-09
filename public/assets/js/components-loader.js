$(document).ready(function () {
    // Load Navbar
    $("#navbar-placeholder").load("/navbar.html", function () {
        console.log("Navbar loaded successfully.");

        // 1. Highlight Active Link
        // 1. Highlight Active Link
        var path = window.location.pathname; // e.g. "/shop" or "/"

        // Reset active classes
        $('.main-menu ul li').removeClass('active');

        // Find link matching current page
        var $link = $('.main-menu ul li a').filter(function () {
            var href = $(this).attr('href');
            if (!href) return false;

            // Match root
            if (path === "/" && (href === "/" || href === "index.html")) return true;

            // Match other routes (e.g. /shop matches /shop)
            // We strip leading slash from path for comparison if href doesn't have it, 
            // but my hrefs are "/shop" so exact match is best.
            if (path !== "/" && href === path) return true;

            return false;
        });
        $link.parent().addClass('active');


        // 2. Initialize MeanMenu (Mobile Menu)
        if ($.fn.meanmenu) {
            $('#mobile-menu').meanmenu({
                meanMenuContainer: '.mobile-menu',
                meanScreenWidth: "1199",
                meanExpand: ['<i class="far fa-plus"></i>'],
            });
        }

        // 3. Re-bind Offcanvas & Sidebar Events
        $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });
        $(".sidebar__toggle").on("click", function () {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
        });

        // 4. Re-bind Search Events (copied from main.js)
        const $searchWrap = $(".search-wrap");
        const $navSearch = $(".nav-search");
        const $searchClose = $("#search-close");

        $(".search-trigger").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).addClass("open");
        });

        $(".search-close").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).removeClass("open");
        });

        // Re-bind click outside to close search (from main.js logic)
        $(document.body).on("click", function (e) {
            // simplified logic: if generic logic in main.js handles 'closeSearch', we might rely on it
            // but 'closeSearch' function isn't global.
            // We'll duplicate the logic for safety or assume main.js's body listener works 
            // IF it doesn't scoped variables reference.
            // main.js body listener uses 'closeSearch' variable which is scoped there. 
            // So we must duplicate it if we want it to work for OUR inserted elements if main.js failed to bind.
            // However, `$(document.body).on("click")` is global, so main.js WILL catch clicks.
            // The problem is `closeSearch()` in main.js uses `$searchWrap` which was selected on load.
            // If `search-wrap` is dynamic, `$searchWrap` in main.js is empty.
            // So we DO need to handle closing here.

            // Check if click target is search trigger or input
            if (!$(e.target).closest('.search-trigger, .main-search-input').length) {
                if ($searchWrap.is(":visible")) {
                    $searchWrap.fadeOut(200);
                    $navSearch.add($searchClose).removeClass("open");
                }
            }
        });

        $(".search-trigger, .main-search-input").on("click", function (e) {
            e.stopPropagation();
        });

    });

    // Load Footer
    $("#footer-placeholder").load("/footer.html", function () {
        console.log("Footer loaded successfully.");
    });
});
