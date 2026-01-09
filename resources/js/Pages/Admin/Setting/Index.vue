<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, useForm, router } from '@inertiajs/vue3';
import { PlusIcon, TrashIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
    categories: Array,
});

const form = useForm({
    name: '',
});

const addCategory = () => {
    form.post(route('category.store'), {
        onSuccess: () => form.reset(),
    });
};

const deleteCategory = (id) => {
    if (confirm('Are you sure you want to delete this category?')) {
        router.delete(route('category.destroy', id));
    }
};
</script>

<template>
    <Head title="Settings" />
    <DashboardLayout>
        <div class="max-w-4xl mx-auto">
            <h1 class="text-2xl font-bold text-white mb-6">Settings</h1>

            <!-- Category Management Section -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 border border-gray-700">
                <h2 class="text-xl font-bold text-white mb-4">Menu Categories</h2>
                
                <!-- Add Category Form -->
                <form @submit.prevent="addCategory" class="flex gap-4 mb-6">
                    <div class="flex-1">
                        <input 
                            type="text" 
                            v-model="form.name" 
                            placeholder="Enter new category name..." 
                            class="w-full bg-gray-700 border border-gray-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none"
                            required
                        />
                        <div v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</div>
                    </div>
                    <button 
                        type="submit" 
                        :disabled="form.processing"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg flex items-center transition-colors disabled:opacity-50"
                    >
                        <PlusIcon class="w-5 h-5 mr-2" />
                        Add Category
                    </button>
                </form>

                <!-- Category List -->
                <div class="space-y-3">
                    <div v-if="categories.length === 0" class="text-gray-400 text-center py-4">
                        No categories found. Add one above.
                    </div>
                    <div 
                        v-for="category in categories" 
                        :key="category.id" 
                        class="flex justify-between items-center bg-gray-700/50 p-3 rounded-lg group hover:bg-gray-700 transition-colors"
                    >
                        <span class="text-gray-300 font-medium">{{ category.name }}</span>
                        <button 
                            @click="deleteCategory(category.id)"
                            class="text-gray-500 hover:text-red-500 p-1 rounded-md transition-colors opacity-0 group-hover:opacity-100"
                            title="Delete Category"
                        >
                            <TrashIcon class="w-5 h-5" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>
