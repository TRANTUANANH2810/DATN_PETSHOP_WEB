<x-user-layout>
    <x-slot name="title">
        Đặt Lịch Khám
    </x-slot>
    <div class="container mx-auto p-4 text-center">
        <h1 class="text-3xl font-bold text-green-600 mt-10">Xác thực thành công!</h1>
        <p class="mt-4 text-lg text-gray-700">Cảm ơn bạn đã xác thực email của mình. Tài khoản của bạn đã được kích hoạt thành công.</p>
        <a href="{{ url('/home') }}" class="mt-6 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Trở về trang chủ
        </a>
    </div>
</x-user-layout>
