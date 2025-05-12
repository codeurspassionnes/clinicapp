<template>
    <div class="container" style="height: 100vh">
        <div class="row h-100">
            <div class="col my-auto" style="width: 700px; height: 700px">
                <div class="card h-100">
                    <div class="card-header">
                        <h1 class="card-title">Configuration de clinic App</h1>
                    </div>
                    <div class="card-body">
                        <StepItems
                            :steps="{
                                currentStep: currentStep,
                                items: stepItems,
                            }"
                        />
                        <div class="stepper-forms">
                            <div v-if="currentStep === 1">
                                <h3>Formulaire étape 1</h3>
                            </div>
                            <div v-if="currentStep === 2">
                                <h3>Formulaire étape 2</h3>
                            </div>
                            <div v-if="currentStep === 3">
                                <h3>Formulaire étape 3</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div
                            class="d-flex justify-content-between align-items-center"
                        >
                            <button
                                :disabled="actionState.shouldDisablePrevButton"
                                @click="goToPrev"
                                class="btn btn-default"
                            >
                                Précédent
                            </button>
                            <button
                                :disabled="actionState.shouldDisableNextButton"
                                @click="goToNext"
                                class="btn btn-primary"
                            >
                                Suivant
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { computed, reactive, ref } from "vue";
import StepItems from "./step-items/StepItems.vue";
const props = defineProps({
    username: String,
});

const currentStep = ref(1);

const stepItems = computed(() => [
    {
        id: 1,
        title: "Configuration de base",
        progress: 0,
    },
    {
        id: 2,
        title: "Identité de l'entreprise",
        progress: 0,
    },
    {
        id: 3,
        title: "Administration",
        progress: 0,
    },
]);

const goToNext = () => {
    if (currentStep.value < stepItems.value?.length) {
        currentStep.value++;
    }
};
const goToPrev = () => {
    if (currentStep.value > 1) {
        currentStep.value--;
    }
};

const actionState = computed(() => ({
    shouldDisablePrevButton: currentStep.value <= 1,
    shouldDisableNextButton: currentStep.value === stepItems.value?.length,
}));
</script>

<style scoped></style>
