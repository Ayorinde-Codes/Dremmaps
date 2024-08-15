<script setup>
import { defineComponent, ref } from 'vue';
import { Line } from 'vue-chartjs';
import { Chart as ChartJS, LineElement, CategoryScale, LinearScale } from 'chart.js';

ChartJS.register(LineElement, CategoryScale, LinearScale);

const props = defineProps({
    chartData: Object,
    chartOptions: Object
});
</script>

<template>
    <Line :data="props.chartData" :options="props.chartOptions" />
</template>
