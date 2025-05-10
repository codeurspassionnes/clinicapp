<template>
    <div class="stepper-item-container">
        <div
            class="stepper-item"
            :class="{
                active: isActive,
            }"
        >
            {{ step?.id }}
        </div>
        <div class="line">
            <p class="mb-1">
                <small
                    :class="{
                        'text-muted': !isActive,
                    }"
                    >{{ step.title }}</small
                >
            </p>
            <div class="progress">
                <div
                    class="progress-bar"
                    role="progressbar"
                    :style="{
                        width: `${step?.progress ?? 0}%`,
                    }"
                    :aria-valuenow="step.progress ?? 0"
                    aria-valuemin="0"
                    aria-valuemax="100"
                ></div>
            </div>
        </div>
    </div>
</template>
<script setup>
const { step, isActive } = defineProps({
    step: {
        title: {
            required: true,
            type: String,
        },
        progress: {
            default: 0,
            type: Number,
        },
        id: Number,
    },
    isActive: Boolean,
});
</script>
<style scoped>
.stepper-item-container {
    display: flex;
    gap: 16px;
    align-items: center;
    flex: 1;
}
.stepper-items .stepper-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.1em;
    color: rgba(13, 12, 12, 0.829);
    background-color: transparent;
    border: 2px solid rgb(233, 236, 239);
}
.stepper-item.active {
    color: white;
    background-color: #007bff;
    border: none;
    box-shadow: 0 0 0 5px white, 0 0 0 7px #007bff;
}
.stepper-items .line {
    flex: 1;
}
.progress-bar,
.progress {
    height: 5px;
}
</style>
