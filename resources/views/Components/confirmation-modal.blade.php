{{--@props(['name'])--}}
<div {{ $attributes }}
     x-data="{show: @entangle($attributes->wire('model'))}"
     x-show="show"
     @keydown.escape.window="show = false"
     style="display: none"
>

    <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show = false">

        <div class="bg-white shadow-md max-w-sm h-48 m-auto rounded-md fixed inset-0" x-show.transition="show">

            <div class="flex flex-col h-full justify-between">
                <header class="p-6">
                    <h1 class="font-bold text-lg">
                        {{ $title }}</h1>
                </header>

                <main class="px-6 mb-4">
                    {{ $body }}
                </main>

                <footer class="flex justify-end px-6 py-4 mt-6 bg-gray-200 rounded-b-md">
                    {{ $footer }}
                </footer>
            </div>
        </div>

    </div>

</div>
