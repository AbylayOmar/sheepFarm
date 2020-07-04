@extends('layouts.main')

@section('content')
    <div id="app">
        <div class="container">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in apdock" v-text="sheep.id" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2"></li>
                    </ul>
                </div>
                <div>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in bpdock" v-text="sheep.id" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2"></li>
                    </ul>
                </div>
                <div>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in cpdock" v-text="sheep.id" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2"></li>
                    </ul>
                </div>
                <div>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in dpdock" v-text="sheep.id" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
