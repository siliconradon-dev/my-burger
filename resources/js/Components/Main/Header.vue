<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue';
import { UserCircleIcon, ChevronDownIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="bg-gray-900 border-b border-gray-800 shadow-sm h-16 flex justify-between items-center px-6">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Admin Panel
        </h2>

        <div class="flex items-center">
            <Menu as="div" class="relative ml-3">
                <div>
                    <MenuButton class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition bg-gray-800 p-1">
                        <UserCircleIcon class="h-8 w-8 text-gray-400" />
                        <span class="ml-2 text-gray-300 hidden md:block">Admin</span>
                        <ChevronDownIcon class="h-4 w-4 ml-1 text-gray-400 hidden md:block" />
                    </MenuButton>
                </div>
                <transition
                    enter-active-class="transition ease-out duration-100"
                    enter-from-class="transform opacity-0 scale-95"
                    enter-to-class="transform opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75"
                    leave-from-class="transform opacity-100 scale-100"
                    leave-to-class="transform opacity-0 scale-95"
                >
                    <MenuItems class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-gray-800 text-gray-300 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none border border-gray-700">
                        <MenuItem v-slot="{ active }">
                            <Link href="#" :class="[active ? 'bg-gray-700' : '', 'block px-4 py-2 text-sm']">Profile</Link>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <Link href="/logout" method="post" as="button" :class="[active ? 'bg-gray-700' : '', 'block w-full text-left px-4 py-2 text-sm']">Sign out</Link>
                        </MenuItem>
                    </MenuItems>
                </transition>
            </Menu>
        </div>
    </header>
</template>
