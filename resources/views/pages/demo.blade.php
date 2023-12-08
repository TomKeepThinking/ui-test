<div x-data="{darkMode: true}" :class="{'dark': darkMode === true }" >
    <x-app-layout>
        <x-top-header>
            <h1 class="split-words">Get a Demo</h1>
        </x-top-header>

        <div class="fade-in border-b">
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget focus:outline-none mx-auto"
                data-url="https://calendly.com/t-scully-king/30min?background_color=272727&text_color=ffffff&primary_color=ea283f"
                style="outline:none;
                max-width: 1200px; height: 900px"></div>

            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
        </div>
    </x-app-layout>
</div>
