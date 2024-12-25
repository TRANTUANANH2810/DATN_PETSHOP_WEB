<x-admin-layout>
    <x-slot name="title">
        Đăng nhập trang quản lý cho nhân viên
    </x-slot>
    <div class="flex justify-center mt-16 h-full">
        <div class="sm:max-w-lg sm:w-full sm:mx-auto">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="p-4 sm:p-7">
                    <!-- Header -->
                    <div class="text-center">
                        <h2 class="block text-2xl font-bold text-gray-800">Đăng nhập cho nhân viên Pet Spa</h2>
                    </div>

                    <div class="mt-5">
                        <!-- Form đăng nhập nhân viên -->
                        <form method="post" action="{{ route('staff.signin.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 gap-5">
                                <!-- Username Input -->
                                <div>
                                    <label for="username" class="block text-sm mb-2 font-medium text-gray-700">Tên đăng nhập</label>
                                    <input type="text" id="username" name="username" value="{{ old('username') }}"
                                           class="py-3 px-4 block w-full border-gray-300 rounded-lg text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 border outline-none"
                                           placeholder="Nhập tên đăng nhập" required autofocus>
                                    @error('username')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Password Input -->
                                <div>
                                    <label for="password" class="block text-sm mb-2 font-medium text-gray-700">Mật khẩu</label>
                                    <input type="password" id="password" name="password"
                                           class="py-3 px-4 block w-full border-gray-300 rounded-lg text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 border outline-none"
                                           placeholder="Nhập mật khẩu" required>
                                    @error('password')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-center">
                                    <button type="submit" class="w-full py-3 px-4 flex justify-center items-center text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-lg focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Đăng nhập
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Quản trị viên? -->
                        <div class="text-sm text-center mt-6">
                            <p class="text-gray-500">Bạn là quản trị viên? <a href="{{ route('admin.signin') }}" class="text-blue-600 font-medium hover:underline">Đăng nhập tại đây</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
