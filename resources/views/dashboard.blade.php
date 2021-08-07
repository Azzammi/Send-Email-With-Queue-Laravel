<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="lg:flex p-6 bg-white border-b border-gray-200 justify-between">
                    <div class="relative lg:w-1/2">
                        You're logged in!
                    </div>
                    <form action="{{ route('sendEmail') }}" method="GET">
                        <div class="relative lg:w-1/2">
                            <x-button>Send Email</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
