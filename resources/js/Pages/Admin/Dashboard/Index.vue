<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head } from '@inertiajs/vue3';
import VueApexCharts from 'vue3-apexcharts';
import { ArrowUpIcon, ArrowDownIcon, CurrencyDollarIcon, ShoppingCartIcon, UsersIcon, ClipboardDocumentListIcon } from '@heroicons/vue/24/solid';

const chartOptions = {
    chart: {
        id: 'sales-analytics',
        toolbar: { show: false },
        background: 'transparent'
    },
    theme: { mode: 'dark' },
    colors: ['#d90429', '#22c55e'],
    stroke: { curve: 'smooth', width: 3 },
    xaxis: {
        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        labels: { style: { colors: '#9ca3af' } }
    },
    yaxis: {
        labels: { style: { colors: '#9ca3af' } }
    },
    grid: { borderColor: '#374151' },
    dataLabels: { enabled: false },
    legend: { labels: { colors: '#9ca3af' } }
};

const chartSeries = [
    { name: 'Income', data: [3100, 4000, 2800, 5100, 4200, 6900, 8000] },
    { name: 'Expenses', data: [1100, 3200, 4500, 3200, 3400, 5200, 4100] }
];
</script>

<template>
    <Head title="Dashboard" />

    <DashboardLayout>
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-white">Dashboard</h1>
                <p class="text-gray-400 mt-1">Welcome back, Admin! Here's what's happening today.</p>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center shadow-lg shadow-red-600/20">
                <ArrowDownIcon class="w-5 h-5 mr-2" />
                Download Report
            </button>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Revenue -->
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-sm relative overflow-hidden group hover:border-red-600/50 transition-all">
                <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <CurrencyDollarIcon class="w-16 h-16 text-red-500" />
                </div>
                <h3 class="text-gray-400 text-sm font-medium">Total Revenue</h3>
                <div class="flex items-end mt-2">
                    <p class="text-3xl font-bold text-white">$24,500.00</p>
                    <span class="text-green-500 text-xs font-semibold ml-2 flex items-center mb-1 bg-green-500/10 px-1.5 py-0.5 rounded">
                        <ArrowUpIcon class="w-3 h-3 mr-0.5" /> +12.5%
                    </span>
                </div>
            </div>

            <!-- Total-Orders -->
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-sm relative overflow-hidden group hover:border-red-600/50 transition-all">
                <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <ShoppingCartIcon class="w-16 h-16 text-blue-500" />
                </div>
                <h3 class="text-gray-400 text-sm font-medium">Total Orders</h3>
                <div class="flex items-end mt-2">
                    <p class="text-3xl font-bold text-white">1,452</p>
                    <span class="text-green-500 text-xs font-semibold ml-2 flex items-center mb-1 bg-green-500/10 px-1.5 py-0.5 rounded">
                        <ArrowUpIcon class="w-3 h-3 mr-0.5" /> +8.2%
                    </span>
                </div>
            </div>

            <!-- Total Users -->
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-sm relative overflow-hidden group hover:border-red-600/50 transition-all">
                <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <UsersIcon class="w-16 h-16 text-yellow-500" />
                </div>
                <h3 class="text-gray-400 text-sm font-medium">Total Customers</h3>
                <div class="flex items-end mt-2">
                    <p class="text-3xl font-bold text-white">8,542</p>
                    <span class="text-red-500 text-xs font-semibold ml-2 flex items-center mb-1 bg-red-500/10 px-1.5 py-0.5 rounded">
                        <ArrowDownIcon class="w-3 h-3 mr-0.5" /> -1.5%
                    </span>
                </div>
            </div>

            <!-- Pending Orders -->
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-sm relative overflow-hidden group hover:border-red-600/50 transition-all">
                <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <ClipboardDocumentListIcon class="w-16 h-16 text-purple-500" />
                </div>
                <h3 class="text-gray-400 text-sm font-medium">Pending Orders</h3>
                <div class="flex items-end mt-2">
                    <p class="text-3xl font-bold text-white">24</p>
                    <span class="text-gray-500 text-xs font-semibold ml-2 mb-1">Needs Attention</span>
                </div>
            </div>
        </div>

        <!-- Charts & Recent Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sales Chart -->
            <div class="lg:col-span-2 bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-sm">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-white">Sales Analytics</h3>
                    <select class="bg-gray-700 border-none text-sm text-gray-300 rounded-lg focus:ring-1 focus:ring-red-500">
                        <option>This Week</option>
                        <option>Last Week</option>
                        <option>This Month</option>
                    </select>
                </div>
                <div class="w-full h-80">
                     <VueApexCharts type="area" height="100%" :options="chartOptions" :series="chartSeries" />
                </div>
            </div>

            <!-- Recent Activity List -->
            <div class="bg-gray-800 p-6 rounded-xl border border-gray-700 shadow-sm">
                <h3 class="text-lg font-bold text-white mb-6">Recent Activity</h3>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-blue-500/10 flex items-center justify-center flex-shrink-0 text-blue-500">
                            <ShoppingCartIcon class="w-5 h-5" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-white">New Order #1054</p>
                            <p class="text-xs text-gray-400 mt-1">2 mins ago</p>
                            <p class="text-sm text-gray-300 mt-1">Order received from <span class="text-gray-100 font-semibold">John Doe</span></p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-green-500/10 flex items-center justify-center flex-shrink-0 text-green-500">
                            <UsersIcon class="w-5 h-5" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-white">New Customer Registered</p>
                            <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                            <p class="text-sm text-gray-300 mt-1"><span class="text-gray-100 font-semibold">Sarah Smith</span> created an account.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-red-500/10 flex items-center justify-center flex-shrink-0 text-red-500">
                            <CurrencyDollarIcon class="w-5 h-5" />
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-white">Payment Received</p>
                            <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                            <p class="text-sm text-gray-300 mt-1">$450.00 processed via Stripe.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-gray-700 text-center">
                    <a href="#" class="text-sm text-red-500 hover:text-red-400 font-medium">View All Activity</a>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>
