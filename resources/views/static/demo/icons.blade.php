<x-layouts.app :title="__('Demo')">
    <x-headbar title="{{__('Icons')}}">
        <x-form name="form" method="get" action="{{ route('demo-icons') }}" class="flex gap-1">
            <x-input type="text"
                     name="iconSearch" id="iconSearch"
                     placeholder="Search for..."
                     value="{{ old('iconSearch') ?? $iconSearch ?? ''}}"
                     class="min-w-64"/>

            <x-button before="phosphor-magnifying-glass-duotone" variant="primary"
                      class="w-full">
                Search
            </x-button>
            <x-button before="phosphor-funnel-x-duotone" variant="secondary"
                      class="w-full" href="{{route('demo-icons')}}">
                Clear
            </x-button>
        </x-form>
    </x-headbar>

    <div class="flex flex-col gap-4 pt-4">
        <p>
            This page shows the available Icons (Phosphor).
        </p>
        <p class="pb-4">
            <x-link href="{{route('demo-icons')}}"
                    class="text-sm text-gray-400">
                Back to main demo page.
            </x-link>
        </p>
        <x-section class="grid grid-cols-6 gap-2 space-y-4 p-4">

            @foreach($icons as $icon)
                <div>
                    <x-dynamic-component :component="$icon->family.'-'.$icon->name"
                                         aria-hidden="true" :width="24"
                                         :height="24"/>
                    <p class="text-sm">{{ $icon->name }}</p>
                </div>
            @endforeach

        </x-section>

        <x-pagination :paginator="$icons"/>

    </div>
</x-layouts.app>
