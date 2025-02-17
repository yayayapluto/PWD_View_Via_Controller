<?php

namespace App\Http\Controllers;
class ViewController extends Controller
{
    public function Home()
    {
        return '
        <div class="mx-auto pt-6">
            <p class="text-gray-900 text-center text-2xl font-medium">Lorem ipsum dolor sit amet</p>
        </div>';
    }

    public function About()
    {
        return '
        <div class="bg-white border border-gray-200 shadow-md rounded-lg p-6 w-96">
            <div class="rounded-md overflow-hidden mb-4">
                <img src="https://i.pinimg.com/236x/1e/80/75/1e8075f9c183c89bc22d2b423b047d7d.jpg" class="w-full h-48 object-cover" />
            </div>
            <h6 class="text-xl font-semibold text-gray-900">Saya Farras</h6>
            <p class="text-gray-600 mt-2 text-sm">Fullstack wanna be</p>
            <div class="mt-4">
                <a href="https://github.com/yayayapluto" class="block text-center w-full border px-4 py-2 rounded-md text-sm text-gray-900 hover:bg-gray-100 transition">Github</a>
            </div>
        </div>
        ';
    }

    public function Contact()
    {
        return '
        <div class="bg-white border border-gray-200 shadow-md rounded-lg p-6 w-full max-w-lg">
            <h1 class="text-2xl font-semibold text-gray-900">Kontak Saya</h1>
            <p class="text-gray-600 mt-2 text-sm">Silakan hubungi saya di sini.</p>

            <form class="mt-4 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-200 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-200 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-200 focus:outline-none resize-none" rows="12"></textarea>
                </div>
                <button type="submit" class="w-full border px-4 py-2 rounded-md text-sm text-gray-900 hover:bg-gray-100 transition">Kirim</button>
            </form>
        </div>
        ';
    }
}
