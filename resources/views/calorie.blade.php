@extends('layouts.app')
@section('contents')
    <div class="content mt-8">
        <div class="py-12">
            <div class="col-span-12 mt-2">
                <div class="flex justify-center items-center h-screen">
                    <form action="{{ route('calorie.store') }}" method="post" class="bg-white p-8 rounded shadow-md">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="weight">
                                Your Name
                            </label>
                            <input name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder="Enter your name" required>
                            @error('name')
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="weight">
                                Email (Optional)
                            </label>
                            <input name="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder="Email">
                            @error('email')
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="weight">
                                Weight (in kg)
                            </label>
                            <input name="weight"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="weight" type="number" placeholder="Enter your weight" required>
                            @error('weight')
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="height">
                                Height (in cm)
                            </label>
                            <input name="height"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="height" type="number" placeholder="Enter your height" required>
                            @error('height')
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="age">
                                Age
                            </label>
                            <input min="0" max="100" name="age"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="age" type="number" placeholder="Enter your age" required>
                            @error('age')
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="gender">
                                Gender
                            </label>
                            <div class="relative">
                                <select name="gender"
                                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                    id="gender" required>
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M14.95 8.05a6.5 6.5 0 1 0-9.9 0l1.45 1.45a4.5 4.5 0 1 1 6.99 0l1.46-1.45z" />
                                    </svg>
                                </div>
                                @error('gender')
                                    <span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="activity-level">
                                Activity level
                            </label>
                            <div class="relative">
                                <select name="activity-level"
                                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                    id="activity-level" required>
                                    <option value="" disabled selected>Select your activity level</option>
                                    <option value="sedentary">Sedentary (little or no exercise)</option>
                                    <option value="lightly-active">Lightly active (exercise 1-3 days/week)</option>
                                    <option value="moderately-active">Moderately active (exercise 3-5 days/week)</option>
                                    <option value="very-active">Very active (exercise 6-7 days per week)</option>
                                    <option value="super-active">Super active (exercise twice per day, extra heavy workouts)
                                    </option>
                                </select>
                            </div>
                            @error('activity-level')
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                            @enderror
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2" for="goal">
                                    Goal
                                </label>
                                <div class="relative">
                                    <select name="goal"
                                        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                        id="goal" required>
                                        <option value="" disabled selected>Select your goal</option>
                                        <option value="maintain-weight">Maintain weight</option>
                                        <option value="lose-weight">Lose weight</option>
                                        <option value="gain-weight">Gain weight</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M14.95 8.05a6.5 6.5 0 1 0-9.9 0l1.45 1.45a4.5 4.5 0 1 1 6.99 0l1.46-1.45z" />
                                        </svg>
                                    </div>
                                </div>
                                @error('goal')
                                    <span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex item-center"
                                type="submit">
                                Calculate
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
