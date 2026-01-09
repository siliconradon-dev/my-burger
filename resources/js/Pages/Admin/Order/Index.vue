<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { MagnifyingGlassIcon, EyeIcon, PencilSquareIcon } from '@heroicons/vue/24/outline';
import { ref } from 'vue';
import { Dialog, DialogPanel, DialogTitle, TransitionRoot, TransitionChild } from '@headlessui/vue';

const props = defineProps({
    orders: Object
});

const isStatusModalOpen = ref(false);
const selectedOrder = ref(null);
const form = useForm({
    status: '',
});

const openStatusModal = (order) => {
    selectedOrder.value = order;
    form.status = order.status;
    isStatusModalOpen.value = true;
};

const closeStatusModal = () => {
    isStatusModalOpen.value = false;
    selectedOrder.value = null;
    form.reset();
};

const isViewModalOpen = ref(false);
const viewOrder = ref(null);

const openViewModal = (order) => {
    viewOrder.value = order;
    isViewModalOpen.value = true;
};

const closeViewModal = () => {
    isViewModalOpen.value = false;
    viewOrder.value = null;
};

const getImageUrl = (path) => {
    if (!path) return '';
    if (path.startsWith('http') || path.startsWith('/')) {
        return path;
    }
    return '/' + path;
};

const updateStatus = () => {
    form.put(route('order.updateStatus', selectedOrder.value.id), {
        onSuccess: () => {
            closeStatusModal();
        },
    });
};

const getStatusColor = (status) => {
    switch (status) {
        case 'completed': return 'bg-green-500/10 text-green-500 border-green-500/20';
        case 'processing': return 'bg-blue-500/10 text-blue-500 border-blue-500/20';
        case 'pending': return 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20';
        case 'cancelled': return 'bg-red-500/10 text-red-500 border-red-500/20';
        default: return 'bg-gray-700 text-gray-300';
    }
};

const formatCurrency = (value) => {
    return new Intl.NumberFormat('en-LK', { style: 'currency', currency: 'LKR' }).format(value);
};

const formatDate = (dateString) => {
    if (!dateString) return '';
    return new Date(dateString).toLocaleDateString();
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
        <div class="bg-gray-800 p-4 rounded-t-xl border-b border-gray-700 flex flex-col lg:flex-row gap-4 justify-between items-center">
            <div class="relative w-full lg:w-64">
                <MagnifyingGlassIcon class="w-5 h-5 absolute left-3 top-2.5 text-gray-500" />
                <input type="text" placeholder="Search orders..." class="w-full bg-gray-900 border border-gray-700 text-gray-300 rounded-lg pl-10 pr-4 py-2 focus:ring-1 focus:ring-red-500 focus:border-red-500 placeholder-gray-600" />
            </div>
            <div class="flex flex-wrap sm:flex-nowrap gap-2 w-full lg:w-auto">
                <select class="bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-red-500 flex-1">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Processing</option>
                    <option>Completed</option>
                    <option>Cancelled</option>
                </select>
                <select class="bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-red-500 flex-1">
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
                            <th class="p-4 font-medium hidden md:table-cell">Date</th>
                            <th class="p-4 font-medium hidden sm:table-cell">Items</th>
                            <th class="p-4 font-medium">Total</th>
                            <th class="p-4 font-medium">Status</th>
                            <th class="p-4 font-medium text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr v-for="order in orders.data" :key="order.id" class="hover:bg-gray-750 transition-colors">
                            <td class="p-4 font-medium text-white">
                                <div>#{{ order.id }}</div>
                                <div class="text-[10px] text-gray-500 md:hidden">{{ formatDate(order.created_at) }}</div>
                            </td>
                            <td class="p-4 text-gray-300">
                                <div class="truncate max-w-[120px] sm:max-w-none">
                                    {{ order.user ? order.user.name : (order.first_name + ' ' + order.last_name) }}
                                </div>
                            </td>
                            <td class="p-4 text-gray-400 text-sm hidden md:table-cell">{{ formatDate(order.created_at) }}</td>
                            <td class="p-4 text-gray-300 hidden sm:table-cell">{{ order.items ? order.items.length : 0 }}</td>
                            <td class="p-4 text-white font-bold whitespace-nowrap">{{ formatCurrency(order.total_amount) }}</td>
                            <td class="p-4">
                                <span :class="['px-2.5 py-1 rounded-full text-[10px] sm:text-xs font-medium border capitalize', getStatusColor(order.status)]">
                                    {{ order.status }}
                                </span>
                            </td>
                            <td class="p-4 text-right">
                                <div class="flex items-center justify-end gap-1 sm:gap-2">
                                     <button @click="openStatusModal(order)" class="p-1.5 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Update Status">
                                        <PencilSquareIcon class="w-4 h-4 sm:w-5 h-5" />
                                    </button>
                                    <button @click="openViewModal(order)" class="inline-flex p-1.5 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="View Details">
                                        <EyeIcon class="w-4 h-4 sm:w-5 h-5" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr v-if="orders.data.length === 0">
                            <td colspan="7" class="p-8 text-center text-gray-400">
                                No orders found.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400" v-if="orders.links.length > 3">
                <span>Showing {{ orders.from }} to {{ orders.to }} of {{ orders.total }} entries</span>
                <div class="flex gap-1">
                    <Link
                        v-for="(link, index) in orders.links"
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

        <!-- Status Update Modal -->
        <TransitionRoot appear :show="isStatusModalOpen" as="template">
            <Dialog as="div" @close="closeStatusModal" class="relative z-50">
                <TransitionChild
                    as="template"
                    enter="duration-300 ease-out"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="duration-200 ease-in"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                    <div class="fixed inset-0 bg-black/75" />
                </TransitionChild>

                <div class="fixed inset-0 overflow-y-auto">
                    <div class="flex min-h-full items-center justify-center p-4 text-center">
                        <TransitionChild
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0 scale-95"
                            enter-to="opacity-100 scale-100"
                            leave="duration-200 ease-in"
                            leave-from="opacity-100 scale-100"
                            leave-to="opacity-0 scale-95"
                        >
                            <DialogPanel class="w-full max-w-md transform overflow-hidden rounded-2xl bg-gray-800 p-6 text-left align-middle shadow-xl transition-all border border-gray-700">
                                <DialogTitle as="h3" class="text-lg font-bold leading-6 text-white mb-4">
                                    Update Order Status
                                </DialogTitle>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-400 mb-4">
                                        Update the status for Order #{{ selectedOrder?.id }}.
                                    </p>
                                    <form @submit.prevent="updateStatus">
                                        <div class="space-y-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-400 mb-1">Status</label>
                                                <select v-model="form.status" class="w-full bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                                                    <option value="pending">Pending</option>
                                                    <option value="processing">Processing</option>
                                                    <option value="completed">Completed</option>
                                                    <option value="cancelled">Cancelled</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-6 flex justify-end gap-3">
                                            <button
                                                type="button"
                                                class="px-4 py-2 text-sm font-medium text-gray-300 bg-gray-700 rounded-lg hover:bg-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-offset-2"
                                                @click="closeStatusModal"
                                            >
                                                Cancel
                                            </button>
                                            <button
                                                type="submit"
                                                class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-500 focus-visible:ring-offset-2"
                                                :disabled="form.processing"
                                            >
                                                Update Status
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>

        <!-- View Order Details Modal -->
        <TransitionRoot appear :show="isViewModalOpen" as="template">
            <Dialog as="div" @close="closeViewModal" class="relative z-50">
                <TransitionChild
                    as="template"
                    enter="duration-300 ease-out"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="duration-200 ease-in"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                    <div class="fixed inset-0 bg-black/75" />
                </TransitionChild>

                <div class="fixed inset-0 overflow-y-auto">
                    <div class="flex min-h-full items-center justify-center p-4 text-center">
                        <TransitionChild
                            as="template"
                            enter="duration-300 ease-out"
                            enter-from="opacity-0 scale-95"
                            enter-to="opacity-100 scale-100"
                            leave="duration-200 ease-in"
                            leave-from="opacity-100 scale-100"
                            leave-to="opacity-0 scale-95"
                        >
                            <DialogPanel class="w-full max-w-2xl transform overflow-hidden rounded-2xl bg-gray-800 p-6 text-left align-middle shadow-xl transition-all border border-gray-700">
                                <div class="flex justify-between items-start mb-4">
                                    <DialogTitle as="h3" class="text-xl font-bold leading-6 text-white">
                                        Order Details #{{ viewOrder?.id }}
                                    </DialogTitle>
                                    <button @click="closeViewModal" class="text-gray-400 hover:text-white">
                                        <span class="sr-only">Close</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <div v-if="viewOrder" class="space-y-6">
                                    <!-- Customer & Order Info -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="bg-gray-900 p-4 rounded-lg">
                                            <h4 class="text-sm font-medium text-gray-400 uppercase mb-3">Customer Information</h4>
                                            <div class="space-y-2 text-sm text-white">
                                                <p><span class="text-gray-500">Name:</span> {{ viewOrder.user ? viewOrder.user.name : viewOrder.first_name + ' ' + viewOrder.last_name }}</p>
                                                <p><span class="text-gray-500">Email:</span> {{ viewOrder.email }}</p>
                                                <p><span class="text-gray-500">Phone:</span> {{ viewOrder.phone }}</p>
                                            </div>
                                        </div>
                                        <div class="bg-gray-900 p-4 rounded-lg">
                                            <h4 class="text-sm font-medium text-gray-400 uppercase mb-3">Order Summary</h4>
                                            <div class="space-y-2 text-sm text-white">
                                                <p><span class="text-gray-500">Date:</span> {{ formatDate(viewOrder.created_at) }}</p>
                                                <p class="flex items-center gap-2">
                                                    <span class="text-gray-500">Status:</span>
                                                    <span :class="['px-2 py-0.5 rounded text-xs border capitalize', getStatusColor(viewOrder.status)]">
                                                        {{ viewOrder.status }}
                                                    </span>
                                                </p>
                                                <p><span class="text-gray-500">Total:</span> <span class="font-bold text-lg text-white">{{ formatCurrency(viewOrder.total_amount) }}</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Shipping Address -->
                                    <div class="bg-gray-900 p-4 rounded-lg">
                                        <h4 class="text-sm font-medium text-gray-400 uppercase mb-2">Shipping Address</h4>
                                        <p class="text-sm text-white leading-relaxed">
                                            {{ viewOrder.address }}, {{ viewOrder.city }}, {{ viewOrder.postcode }}
                                            <br v-if="viewOrder.notes"><span class="text-gray-500 block mt-1">Note: {{ viewOrder.notes }}</span>
                                        </p>
                                    </div>

                                    <!-- Order Items -->
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-400 uppercase mb-3">Order Items</h4>
                                        <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-700">
                                            <table class="w-full text-left text-sm">
                                                <thead class="bg-gray-800 text-gray-400 border-b border-gray-700">
                                                    <tr>
                                                        <th class="p-3 font-medium">Product</th>
                                                        <th class="p-3 font-medium text-center">Qty</th>
                                                        <th class="p-3 font-medium text-right">Price</th>
                                                        <th class="p-3 font-medium text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-700 text-white">
                                                    <tr v-for="item in viewOrder.items" :key="item.id">
                                                        <td class="p-3">
                                                            <div class="flex items-center gap-3">
                                                                <img v-if="item.product && item.product.image" :src="getImageUrl(item.product.image)" class="w-10 h-10 rounded bg-gray-800 object-cover" />
                                                                <div v-else class="w-10 h-10 rounded bg-gray-800 flex items-center justify-center text-gray-600">
                                                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                                                </div>
                                                                <span>{{ item.product ? item.product.name : 'Unknown Product' }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="p-3 text-center text-gray-300">{{ item.quantity }}</td>
                                                        <td class="p-3 text-right text-gray-300">{{ formatCurrency(item.price) }}</td>
                                                        <td class="p-3 text-right font-medium">{{ formatCurrency(item.price * item.quantity) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>
    </DashboardLayout>
</template>
