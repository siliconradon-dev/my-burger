<script setup>
import { Link } from '@inertiajs/vue3';
import { 
    HomeIcon, 
    ShoppingBagIcon, 
    ClipboardDocumentListIcon, 
    UsersIcon, 
    Cog6ToothIcon,
    Bars3Icon 
} from '@heroicons/vue/24/outline';
</script>

<template>
    <aside class="w-64 bg-gray-900 border-r border-gray-800 hidden md:block min-h-screen">
        <div class="h-16 flex items-center justify-center border-b border-gray-800">
            <h1 class="text-2xl font-bold text-red-600">My Burger</h1>
        </div>
        <nav class="mt-4 px-2 space-y-2">
            <Link :href="route('admin.dashboard')" :class="{'bg-red-600 text-white': route().current('admin.dashboard')}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                <HomeIcon class="h-6 w-6 mr-3 text-gray-400 group-hover:text-white" />
                Dashboard
            </Link>
            
            <Link :href="route('products.index')" :class="{'bg-red-600 text-white': route().current('products.*')}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                <ShoppingBagIcon class="h-6 w-6 mr-3 text-gray-400 group-hover:text-white" />
                Products
            </Link>

            <Link :href="route('orders.index')" :class="{'bg-red-600 text-white': route().current('orders.*')}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                <ClipboardDocumentListIcon class="h-6 w-6 mr-3 text-gray-400 group-hover:text-white" />
                Orders
            </Link>

            <Link :href="route('users.index')" :class="{'bg-red-600 text-white': route().current('users.*')}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                <UsersIcon class="h-6 w-6 mr-3 text-gray-400 group-hover:text-white" />
                Users
            </Link>

            <Link :href="route('settings.index')" :class="{'bg-red-600 text-white': route().current('settings.*')}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                <Cog6ToothIcon class="h-6 w-6 mr-3 text-gray-400 group-hover:text-white" />
                Settings
            </Link>
        </nav>
    </aside>
</template>
