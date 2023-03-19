<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table>
                    <tr>
                        <th>Title </th>
                        <th>Description</th>
                    </tr>
                    @foreach ( $blogs as $blog )

                    <tr>
                        <td> {{$blog->title}}</td>
                        <td>{{$blog->desciption}}</td>
                    </tr>

                    @endforeach


                </table>

            </div>
        </div>
    </div>
</x-app-layout>