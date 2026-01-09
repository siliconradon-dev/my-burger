<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { MagnifyingGlassIcon, NoSymbolIcon, CheckCircleIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
    users: Object
});

const getStatusColor = (status) => {
    switch (status) {
        case 'Active': return 'text-green-500'; // Assuming backend doesn't have status yet, using mock logic for now or default
        default: return 'text-green-500'; // Defaulting to active green for now as User model might not have status column yet
    }
};
</script>

<template>
    <Head title="Users" />
    <DashboardLayout>
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-white">Users</h1>
            <p class="text-gray-400 text-sm mt-1">Manage system users and customers.</p>
        </div>

        <!-- Filters & Search -->
        <div class="bg-gray-800 p-4 rounded-t-xl border-b border-gray-700 flex flex-col sm:flex-row gap-4 justify-between items-center">
            <div class="relative w-full sm:w-64">
                <MagnifyingGlassIcon class="w-5 h-5 absolute left-3 top-2.5 text-gray-500" />
                <input type="text" placeholder="Search users..." class="w-full bg-gray-900 border border-gray-700 text-gray-300 rounded-lg pl-10 pr-4 py-2 focus:ring-1 focus:ring-red-500 focus:border-red-500 placeholder-gray-600" />
            </div>
        </div>

        <!-- Table -->
        <div class="bg-gray-800 rounded-b-xl border border-gray-700 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-900/50 text-gray-400 text-xs uppercase tracking-wider border-b border-gray-700">
                            <th class="p-4 font-medium">Name</th>
                            <th class="p-4 font-medium">Email</th>
                            <th class="p-4 font-medium">Date Joined</th>
                            <th class="p-4 font-medium text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr v-for="user in users.data" :key="user.id" class="hover:bg-gray-750 transition-colors">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white">
                                        {{ user.name.charAt(0) }}
                                    </div>
                                    <span class="font-medium text-white">{{ user.name }}</span>
                                </div>
                            </td>
                            <td class="p-4 text-gray-300">{{ user.email }}</td>
                            <td class="p-4 text-gray-400 text-sm">{{ new Date(user.created_at).toLocaleDateString() }}</td>
                            <td class="p-4 text-right">
                                <button class="inline-flex items-center px-2 py-1 bg-gray-700 text-gray-300 border border-gray-600 rounded hover:bg-gray-600 hover:text-white transition-colors text-xs" title="View Profile">
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr v-if="users.data.length === 0">
                            <td colspan="4" class="p-8 text-center text-gray-400">
                                No users found.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400" v-if="users.links.length > 3">
                <span>Showing {{ users.from }} to {{ users.to }} of {{ users.total }} entries</span>
                <div class="flex gap-1">
                    <Link 
                        v-for="(link, index) in users.links" 
                        :key="index"
                        :href="link.url || '#'"
                        v-html="link.label"
                        :class="[
                            'px-3 py-1 rounded transition-colors',
                            link.active ? 'bg-red-600 text-white' : 'bg-gray-700 hover:bg-gray-600',
                            !link.url ? 'opacity-50 cursor-not-allowed' : ''
                        ]"
                        :preserve-scroll="true"
                    />
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>
