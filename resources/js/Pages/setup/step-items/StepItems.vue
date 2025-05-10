<template>
    <div class="stepper-items">
        <StepItem
            :key="stepItem.id"
            v-for="stepItem in steps?.items"
            :step="stepItem"
            :is-active="steps.currentStep == stepItem.id"
        />
    </div>
</template>
<script setup>
import StepItem from "./StepItem.vue";

const { steps } = defineProps({
    steps: {
        currentStep: {
            type: Number,
            required: true,
        },
        items: {
            type: Array,
            required: true,
        },
    },
});
</script>

<style scoped>
.stepper-items {
    display: flex;
    gap: 16px;
    align-items: center;
}
</style>
