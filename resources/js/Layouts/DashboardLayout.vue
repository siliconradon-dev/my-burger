<script setup>
import SideBar from '@/Components/Main/SideBar.vue';
import Header from '@/Components/Main/Header.vue';
import Footer from '@/Components/Main/Footer.vue';
</script>

<template>
    <div class="flex h-screen bg-gray-900 font-roboto text-gray-100">
        <!-- Sidebar -->
        <SideBar />

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <Header />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-800 p-6">
                <!-- Content injected here -->
                <slot />
            </main>

            <Footer />
        </div>
    </div>
</template>
