<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router, useForm, usePage } from "@inertiajs/vue3";
import { ref, watch, computed } from "vue";


defineProps({
    skilLevels: {
        type: Object,
    },
    skills: {
        type: Object,
    },
    categories: {
        type: Object,
    },
})

</script>
<template>
    <Head title="Skill Level" />
    <AuthenticatedLayout>

    </AuthenticatedLayout>
</template>