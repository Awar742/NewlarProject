<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <h1>Group:{{ Auth::user()->group }}</h1>
                    <div class="container">
{{--                        <h1>Welcome</h1>--}}
{{--                        <p>Hello, {{ Auth::user()->name }}</p> <!-- Вивід імені користувача -->--}}

                        @php
                            $timetableData = \App\Models\Timetable::all(); // Отримати всі дані з таблиці timetable
                        @endphp

                        <table>
                            <thead>
                            <tr>
                                <th>Group</th>
                                <th>Grafik</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($timetableData as $item)
                                <tr>
                                    @if(Auth::user()->group == $item->group)
                                        <td>{{ $item->group }}</td>
                                        <td>{{ $item->grafik }}</td>
                                    @endif

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
