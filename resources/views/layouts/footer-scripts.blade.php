<!-- main script file  -->
<script src='{{asset("assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4")}}' async></script>
{{-- Search Script Ajax  --}}
<script src='{{asset("search.js")}}' type="module" async></script>
{{-- Livewire Scripts --}}
@livewireScripts()
{{-- Powergrid Livewire Datatable Scripts --}}
@powerGridScripts()




{{-- <link rel="stylesheet" href="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.css" /> --}}
<script src="https://unpkg.com/simplebar@5.3.0/dist/simplebar.min.js"></script>



<script>
    const simplebarElements = document.querySelectorAll('.simplebar');
    simplebarElements.forEach(el => new SimpleBar(el));
</script>


<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('aside');
        const mainContent = document.getElementById('main-content');
        const sidebarToggle = document.querySelector('#sidebaricononlys a');

        // Initialize sidebar state: visible by default on all screens
        sidebar.classList.remove('-translate-x-full');
        mainContent.classList.add('ml-64', 'xl:ml-68.5');

        // Toggle sidebar on hamburger menu click
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
            if (sidebar.classList.contains('-translate-x-full')) {
                mainContent.classList.remove('ml-64', 'xl:ml-68.5');
                mainContent.classList.add('ml-0', 'xl:ml-0');
            } else {
                mainContent.classList.remove('ml-0', 'xl:ml-0');
                mainContent.classList.add('ml-64', 'xl:ml-68.5');
            }
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggle = sidebarToggle.contains(event.target);
            if (!isClickInsideSidebar && !isClickOnToggle && !sidebar.classList.contains('-translate-x-full') && window.innerWidth < 1280) {
                sidebar.classList.add('-translate-x-full');
                mainContent.classList.remove('ml-64', 'xl:ml-68.5');
                mainContent.classList.add('ml-0', 'xl:ml-0');
            }
        });

        // Optional: Toggle fullscreen
        const fullscreenBtn = document.getElementById('fullscreenbtn');
        fullscreenBtn.addEventListener('click', function() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen().catch(err => {
                    console.error(`Error attempting to enable fullscreen: ${err.message}`);
                });
            } else {
                document.exitFullscreen();
            }
        });
    });
</script>





@yield('scripts')
@stack('scripts')