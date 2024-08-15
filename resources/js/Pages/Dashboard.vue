<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-6 px-4">
            <div class="max-w-full mx-auto lg:px-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Card 1 -->
                            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-lg">
                                <h3 class="text-lg font-semibold">Total Users</h3>
                                <p class="text-2xl font-bold mt-2">1,234</p>
                                <p class="mt-2">Total registered users in the system.</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
                                <h3 class="text-lg font-semibold">Active Courses</h3>
                                <p class="text-2xl font-bold mt-2">56</p>
                                <p class="mt-2">Number of active courses available for users.</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-lg">
                                <h3 class="text-lg font-semibold">Pending Requests</h3>
                                <p class="text-2xl font-bold mt-2">12</p>
                                <p class="mt-2">Requests pending approval or review.</p>
                            </div>
                        </div>

                        <!-- Chart Section -->
                        <div class="mt-8 bg-white p-4 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold mb-4">Monthly Overview</h3>
                            <!-- Replace with your chart component -->
                            <div class="w-full h-64 bg-gray-200 rounded-lg">
                                <!-- Chart goes here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.bg-blue-500 {
    background-color: #3b82f6;
}

.bg-green-500 {
    background-color: #10b981;
}

.bg-yellow-500 {
    background-color: #fbbf24;
}

.text-white {
    color: #ffffff;
}
</style>
