<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavLink from '@/Components/NavLink.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <Link :href="route('dashboard')">
                    <ApplicationLogo class="h-9 w-auto fill-current text-white" />
                </Link>
            </div>
            <nav class="mt-6">
                <!-- <NavLink :href="route('categories.index')" :active="route().current('categories.index')">
                    Categories
                </NavLink>
                <NavLink :href="route('skill-levels.index')" :active="route().current('skill-levels.index')">
                    Skill Levels
                </NavLink>
                <NavLink :href="route('skills.index')" :active="route().current('skills.index')">
                    Skills
                </NavLink>
                <NavLink :href="route('users.index')" :active="route().current('users.index')">
                    Users
                </NavLink> -->
            </nav>
        </aside>

        <!-- Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <nav class="bg-white border-b border-gray-200 px-4 py-4 flex justify-between items-center">
                <!-- Left: Page Title or Logo -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">
                        <slot name="header">Dashboard</slot>
                    </h2>
                </div>

                <!-- Right: User Dropdown -->
                <div class="relative">
                    <button
                        @click="showingNavigationDropdown = !showingNavigationDropdown"
                        class="flex items-center text-gray-800 focus:outline-none"
                    >
                        {{ $page.props.auth.user.name }}
                        <svg
                            class="ms-2 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>

                    <div
                        v-if="showingNavigationDropdown"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50"
                    >
                        <Link :href="route('profile.edit')" class="block px-4 py-2 text-gray-800">Profile</Link>
                        <Link :href="route('logout')" method="post" as="button" class="block px-4 py-2 text-gray-800">
                            Log Out
                        </Link>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="flex-1 p-6 bg-gray-100">
                <slot />
            </main>
        </div>
    </div>
</template>
