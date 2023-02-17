@extends('layouts.app')

@section('contents')
    <div class="p-4 bg-gray-100 rounded-lg shadow-lg">
        <div class="text-3xl font-bold text-gray-800">
            {{ $name }}, your daily calorie requirement is:
        </div>
        <div class="text-5xl font-bold text-indigo-600 mt-2">
            {{ $daily_calorie }}
        </div>
        <div class="text-lg text-gray-600 mt-4">
            This is the number of calories you should aim to consume each day to maintain your current weight.
        </div>
        <div class="text-lg text-gray-600 mt-4">
            Your weekly number of calorie requirement is {{ $daily_calorie * 7 }}
        </div>
        <div class="mt-8">
            <a href="{{ route('calorie.index') }}"
                class="w-1/9 bg-blue-500 hover:bg:blue-700 py-2 px-4 rounded focus:outline-none text-white font-bold focus:shadow-outline">Calculate
                Again</a>
        </div>
    </div>
@endsection
