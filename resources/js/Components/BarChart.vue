<script setup>
import { defineComponent, ref } from 'vue';
import { Bar } from 'vue-chartjs';
import { Chart as ChartJS, BarElement, CategoryScale, LinearScale } from 'chart.js';

ChartJS.register(BarElement, CategoryScale, LinearScale);

const props = defineProps({
    chartData: Object,
    chartOptions: Object
});
</script>

<template>
    <Bar :data="props.chartData" :options="props.chartOptions" />
</template>
