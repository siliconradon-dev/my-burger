<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { PhotoIcon } from '@heroicons/vue/24/solid';

const props = defineProps({
    categories: Array,
});

const form = useForm({
    name: '',
    category_id: '',
    price: '',
    description: '',
    status: 'active',
    image: null,
});

const submit = () => {
    form.post(route('product.store'), {
        forceFormData: true,
    });
};

const handleImageUpload = (event) => {
    form.image = event.target.files[0];
};
</script>

<template>
    <Head title="Create Product" />
    <DashboardLayout>
        <div class="max-w-4xl mx-auto">
             <div class="mb-6">
                <h1 class="text-2xl font-bold text-white">Add New Product</h1>
                <p class="text-gray-400 text-sm mt-1">Create a new item for your menu.</p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-lg p-6 border border-gray-700">
                <form @submit.prevent="submit" class="space-y-6">
                    <!-- Product Name -->
                    <div>
                        <label for="name" class="block text-sm font-bold text-gray-300 mb-2">Product Name</label>
                        <input type="text" id="name" v-model="form.name" class="w-full bg-gray-700 border border-gray-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all placeholder-gray-500" placeholder="e.g. Double Beef Burger" required />
                        <div v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-bold text-gray-300 mb-2">Category</label>
                            <select id="category" v-model="form.category_id" class="w-full bg-gray-700 border border-gray-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all appearance-none cursor-pointer" required>
                                <option value="" disabled>Select a Category</option>
                                <option v-for="category in categories" :key="category.id" :value="category.id">
                                    {{ category.name }}
                                </option>
                            </select>
                            <div v-if="form.errors.category_id" class="text-red-500 text-sm mt-1">{{ form.errors.category_id }}</div>
                        </div>

                         <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-bold text-gray-300 mb-2">Status</label>
                            <select id="status" v-model="form.status" class="w-full bg-gray-700 border border-gray-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all appearance-none cursor-pointer" required>
                                <option value="active">Active</option>
                                <option value="draft">Draft</option>
                                <option value="out_of_stock">Out of Stock</option>
                            </select>
                             <div v-if="form.errors.status" class="text-red-500 text-sm mt-1">{{ form.errors.status }}</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-bold text-gray-300 mb-2">Price (LKR)</label>
                            <div class="relative">
                                <span class="absolute left-3 top-2 text-gray-400">Rs.</span>
                                <input type="number" id="price" v-model="form.price" step="0.01" class="w-full bg-gray-700 border border-gray-600 text-white rounded-lg pl-10 pr-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all placeholder-gray-500" placeholder="0.00" required />
                            </div>
                            <div v-if="form.errors.price" class="text-red-500 text-sm mt-1">{{ form.errors.price }}</div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-bold text-gray-300 mb-2">Description</label>
                        <textarea id="description" v-model="form.description" rows="4" class="w-full bg-gray-700 border border-gray-600 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-all placeholder-gray-500" placeholder="Describe the deliciousness..."></textarea>
                         <div v-if="form.errors.description" class="text-red-500 text-sm mt-1">{{ form.errors.description }}</div>
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-2">Product Image</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-600 border-dashed rounded-lg hover:border-red-500 transition-colors bg-gray-700/50">
                            <div class="space-y-1 text-center">
                                <PhotoIcon class="mx-auto h-12 w-12 text-gray-400" />
                                <div class="flex text-sm text-gray-400">
                                    <label for="image-upload" class="relative cursor-pointer rounded-md font-medium text-red-500 hover:text-red-400 focus-within:outline-none">
                                        <span>Upload a file</span>
                                        <input id="image-upload" name="image-upload" type="file" class="sr-only" @change="handleImageUpload" accept="image/*" />
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                <p v-if="form.image" class="text-sm text-green-500 mt-2 font-semibold">Selected: {{ form.image.name }}</p>
                            </div>
                        </div>
                        <div v-if="form.errors.image" class="text-red-500 text-sm mt-1">{{ form.errors.image }}</div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end pt-4">
                        <button type="submit" :disabled="form.processing" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition-colors shadow-lg shadow-red-600/20 disabled:opacity-50 flex items-center">
                            <span v-if="form.processing">Saving...</span>
                            <span v-else>Save Product</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </DashboardLayout>
</template>
