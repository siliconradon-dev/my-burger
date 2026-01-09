<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { PlusIcon, MagnifyingGlassIcon, PencilSquareIcon, TrashIcon, EllipsisVerticalIcon, PhotoIcon } from '@heroicons/vue/24/outline';
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue';

const props = defineProps({
    products: Object
});

const getStatusColor = (status) => {
    switch (status) {
        case 'active': return 'bg-green-500/10 text-green-500 border-green-500/20';
        case 'draft': return 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20';
        case 'out_of_stock': return 'bg-red-500/10 text-red-500 border-red-500/20';
        default: return 'bg-gray-700 text-gray-300';
    }
};

const deleteProduct = (id) => {
    if (confirm('Are you sure you want to delete this product?')) {
        router.delete(route('product.destroy', id), {
            preserveScroll: true,
        });
    }
};
</script>

<template>
    <Head title="Products" />
    <DashboardLayout>
        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-white">Products</h1>
                <p class="text-gray-400 text-sm mt-1">Manage your menu items, stock, and pricing.</p>
            </div>
            <Link :href="route('products.create')" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg flex items-center transition-all shadow-lg shadow-red-600/20">
                <PlusIcon class="w-5 h-5 mr-2" />
                Add New Product
            </Link>
        </div>

        <!-- Filters & Search -->
        <div class="bg-gray-800 p-4 rounded-t-xl border-b border-gray-700 flex flex-col sm:flex-row gap-4 justify-between items-center">
            <div class="relative w-full sm:w-64">
                <MagnifyingGlassIcon class="w-5 h-5 absolute left-3 top-2.5 text-gray-500" />
                <input type="text" placeholder="Search products..." class="w-full bg-gray-900 border border-gray-700 text-gray-300 rounded-lg pl-10 pr-4 py-2 focus:ring-1 focus:ring-red-500 focus:border-red-500 placeholder-gray-600" />
            </div>
            <div class="flex gap-2">
                <select class="bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-red-500">
                    <option>All Categories</option>
                    <option>Burgers</option>
                    <option>Sides</option>
                    <option>Beverages</option>
                </select>
                <select class="bg-gray-900 border border-gray-700 text-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-red-500">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Out of Stock</option>
                </select>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-gray-800 rounded-b-xl border border-gray-700 overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-900/50 text-gray-400 text-xs uppercase tracking-wider border-b border-gray-700">
                            <th class="p-4 font-medium">Product</th>
                            <th class="p-4 font-medium">Category</th>
                            <th class="p-4 font-medium">Price</th>
                            <th class="p-4 font-medium">Status</th>
                            <th class="p-4 font-medium text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr v-for="product in products.data" :key="product.id" class="hover:bg-gray-750 transition-colors group">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <img v-if="product.image" :src="product.image" :alt="product.name" class="w-10 h-10 rounded-lg object-cover bg-gray-700" />
                                    <div v-else class="w-10 h-10 rounded-lg bg-gray-700 flex items-center justify-center text-gray-500">
                                        <PhotoIcon class="w-6 h-6" />
                                    </div>
                                    <span class="font-medium text-white group-hover:text-red-400 transition-colors">{{ product.name }}</span>
                                </div>
                            </td>
                            <td class="p-4 text-gray-300">
                                <span v-if="product.category" class="bg-gray-700 px-2 py-1 rounded text-xs">{{ product.category.name }}</span>
                                <span v-else class="text-gray-500 italic">Uncategorized</span>
                            </td>
                            <td class="p-4 text-white font-medium">Rs. {{ product.price }}</td>
                            <td class="p-4">
                                <span :class="['px-2.5 py-1 rounded-full text-xs font-medium border capitalize', getStatusColor(product.status)]">
                                    {{ product.status ? product.status.replace('_', ' ') : '' }}
                                </span>
                            </td>
                            <td class="p-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <Link :href="route('product.edit', product.id)" class="p-1.5 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Edit">
                                        <PencilSquareIcon class="w-5 h-5" />
                                    </Link>
                                    <button @click="deleteProduct(product.id)" class="p-1.5 text-gray-400 hover:text-red-500 hover:bg-red-500/10 rounded-lg transition-colors" title="Delete">
                                        <TrashIcon class="w-5 h-5" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr v-if="products.data.length === 0">
                            <td colspan="5" class="p-8 text-center text-gray-400">
                                No products found.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="p-4 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400" v-if="products.links.length > 3">
                <span>Showing {{ products.from }} to {{ products.to }} of {{ products.total }} entries</span>
                <div class="flex gap-1">
                    <Link 
                        v-for="(link, index) in products.links" 
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
