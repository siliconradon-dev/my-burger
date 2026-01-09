<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { MagnifyingGlassIcon, EyeIcon } from '@heroicons/vue/24/outline';

// Mock data
const orders = [
    { id: '#ORD-7829', customer: 'John Doe', items: 3, total: 45.50, date: '2024-03-10', status: 'Pending' },
    { id: '#ORD-7828', customer: 'Sarah Smith', items: 1, total: 12.99, date: '2024-03-10', status: 'Completed' },
    { id: '#ORD-7827', customer: 'Michael Brown', items: 4, total: 56.00, date: '2024-03-09', status: 'Processing' },
    { id: '#ORD-7826', customer: 'Emily White', items: 2, total: 24.50, date: '2024-03-09', status: 'Cancelled' },
    { id: '#ORD-7825', customer: 'David Lee', items: 5, total: 78.20, date: '2024-03-08', status: 'Completed' },
];

const getStatusColor = (status) => {
    switch (status) {
        case 'Completed': return 'bg-green-500/10 text-green-500 border-green-500/20';
        case 'Processing': return 'bg-blue-500/10 text-blue-500 border-blue-500/20';
        case 'Pending': return 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20';
        case 'Cancelled': return 'bg-red-500/10 text-red-500 border-red-500/20';
        default: return 'bg-gray-700 text-gray-300';
    }
};
</script>

<template>
    <Head title="Orders" />
    <DashboardLayout>
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-white">Orders</h1>
            <p class="text-gray-400 text-sm mt-1">View and manage customer orders.</p>
        </div>

        <!-- Filters & Search -->
        <div class="bg-gray-800 p-4 rounded-t-xl border-b border-gray-700 flex flex-col sm:flex-row gap-4 justify-between items-center">
            <div class="relative w-full sm:w-64">
                <MagnifyingGlassIcon class="w-5 h-5 absolute left-3 top-2.5 text-gray-500" />
                <input type="text" placeholder="Search orders..." class="w-full bg-gray-900 border border-gray-700 text-gray-300 rounded-lg pl-10 pr-4 py-2 focus:ring-1 focus:ring-red-500 focus:border-red-500 placeholder-gray-600" />
            </div>
            <div class="flex gap-2">
                <select class="bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-red-500">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Processing</option>
                    <option>Completed</option>
                    <option>Cancelled</option>
                </select>
                <select class="bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-red-500">
                    <option>Latest First</option>
                    <option>Oldest First</option>
                </select>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-gray-800 rounded-b-xl border border-gray-700 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-900/50 text-gray-400 text-xs uppercase tracking-wider border-b border-gray-700">
                            <th class="p-4 font-medium">Order ID</th>
                            <th class="p-4 font-medium">Customer</th>
                            <th class="p-4 font-medium">Date</th>
                            <th class="p-4 font-medium">Items</th>
                            <th class="p-4 font-medium">Total</th>
                            <th class="p-4 font-medium">Status</th>
                            <th class="p-4 font-medium text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr v-for="order in orders" :key="order.id" class="hover:bg-gray-750 transition-colors">
                            <td class="p-4 font-medium text-white">{{ order.id }}</td>
                            <td class="p-4 text-gray-300">{{ order.customer }}</td>
                            <td class="p-4 text-gray-400 text-sm">{{ order.date }}</td>
                            <td class="p-4 text-gray-300">{{ order.items }}</td>
                            <td class="p-4 text-white font-bold">${{ order.total.toFixed(2) }}</td>
                            <td class="p-4">
                                <span :class="['px-2.5 py-1 rounded-full text-xs font-medium border', getStatusColor(order.status)]">
                                    {{ order.status }}
                                </span>
                            </td>
                            <td class="p-4 text-right">
                                <Link :href="route('order.view', order.id.replace('#', ''))" class="inline-flex p-1.5 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="View Details">
                                    <EyeIcon class="w-5 h-5" />
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400">
                <span>Showing 1 to 5 of 5 entries</span>
                <div class="flex gap-1">
                    <button class="px-3 py-1 bg-gray-700 rounded hover:bg-gray-600 disabled:opacity-50" disabled>Prev</button>
                    <button class="px-3 py-1 bg-red-600 text-white rounded">1</button>
                    <button class="px-3 py-1 bg-gray-700 rounded hover:bg-gray-600">Next</button>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>
