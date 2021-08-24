<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            S/N
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as  $key=>$user )
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>
                                                <a href="{{route('showUser',$user->id)}}">{{ $user->name }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{$users->links()}}

                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
