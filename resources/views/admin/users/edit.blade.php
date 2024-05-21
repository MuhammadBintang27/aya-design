<!-- resources/views/admin/users/edit.blade.php -->

@extends('layouts.homelayouts')

@section('konten')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Edit User</h2>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" name="name" class="form-input mt-1 block w-full rounded-md border-pink-300" value="{{ $user->name }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" class="form-input mt-1 block w-full rounded-md border-pink-300" value="{{ $user->email }}" required>
            </div>
            <!-- tambahkan bidang lain sesuai kebutuhan -->
            <button type="submit" class="bg-pink-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-pink-600 focus:outline-none focus:bg-pink-600">Submit</button>
            <a href="{{ route('admin.users.index') }}" class="bg-pink-300 text-pink-700 font-semibold py-2 px-4 rounded-md ml-4 hover:bg-pink-400 focus:outline-none focus:bg-pink-400">Back</a>
        </form>
    </div>
@endsection