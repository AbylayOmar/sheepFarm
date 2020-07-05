@extends('layouts.main')

@section('content')
    <div id="app">
        <div class="container">
            <div class="box-border h-20 w-32 p-4 border-4 border-gray-400 bg-gray-200">
                <div class="h-full w-full bg-gray-400">
                    <p class="font-mono text-sm text-gray-800 text-center">Day: @{{ today }}</p>
                </div>
            </div>
            <p class="font-mono text-lg text-gray-800 text-center">
                Фермочка для овечек
            </p>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="font-mono text-lg text-gray-800 text-center">
                        Загон 1
                    </p>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in apdock" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
                            Овечка @{{ sheep.id }}
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-mono text-lg text-gray-800 text-center">
                        Загон 2
                    </p>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in bpdock" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
                            Овечка @{{ sheep.id }}
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-mono text-lg text-gray-800 text-center">
                        Загон 3
                    </p>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in cpdock" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
                            Овечка @{{ sheep.id }}
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-mono text-lg text-gray-800 text-center">
                        Загон 4
                    </p>
                    <ul class="overflow-y-scroll bg-gray-200 h-64">
                        <li v-for="sheep in dpdock" class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
                            Овечка @{{ sheep.id }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="font-mono text-lg text-gray-800 text-center">
                        Пересадить овечку
                    </p>
                    <form class="w-full max-w-lg" @submit="moveSheep" method="post">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Овечка
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" v-model="selected_sheep" id="selected_sheep">
                                        <option v-for="sheep in all_sheeps" v-bind:value="sheep.id">Овечка @{{ sheep.id }}</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Загон
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" v-model="selected_paddock" id="selected_paddock">
                                        <option v-bind:value="1">1</option>
                                        <option v-bind:value="2">2</option>
                                        <option v-bind:value="3">3</option>
                                        <option v-bind:value="4">4</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Пересадить
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
