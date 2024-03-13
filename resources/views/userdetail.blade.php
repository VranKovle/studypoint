@extends('layouts.app')

@section('content')
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
    <div>
        Point pribadi : <p class="font-semibold text-green-400">{{ Auth::user()->userpoint }}</p>
        Social credit : <p class="font-semibold text-yellow-300">{{ Auth::user()->socialcredit }}</p>
    </div>
</div>

<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
    <button class="bg-blue-500 text-white rounded-md p-2 w-full">Send gift</button>
</div>
@endsection
